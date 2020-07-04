@extends('adminlte.master') 

@section('content')

<a class="btn btn-primary ml-3 mt-3" href="/pertanyaan"> <i class="right fas fa-angle-left"></i> &nbsp Kembali ke Daftar Pertanyaan</a>

<br>

<label class="ml-3 mt-3">Pertanyaan</label>
<div m-3>

    <div class="card mx-3">
        <div class="card-header bg-light" style="text-align: center">{{$pertanyaan->judul}}</div>
        <div class="card-body bg-white">
          <p class="card-text">{{$pertanyaan->isi}}</p>
        </div>
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

    <form role="form" class="m-3" action="/jawaban/{{ $pertanyaan-> id}} " method="POST">
        @csrf
        <!-- textarea -->
        <label>Jawab Pertanyaan</label>
        <textarea class="form-control" rows="5" name="isi" placeholder="Masukkan Jawaban ..."></textarea>
    
        <button class="btn btn-primary my-3" type="submit">Jawab</a>
    
    </form>

</div>

@endsection

