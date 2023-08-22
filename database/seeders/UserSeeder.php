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
        $user->id = "1";
        $user->role = "ADMIN";
        $user->name = "Administrator";
        $user->username = "admin";
        $user->password = "password";
        $user->email = "admin@events.ku.th";
        $user->phone_number = "0000000000";
        $user->link_video = "01";
        $user->save();

        // Staff
        $user = new User();
        $user->id = "2";
        $user->role = "STAFF";
        $user->name = "Staff";
        $user->username = "staff";
        $user->password = "password";
        $user->email = "staff@events.ku.th";
        $user->phone_number = "0000000001";
        $user->link_video = "02";
        $user->save();

        // Student #1 Mute
        $user = new User();
        $user->id = "3";
        $user->role = "STUDENT";
        $user->name = "Mute Naka";
        $user->username = "mute";
        $user->password = "password";
        $user->email = "mute@example.com";
        $user->phone_number = "0000000002";
        $user->link_video = "05";
        $user->save();

        // Student #2 Smart
        $user = new User();
        $user->id = "4";
        $user->role = "STUDENT";
        $user->name = "Smart Nakrub";
        $user->username = "doraemon";
        $user->password = "password";
        $user->email = "doraemon@example.com";
        $user->phone_number = "0000000003";
        $user->link_video = "06";
        $user->save();

        // Student #3 Pink
        $user = new User();
        $user->id = "5";
        $user->role = "STUDENT";
        $user->name = "Pink Pop";
        $user->username = "pink";
        $user->password = "password";
        $user->email = "pink@example.com";
        $user->phone_number = "0000000004";
        $user->link_video = "07";
        $user->save();

        // Student #4 Ton
        $user = new User();
        $user->id = "6";
        $user->role = "STUDENT";
        $user->name = "Ton Nawapon";
        $user->username = "Ton";
        $user->password = "password";
        $user->email = "nawapon.l@ku.th";
        $user->phone_number = "0987654321";
        $user->link_video = "08";
        $user->save();

        // Student #5 Au
        $user = new User();
        $user->id = "7";
        $user->role = "STUDENT";
        $user->name = "Au Chana";
        $user->username = "Au";
        $user->password = "password";
        $user->email = "chanawut.w@ku.th";
        $user->phone_number = "1234567890";
        $user->link_video = "09";
        $user->save();

        // Student #6 Nai
        $user = new User();
        $user->id = "8";
        $user->role = "STUDENT";
        $user->name = "Nai Potsawat";
        $user->username = "naiithink";
        $user->password = "password";
        $user->email = "potsawat.t@ku.th";
        $user->phone_number = "191";
        $user->link_video = "10";
        $user->save();
    }
}
