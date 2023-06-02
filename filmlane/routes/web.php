<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Fontend\homeController;

use App\Http\Controllers\Fontend\User\registerController;
use App\Http\Controllers\Fontend\User\loginController;
use App\Http\Controllers\Fontend\User\logoutController;

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


/*
|--------------------------------------------------------------------------
| FONT END ROUTE
|--------------------------------------------------------------------------
*/


Route::get('/home', [homeController::class, 'home'])->name('home');

Route::middleware('web')->group(function () {
    // Các route cần lưu trữ session ở đây
    Route::get('/login', [loginController::class, 'get_login'])->name('get_login');
    Route::post('/login', [loginController::class, 'post_login'])->name('post_login');

    Route::get('/register', [registerController::class, 'get_register'])->name('get_register');
    Route::post('/register', [registerController::class, 'post_register'])->name('post_register');

    Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');

    Route::get('/logout', [logoutController::class, 'logout'])->name('logout');

});
// route chuc nang tai khoan nguoi dung //
Route::prefix('auth')->group(function () {

});


/*
|--------------------------------------------------------------------------
| BACK END ROUTE
|--------------------------------------------------------------------------
*/

Route::get('/ss', function () {
    return view('backend.page/movie/index');
});

Route::get('/s', function () {
    return view('backend.page/movie/edit');
});


?>