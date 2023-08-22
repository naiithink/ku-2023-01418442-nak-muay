<?php

namespace App\Http\Controllers;

use App\Notifications\WebsiteOpened;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    public function openWebsite()
    {
        $user = Auth::user(); // Assuming you are using Laravel's authentication
        $user->notify(new WebsiteOpened());

        return view('website'); // Replace 'website' with the actual view name
    }
}
