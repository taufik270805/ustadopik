<?php

use App\Http\Controllers\LayoutController;
use App\Http\Controllers\PengajuanBarangController;
use App\Models\PengajuanBarang;
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

Route::get('/', [LayoutController::class, 'index']);
Route::get('/iyey', [LayoutController::class ,'iyey']);
Route::resource('/barang',PengajuanBarangController::class );
