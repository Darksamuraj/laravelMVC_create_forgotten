<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App;
class TasksController extends Controller
{
    public function index(){
		$tasks=App\tasks::all();
		return view('three',compact('tasks'));
	}
	
	public function show($id){
			$task = App\tasks::find($id);
			return view('one', compact('task'));
	}
}
