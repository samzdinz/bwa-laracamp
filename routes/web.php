<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CheckoutController;


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

//checkout routes
Route::get('success-checkout', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('checkout.create');
Route::post('checkout/{camp}', [CheckoutController::class, 'store'])->name('checkout.store');

//socialite routes
Route::get('sign-in-google', [UserController::class, 'google'])->name('sign-in-google');
Route::get('auth/google-callback', [UserController::class, 'handleProviderCallback'])->name('auth-google-callback');

// Route::get('/dashboar', function () {
//     return view('dashboar');
// })->middleware(['auth'])->name('dashboar');

Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

require __DIR__ . '/auth.php';
