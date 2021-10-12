<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/index', function () {
    return view('index', ["title" => "Index"]);
});

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});

Route::get('/majalah', function () {
    return view('majalah', ["title" => "Majalah"]);
});

Route::get('/novel', function () {
    return view('novel', ["title" => "Novel"]);
});

Route::get('/pengurus', function () {
    return view('pengurus', ["title" => "Pengurus"]);
});

Route::get('/visidanmisi', function () {
    return view('visi-misi', ["title" => "Visi dan Misi"]);
});