<?php

use App\Http\Livewire\Admin\Citizen;
use App\Http\Livewire\Admin\Complaints;
use App\Http\Livewire\Admin\DataRt;
use App\Http\Livewire\Admin\Event;
use App\Http\Livewire\Admin\Home;
use App\Http\Livewire\Admin\News;
use App\Http\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/', '/auth/login', 301);

Route::prefix('auth')->group(function() {
    Route::name("auth.")->group(function() {
        Route::get("login", Login::class)->name('login');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function() {
        Route::name("admin.")->group(function() {
            Route::get("/", Home::class)->name('home');
            Route::get("data-rt", DataRt::class)->name('data-rt');
            Route::get("citizens", Citizen::class)->name('citizen');
            Route::get("complaints", Complaints::class)->name('complaint');
            Route::get("events", Event::class)->name('event');
            Route::get("news", News::class)->name('news');
        });
    });
});
