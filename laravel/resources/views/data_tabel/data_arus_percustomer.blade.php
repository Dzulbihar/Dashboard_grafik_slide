@section('header', 'Data Tabel Arus Percustomer')

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
			            <form action="{{url('/data_arus_percustomer/cari_lokasi_data_arus_percustomer')}}" method="GET">
			            	<p class="card-title"> 
			                	<b>Pilih Lokasi</b>
			                	<select name="cari_lokasi" id="cari_lokasi" class="btn btn-secondary btn-sm">
			                		@foreach($lokasi_data_arus_percustomer as $lokasi)
			                		<option value="{{$lokasi->lokasi}}">
			                			{{$lokasi->lokasi}}
			                		</option>
			                		@endforeach
			                	</select>
			                	<b>Pilih Tahun</b>
			                  	<select name="cari_tahun" id="cari_tahun" class="btn btn-secondary btn-sm">
			                		@foreach($tahun_data_arus_percustomer as $tahun)
			                		<option value="{{$tahun->tahun}}">
			                			{{$tahun->tahun}}
			                		</option>
			                		@endforeach
			                	</select>
			              		<input type="submit" value="Cari" class="btn btn-secondary btn-sm text-white">
			              		<?php 
			              			if(isset($_GET['cari_lokasi'],$_GET['cari_tahun'])){
			              			$cari_lokasi = $_GET['cari_lokasi'];
			              			$cari_tahun = $_GET['cari_tahun'];
			              		?>
			              			<a class="btn btn-secondary btn-sm text-white"> Hasil pencarian, 
			              				@if($cari_lokasi == 'DOM') 
					              			lokasi: Domestik
					              		@elseif($cari_lokasi == 'INT') 
					              			lokasi: International
					              		@endif
			              				<?php echo ", tahun: $cari_tahun" ?>
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
							Data Arus Percustomer
		              		<?php 
		              			if(isset($_GET['cari_lokasi'],$_GET['cari_tahun'])){
		              			$cari_lokasi = $_GET['cari_lokasi'];
		              			$cari_tahun = $_GET['cari_tahun'];
		              		?>
		              		@if($cari_lokasi == 'DOM') 
		              			, Lokasi Domestik
		              		@elseif($cari_lokasi == 'INT') 
		              			, Lokasi International
		              		@endif
		              		<?php echo ", Tahun $cari_tahun" ?>
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
									<th>Jenis Data</th>
									<th>Agen</th>
									<th>Nama Agen</th>
									<th>Lokasi</th>
									<th>Tahun</th>
									<th>Bulan</th>
									<th>Shipcall</th>
									<th>GT</th>
									<th>Jumlah Box</th>
									<th>Jumlah Teus</th>
									<th>Total Pendapatan</th>
								</tr>
							</thead>

							<tbody>
								<?php $nomer = 1; ?>
								@foreach($data_arus_percustomer as $arus)
								<tr>
									<th>{{ $nomer++}}</th>
									<td> {{ $arus->jenis_data}} </td>
									<td> {{ $arus->agent}} </td>
									<td> {{ $arus->nama_agent}} </td>
									<td> {{ $arus->lokasi}} </td>
									<td> {{ $arus->tahun}} </td>
									<td> {{ $arus->bulan}} </td>
									<td> {{ $arus->shipcall}} </td>
									<td> {{ $arus->gt}} </td>
									<td> {{ $arus->jml_box}} </td>
									<td> {{ $arus->jml_teus}} </td>
									<td> {{ $arus->total_pendapatan}} </td>
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
