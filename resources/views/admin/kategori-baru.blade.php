@extends('admin.layout.adminapp')

@section('title')
Tambah kategori
@endsection

@section('body')
<h2>INPUT KATEGORI</h2>
	<form class="form-horizontal" method="post" action="{{ route('kategori.store') }}" name="frmresep" enctype="multipart/form-data">
		{{ csrf_field() }}
  		<div class="control-group">
    		<label class="control-label" for="inputJudul">Nama Kategori</label>
    			<div class="controls">
      				<input size="80" type="text" placeholder="nama kategori" name="nama" class="form-control" >
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