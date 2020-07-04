@extends('adminlte.master');

@section ('content')
<div class="container pt-4 pl-4 pr-4">
<form action="/questions/{{$question->id}}" method='POST'>
@csrf
@method('PUT')
<!-- <input type="hidden" name="id" value="{{$question->id}}"> -->
  <div class="form-group">
    <label for="judul">Judul Pertanyaan</label>
    <input type="text" name="judul" value="{{$question->judul}}" class="form-control" placeholder="Masukkan Judul Pertanyaan" id="judul">
  </div>
  <div class="form-group">
  <label for="comment">Pertanyaan</label>
  <textarea class="form-control" name="isi" placeholder="Tuliskan pertanyaan anda di sini !"rows="5" id="isi">{{$question->isi}}</textarea>
</div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection