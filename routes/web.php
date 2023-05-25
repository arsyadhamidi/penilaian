<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\NonStudent\NonStudentController;
use App\Http\Controllers\Soal\SoalController;
use App\Http\Controllers\Nilai\NilaiController;
use App\Http\Controllers\Jquery\JqueryController;

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

// Login 
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login-action', [LoginController::class, 'authenticate']);

// Logout
Route::get('/logout-action', [LoginController::class, 'logout']);


// Dashboard
Route::group(['middleware' => ['auth','ceklevel:Admin']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/setting', [SettingController::class, 'index']);
    Route::post('/setting-action', [SettingController::class, 'settingprofile']);

    Route::resource('data-user', UserController::class);
    Route::resource('data-student', StudentController::class);
    Route::resource('data-non-student', NonStudentController::class);
    Route::resource('data-soal', SoalController::class);
    Route::resource('data-nilai', NilaiController::class);
});


// jQuery
// Original
Route::post('/getOriginality1', [JqueryController::class, 'getoriginality1']);
Route::post('/getOriginality2', [JqueryController::class, 'getoriginality2']);
Route::post('/getOriginality3', [JqueryController::class, 'getoriginality3']);
Route::post('/getOriginality4', [JqueryController::class, 'getoriginality4']);
Route::post('/getOriginality5', [JqueryController::class, 'getoriginality5']);
Route::post('/getOriginality6', [JqueryController::class, 'getoriginality6']);

// Usefulness
Route::post('/getUsefulness1', [JqueryController::class, 'getusefulness1']);
Route::post('/getUsefulness2', [JqueryController::class, 'getusefulness2']);
Route::post('/getUsefulness3', [JqueryController::class, 'getusefulness3']);
Route::post('/getUsefulness4', [JqueryController::class, 'getusefulness4']);
Route::post('/getUsefulness5', [JqueryController::class, 'getusefulness5']);
Route::post('/getUsefulness6', [JqueryController::class, 'getusefulness6']);