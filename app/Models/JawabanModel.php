<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {
    public static function get_all(){
        $jawaban = DB::table('jawaban')->get();
        return $jawaban;
    }

    public static function save($data){
        $jawaban = DB::table('jawaban')->insert($data);
        return $jawaban;
    }

    public static function find_by_id($id)
    {
        $jawaban = DB::table('jawaban')->where('pertanyaan_id','=',$id)->get();
        return $jawaban;
    }
}