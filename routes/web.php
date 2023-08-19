<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// main.not.login
Route::get('/', function () {
    return view('main-public');
})->name('main-public');

//// main.not.login
//Route::get('/main-public', function () {
//    return view('main-public');
//})->name('main-public');

// login/main
Route::get('/main-logged-in', function () {
    return view('login.main');
})->name("main-logged-in");

// hot-to-use
Route::get('/how-to-use', function () {
    return view("login.how-to-use");
})->name("how-to-use");

// login
Route::get('/login', function () {
    return view("auth.login");
})->name("login");

// signup
Route::get('/signup', function () {
    return view("auth.register");
})->name("signup");

Route::get('/logout', function () {
    return view("auth.logout");
})->name("logout");

// forgot-password bug?
Route::get('/forgot-password', function () {
    return view("auth.forgot-password");
})->name("forgot-password");

Route::get('/admin-create-staff', function () {
    return view("admin.admin-create-staff");
})->name("admin-create-staff");

Route::get('/admin-profile', function () {
    return view("admin.admin-profile");
})->name("admin-profile");

Route::get('/staff-requests', function () {
    return view("staff.staff-requests");
})->name("staff-requests");

Route::get('/student-certificates', function () {
    return view("student.student-certificates");
})->name("student-certificates");

Route::get('/student-create-event', function () {
    return view("student.student-create-event");
})->name("student-create-event");

Route::get('/student-events', function () {
    return view("student.student-events");
})->name("student-events");

Route::get('/student-profile', function () {
    return view("student.student-profile");
})->name("student-profile");



// IDK

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
