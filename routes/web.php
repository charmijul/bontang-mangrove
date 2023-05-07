<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MangroveController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardMangroveController;
use App\Http\Controllers\DashboardEventController;

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

Route::get('/event/{post:slug}', [EventController::class, 'show']);

Route::get('/data-mangrove', [MangroveController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard/event/checkSlug', [DashboardEventController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/event', DashboardEventController::class)->middleware('auth');

Route::resource('/dashboard/mangrove', DashboardMangroveController::class)->parameters(['data_mangrove' => 'mangrove'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::post('/dashboard', [DashboardController::class, 'store']);
Route::post('/dashboard/{image}', [DashboardController::class, 'destroy']);


// Route::group(['middleware'=>'auth'],function(){
//     Route::resource('/dashboard/data-mangrove',DashboardMangroveController::class)->except(['show']);
//     Route::get('/dashboard/data-mangrove/{id}',[DashboardMangroveController::class,"show"])->middleware("auth");
// });
