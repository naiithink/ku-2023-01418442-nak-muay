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
        $user->role = "ADMIN";
        $user->id = "1";
        $user->name = "John Doe";
        $user->username = "jdoe";
        $user->password = "password";
        $user->email = "jdoe@example.com";
        $user->phone_number = "0000000000";
        $user->link_video = "01";
        $user->save();

        // Staff
        $user = new User();
        $user->role = "STAFF";
        $user->id = "2";
        $user->name = "Only Fans";
        $user->username = "onlyfans";
        $user->password = "password";
        $user->email = "onlyfans@example.com";
        $user->phone_number = "0000000001";
        $user->link_video = "02";
        $user->save();

        // Student #1
        $user = new User();
        $user->role = "STUDENT";
        // $user->id = "5";
        $user->name = "Eiei Doe";
        $user->username = "edoe";
        $user->password = "password";
        $user->email = "edoe@example.com";
        $user->phone_number = "0000000002";
        $user->link_video = "05";
        $user->save();

        // Student #2
        $user = new User();
        $user->role = "STUDENT";
        // $user->id = "6";
        $user->name = "Dorae Mon";
        $user->username = "doraemon";
        $user->password = "password";
        $user->email = "doraemon@example.com";
        $user->phone_number = "0000000003";
        $user->link_video = "06";
        $user->save();

        // Student #3
        $user = new User();
        $user->role = "STUDENT";
        // $user->id = "7";
        $user->name = "Pink Pop";
        $user->username = "pink";
        $user->password = "password";
        $user->email = "pink@example.com";
        $user->phone_number = "0000000004";
        $user->link_video = "07";
        $user->save();
    }
}
