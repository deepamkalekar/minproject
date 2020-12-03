<?php

use Illuminate\Support\Facades\Route;
use App\Models\task;

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
//     return view('welcome');
// });

// Route::get('/compose', function () {
//     return view('compose');
// });

Route::get('/', 'HomeController@welcome'); 
Route::get('/compose', 'HomeController@compose'); 
Route::get('/updatemail/{id}', 'HomeController@updatemail'); 
Route::post('/update', 'HomeController@update'); 

Route::post('/submitcompose', 'HomeController@submitcompose');
Route::get('/DeletePro/{id}',"HomeController@DeletePro");