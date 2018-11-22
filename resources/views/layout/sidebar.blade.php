<script type="text/javascript">
    var detik = <?php echo date('s'); ?>;
    var menit = <?php echo date('i'); ?>;
    var jam   = <?php echo date('H'); ?>;
     
    function clock()
    {
        if (detik!=0 && detik%60==0) {
            menit++;
            detik=0;
        }
        second = detik;
         
        if (menit!=0 && menit%60==0) {
            jam++;
            menit=0;
        }
        minute = menit;
         
        if (jam!=0 && jam%24==0) {
            jam=0;
        }
        hour = jam;
         
        if (detik<10){
            second='0'+detik;
        }
        if (menit<10){
            minute='0'+menit;
        }
         
        if (jam<10){
            hour='0'+jam;
        }
        waktu = hour+':'+minute+':'+second;
         
        document.getElementById("clock").innerHTML = waktu;
        detik++;
    }
 
    setInterval(clock,1000);
</script>
 
<div style="text-align:center;">
    <h3>WAKTU SAAT INI :</h3>
    <h1 id="clock"></h1>
</div>	
	<ul class="nav nav-tabs" id="nav-tabs">

		<li class="active"><a href="#konten1" data-toggle="tab">Terbaru</a></li>
		<li><a href="#konten2" data-toggle="tab">Popular</a></li>
	</ul>
    <div class="tab-content" id="tab-content">
        <div class="tab-pane fade in active" id="konten1">
            <ul>
                @foreach($reseps as $reseps)
                <li><img style="width:80px; height: 60px;" src="{{asset('gambar/'. $reseps->gambar)}}">
                    <a href="{{route('detail', $reseps->id)}}">{{$reseps->judul}}</a>
                </li>
                @endforeach    
                
            </ul>
        </div>


	<div class="tab-content" id="tab-content">
		<div class="tab-pane fade in active" id="konten1">
			<ul>
		</div>
		<div class="tab-pane fade" id="konten2">
			<ul>
				
			</ul>
		</div>
	</div>
	
	