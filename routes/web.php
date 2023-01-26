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

// トップページ
Route::get('/', function () {
    return view('toppage');
});
// トップページ
Route::get('/toppage', function () {
    return view('toppage');
});
// ログインページ
Route::get('/users/login', function () {
    return view('/users/login');
});
// サインインページ
Route::get('/users/signin', function () {
    return view('/users/signin');
});
// ログアウトページ
Route::get('/users/logout', function () {
    return view('/users/logout');
});
// プロフィール編集ページ
Route::get('/users/edit', function () {
    return view('/users/edit');
});
//
Route::get('/users/quiz', function () {
    return view('/users/quiz');
});
Route::get('/clients/show', function () {
    return view('/clients/show');
});
Route::get('/cliets/edit', function () {
    return view('/cients/edit');
});
Route::get('/clients/quiz', function () {
    return view('/clients/quiz');
});
