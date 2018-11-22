@extends('layout.app')

@section('title')
resep
@endsection

@section('body')
<div class="container-fluid" style="margin-top: 4%">
	<div class="row-fluid">
		<div class="col-md-3">
			<div class="list-group">
				<span class="list-group-item" style="background-color: green;">
					<h4 style="color: white;">Baca juga</h4>
				</span>
				@foreach($resep as $resep)
        			<span class='list-group-item'>
        				<a href="{{route('detail', $resep->id)}}">{{$resep->judul}}</a>
        			</span>
        @endforeach
        
			</div>
        </div>
        <div class="col-md-9">
            <div class="row">
              @foreach($reseps as $resep)
              <div class="col-sm-6 col-md-4">
                
                <div class="thumbnail">
                  <img src="{{asset('gambar/'. $resep->gambar)}}" style="width:280px; height: 200px;" alt="...">
                      <div class="caption">
                        <h3>{{$resep->judul}}</h3>
                          
                            <p>
                              <a href="{{route('detail', $resep->id)}}" class="btn btn-primary" role="button">Baca selengkapnya</a> 
                            </p>
                      </div>
                </div>
             
              </div>
               @endforeach
            </div>	
    		</div>
	</div>
<hr>
</div>
@endsection
