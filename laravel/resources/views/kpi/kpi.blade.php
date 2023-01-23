@section('header', 'KPI')

@extends('layouts.app')

@section('content')

<br>

<!-- Cari -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
			            <form action="{{url('/kpi/cari_kpi')}}" method="GET">
			              	<p class="card-title"> 
			                	<b>Bulan</b>
			                	<select name="cari_bulan" id="cari_bulan" class="btn btn-secondary btn-sm">
			                		<option value="01">Januari</option>
			                		<option value="02">Februari</option>
			                		<option value="03">Maret</option>
			                		<option value="04">April</option>
			                		<option value="05">Mei</option>
			                		<option value="06">Juni</option>
			                		<option value="07">Juli</option>
			                		<option value="08">Agustus</option>
			                		<option value="09">September</option>
			                		<option value="10">Oktober</option>
			                		<option value="11">November</option>
			                		<option value="12">Desember</option>
			                	</select>
			                	<b>Tahun</b>
			                  	<select name="cari_tahun" id="cari_tahun" class="btn btn-secondary btn-sm">
			                		@foreach($tahun_kpi as $tahun)
			                		<option value="{{$tahun->tahun}}">
			                			{{$tahun->tahun}}
			                		</option>
			                		@endforeach
			                	</select>
			              		<input type="submit" value="Cari" class="btn btn-secondary btn-sm text-white">
			              		<?php 
			              			if(isset($_GET['cari_bulan'],$_GET['cari_tahun'])){
			              			$cari_bulan = $_GET['cari_bulan'];
			              			$cari_tahun = $_GET['cari_tahun'];
			              		?>
			              			<a class="btn btn-secondary btn-sm text-white"> Hasil pencarian, 
			              				<?php echo "$cari_bulan / $cari_tahun" ?>
			              			</a>
			              		<?php 
			              			}
			              		?>
			                </p>
			            </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->

<!-- Main Tabel -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title"> 
							Data KPI
		              		<?php 
		              			if(isset($_GET['cari_bulan'],$_GET['cari_tahun'])){
		              			$cari_bulan = $_GET['cari_bulan'];
		              			$cari_tahun = $_GET['cari_tahun'];
		              		?>
		              		@if($cari_bulan == '01') 
		              			Januari
		              		@elseif($cari_bulan == '02') 
		              			Februari
		              		@elseif($cari_bulan == '03') 
		              			Maret
		              		@elseif($cari_bulan == '04') 
		              			April
		              		@elseif($cari_bulan == '05') 
		              			Mei
		              		@elseif($cari_bulan == '06') 
		              			Juni 
		              		@elseif($cari_bulan == '07') 
		              			Juli
		              		@elseif($cari_bulan == '08') 
		              			Agustus
		              		@elseif($cari_bulan == '09') 
		              			September
		              		@elseif($cari_bulan == '10') 
		              			Oktober
		              		@elseif($cari_bulan == '11') 
		              			November
		              		@elseif($cari_bulan == '12') 
		              			Desember
		              		@endif
		              		<?php echo "$cari_tahun" ?>
		              		<?php 
		              			}
		              		?>
						</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
								<i class="fas fa-minus"></i>
							</button>
						</div>
					</div>
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Uraian</th>
									<th>Satuan</th>
									<th>Tahun</th>
									<th>Bulan</th>
									<th>Target KPI tahun ini</th>
									<th>Week 1</th>
									<th>Week 2</th>
									<th>Week 3</th>
									<th>Week 4</th>
									<th>KPI tahun lalu</th>
									<th>KPI tahun ini</th>
									<th>Capaian Yoy</th>
									<th>Capaian Target</th>
								</tr>
							</thead>

							<tbody>
								<?php $nomer = 1; ?>
								@foreach($kpis as $kpi)
								<tr>
									<th>{{ $nomer++}}</th>
									<td> {{ $kpi->uraian}} </td>
									<td> {{ $kpi->satuan}} </td>
									<td> {{ $kpi->tahun}} </td>
									<td> {{ $kpi->bulan}} </td>
									<td> {{ $kpi->target_kpi_tahun_ini}} </td>
									<td> {{ $kpi->week_1}} </td>
									<td> {{ $kpi->week_2}} </td>
									<td> {{ $kpi->week_3}} </td>
									<td> {{ $kpi->week_4}} </td>
									<td> {{ $kpi->kpi_tahun_ini}} </td>
									<td> {{ $kpi->kpi_tahun_lalu}} </td>
									<td> {{ $kpi->capaian_yoy}} </td>
									<td> {{ $kpi->capaian_target}} </td>
								</tr>
								@endforeach 
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->

@endsection
