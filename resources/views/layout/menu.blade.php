<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand text-success navbar-link" href="{{ route('login') }}"><img src="{{asset ('img/logo.png')}}" id="logo"><strong>Smiley</strong>'s </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="{{route('beranda')}}">Beranda </a></li>
                    <li role="presentation"><a href="{{route('resep')}}">Resep </a></li>
                    <li role="presentation"><a href="{{route('kontak')}}">Kontak </a></li>
                    <li role="presentation"><a href="{{route('tentang')}}">Tentang </a></li>

                </ul>
            </div>
        </div>
    </nav>