@extends('adminlte.master')

@section('content')
<a class="btn btn-primary mt-3 ml-3" href="/pertanyaan/{{$pertanyaan->id}}"> <i class="right fas fa-angle-left"></i> &nbsp Kembali ke Detail Pertanyaan</a>

<form role="form" class="mx-3" action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
    @csrf
    @method("PUT")
    <!-- text input -->
    <label class="mt-3">Judul Pertanyaan</label>
    <input type="text" class="form-control mb-3" name="judul" value="{{$pertanyaan->judul}}">

    <!-- textarea -->
    <label>Isi Pertanyaan</label>
    <textarea class="form-control" rows="5" name="isi">{{$pertanyaan->isi}}</textarea>

    <button class="btn btn-primary my-3" type="submit">Ubah</a>

</form>

@endsection