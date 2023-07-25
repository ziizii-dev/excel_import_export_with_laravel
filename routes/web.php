<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/excel', [ImportController::class, 'index']);
Route::post('/users/import', [ImportController::class, 'import'])->name('user#import');
Route::get('/user/export', [ImportController::class, 'export'])->name('user#export');