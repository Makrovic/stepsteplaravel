<?php

use App\Http\Controllers\SiswaController;
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
Route::get('/visi-misi', function () {
    return view('visi-misi');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/struktur-organisasi', function () {
    return view('struktur-organisasi');
});
Route::get('/kompetensi-keahlian', function () {
    return view('kompetensi-keahlian');
});
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});
Route::post('/pendaftaran/store', [SiswaController::class, 'store']);