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
        $event->date = "2024-08-19 20:00:00";
        $event->status = "APPROVED";
        $event->attendee_capacity = "10";
        $event->save();
        $event->managers()->attach([2, 4]);
        $event->attendees()->attach([6, 7]);
        $event->save();

        // Event #2
        $event = new Event();
        $event->event_name = "Ban Puen 28 Aug";
        $event->description = "Tattoo Colour X BarnPuen ";
        $event->fund = 3000;
        $event->date = "2024-08-28 20:00:00";
        $event->status = "APPROVED";
        $event->attendee_capacity = "10";
        $event->save();
        $event->managers()->attach([2, 4]);
        $event->attendees()->attach([6, 7]);
        $event->save();

        // Event #3
        $event = new Event();
        $event->event_name = "Hashtag 2 Sep";
        $event->description = "Tattoo Colour X Hashtag ";
        $event->fund = 3000;
        $event->date = "2024-09-02 20:00:00";
        $event->status = "PENDING";
        $event->attendee_capacity = "10";
        $event->save();
        $event->managers()->attach([2, 4]);
        $event->attendees()->attach([6, 7]);
        $event->save();

        // Event #4
        $event = new Event();
        $event->event_name = "Ban Puen 28 Aug";
        $event->description = "Tattoo Colour X BarnPuen ";
        $event->fund = 3000;
        $event->date = "2024-08-28 20:00:00";
        $event->status = "PENDING";
        $event->attendee_capacity = "10";
        $event->save();
        $event->managers()->attach([2, 4]);
        $event->attendees()->attach([6, 7]);
        $event->save();

        // Event #5
        $event = new Event();
        $event->event_name = "Zest 29 Aug";
        $event->description = "Bodyslam X Zest ";
        $event->fund = 3000;
        $event->date = "2024-08-29 20:00:00";
        $event->status = "PENDING";
        $event->attendee_capacity = "10";
        $event->save();
        $event->managers()->attach([2, 4]);
        $event->attendees()->attach([6, 7]);
        $event->save();

        // Event #6
        $event = new Event();
        $event->event_name = "Super Hit 24 Aug";
        $event->description = "Tattoo Colour X Super Hit ";
        $event->fund = 3000;
        $event->date = "2024-08-24 20:00:00";
        $event->status = "PENDING";
        $event->attendee_capacity = "10";
        $event->save();
        $event->managers()->attach([2, 4]);
        $event->attendees()->attach([6, 7]);
        $event->save();
    }
}
