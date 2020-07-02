<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
    public static function get_all(){
        $pertanyaan -> DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    public static function save($data){
        $pertanyaan -> DB::table('pertanyaan')->insert($data);
        return $pertanyaan;
    }
}