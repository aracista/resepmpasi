@extends('admin.layout.adminapp')

@section('title')
Edit kategori
@endsection

@section('body')
<h2>EDIT KATEGORI</h2>
	<form class="form-horizontal" method="post" action="{{ route('kategori.update', $kategori->id)}}" name="frmresep" enctype="multipart/form-data">
    @method('PUT')
		{{ csrf_field() }}
  		<div class="control-group">
    		<label class="control-label" for="inputJudul">Nama Kategori</label>
    			<div class="controls">
      				<input size="80" type="text" placeholder="Judul Resep" name="nama" class="form-control" value="{{$kategori->nama}}">
   				 </div>
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