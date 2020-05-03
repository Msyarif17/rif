<?php

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
    return view('home');
});

Route::get('/donasi','BlogCon@donasi');
Route::get('/donasi/korban-bencana','BlogCon@koben');
Route::get('/donasi/panti-asuhan','BlogCon@paas');
Route::get('/donasi/kaum-duafa','BlogCon@kadu');
Route::get('/donasi/anak-yatim','BlogCon@ayat');
