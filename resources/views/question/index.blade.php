@extends('adminlte.master');

@section('content')
<div class="container pt-4 pl-4 pr-4">
<center><a class="btn btn-success" href="/questions/create" role="button">Buat Pertanyaan</a></center></br>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Pertanyaan</th>
      <th scope="col">Isi Pertanyaan</th>
      <th scope="col">Dibuat Pada</th>
      <th scope="col">Diperbaharui Pada</th>
      <th scope="col" center>Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($questions as $key => $question)
  <tr>
      <td>{{ $key +1}}</td>
      <td>{{ $question->judul}}</td>
      <td>{{ $question->isi}}</td>
      <td>{{ $question->created_at}}</td>
      <td>{{ $question->updated_at}}</td>
      <td>
      <a class="btn btn-primary" href="/answer/{{$question->id}}" role="button" >Jawab</a>
      <a class="btn btn-warning" href="/questions/{{$question->id}} " role="button">Edit</a>
      <form action="/questions/{{$question->id}}" method="POST" style="display:inline!important;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" role="button">Hapus</button>
      </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection