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
#Basic
Route::get('/', function () {
    return view('welcome');
});
#Owner
Route::get('owner/add-admin', 'Owner@add_admin');
#Admin
Route::get('admin/post-new', 'Admin@post_new');
Route::post('article/upload', 'Article@create');