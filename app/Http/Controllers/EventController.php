<?php

namespace App\Http\Controllers;

use App\Mail\JoinedEvent;
use App\Models\Event;
use App\Models\Enums\EventStatusEnum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::get();
        return view('events.index', [
            'events' => $events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_name' => ['required'],
            'fund' => ['required', 'int'],
            'currency' => ['required'],
            'attendee_capacity' => ['required','min:1'],
        ]);

        $event_name = $request->get('event_name');
        if ($event_name == null) {
            return redirect()->back();
        }

        $event = new Event();
        $event->event_name = $request->get('event_name');
        $event->description = $request->get('description');
        $event->fund = $request->get('fund');
        $event->currency = $request->get('currency');
        $event->date = $request->get('date');
        $event->attendee_capacity = $request->get('attendee_capacity');
        $event->save();
        $event->managers()->attach($request->get('manager_id'));
        $event->save();

        return redirect()->route('events');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $attendees = $event->attendees;

        return view('events.show', [
            'event' => $event,
            'attendees' => $attendees
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $managers = $event->managers()->get();
        $attendees = $event->attendees()->get();

        return view('events.edit', [
            'event' => $event,
            'managers' => $managers,
            'attendees' => $attendees
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
    }

    public function setStatus(Request $request)
    {
        $event = Event::find($request->get('event_id'));
        $event->status = $request->get('status');
        $event->disapproval_reasons = $request->get('disapproval_reasons');
        $event->save();

        return redirect()->route('show-event', ['event' => $event]);
    }

    public function addAttendee(Request $request)
    {
        // $validated = $request->validate([
        //     ''
        // ]);

        // dd($request);
        // dd($request->get('empty-description'));

        $event = Event::find($request->get('event_id'));

        if ($request->get('empty-description') === 'on' || empty($request->get('description')))
            $event->attendees()->attach($request->get('user_id'));
        else
            $event->attendees()->attach($request->get('user_id'), [
                'description' => $request->get('description')
            ]);

        $event->save();

        Mail::to($request->user())->send(new JoinedEvent($event));

        return redirect()->route('show-event', ['event' => $event]);
    }
}
