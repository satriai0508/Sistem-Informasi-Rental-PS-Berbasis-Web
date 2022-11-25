<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\{User, Device, Rent};
use App\Http\Controllers\{HomeController, DeviceController, RentController};

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

Route::get('/', fn () => view('main-page',[
    'users' => User::count(),
    'rents' => Rent::count(),
    'devices' => Device::count(),
]));

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('devices', DeviceController::class)->except(['show']);
    Route::resource('rents', RentController::class)->except(['show']);
});
