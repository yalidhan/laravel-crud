<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\models\QuestionModel;
use App\models\AnswerModel;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $answers = AnswerModel::get_all($id);
        $question = AnswerModel::get_question($id);  
        // dd($question);
        // return ($question);
        return view('question.answer',compact('question','answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $id_pertanyaan= $id;
        return view('question.formanswer',['id_pertanyaan'=>$id_pertanyaan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->all();
        unset($data["_token"]);
        $id_pertanyaan=$data["id_pertanyaan"];
        $answer=AnswerModel::save($data);
        if($answer){
            return redirect('/answer/'.$id_pertanyaan);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AnswerModel  $answerModel
     * @return \Illuminate\Http\Response
     */
    public function show(AnswerModel $answerModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AnswerModel  $answerModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AnswerModel $answerModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AnswerModel  $answerModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnswerModel $answerModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AnswerModel  $answerModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnswerModel $answerModel)
    {
        //
    }
}
