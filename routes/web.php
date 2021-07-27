<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WineController;

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

Route::get('/wines', [WineController::class, 'index']);

// create needs to be above the id route, bc they rank in order of preference
// it will look at this route literaly and take the create route over the id route

Route::get('/wines/create', [WineController::class, 'create']);
Route::post('/wines', [WineController::class, 'store']);
Route::get('/wines/{id}', [WineController::class, 'show']);
Route::delete('/wines/{id}', [WineController::class, 'destroy']);

