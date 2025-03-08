<?php

use App\Http\Controllers\TransactionController;
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

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/easy',[TransactionController::class,'getBData1']);

Route::get('/medium',[TransactionController::class,'getBData2']);

Route::get('/hard',[TransactionController::class,'getBData3']);

Route::get('/defficult',[TransactionController::class,'getBData4']);