<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;


class PertanyaanController extends Controller
{
     
    public function index()
    {
        $pertanyaan = PertanyaanModel::get_all();
        return view('pertanyaan', compact('pertanyaan'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        // dd($data);
        $pertanyaan = PertanyaanModel::save($data);
        if($pertanyaan){
            return redirect('/pertanyaan');
        }
    }

    public function show($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        $jawaban = JawabanModel::find_by_id($id);
        return view('show', compact('pertanyaan','jawaban'));
    }

    public function edit($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('edit', compact('pertanyaan'));
    }
    
    public function update($id,Request $request){
        $data = $request->all();
        unset($data['_token']);
        $pertanyaan = PertanyaanModel::update($id,$data);
        if($pertanyaan){
            return $this->show($id);
        }
    }

    public function delete($id)
    {
        $hapus = PertanyaanModel::destroy($id);
        return redirect("/pertanyaan");
    }
}
