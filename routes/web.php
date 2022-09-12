<?php

use App\Http\Controllers\DemoController;
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
Route::controller(DemoController::class)->group(function(){
    Route::get('/about','index')->name('about.page')->middleware('check');
    Route::get('/contact','contact')->name('contact.page');
});


// Route::get('/about', [DemoController::class, 'index']);
// Route::get('/contact', [DemoController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
