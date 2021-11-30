<?php


use Illuminate\Support\Facades\Route;
use App\Models\Question;
use App\Http\Controllers\AppController;

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

// catchall route for Vuejs3 single Page Application
Route::get('/{any}', [AppController::class,'index'])->where('any', '.*');

