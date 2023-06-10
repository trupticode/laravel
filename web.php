<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkMasterController;
use App\Http\Controllers\SubdivisionController;
use App\Http\Controllers\WorkMasterViewController;
use App\Http\Controllers\ViewSubdivisionController;


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

Route::view("subdivision" ,"subdivision");
Route::post('subdivision' ,[SubdivisionController::class,'funCreate']);

Route::view("workmaster","workmaster");
Route::post('workmaster',[WorkMasterController::class,'funCreate']);

Route::get('viewworkmaster',[WorkMasterController::class,'index']);

Route::get('viewsubdivision',[SubdivisionController::class,'index']);

// Route::delete('/division/{id}', [SubdivisionController::class,'destroy']);