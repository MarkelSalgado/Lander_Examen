<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HegaldiaController;

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

Route::get('/hegaldiak', HegaldiaController::class . '@index')->name('app');

Route::get('/api/hegaldiak', HegaldiaController::class . '@indexApi');

Route::post('/hegaldiak', HegaldiaController::class . '@store')->name('app');

Route::get('/hegaldiak/{id}', HegaldiaController::class . '@show')->name('hegaldiak-edit');

Route::get('/api/hegaldiak/{id}', HegaldiaController::class . '@showApi');

Route::patch('/hegaldiak/{id}', HegaldiaController::class . '@update')->name('hegaldiak-update');

Route::delete('/api/hegaldiak/{id}', HegaldiaController::class . '@destroy');