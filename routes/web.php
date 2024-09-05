<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('welcome');
});

//Rute GET sederhana
Route::get ('/hello', function (){
    return 'Hello world!';
});

//Rute dengan parameter
Route::get('/user/{id}', function ($id){
    return "User ID :". $id;
});

//Rute dengan parameter opsional
Route::get('/user/{name?}', function ($name = 'Guest'){
    return "Hello, ". $name;
});

//Rute dengan nama
Route::get('/profile', function (){
    return 'This is the profile page.';
}) -> name ('profile');

//Menggunakan rute bernama untuk pengalihan
Route::get('/redirect-to-profile', function (){
    return redirect () -> route ('profile');
});