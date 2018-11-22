@extends('layout.app')

@section('title')
detail
@endsection
@section('body')
<div class="paragraphs" style="margin-top: 100px">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 well">
      <img class="img-polaroid" src="{{asset('gambar/'. $resep->gambar)}}" style="width:250px; height: 200px; float:left; margin-right:20px;"/>
      <div class="col-md-8">
        <div class="content-heading"><h3>{{$resep->judul}}</h3></div>
          <p>
            <a href="#" class="btn btn-danger">
              Diposkan pada {{$resep->created_at}}            
            </a>
          </p>
          <p style="text-align:justify;">
            {{$resep->isi}}
          </p>
          <div style="clear:both;"></div>
        </div>
      </div>
    </div>
</div>
@endsection