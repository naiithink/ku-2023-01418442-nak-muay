<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // event #1
        $event = new Event();
        $event->event_name = "Len Yai 19 Aug";
        $event->id = "8";
        $event->fund = 3000;
        $event->currency = "THB";
        $event->datetime = "2024-08-19 20:00:00";
        $event->status = "PENDING";
        $event->attendee_capacity = "10";
        $event->hostId = "5";
        $event->memberId = "6,7";
        $event->description = "Tattoo Colour X LenYai ";
        $event->disapproval_reasons = "";
        $event->save();

        // event #2
        $event = new Event();
        $event->event_name = "Ban Puen 28 Aug";
        $event->id = "9";
        $event->fund = 3000;
        $event->currency = "THB";
        $event->datetime = "2024-08-28 20:00:00";
        $event->status = "PENDING";
        $event->attendee_capacity = "10";
        $event->hostId = "5";
        $event->memberId = "6,7";
        $event->description = "Tattoo Colour X BarnPuen ";
        $event->disapproval_reasons = "";
        $event->save();
        
        // event #3
        $event = new Event();
        $event->event_name = "Hashtag 2 Sep";
        $event->id = "10";
        $event->fund = 3000;
        $event->currency = "THB";
        $event->datetime = "2024-09-02 20:00:00";
        $event->status = "PENDING";
        $event->attendee_capacity = "10";
        $event->hostId = "5";
        $event->memberId = "6,7";
        $event->description = "Tattoo Colour X Hashtag ";
        $event->disapproval_reasons = "";
        $event->save();

        // event #4
        $event = new Event();
        $event->event_name = "Ban Puen 28 Aug";
        $event->id = "11";
        $event->fund = 3000;
        $event->currency = "THB";
        $event->datetime = "2024-08-28 20:00:00";
        $event->status = "PENDING";
        $event->attendee_capacity = "10";
        $event->hostId = "5";
        $event->memberId = "6,7";
        $event->description = "Tattoo Colour X BarnPuen ";
        $event->disapproval_reasons = "";
        $event->save();

        // event #5
        $event = new Event();
        $event->event_name = "Zest 29 Aug";
        $event->id = "12";
        $event->fund = 3000;
        $event->currency = "THB";
        $event->datetime = "2024-08-29 20:00:00";
        $event->status = "PENDING";
        $event->attendee_capacity = "10";
        $event->hostId = "5";
        $event->memberId = "6,7";
        $event->description = "Bodyslam X Zest ";
        $event->disapproval_reasons = "";
        $event->save();

        // event #6
        $event = new Event();
        $event->event_name = "Super Hit 24 Aug";
        $event->id = "13";
        $event->fund = 3000;
        $event->currency = "THB";
        $event->datetime = "2024-08-24 20:00:00";
        $event->status = "PENDING";
        $event->attendee_capacity = "10";
        $event->hostId = "5";
        $event->memberId = "6,7";
        $event->description = "Tattoo Colour X Super Hit ";
        $event->disapproval_reasons = "";
        $event->save();
    }
}
