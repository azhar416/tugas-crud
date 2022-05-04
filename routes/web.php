<?php

use App\Http\Controllers\DataController;
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
//     return view('datatable');
// });

Route::get('/', [DataController::class, 'index'])->name('home');
Route::group(['prefix' => 'data', 'as' => 'data.'], function(){
    Route::get('/', [DataController::class, 'index'])->name('home');
    Route::get('/buat', [DataController::class, 'create'])->name('tambah-data');
    Route::post('/buat-data', [DataController::class, 'store'])->name('buat-data');
    Route::get('/edit/{id}', [DataController::class, 'edit'])->name('edit');
    Route::put('/edit/{id}', [DataController::class, 'update'])->name('edit-data');
    Route::get('/detail/{id}', [DataController::class, 'show'])->name('show');
    Route::delete('/delete/{id}', [DataController::class, 'destroy'])->name('delete-data');
});

Route::get('/halo', function () {
    return view('composer');
});