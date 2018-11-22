@extends('layout.app')

@section('title')
tentang
@endsection

@section('body')
<div class="container">
    <h2 class="text-center well" style="margin-top: 5%"><strong>TENTANG KAMI</strong> </h2>
    <br><br>
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <img class="img-responsive" src="{{asset('img/baby.jpg')}}">
            </div>
            <div class="col-md-5">
                <p class="text-justify">bermula dari keinginan untuk berbagi informasi seputar makanan bayi dan cara membuatnya dengan para orang tua baru. Kami menyadari betapa menyenangkannya memiliki seorang bayi, namun seringkali perasaan ini dicampuri dengan perasaan bingung – bagaimana memberikan makanan yang sehat dan terbaik untuk si kecil.</p>
                <p class="text-justify">Smileys-food berusaha memudahkan kebutuhan Bunda dalam menyediakan makanan untuk buah hati, khususnya yang masih dalam masa MPASI. Kami menyediakan beberapa resep makanan untuk bayi pada masa MPASI. Jadi Kami berharap Bunda tidak perlu pusing-pusing lagi untuk membuat makanan untuk si buah hati.&nbsp; </p>
            </div>
        </div>
</div>
@stop
