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
// ログインページ→post→マイページ
Route::post('/users/profile', function () {
    return view('/users/profile');
});
// パスワード再設定ページ
Route::get('/users/forget_password', function () {
    return view('/users/forget_password');
});
// サインアップページ
Route::get('/users/signup', function () {
    return view('/users/signup');
});
// サインインページ→post→登録完了ページ
Route::post('/users/register', function () {
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
// プロフィール編集完了ページ
Route::post('/update', function () {
    return view('/update');
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
Route::post('/answer', function () {
    return view('/answer');
});
