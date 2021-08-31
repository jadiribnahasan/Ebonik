<?php

use App\Http\Controllers\BorrowController;
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

Route::get('/borrows', [BorrowController::class, 'index']);
Route::post('/borrows', [BorrowController::class, 'add']);
Route::get('/borrows/create', [BorrowController::class, 'create']);
Route::get('/borrows/{borrow}/edit', [BorrowController::class, 'edit']);
Route::put('/borrows/{borrow}', [BorrowController::class, 'update']);
Route::delete('/borrows/{borrow}', [BorrowController::class, 'destroy']);