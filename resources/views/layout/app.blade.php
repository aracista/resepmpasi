<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMILEY's | @yield('title')</title>

	<link href = "{{asset ('bootstrap/css/bootstrap.min.css')}}" rel = "stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,80">
	<link href = "{{asset ('css/styles.css')}}" rel = "stylesheet">
</head>
<body>
	@include('layout.menu')
	@yield('body')
</body>
    <br></br>
    <div id="footer">
        <div>
            <div> </div>
        </div>
        <p class="footnote">&copy; 2017 Ian rizki perdana. All Rights Reserved.</p>
    </div>
</html>
<script src="{{ asset ('js/jquery.min.js') }}"></script>
<script src="{{asset ('bootstrap/js/bootstrap.min.js') }}"></script>
