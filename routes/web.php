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

Route::get('/', function () {
    return view('dashboard_site/article/article');
})->name('article');

// Article
Route::get('/article', function () {
    return view('dashboard_site/article/article');
})->name('article');
Route::get('/article/create', function () {
    return view('dashboard_site/article/create');
})->name('article.create');
Route::get('/article/edit', function () {
    return view('dashboard_site/article/edit');
})->name('article-edit');
Route::get('/article/empty', function () {
    return view('dashboard_site/article/empty');
})->name('article-empty');


//Author
Route::get('/author', function () {
    return view('dashboard_site/author/author');
})->name('author');

//Comment
Route::get('/comment', function () {
    return view('dashboard_site/comment/comment');
})->name('comment');
Route::get('/comment/detail', function () {
    return view('dashboard_site/comment/detail');
})->name('detail');

//Profil
Route::get('/profil', function () {
    return view('dashboard_site/profil/profil');
})->name('profil');
