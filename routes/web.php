<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('login_register');
});

Route::get('/admin-dashboard', [AdminController::class, 'admin_dashboard']) -> name('admindashboard');

Route::get('/admin-dashboard/home', [AdminController::class, 'admin_homepage']) -> name('adminhomepage');

Route::get('/admin-dashboard/user/monitoring', [AdminController::class, 'admin_user_monitoring']) -> name('adminusermonitoring');

Route::get('admin-dashboard/barterplace', [AdminController::class, 'admin_barterplace']) -> name('adminbarterplace');