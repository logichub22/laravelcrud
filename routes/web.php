<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MyportController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('customers', CustomerController::class);
Route::get('/',[MyportController::class,'index'])->name('index');
Route::get('/contact',[MyportController::class,'contact'])->name('contact');
Route::get('/resume',[MyportController::class,'resume'])->name('resume');
Route::get('/project',[MyportController::class,'project'])->name('project');

