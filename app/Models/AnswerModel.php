<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Eloquent\Model;

class AnswerModel 
{
    public $timestamps = true;
    //
    public static function get_question($id){
        $question = DB::table('questions')->where('id',$id)->first();
        // dd($question);
        return $question;
    }

    public static function get_all($id){
        // dd($id);
        $answers=DB::table('answers')
                    ->where('id_pertanyaan',$id)
                    ->get();
        // dd($answers);            
        return $answers;
        
    }

    public static function save($data){
        $new_answer=DB::table('answers')->insert($data);
        return $new_answer;
    }
}
