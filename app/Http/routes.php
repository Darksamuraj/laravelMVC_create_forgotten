<?php
/* Добавил маршруты */

Route::get('/', function () {
    return view('welcome');
});


Route::get('/one/{task}', function ($id) {  //Поиск определенного таска
	//$task = DB::table('tasks') -> find($id);
	$task = App\task::find($id);
    return view('one', compact('task'));
});



Route::get('/two', function () {
    return view('two');
});

Route::get('/three', function () {     //вывод какого то поля таблицы таскс
	//$tasks = DB::table('tasks')->get();
	$tasks=App\task::all();
    return view('three',compact('tasks'));
});

Route::get('/page','Pagecontroller@rename');