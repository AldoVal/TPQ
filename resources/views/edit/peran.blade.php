@extends('layout/author')

@section('content')

<div class="container-fluid px-4">
	<h1 class="mt-2 mb-4">Edit Peran</h1>
	<form action = "{{ url('/proseseditperan',$request->IDPERAN) }}" method = "post">
		@csrf
			<div class="content">
				<div class="row mb-3">
				<input type="hidden" class="form-control" name='id' value="{{ $request->id }}"/>
					<label  class="col-sm-2 col-form-label ">ID Peran</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->IDPERAN }}" class="form-control" name='IDPERAN'>
					</div>
				</div>
				{{-- <div class="row mb-3">
					<label for="inputJenisBarang" class="col-sm-2 col-form-label">Jenis Barang</label>
					<div class="col-sm-4">
					  	<input type="text" class="form-control" id="inputJenisBarang">
						  <select class="form-select form-select-default" name="id_jb" aria-label=".form-select-default">
							@foreach($peran as $p )
								<option value="{{ $peran->id }}">{{ $item->jenis_barang }}</option>
							@endforeach
						  </select>
					</div>
				</div> --}}

				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">Peran</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->PERAN }}" class="form-control" name='PERAN'>
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">Status</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->AKTIF }}" class="form-control" name='AKTIF'>
					</div>
				</div>
				{{-- <div class="row mb-3">
					<label for="inputHargaJual" class="col-sm-2 col-form-label">Harga Jual</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->harga_jual_bar }}" class="form-control" id="inputHargaJual" name='harga_jual_bar'>
					</div>
				</div> --}}
			</div>

			<input type = 'submit' class="btn btn-primary" value = "Input Data"/>
	</form>
</div>
@endsection
