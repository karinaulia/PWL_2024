<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'test']);

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function() {
    return 'World';
});

Route::get('/about', function() {
    return '2141762096 - Karina Aulia Primanti Putri';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama Saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});
