<!-- Judul TEUS -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 align="center"> 
              <b>
                Laporan Arus TEUS Domestik & International
              </b>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->

<!-- Arus TEUS -->
<section class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12 col-sm-12 col-12">
        <div class="info-box bg-danger" border-style: solid>
          <h5 align="center" class="text-white">
            <b> Tahun lalu </b>
            <br><br>
            <b>
            @foreach($tahun_lalu_tampil_teus as $arus)
              {{$arus->teus}}
            @endforeach
            <br>
            @if($arus->teus ==0) 
              <?php echo '0'; ?>
            @elseif($arus->teus=!0)
              @foreach($tahun_ini_nilai_teus as $arus_ini)
              @endforeach
              @foreach($tahun_lalu_nilai_teus as $arus_lalu)
              @endforeach
              <?php 
                $persen = ($arus_ini->teus / $arus_lalu->teus * 100);
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
              @foreach($tahun_ini_tampil_teus as $arus)
                {{$arus->teus}}
              @endforeach
              </b>
              <i class="fas fa-cubes bg-danger" aria-hidden="true"></i>
            </h1>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
          </div>
          <h5 align="center" class="text-white">
            <b> RKAP </b>
            <br><br>
            <b>
            @foreach($rkap_tampil_teus as $arus)
              {{$arus->target_rkap}}
            @endforeach
            <br>
            @if($arus->target_rkap ==0) 
              <?php echo '0'; ?>
            @elseif($arus->target_rkap=!0)
              @foreach($tahun_ini_nilai_teus as $arus_ini)
              @endforeach
              @foreach($rkap_nilai_teus as $arus_rkap)
              @endforeach
              <?php 
                $persen = ($arus_ini->teus / $arus_rkap->target_rkap * 100);
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
<!-- /.content --> 


@empty ($grafik)
  <!-- Grafik TEUS -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          @include('slide_grafik.arus_grafik.grafik_teus_total')
        </div>
      </div>        
    </div>
  </section>
  <!-- /.content -->
@else
  @if ($grafik == 'Grafik Batang')
  <!-- Grafik TEUS -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          @include('slide_grafik.arus_grafik.grafik_teus_total')
        </div>
      </div>        
    </div>
  </section>
  <!-- /.content -->
  @endif
  @if ($grafik == 'Grafik Line')
  <!-- Grafik TEUS -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          @include('slide_grafik.arus_grafik.grafik_line.grafik_teus_total')
        </div>
      </div>        
    </div>
  </section>
  <!-- /.content -->
  @endif
@endempty