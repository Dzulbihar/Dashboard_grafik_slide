@section('header', 'Data Tabel Cost Per Teus')

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
						<form action="{{url('/data_cost_perteus/cari_tahun_data_cost_perteus')}}" method="GET">
							<p class="card-title"> 
								<b>Pilih Tahun</b> 
								<select name="cari_tahun" id="cari_tahun" class="btn btn-secondary btn-sm">
									@foreach($tahun_data_cost_perteus as $tahun)
									<option value="{{$tahun->tahun}}">
										{{$tahun->tahun}}
									</option>
									@endforeach
								</select>
								<input type="submit" value="Cari" class="btn btn-secondary btn-sm text-white">
								<?php 
								if(isset($_GET['cari_tahun'])){
									$cari_tahun = $_GET['cari_tahun'];
									?>
									<a class="btn btn-secondary btn-sm text-white"> Hasil pencarian <?php echo "tahun : $cari_tahun" ?></a>
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
						<h3  class="card-title"> Data Cost Perteus 
							<?php 
							if(isset($_GET['cari_tahun'])){
								$cari_tahun = $_GET['cari_tahun'];
								?>
								<?php echo "tahun: $cari_tahun" ?>
								<?php 
							}
							?>
						</h3>
					</div>
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Jenis Data</th>
									<th>Tahun</th>
									<th>Bulan</th>
									<th>Total Biaya</th>
									<th>Total Teus</th>
									<th>Biaya Perteus</th>
								</tr>
							</thead>
							<tbody>
								<?php $nomer = 1; ?>
								@foreach($data_cost_perteus as $cost_perteus)
								<tr>
									<th>{{ $nomer++}}</th>
									<td> {{ $cost_perteus->jenis_data}} </td>
									<td> {{ $cost_perteus->tahun}} </td>
									<td> {{ $cost_perteus->bulan}} </td>
									<td> {{ $cost_perteus->totalbiaya}} </td>
									<td> {{ $cost_perteus->totalteus}} </td>
									<td> {{ $cost_perteus->biayaperteus}} </td>
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
