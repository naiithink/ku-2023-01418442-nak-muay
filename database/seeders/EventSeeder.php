<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Event #1
        $event = new Event();
        $event->event_name = "Len Yai 19 Aug";
        $event->description = "Tattoo Colour X LenYai ";
        $event->fund = 3000;
        $event->date = "2024-08-28 17:00:00";
        $event->status = "APPROVED";
        $event->attendee_capacity = "10";
        $event->save();
        $event->managers()->attach([3]);
        $event->attendees()->attach([5, 6]);
        $event->save();

        // Event #2 Rejected
        $event = new Event();
        $event->event_name = "Ban Puen 28 Aug";
        $event->description = "Tattoo Colour X BarnPuen ";
        $event->fund = 1000000;
        $event->date = "2024-08-30 22:00:00";
        $event->status = "REJECTED";
        $event->attendee_capacity = "25";
        $event->disapproval_reasons = "Too much funding.";
        $event->save();
        $event->managers()->attach([4]);
        $event->save();
    }
}
