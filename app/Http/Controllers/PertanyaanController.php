<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
     
    public function pertanyaan()
    {
        // $pertanyaan = PertanyaanModel::get_all();
        // return view('pertanyaan', compact('pertanyaan'));
        return view('pertanyaan');
    }

    public function pertanyaan_post(Request $request)
    {
        $data = $request->all;
        unset($data['_token']);
        dd($data);
        $pertanyaan = PertanyaanModel::save($data);
        if($pertanyaan){
            return view('pertanyaan');
        }
    }

    public function create()
    {
        # code...
    }

    public function jawaban()
    {
        # code...
    }

    public function jawaban_post()
    {
        # code...
    }
    
}
