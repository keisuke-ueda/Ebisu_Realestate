<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionnaireController;

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

// TOP
Route::view('/', 'top');

// CONCEPT
Route::view('/concept', 'concept');

// LOCATION
Route::view('/location', 'location');

// ACCESS
Route::view('/access', 'access');

// DESIGN
Route::view('/design', 'design');

// MODEL ROOM
Route::view('/model_room', 'model_room');

// PLAN
Route::view('/plan', 'plan');

// BLANDING
Route::view('/blanding', 'blanding');

// 物件概要
Route::view('/overview', 'overview');

// 物件エントリー
Route::view('/entry', 'entry');

// 来場予約
Route::view('/reserve', 'reserve');

// アンケート
// Route::view('/questionnaire', 'questionnaire');

Route::get('/questionnaire', [QuestionnaireController::class, 'show'])->name("form.show");
Route::post('/questionnaire', [QuestionnaireController::class, 'post'])->name("form.post");

Route::get('/questionnaire/confirm', [QuestionnaireController::class, 'confirm'])->name("form.confirm");
Route::post('/questionnaire/confirm', [QuestionnaireController::class, 'send'])->name("form.send");

Route::get('/questionnaire/thanks', [QuestionnaireController::class, 'complete'])->name("form.complete");

// メール送信
Route::post('/questionnaire_mail', [QuestionnaireController::class, 'send']);

//現地案内
Route::view('/map', 'map');
