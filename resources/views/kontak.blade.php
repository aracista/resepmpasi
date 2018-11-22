@extends('layout.app')

@section('title')
kontak
@endsection

@section('body')
<div class="container" style="margin-top: 5%">
    <div class="row well">
        <div class="col-md-12">
            <h1 class="text-center">CONTACT US</h1></div>
    	</div>
    <div class="row well">
        <div class="col-md-6">
            <br></br>
            	<p>Anda punya pertanyaan atau ingin mengirim pesan kepada kami?</p>
       
            	<form name="submitcomment" method="post" action="/simpan">
            		{{ csrf_field() }}
            		<div class="control-group">
            			<div class="controls">
            				Nama:<br><input name="nama" type="text"><br>
            			</div>
            		</div>
            		<div class="control-group">
            			<div class="controls">
            				Email(optional):<br><input name="email" type="text"><br>
            			</div>
            		</div>
            		<!-- <div class="control-group">
            			<div class="controls">
            				Website(optional):<br><input name="website" type="text"><br>
            			</div>
            		</div> -->
            		<div class="control-group">
            			<div class="controls">
            				Komentar:<br><textarea name="komentar" rows="6" cols="50" required=></textarea><br>
            			</div>
            		</div>
            		<div class="control-group">
            			<div class="controls">
            				<input class="btn btn-danger" name="tombol" value="Kirim" type="submit">
            			</div>
            		</div>
            	</form>
            
        </div>

        <div class="col-md-6">
            <h2>Saran & Kritik</h2>
            <p>Kami membuka diri untuk menjadi lebih baik.
            Jika Anda mempunyai saran atau kritik untuk menjadikan website kami lebih baik, silahkan kirim melalui form kontak yang disediakan.</p>

            <p>Terima Kasih.</p>
        </div>
    </div>
</div>
@endsection
