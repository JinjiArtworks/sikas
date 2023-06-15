<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/faq-cust', [FaqController::class, 'index'])->name('faq');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('login');


Route::get('/data-transaction', function () {
    return view('admin.data-transaction');
});
Route::get('/data-employee', function () {
    return view('admin.data-employee');
});
Route::get('/faq', function () {
    return view('admin.faq');
});
Route::get('/dashboard', function () {
    return view('staff.dashboard');
});



Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register-cust');
});
// Route::post('/logout', 'LoginController@logout');
// Route::get('/edit-motif/{id}', 'AdminController@editMotif')->name('motif.edit')->middleware('auth');
// Route::put('/update-motif/{id}', 'AdminController@updateMotif')->name('motif.update')->middleware('auth');
// Route::get('/motif-delete/{id}', 'AdminController@removeMotif')->name('motif.delete')->middleware('auth');
