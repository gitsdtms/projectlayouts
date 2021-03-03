<?php

use App\Http\Controllers\Backend\DashboardConteoller;
use App\Http\Controllers\Backend\RoleController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['as' => 'app.', 'prefix' => 'app/', 'middleware' => ['auth']], function(){
    // Dashboard
    Route::get('dashboard', DashboardConteoller::class);
    // Role
    Route::resource('roles', RoleController::class);
});
