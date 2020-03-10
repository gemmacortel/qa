<?php

use Illuminate\Support\Facades\Route;
use App\Question;

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
    return view(
        'homepage',
        [
            'questions' => Question::all()
        ]
    );
});

Route::post('/', 'QuestionController@store');

