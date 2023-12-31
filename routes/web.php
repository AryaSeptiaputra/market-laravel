<?php
use App\Http\Controllers\Auth\AuthenticationController;
use Illuminate\Support\Facades\Route;

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

// Sistem Login
Route::prefix('auth')->group(function() {
    Route::get('login',[AuthenticationController::class, 'showLoginForm'])->middleware('guest');
    Route::get('register',[AuthenticationController::class, 'showRegistrationForm'])->middleware('guest');
    Route::post('register',[AuthenticationController::class, 'register'])->middleware('guest');
    Route::post('login',[AuthenticationController::class, 'login'])->middleware('guest')->name('login');
    Route::post('logout',[AuthenticationController::class, 'logout'])->middleware('auth');
});

Route::get('/', function () {
    return view('welcome');
});
