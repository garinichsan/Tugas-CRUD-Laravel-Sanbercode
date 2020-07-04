@extends('adminlte.master') 

@section('content')

<a class="btn btn-primary ml-3 mt-3" href="/pertanyaan"> <i class="right fas fa-angle-left"></i> &nbsp Kembali ke Daftar Pertanyaan</a>

<br>

<label class="ml-3 mt-3">Detail Pertanyaan</label>
<a class="btn btn-outline-primary float-right" href="/pertanyaan/{{$pertanyaan->id}}/edit "> <i class="right fas fa-edit"></i> &nbsp Edit Pertanyaan</a>
<div m-3>

    <!-- /.card-header -->
    <div class="card-body p-0 ml-3 mt-3">
    <table class="table table-striped" style="white-space: pre-wrap">
        <thead>
        <tr>
            <th style="width: 10px">Id</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Dibuat</th>
            <th>Diperbaharui</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$pertanyaan->id}}</td>
            <td>{{$pertanyaan->judul}}</td>
            <td>{{$pertanyaan->isi}}</td>
            <td>{{$pertanyaan->created_at}}</td>
            <td>{{$pertanyaan->updated_at}}</td>
        </tr>
        </tbody>
    </table>
    </div>    

    <label class="ml-3 mt-3">Jawaban</label>
    @empty($jawaban[0])
        <div class="card bg-white card-primary card-outline m-3">
            <div class="card-body">
                <p class="card-text">Belum ada jawaban</p>
            </div>
        </div>
    @endempty

    @foreach ($jawaban as $key => $item)
        <div class="card bg-white card-primary card-outline m-3">
            <div class="card-body">
                <p class="card-text">{{$item->isi}}</p>
            </div>
        </div>
    @endforeach

</div>

@endsection

