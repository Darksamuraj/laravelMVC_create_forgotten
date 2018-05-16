<?php
/* Добавил маршруты */

Route::get('/', function () {
    return view('welcome');
});
Route::get('/one', function () {
    return view('one');
});
Route::get('/two', function () {
    return view('two');
});
Route::get('/three', function () {
    return view('three');
});