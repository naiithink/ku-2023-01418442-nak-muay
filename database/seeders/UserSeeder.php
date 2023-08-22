<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        $user = new User();
        $user->id = 1;
        $user->role = "ADMIN";
        $user->name = "Administrator";
        $user->password = "password";
        $user->email = "admin@events.ku.th";
        $user->phone_number = "025790113";
        $user->save();

        // Staff
        $user = new User();
        $user->id = 2;
        $user->role = "STAFF";
        $user->name = "Staff";
        $user->password = "password";
        $user->email = "staff@events.ku.th";
        $user->phone_number = "025625555";
        $user->save();

        // Student #1 Mute
        $user = new User();
        $user->id = 3;
        $user->role = "STUDENT";
        $user->name = "Mute Naka";
        $user->password = "password";
        $user->email = "mute@example.com";
        $user->phone_number = "0000000002";
        $user->website = "https://www.imdb.com/title/tt1464763/";
        $user->save();

        // Student #2 Smart
        $user = new User();
        $user->id = 4;
        $user->role = "STUDENT";
        $user->name = "Smart Nakrub";
        $user->password = "password";
        $user->email = "doraemon@example.com";
        $user->phone_number = "0000000003";
        $user->website = "https://th.wikipedia.org/wiki/%E0%B9%82%E0%B8%94%E0%B8%A3%E0%B8%B2%E0%B9%80%E0%B8%AD%E0%B8%A1%E0%B8%AD%E0%B8%99";
        $user->save();

        // Student #3 Pink
        $user = new User();
        $user->id = 5;
        $user->role = "STUDENT";
        $user->name = "Pink Pop";
        $user->password = "password";
        $user->email = "pink@example.com";
        $user->phone_number = "0000000004";
        $user->website = "https://www.pinkpop.nl/";
        $user->save();

        // Student #4 Ton
        $user = new User();
        $user->id = 6;
        $user->role = "STUDENT";
        $user->name = "Ton Nawapon";
        $user->password = "password";
        $user->email = "nawapon.l@ku.th";
        $user->phone_number = "0987654321";
        $user->website = "https://instagram.com/tonnwp";
        $user->save();

        // Student #5 Au
        $user = new User();
        $user->id = 7;
        $user->role = "STUDENT";
        $user->name = "Au Chana";
        $user->password = "password";
        $user->email = "chanawut.w@ku.th";
        $user->phone_number = "1234567890";
        $user->website = "https://instagram.com/auau.chw";
        $user->save();

        // Student #6 Nai
        $user = new User();
        $user->id = 8;
        $user->role = "STUDENT";
        $user->name = "Nai Potsawat";
        $user->password = "password";
        $user->email = "potsawat.t@ku.th";
        $user->phone_number = "0922480100";
        $user->website = "https://twitter.com/naiithink";
        $user->save();
    }
}
