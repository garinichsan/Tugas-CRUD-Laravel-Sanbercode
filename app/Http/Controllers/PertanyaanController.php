<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

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
    
}
