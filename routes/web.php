<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WineController;
use Illuminate\Support\Facades\Auth;


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

// middleware is going to check if the user is currently logged in, if not redirect.
Route::get('/wines', [WineController::class, 'index'])->middleware('auth');

// create needs to be above the id route, bc they rank in order of preference
// it will look at this route literaly and take the create route over the id route

Route::get('/wines/create', [WineController::class, 'create']);
Route::post('/wines', [WineController::class, 'store']);
Route::get('/wines/{id}', [WineController::class, 'show'])->middleware('auth');
Route::delete('/wines/{id}', [WineController::class, 'destroy'])->middleware('auth');


Auth::routes([
  'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
