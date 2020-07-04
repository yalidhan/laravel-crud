<?php 

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class QuestionModel{
    public $timestamps = true;
    protected $table="questions";
    protected $fillable =[
        'judul','isi'
    ];
    public static function get_all(){
        $question = DB::table('questions')->get();
        return $question;
    }

    public static function save($data){
        // dd($data);
        $new_question = DB::table('questions')->insert([
            'judul'=>$data['judul'],
            'isi'=>$data['isi'],
            'created_at' => \Carbon\Carbon::now(),
            // 'updated_at' => \Carbon\Carbon::now(),
        ]);  
        // dd($new_question);
        return $new_question;
    }

    public static function get_question($id){
        $question = DB::table('questions')->where ('id',$id)->first();
        return $question;
    }

    public static function update($id, $request){
        $question = DB::table('questions')
                        ->where('id',$id)
                        ->update([
                            'judul' => $request["judul"],
                            'isi' => $request["isi"],
                            'updated_at' => \Carbon\Carbon::now(),
                        ]);
        return $question;
    }

    public static function destroy($id){
        $deleted = DB::table('questions')
                        ->where ('id', $id)
                        ->delete();
        return $deleted;
    }
}

?>