<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can registers web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('events');
})->name('home');

// hot-to-use
Route::get('/how-to-use', function () {
    return view("how-to-use");
})->name("how-to-use");

// login
Route::get('/login', function () {
    return view("auth.login");
})->name("login");

Route::get('/register', function () {
    return view("auth.register");
})->name("register");


// forgot-password
Route::get('/forgot-password2', function () {
    return view("auth.forgot-password");
})->name("forgot-password2");


// admin
Route::get('/admin-create-staff', function () {
    return view("admin.admin-create-staff");
})->name("admin-create-staff");

Route::get('/admin-profile', function () {
    return view("admin.admin-profile");
})->name("admin-profile");

// staffs
Route::get('/staff-requests', function () {
    return view("staff.staff-requests");
})->name("staff-requests");

Route::get('/staff-create', function () {
    return view("staff.create");
})->name("staff-create");

Route::get('/student-certificates', function () {
    return view("student.student-certificates");
})->name("student-certificates");

Route::get('/student-create-event', function () {
    return view("student.student-create-event");
})->name("student-create-event");


// users
Route::get('/student-events', function () {
    return view("student.student-events");
})->name("student-events");

Route::get('/certificate', function () {
    return view("profile.user-certificates");
})->name("certificates");


// Route::get('/profile-show', function () {
//     return view("profile.show");
// })->name("profile");

// Resources
// Events
Route::resource('/events', EventController::class, [
    'names' =>[
        'index' => 'events',
        'create' => 'create-event',
        'edit' => 'edit-event',
        'show' => 'show-event'
    ]
]);

Route::get('/open-website', [WebsiteController::class, 'openWebsite']);

Route::put('/setStatus', 'App\Http\Controllers\EventController@setStatus')->name('events.set-status');
Route::put('/addAttendee', 'App\Http\Controllers\EventController@addAttendee')->name('events.add-attendee');
Route::get('/linkVideo', 'App\Http\Controllers\UserController@linkVideo');

// Route::get('event-update/{id}',[
//     UserController::class,'update'
// ])->name('event-update');

// Register
// Route::resource('/registers', \App\Http\Controllers\RegisterController::class);


// IDK

Route::get('/dashboard', function () {
    return redirect()->route('events'); // view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/profile/{user}', function(User $user) {
    return view('profile.show', ['user' => $user]);
})->name('profile.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
