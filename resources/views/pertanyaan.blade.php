@extends('adminlte.master') 

@section('content')

<a class="btn btn-primary m-3" href="/pertanyaan/create"> <i class="nav-icon fas fa-edit"></i> Ajukan Pertanyaan </a>

<table class="table table-hover m-3">
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
        <a href="/jawaban/{{ $item -> id }} " class="btn btn-primary">Answer <i class="right fas fa-angle-right"></i> </a>
        <a href="/pertanyaan/{{ $item -> id }} " class="btn btn-default">Detail <i class="right fas fa-angle-right"></i> </a>
      </td>
    </tr>
    
    @endforeach
  </tbody>
</table>


@endsection