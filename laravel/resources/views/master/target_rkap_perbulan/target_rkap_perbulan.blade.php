@section('header', 'Target RKAP')

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
						<form action="{{url('/target_rkap/cari_tahun')}}" method="GET">
							<p class="card-title"> 
								<b>Pilih Tahun</b> 
								<select name="cari_tahun" id="cari_tahun" class="btn btn-secondary btn-sm">
									@foreach($tahun_rkap as $tahun)
									<option value="{{$tahun->tahun}}">
										{{$tahun->tahun}}
									</option>
									@endforeach
								</select>
								<input type="submit" value="Cari" class="btn btn-secondary btn-sm">
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
						<h3  class="card-title"> Master Target RKAP 
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
									<th>Target RKAP</th>
									<th>Satuan</th>
									<th>Type</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $nomer = 1; ?>
								@foreach($target_rkap_perbulan as $target_rkap)
								<tr>
									<th>{{ $nomer++}}</th>
									<td> {{ $target_rkap->jenis_data}} </td>
									<td> {{ $target_rkap->tahun}} </td>
									<td> {{ $target_rkap->bulan}} </td>
									<td> {{ $target_rkap->target_rkap}} </td>
									<td> {{ $target_rkap->satuan}} </td>
									<td> {{ $target_rkap->type}} </td>
									<td>
										<a href="{{url('target_rkap')}}/{{$target_rkap->id}}/{{('edit_target_rkap')}}" class="btn btn-warning text-white btn-sm">
											<i class="fas fa-pencil-alt"></i>
											Edit
										</a>
										<a href="#" class="btn btn-danger btn-sm delete_target_rkap" data-target_rkap-id="{{ $target_rkap->id}}" data-target_rkap-target_rkap="{{ $target_rkap->target_rkap}}">
											<i class="fas fa-trash"></i>
											Hapus
										</a>
									</td>
								</tr>
								@endforeach 
							</tbody>
						</table>
						<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
							Tambah Data
						</button>

						<!-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalLong">
							Import Data
						</button> -->

						<a href="{{url('target_rkap')}}/{{('export_excel')}}" target="_blank" class="btn btn-success btn-sm">
						  <i class="fa fa-download"></i>
						  Export Data Excel
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->

<!-- Modal Import Excel -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle"> Import Excel </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" enctype="multipart/form-data" action="ms_target_rkap_import.php">
					<input class="form-control" name="fileexcel" type="file" required="required">
					<br>
					<button class="btn btn-sm btn-secondary" type="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal Tambah ------------------------------------------------- -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"> <b> Tambah Data Target RKAP </b> </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('target_rkap')}}/{{('tambah_target_rkap')}}" method="post" enctype="multipart/form-data">
          		{{csrf_field()}}
					<input type="hidden" name="jenis_data" value="ARUS">
					<div class="form-group row">
						<div class="col-md-6">
							<label> Tahun </label>
							<select name="tahun" class="form-control">
								@foreach($select_tahun as $tahun)
								<option value="{{$tahun->value_number}}">
									{{$tahun->value_number}}
								</option>
								@endforeach
							</select>      
						</div>
						<div class="col-md-6">
							<label> Bulan </label>
							<select name="bulan" class="form-control">
								<option> Januari </option>
								<option> Februari </option>
								<option> Maret </option>
								<option> April </option>
								<option> Mei </option>
								<option> Juni </option>
								<option> Juli </option>
								<option> Agustus </option>
								<option> September </option>
								<option> Oktober </option>
								<option> November </option>
								<option> Desember </option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-12">
							<label>  Target RKAP  </label>
							<input type="number" name="target_rkap" class="form-control" value="0">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label> Satuan </label>
							<select name="satuan" class="form-control">
								@foreach($select_satuan as $satuan)
								<option value="{{$satuan->value_char}}">
									{{$satuan->ket_char}}
								</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-6">
							<label> Type </label>
							<select name="type" class="form-control">
								@foreach($select_type as $type)
								<option value="{{$type->value_char}}">
									{{$type->ket_char}}
								</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group row">
						<!-- Tombol -->    
						<div class="col-md-12">
							<br>
							<button type="submit" class="btn btn-primary btn-sm">
								Simpan   
							</button>
							<button type="button" class="btn btn-secondary btn-sm float-right" data-dismiss="modal">Tutup</button>
						</div>
					</form>  
				</div>
			</div>
		</div>
	</div>
</div>
<!-- EndModal ------------------------------------------------- -->

@endsection
