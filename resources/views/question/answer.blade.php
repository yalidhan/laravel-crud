@extends('adminlte.master');

@section('content')
<div class="container pt-4 pl-4 pr-4 pb-2">
<div class="card">
  <h5 class="card-header"><div class="user-panel d-flex">
        <div class="image">
          <img src="{{asset('/adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div></h5>
  <div class="card-body">
    <h5 class="card-title" style="font-size: 1.25rem;"><b>{{$question->judul}}</b></h5></br></br>
    <p class="card-text">"{{$question->isi}}"</p>
    <blockquote class="blockquote mb-0 mt-0 pt-0 pb-1" style="border-left:0;">
      <footer class="blockquote-footer">Dibuat Pada {{$question->created_at}}<cite title="Source Title">&nbsp; Diperbaharui pada {{$question->updated_at}}</cite></footer>
    </blockquote>
    <a href="/answer/create/{{$question->id}}" class="btn btn-primary">Beri Tanggapan</a>
  </div>
</div>
@foreach($answers as $key =>$answer)
<div class="card">
  <h5 class="card-header"><div class="user-panel d-flex">
        <div class="image">
          <img src="{{asset('/adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div></h5>
  <div class="card-body">
    <p class="card-text">{{ $answer->isi}}</p>
  </div>
</div>
@endforeach
</div>
@endsection