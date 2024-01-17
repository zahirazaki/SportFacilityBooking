<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ViewRecordsController;
use App\Http\Controllers\UploadDataController;
use App\Http\Controllers\ShowController;


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

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/venue', function () {
    //return view('welcome');
    return view('venue');
});

Route::get('/booking', function () {
    //return view('welcome');
    return view('booking');
});

Route::get('/contact', function () {
    //return view('welcome');
    return view('contact');
});

Route::get('/about', function () {
    //return view('welcome');
    return view('about');
});

Route::get('/account', function () {
    //return view('welcome');
    return view('account');
});

Route::get('/', function () {
    //return view('welcome');
    return view('mainpage');
});

Route::get('/navigation-menu', function () {
    //return view('welcome');
    return view('navigation-menu');
});

Route::get('/view-booking', function () {
    //return view('welcome');
    return view('view-booking');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/mainpage', function () {
        return view('mainpage');
    })->name('mainpage');
});

Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function (){
    return view('/dashboard');
})->name('dashboard');

Route::get('/booking',[BookingController::class,'index']);

Route::resource('addbooking',BookingController::class);

// Route::get('BookingController@index');
// Route::resource('view-booking', BookingController::class);

Route::get('/view-booking', [BookingController::class,'viewBooking']);

Route::get('delete/{id}', [BookingController::class,'remove']);
Route::get('edit/{id}', [BookingController::class,'edit']);
Route::get('update/{id}', [BookingController::class,'update']);
