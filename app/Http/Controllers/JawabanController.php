<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index($id)
    {
        $pertanyaan = PertanyaanModel::find_by_id($id);
        $jawaban = JawabanModel::find_by_id($id);
        return view('jawaban', compact('pertanyaan','jawaban'));
    }

    public function store($id, Request $request)
    {
        $data = $request->all() + ['pertanyaan_id' => $id];
        unset($data['_token']);
        $jawaban = JawabanModel::save($data);
        if($jawaban){
            return $this->index($id);
        }
    }
}
