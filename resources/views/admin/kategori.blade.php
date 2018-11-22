@extends('admin.layout.adminapp')

@section('title')
Kategori
@endsection

@section('body')
<h3>Data Kategori</h3>
<a href="{{route('kategori.create')}}" class=" btn btn-sm btn-primary">Tambah</a>
<br>
<br>
	<table class="table table-striped">
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
			<th>tanggal</th>
			<th>opsi</th>		
		</tr>
		<?php $no = 0;?>
		@foreach($kategoris as $kategori)
		@php $no++ @endphp
		<tr>
			<td>{{$no}}</td>
			<td>{{$kategori->nama}}</td>
			<td>{{date('F d,Y', strtotime($kategori->created_at))}}</td>
			<td>

			<form action="{{route('kategori.destroy', $kategori->id)}}" method="post">
				{{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <a href="{{route('kategori.edit', $kategori->id)}}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" value="delete" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>		
			</td>
		</tr>
		@endforeach
	</table>
@stop