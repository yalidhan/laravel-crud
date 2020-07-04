@extends('adminlte.master');

@section ('content')
<div class="container pt-4 pl-4 pr-4">
<form action="/questions" method='POST'>
@csrf
  <div class="form-group">
    <label for="judul">Judul Pertanyaan</label>
    <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Pertanyaan" id="judul">
  </div>
  <div class="form-group">
  <label for="comment">Pertanyaan</label>
  <textarea class="form-control" name="isi" placeholder="Tuliskan pertanyaan anda di sini !"rows="5" id="isi"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection