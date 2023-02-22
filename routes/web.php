<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\UserController;

Auth::routes();

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





Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/users/profile',[App\Http\Controllers\UserController::class,''])->name('user_show');
    Route::get('/users/profile_edit',[App\Http\Controllers\UserController::class,'get_edit'])->name('get_edit');
    Route::get('/users/profile_update',[App\Http\Controllers\UserController::class,'get_update'])->name('get_update');
    Route::post('/users/profile_update',[App\Http\Controllers\UserController::class,'update'])->name('update');

    Route::get('/users/create_group', [App\Http\Controllers\GroupController::class, 'create'])->name('create_group');



});

Route::get('/users/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('/users/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');



// トップページ(ログインページ)
// Route::get('/', function () {
//     return view('/login');
// });
// トップページ
Route::get('/toppage', function () {
    return view('toppage');
});
// 
// // ユーザー（クライアント）削除ページ
// Route::get('/delete', function () {
//     return view('delete');
// });
// 
// ログインページ
// Route::get('/users/login', function () {
//     return view('/users/login');
// });
// //  post→マイページ
// Route::post('/users/profile', function () {
//     return view('/users/profile');
// });
// 
// // パスワード再設定ページ
// Route::get('/users/forget_password', function () {
//     return view('/users/forget_password');
// });
// 
// // サインアップページ
// Route::get('/users/signup', function () {
//     return view('/users/signup');
// });
// // 登録確認ページ
// Route::get('/users/comfirm', function () {
//     return view('/users/comfirm');
// });
// // post→登録確認ページ
// Route::post('/users/comfirm', function () {
//     return view('/users/comfirm');
// });
// // 登録確認ページ
// Route::get('/users/register', function () {
//     return view('/users/register');
// });
// // post→登録完了ページ
// Route::post('/users/register', function () {
//     return view('/users/register');
// });
// 
// // ログアウトページ
// Route::get('/users/logout', function () {
//     return view('/users/logout');
// });
// 
// // マイページ
// Route::get('/users/profile', function () {
//     return view('/users/profile');
// });
// // プロフィール編集ページ
// Route::get('/users/profile_edit', function () {
//     return view('/users/profile_edit');
// });
// // クライアント登録ページ
// Route::get('/clients/client_profile_insert', function () {
//     return view('/clients/client_profile_insert');
// });
// // クライアント登録完了ページ
// Route::get('/clients/client_profile_register', function () {
//     return view('/clients/client_profile_register');
// });
// // post→クライアント登録完了ページ
// Route::post('/clients/client_profile_register', function () {
//     return view('/clients/client_profile_register');
// });
// // クライアントプロフィールページ
// Route::get('/clients/profile', function () {
//     return view('/clients/client_profile');
// });
// // クライアントプロフィール編集ページ
// Route::get('/clients/client_profile_edit', function () {
//     return view('/clients/client_profile_edit');
// });
// // プロフィール編集完了ページ
// Route::get('/update', function () {
//     return view('/update');
// });
// // post→プロフィール編集完了ページ
// Route::post('/update', function () {
//     return view('/update');
// });
// 
// // クイズページ
// Route::get('/profile_quiz', function () {
//     return view('/profile_quiz');
// });
// Route::get('/answer', function () {
//     return view('/answer');
// });
// // 回答ページ
// Route::post('/answer', function () {
//     return view('/answer');
// });
// 

