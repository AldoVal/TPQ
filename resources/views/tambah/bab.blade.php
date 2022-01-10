@extends('layout/guru')
@section('content')
<div class="container-fluid px-4">
	<h1 class="mt-2 mb-4">Tambah Bab</h1>
	<form action = "{{ url('/bab-simpan')  }}" method = "post">
		@csrf
			<div class="content">
				<div class="row mb-3">
					<label  class="col-sm-2 col-form-label ">ID BUKU</label>
					<div class="col-sm-4">
                        <select class="form-control" name="IDBUKU" required>
                            @foreach ( $buku as $bu)
                            <option value={{ $bu->IDBUKU }}>{{ $bu->BUKU }}</option>
                            @endforeach
                        </select>
					</div>
				</div>
                <div class="row mb-3">
					<label class="col-sm-2 col-form-label">BAB</label>
					<div class="col-sm-4">
                        <select class="form-control" name="IDBAB" required>
                            @foreach ( $bab as $b)
                            <option value={{ $b->IDBAB }}>{{ $b->BAB }}</option>
                            @endforeach
                        </select>
					</div>
				</div>
                <div class="row mb-3">
					<label class="col-sm-2 col-form-label">Keterangan</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="Keterangan" class="form-control" name='KETERANGAN'>
					</div>
				</div>
			</div>
			<input type = 'submit' class="btn btn-primary"/>
	</form>
</div>
@endsection
