@extends('adminlte.master') 

@section('content')

<a class="btn btn-primary m-3" href="/pertanyaan/create"> <i class="nav-icon fas fa-edit"></i> Ajukan Pertanyaan </a>

<table class="table table-hover text-nowrap">
  <thead>
    <tr>
      <th width="20%">Judul Pertanyaan</th>
      <th>Isi Pertanyaan</th>
      <th width="10%">Jawaban</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pertanyaan as $key => $item)
        
    <tr>
      <td>{{ $item -> judul }}</td>
      <td>{{ $item -> isi }}</td>
      <td><a href="/jawaban/{{ $item -> id }} " class="btn btn-primary">Show <i class="right fas fa-angle-right"></i> </a></td>
    </tr>
    
    @endforeach
  </tbody>
</table>


@endsection