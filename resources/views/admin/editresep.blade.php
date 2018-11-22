@extends('admin.layout.adminapp')

@section('title')
edit resep
@endsection

@section('body')
<h2>INPUT RESEP</h2>
	<form class="form-horizontal" method="post" action="{{ route('resep.update', $resep->id)}}" name="frmresep" enctype="multipart/form-data">
    @method('PUT')
		{{ csrf_field() }}
  		<div class="control-group">
    		<label class="control-label" for="inputJudul">Judul</label>
    			<div class="controls">
      				<input size="80" type="text" placeholder="Judul Resep" name="judul" class="form-control" value="{{$resep->judul}}">
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
      				<textarea rows="10" cols="60" class="span12" name="isi">{{$resep->isi}}</textarea>
    			</div>
  		</div>
  		<div class="form-group"> 
        <label class="label-control">Gambar</label>
          <div class="controls"><img src="{{asset('gambar/'. $resep->gambar)}}" width="300" class="thumbnail">
            <input type="file" class="form-control" name="gambar">
          </div> 
    </div>
    
<br>
  		<div class="control-group">
    		<div class="controls">
      			<button type="submit" class="btn btn-primary" value="update">EDIT</button>
      				<a href="{{route('resep.index')}}" class="btn btn-danger">Cancel</a>
    		</div>
  		</div>
</form>
@stop