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

// トップページ(ログインページ)
Route::get('/', function () {
    return view('/users/login');
});
// トップページ
Route::get('/toppage', function () {
    return view('toppage');
});
// ユーザー（クライアント）削除ページ
Route::get('/delete', function () {
    return view('delete');
});
// ログインページ
Route::get('/users/login', function () {
    return view('/users/login');
});
// サインインページ
Route::get('/users/signin', function () {
    return view('/users/signin');
});
// サインアップページ
Route::get('/users/signup', function () {
    return view('/users/signup');
});
// 登録完了ページ
Route::get('/users/register', function () {
    return view('/users/register');
});
// ログアウトページ
Route::get('/users/logout', function () {
    return view('/users/logout');
});
// マイページ
Route::get('/users/profile', function () {
    return view('/users/profile');
});
// プロフィール編集ページ
Route::get('/users/profile_edit', function () {
    return view('/users/profile_edit');
});

// クライアントプロフィールページ
Route::get('/clients/profile', function () {
    return view('/clients/client_profile');
});
// クライアントプロフィール編集ページ
Route::get('/cliets/client_profile_edit', function () {
    return view('/cients/client_profile_edit');
});
// クイズページ
Route::get('/profile_quiz', function () {
    return view('/profile_quiz');
});
// 回答ページ
Route::get('/answer', function () {
    return view('/answer');
});
