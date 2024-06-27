<?php
use App\Http\Controllers\UserEventController;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\FootballGuestController;
use App\Livewire\FootballAdd;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guests.welcome');
})->name('welcome');

Route::get('/welc', function () {
    return view('welc');
})->name('welc');

Route::get('/price', function () {
    return view('guests.price');
})->name('price');

Route::get('/service', function () {
    return view('service');
})->name('service');


Route::get('/socialite/{driver}', [SocialLoginController::class, 'toProvider'])->where('driver', 'google|facebook');
Route::get('/auth/{driver}/login', [SocialLoginController::class, 'handleCallBack'])->where('driver', 'google|facebook');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('users.dashboard');
    })->name('dashboard');

    // Route::get('/event', [UserEventController::class, 'index'])->name('event');

    // Route::get('/football/add-guest', function () {
    //     return view('users.events.football.actions.add');
    // })->name('football.add');

    // Route::view('/football/add-guest', function () {
    //     return view('users.events.football.actions.add');
    // })->name('football.add');

    Route::view('/football', 'users.events.football')->name('football');
    Route::post('/football', [FootballAdd::class, 'create']);
    
});

Route::fallback(fn () => redirect('/'));