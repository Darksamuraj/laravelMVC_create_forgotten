<?php
/* ������� �������� */


Route::get('/three','TasksController@index');
Route::get('/one/{task}','TasksController@show');

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/one/{task}', function ($id) {  //����� ������������� �����
	//$task = DB::table('tasks') -> find($id);
	$task = App\tasks::find($id);
    return view('one', compact('task'));
});
*/


Route::get('/two', function () {
    return view('two');
});
/*
Route::get('/three', function () {     //����� ������ �� ���� ������� �����
	//$tasks = DB::table('tasks')->get();
	//$tasks=App\task::all();
	$tasks=App\tasks::incomplete();
    return view('three',compact('tasks'));
});
*/
Route::get('/page','Pagecontroller@rename');