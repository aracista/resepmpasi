@extends('admin.layout.adminapp')

@section('title')
pesan
@endsection

@section('body')
@foreach($pesans as $pesan)
<table class="table table-condensed table-striped">
	
					<tr>
						<th width="150">TANGGAL</th>
						<th width="10">:</th>
						<td>{{date('F d,Y', strtotime($pesan->created_at))}}</td>
					</tr>
					<tr>
						<th width="150">NAMA LENGKAP</th>
						<th width="10">:</th>
						<td>{{$pesan->nama}}</td>
					</tr>
					<tr>
						<th>EMAIL</th>
						<th>:</th>
						<td>{{$pesan->email}}</td>
					</tr>
					<tr>
						<th>ISI KOMENTAR</th>
						<th>:</th>
						<td>{{$pesan->komentar}}</td>
					</tr>
	
				</table>
				<br>
	@endforeach			

{!!$pesans->links()!!}
 
@stop