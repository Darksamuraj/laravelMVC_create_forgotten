<?php
/* ������� �������� */

Route::get('/', function () {
    return view('welcome');
});


Route::get('/one/{task}', function ($id) {  //����� ������������� �����
	$task = DB::table('tasks') -> find($id);
	dd($task);
    return view('one', compact('tasks'));
});



Route::get('/two', function () {
    return view('two');
});

Route::get('/three', function () {     //����� ������ �� ���� ������� �����
	$tasks = DB::table('tasks')->get();
    return view('three',compact('tasks'));
});

Route::get('/page','Pagecontroller@rename');