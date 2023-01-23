@section('header', 'Edit Target RKAP Perbulan')

@extends('layouts.app')

@section('content')

<br>

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<form action="{{ url('target_rkap') }}/{{$target_rkap_perbulan->id}}/{{('update_target_rkap')}}" method="POST" enctype="multipart/form-data"  >
			{{csrf_field()}}
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title"> Data Target RKAP </h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
									<i class="fas fa-minus"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
							<div class="form-group row">
								<div class="col-md-6">
									<input type="hidden" name="id" value="{{ $target_rkap_perbulan->id}}">
									<input type="hidden" name="jenis_data" value="{{ $target_rkap_perbulan->jenis_data}}">
									<label>  Tahun </label>
									<select name="tahun" class="form-control">
										<option value="{{ $target_rkap_perbulan->tahun}}">
											{{ $target_rkap_perbulan->tahun}}
										</option>
										@foreach($select_tahun as $tahun)
										<option value="{{$tahun->value_number}}">
											{{$tahun->value_number}}
										</option>
										@endforeach
									</select> 
								</div>
								<div class="col-md-6">
									<label>  Bulan </label>
									<select name="bulan" class="form-control">
										<option selected>-- Pilih --</option>
										<option value="Januari" @if($target_rkap_perbulan->bulan == 'Januari') selected @endif> Januari </option>
										<option value="Februari" @if($target_rkap_perbulan->bulan == 'Februari') selected @endif> Februari </option>
										<option value="Maret" @if($target_rkap_perbulan->bulan == 'Maret') selected @endif> Maret </option>
										<option value="April" @if($target_rkap_perbulan->bulan == 'April') selected @endif> April </option>
										<option value="Mei" @if($target_rkap_perbulan->bulan == 'Mei') selected @endif> Mei </option>
										<option value="Juni" @if($target_rkap_perbulan->bulan == 'Juni') selected @endif> Juni </option>
										<option value="Juli" @if($target_rkap_perbulan->bulan == 'Juli') selected @endif> Juli </option>
										<option value="Agustus" @if($target_rkap_perbulan->bulan == 'Agustus') selected @endif> Agustus </option>
										<option value="September" @if($target_rkap_perbulan->bulan == 'September') selected @endif> September </option>
										<option value="Oktober" @if($target_rkap_perbulan->bulan == 'Oktober') selected @endif> Oktober </option>
										<option value="November" @if($target_rkap_perbulan->bulan == 'November') selected @endif> November </option>
										<option value="Desember" @if($target_rkap_perbulan->bulan == 'Desember') selected @endif> Desember </option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<label>  Target RKAP </label>
									<input type="number" name="target_rkap" class="form-control" value="{{ $target_rkap_perbulan->target_rkap}}">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-6">
									<label> Satuan </label>
									<select name="satuan" class="form-control">
										<option value="{{ $target_rkap_perbulan->satuan}}">
											{{ $target_rkap_perbulan->satuan}}
										</option>
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
										<option value="{{ $target_rkap_perbulan->type}}">
											{{ $target_rkap_perbulan->type}}
										</option>
										@foreach($select_type as $type)
										<option value="{{$type->value_char}}">
											{{$type->ket_char}}
										</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-6">
									<button type="submit" class="btn btn-primary btn-sm">
										Simpan
									</button>
								</div>
								<div class="col-md-6">
									<a href="{{url('/target_rkap')}}" class="btn btn-secondary btn-sm float-right">Tutup</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</section>


@endsection