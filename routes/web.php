<?php


use Illuminate\Support\Facades\Route;
use App\Models\Question;

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

Route::get('game', function () {
    return view('game');
});

Route::get('next', function(){
    $question = App\Models\Question::findOrFail(1);
    $answers = $question->answers;
    return response()->json([
        'question' => $question,
        'answers' => $answers,
    ]);
});
