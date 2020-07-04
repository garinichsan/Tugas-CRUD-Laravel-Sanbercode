@extends('adminlte.master') 

@section('content')

<a class="btn btn-primary m-3" href="/pertanyaan/create"> <i class="nav-icon fas fa-edit"></i> Ajukan Pertanyaan </a>

<table class="table table-hover">
  <thead>
    <tr>
      <th style="width: 150px">Judul Pertanyaan</th>
      <th> Isi Pertanyaan</th>
      <th style="width: 300px"> Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pertanyaan as $key => $item)
        
    <tr>
      <td>{{ $item -> judul }}</td>
      <td style="white-space: pre-wrap">{{ $item -> isi }}</td>
      <td>
        <form action="/pertanyaan/{{ $item -> id }}" method="POST" style="display: inline">
          @csrf
          @method("DELETE")
          <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
        </form>
        <a href="/pertanyaan/{{ $item -> id }} " class="btn btn-default"><i class="fas fa-file"></i> Detail</a>
        <a href="/jawaban/{{ $item -> id }} " class="btn btn-primary">Answer <i class="fas fa-angle-right"></i> </a>
      </td>
    </tr>
    
    @endforeach
  </tbody>
</table>


@endsection