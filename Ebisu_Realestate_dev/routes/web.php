<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('top');
});

// CONCEPT
Route::get('/concept', function () {
    return view('concept');
});

// LOCATION
Route::get('/location', function () {
    return view('location');
});

// ACCESS
Route::get('/access', function () {
    return view('access');
});

// DESIGN
Route::get('/design', function () {
    return view('design');
});

// MODEL ROOM
Route::get('/model_room', function () {
    return view('model_room');
});

// PLAN
Route::get('/plan', function () {
    return view('plan');
});

// BLANDING
Route::get('/blanding', function () {
    return view('blanding');
});

// 物件概要
Route::get('/overview', function () {
    return view('overview');
});

// 物件エントリー
Route::get('/entry', function () {
    return view('entry');
});

// 来場予約
Route::get('/reserve', function () {
    return view('reserve');
});

// アンケート
Route::get('/questionnaire', function () {
    return view('questionnaire');
});
