@extends('admin.layout.adminapp')

@section('title')
beranda
@endsection
 
@section('body')
<h2>INPUT RESEP</h2>
	<form class="form-horizontal" method="post" action="{{ route('resep.store') }}" name="frmresep" enctype="multipart/form-data">
		{{ csrf_field() }}
  		<div class="control-group">
    		<label class="control-label" for="inputJudul">Judul</label>
    			<div class="controls">
      				<input size="80" type="text" placeholder="Judul Resep" name="judul" class="form-control" >
   				 </div>
  		</div>
  		<div class="control-group">
    		<label class="control-label" for="inputKategori">Kategori</label>
    			<div class="controls">
    				<select name="kategori_id" class="form-control">
              @foreach($kategori as $kategori)
      					<option value="{{$kategori->id}}">{{$kategori->nama}}</option>
              @endforeach
    				</select>
    			</div>
  		</div>
  		<div class="control-group">
    		<label class="control-label" for="inputIsiResep">Isi Resep</label>
    			<div class="controls">
      				<textarea rows="10" cols="60" class="span12" name="isi"></textarea>
    			</div>
  		</div>
  		<div class="control-group">
    		<label class="control-label" for="inputGambar">Gambar </label>
    			<div class="controls">
      				<input type="file" id="inputGambar" name="gambar">
    			</div>
<br>
  		</div>
  		<div class="control-group">
    		<div class="controls">
      			<button type="submit" class="btn btn-primary">Post</button>
      				<a href="#" class="btn btn-danger">Cancel</a>
    		</div>
  		</div>
</form>
@stop