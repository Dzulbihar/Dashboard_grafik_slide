<!-- Judul Arus -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 align="center"> 
							<b>
								Laporan Departure BOX Domestik & International
							</b>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->


@empty ($grafik)
  <!-- Grafik BOX -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          @include('slide_grafik.departure.slide_grafik.departure_total.grafik_departure_box')
        </div>
      </div>        
    </div>
  </section>
  <!-- /.content -->
@else
  @if ($grafik == 'Grafik Batang')
  <!-- Grafik BOX -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        	@include('slide_grafik.departure.slide_grafik.departure_total.grafik_departure_box')
        </div>
      </div>        
    </div>
  </section>
  <!-- /.content -->
  @endif
  @if ($grafik == 'Grafik Line')
  <!-- Grafik BOX -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          @include('slide_grafik.departure.slide_grafik.departure_total.grafik_line.grafik_departure_box')
        </div>
      </div>        
    </div>
  </section>
  <!-- /.content -->
  @endif
@endempty