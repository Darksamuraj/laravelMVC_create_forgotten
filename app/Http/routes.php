<?php
/* Добавил маршруты */

Route::get('/', function () {
    return view('welcome');
});


Route::get('/one/{task}', function ($id) {  //Поиск определенного таска
	$task = DB::table('tasks') -> find($id);
	dd($task);
    return view('one', compact('tasks'));
});



Route::get('/two', function () {
    return view('two');
});

Route::get('/three', function () {     //вывод какого то поля таблицы таскс
	$tasks = DB::table('tasks')->get();
    return view('three',compact('tasks'));
});

Route::get('/page','Pagecontroller@rename');