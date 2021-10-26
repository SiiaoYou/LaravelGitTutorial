<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;


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


Route::get('/', function () {
    return view('test');
});

Route::get('insert',[registerController::class,'insertform']);
Route::post('/create',[registerController::class,'insert']);

//Route::get('view-records',[registerController::class,'index']);


//show record
Route::get('/viewRegister', function () {

    $viewdata = DB::table('internform')->get();

    return view('viewRegister', ['viewdata' => $viewdata]);
});


