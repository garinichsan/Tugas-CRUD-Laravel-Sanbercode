@extends('adminlte.master')

@section('content')
<a class="btn btn-primary mt-3 ml-3" href="/pertanyaan"> <i class="right fas fa-angle-left"></i> &nbsp Kembali ke Daftar Pertanyaan</a>

<form role="form" class="mx-3" action="/pertanyaan" method="POST">
    @csrf
    <!-- text input -->
    <label class="mt-3">Judul Pertanyaan</label>
    <input type="text" class="form-control mb-3" name="judul" placeholder="Masukkan Judul ...">

    <!-- textarea -->
    <label>Isi Pertanyaan</label>
    <textarea class="form-control" rows="5" name="isi" placeholder="Masukkan Isi ..."></textarea>

    <button class="btn btn-primary my-3" type="submit">Tanyakan</a>

</form>

@endsection