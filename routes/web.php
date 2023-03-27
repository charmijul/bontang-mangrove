<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MangroveController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/map', function () {
    return view('map', [
        "title" => "Map"
    ]);
});

Route::get('/about', function () {
    return view('about-us', [
        "title" => "About"
    ]);
});

Route::get('/gallery', [GalleryController::class, 'index']);

Route::get('/ticket', [TicketController::class, 'index']);

Route::get('/event', [EventController::class, 'index']);

Route::get('/event/{slug}', [EventController::class, 'show']);

Route::get('/data-mangrove', [MangroveController::class, 'index']);