<!-- Judul -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 align="center"> 
							<b>
								Laporan Market Share 
                <?php 
                  if ($satuan=='JML_BOX') {
                      echo 'BOX ';
                  }elseif ($satuan=='JML_TEUS') {
                        echo 'TEUS ';
                  }else{
                       echo 'Pendapatan ';
                  } 

                  if ($lokasi=='DOM') {
                      echo 'Domestik';
                  }elseif ($lokasi=='INT') {
                        echo 'International';
                  }else{
                       echo 'Domestik & International';
                  } 
                ?>
							</b>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->

<!-- KOTAK -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-12">
        <div class="info-box bg-info" border-style: solid>
          <h5 align="center" class="text-white">
            <b> Tahun lalu </b>
            <br><br>
            <b>
            @foreach($tahun_lalu_tampil_full as $arus)
            	{{$arus->satuan}}
            @endforeach
            <br>
            @if($arus->satuan ==0) 
            	0
            @elseif($arus->satuan=!0)
           		@foreach($tahun_ini_nilai_full as $arus_ini)
	           	@endforeach
	           	@foreach($tahun_lalu_nilai_full as $arus_lalu)
	           	@endforeach
	           	<?php 
	            	$persen = ($arus_ini->satuan / $arus_lalu->satuan * 100);
	            	echo ceil ($persen);
	           		echo '%';
	           	?>
            @endif
            </b>
          </h5>
          <div class="info-box-content">
            <h3 align="center" class="text-white">
              <b>
	            <?php echo "Tahun : $tahun_ini" ?>
              </b>
            </h3>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <h1 align="center">
              <b>
            	@foreach($tahun_ini_tampil_full as $arus)
            		{{$arus->satuan}}
            	@endforeach
              </b>
              <i class="fas fa-cube bg-info" aria-hidden="true"></i>
            </h1>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
          </div>
          <h5 align="center" class="text-white">
            <b> RKAP </b>
            <br><br>
            <b>
            @foreach($rkap_tampil_full as $arus)
           		{{$arus->target_rkap}}
            @endforeach
            <br>
            @if($arus->target_rkap ==0) 
           		0
            @elseif($arus->target_rkap=!0)
           		@foreach($tahun_ini_nilai_full as $arus_ini)
	           	@endforeach
	           	@foreach($rkap_nilai_full as $arus_rkap)
	           	@endforeach
	           	<?php 
	           		$persen = ($arus_ini->satuan / $arus_rkap->target_rkap * 100);
	           		echo ceil ($persen);
	           		echo '%';
	           	?>
           	@endif
            </b>
          </h5>
        </div>
      </div>
    </div>
  </div>
</section>
