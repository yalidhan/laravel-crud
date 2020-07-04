@extends('adminlte.master');

@section ('content')
<div class="container pt-4 pl-4 pr-4">
<form action="/answer" method='POST'>
@csrf
<input type="hidden" name="id_pertanyaan" value="{{$id_pertanyaan}}">
  <div class="form-group">
  <label for="comment">Tanggapan Pertanyaan</label>
  <textarea class="form-control" name="isi" placeholder="Tuliskan tanggapan anda di sini !"rows="5" id="isi"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection