<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Blokchainology
|
*/


Route::get('/', function () {
    return view("index");
});

Route::get('blog', function () {
    return view("blog");
});

Route::get('team', function () {
    return view("team");
});

Route::get('login', function () {
    return view("login");
});


Route::get('shop', function () {
    return view("shop");
});

Route::get('contact', function ($id) {
    return view("contact");
});


Route::prefix('admin') -> group(function() {
    Route::get('/' , function(){
        return view('admin.panel');
    });

    Route::get('/users' , function(){
        return view('admin.users');
    });

    Route::get('/blog' , function(){
        return view('admin.blog');
    });
});
