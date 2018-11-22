			<div class="list-group">
				<span class="list-group-item" style="background-color: green;">
					<h4 style="color: white;">Baca juga</h4>
				</span>
				@foreach($resep as $resep)
        			<span class='list-group-item'>
        				<a href="{{route('resep.show', $resep->id)}}">{{$resep->judul}}</a>
        			</span>
        		@endforeach
			</div>