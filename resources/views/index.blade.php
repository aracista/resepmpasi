@extends('layout.app')

@section('title')
beranda
@endsection

@section('body')
<content id="content">
<div class="container" style="margin-top: 4%">
    <div class="row">	
    	<div class="col-md-8">
    		@include('layout.slideshow')
        		<div class="row">
        			<div class="col-md-6">
        				<h3>Bahan makanan sehat</h3>
                            <p class="text-justify">para orang tua sebaiknya memilih makanan bergizi yang dapat membantu meningkatkan pertumbuhan otak Si Kecil. Ada beberapa jenis makanan diketahui dapat mendukung perkembangan otak si Kecil pada masa pertumbuhan, serta meningkatkan daya ingat serta konsentrasinya.</p><br><a class="btn btn-primary" role="button" href="bahan.php">Selengkapnya </a>
        			</div>
        			<div class="col-md-6">
        				<h3>Tentang kami</h3>
                            <p class="text-justify">Smileys-food berusaha memudahkan kebutuhan Bunda dalam menyediakan makanan untuk buah hati, khususnya yang masih dalam masa MPASI. Kami menyediakan beberapa resep makanan untuk bayi pada masa MPASI. Jadi Kami berharap Bunda tidak perlu pusing-pusing lagi untuk membuat makanan untuk si buah hati.</p>
                            <a class="btn btn-primary" role="button" href="tentang.php">Selengkapnya </a>
                    </div>
        		</div>
        </div>
        <div class="col-md-4">
        	@include('layout.sidebar')
        </div>
    </div>
</div>
@stop
@section('footer')
<br></br>
    <div id="footer">
        <div>
            <div> </div>
        </div>
        <p class="footnote">&copy; 2017 Ian rizki perdana. All Rights Reserved.</p>
    </div>
@stop