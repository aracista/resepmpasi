@extends('admin.layout.adminapp')

@section('title')
beranda
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

			<form action="{{route('resep.destroy', $resep->id)}}" method="post">
				{{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <a href="{{route('resep.edit', $resep->id)}}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" value="delete" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>		
			</td>
		</tr>
		@endforeach
	</table>
@stop