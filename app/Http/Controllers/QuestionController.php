<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
    	$questions = \App\question::all();
return view('questions.index')->with('allquestions',$questions);
}
public function create(){
return view('questions.create');
}
public function store(){
	$newquestion=new \App\question();
	$newquestion->title=request('title');
	$newquestion->body=request('description');
	$newquestion->tags=request('tags');
	
	$newquestion->save();
	return redirect('/questions/index');
 
}
}
