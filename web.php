<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\registercontroller;

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
//     return view('form');
// });
Route::get('/',[registercontroller::class,'display']);
Route::post('register',[registercontroller::class,'insert']);
Route::get('form222',[registercontroller::class,'formlist']);
