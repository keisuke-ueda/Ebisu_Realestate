<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\ReserveSetController;

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

// BRAND
Route::view('/brand', 'brand');

// 物件概要
Route::view('/overview', 'overview');

//現地案内
Route::view('/map', 'map');


// アンケート
// Route::view('/questionnaire', 'questionnaire');

Route::get('/questionnaire', [QuestionnaireController::class, 'show'])->name("form.show");
Route::post('/questionnaire', [QuestionnaireController::class, 'post'])->name("form.post");

Route::get('/questionnaire/confirm', [QuestionnaireController::class, 'confirm'])->name("form.confirm");
Route::post('/questionnaire/confirm', [QuestionnaireController::class, 'send'])->name("form.send");

Route::get('/questionnaire/thanks', [QuestionnaireController::class, 'complete'])->name("form.complete");

// アンケートメール送信
Route::post('/questionnaire_complete', [QuestionnaireController::class, 'send']);


// 物件エントリー
// Route::view('/entry', 'entry');

Route::get('/entry', [EntryController::class, 'show'])->name("entry_form.show");
Route::post('/entry', [EntryController::class, 'post'])->name("entry_form.post");

Route::get('/entry/confirm', [EntryController::class, 'confirm'])->name("entry_form.confirm");
Route::post('/entry/confirm', [EntryController::class, 'send'])->name("entry_form.send");

Route::get('/entry/thanks', [EntryController::class, 'complete'])->name("entry_form.complete");

// エントリーメール送信
Route::post('/entry_complete', [EntryController::class, 'send']);



//後で消す(表示確認用ルート)
// Route::view('/questionnaire2', 'questionnaire_confirm');
// Route::view('/complete', 'questionnaire_complete2');

// Route::view('/entry_mail', 'entry_mail');
Route::view('/questionnaire2', 'questionnaire_complete');
Route::view('/entry2', 'entry_complete');


// 来場予約
Route::get('/reserve', [ReserveController::class, 'show']);
Route::post('/reserve/confirm', [ReserveController::class, 'confirm']);
Route::post('/reserve/confirm2', [ReserveController::class, 'confirm2']);
Route::post('/reserve/send', [ReserveController::class, 'send']);
Route::get('/reserve/complete', [ReserveController::class, 'complete']);

// テスト用
Route::get('/reserve/make', [ReserveController::class, 'reserve']);

// Route::view('/reserve_confirm', 'reserve_confirm');
Route::view('/reserve/confirm2', 'reserve_confirm2');

//管理者ページ
Route::get('/reserve_set/login', [ReserveSetController::class, 'login_redirect']);

Route::post('/reserve_set', [ReserveSetController::class, 'login'])->name('reserve_set.login');

Route::get('/reserve_set', [ReserveSetController::class, 'show']);

Route::post('/reserve_set/updated', [ReserveSetController::class, 'update']);

Route::post('/reserve_set/edit', [ReserveSetController::class, 'edit']);

Route::post('/reserve_set/logout', [ReserveSetController::class, 'logout']);

