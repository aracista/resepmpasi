@extends('admin.layout.adminapp')

@section('title')
list resep
@endsection

@section('body')
<h3>Data resep</h3>
	<table class="table table-striped">
		<tr>
			<th>No</th>
			<th>judul</th>
			<th>tanggal</th>
			<th>opsi</th>		
		</tr>
		<?php $no = 0;?>
		@foreach($reseps as $resep)
		<?php $no++ ;?>
		<tr>
			<td>{{$no}}</td>
			<td>{{$resep->judul}}</td>
			<td>{{date('F d,Y', strtotime($resep->created_at))}}</td>
			<td>

			<form action="{{ route('resep.hapus', $resep->id) }}" method="post">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <a href="{{ route('admin.editresep',$resep->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
			<!-- <a href="#" class="btn btn-primary">Ubah</a>
			<a href="{{admin.hapus}}" class="btn btn-danger">Hapus</a>	 -->			
			</td>
		</tr>
		@endforeach
	</table>
@stop