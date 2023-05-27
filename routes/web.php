<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
    return view('welcome');
})->name('welcome');

Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('success-checkout', function () {
    return view('success_checkout');
})->name('success-checkout');

Route::get('sign-in-google', [UserController::class, 'google'])->name('sign-in-google');
Route::get('auth/google-callback', [UserController::class, 'handleProviderCallback'])->name('auth-google-callback');

Route::get('/dashboar', function () {
    return view('dashboar');
})->middleware(['auth'])->name('dashboar');

require __DIR__ . '/auth.php';
