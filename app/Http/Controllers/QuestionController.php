<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\QuestionModel;

class QuestionController extends Controller
{
    //
    public function index(){
        $questions = QuestionModel::get_all();
        return view('question.index',compact('questions'));
    }

    public function create(){
        return view('question.form');
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        $questions = QuestionModel::save($data);
        if($questions){
            return redirect('/questions');
        }
    }
    public function show($id)
    {
        //
        $question = QuestionModel::get_question($id);
        return view('question.edit', compact('question'));
    }
    public function update($id, Request $request){
        $question = QuestionModel::update($id, $request->all());
        return redirect('/questions');
    }
    public function destroy($id){
        $deleted = QuestionModel::destroy($id);
        return redirect('/questions');
    }
}
