@extends('layout/guru')
@section('content')
<div class="container-fluid px-4">
	<h1 class="mt-2 mb-4">Tambah Bab</h1>
	<form action = "{{ url('/bab-tambah',$request->IDBAB)  }}" method = "post">
		@csrf
			<div class="content">
				<div class="row mb-3">
				    <input type="hidden" class="form-control" name='IDSANTRI' value="{{ $request->id }}"/>
					<label  class="col-sm-2 col-form-label ">ID BUKU</label>
					<div class="col-sm-4">
                        <input type="text" readonly class="form-control-plaintext"  value="{{ $request->IDBUKU }}">
					    {{-- <input type="type" placeholder="{{ $request->IDSANTRI }}" class="form-control" name='IDSANTRI'> --}}
					</div>
				</div>
                <div class="row mb-3">
					<label class="col-sm-2 col-form-label">BAB</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->BAB }}" class="form-control" name='BAB'>
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">JUDUL</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->JUDUL }}" class="form-control" name='JUDUL'>
					</div>
				</div>
                <div class="row mb-3">
					<label class="col-sm-2 col-form-label">Keterangan</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->KETERANGAN }}" class="form-control" name='KETERANGAN'>
					</div>
				</div>
			</div>
			<input type = 'submit' class="btn btn-primary"/>
	</form>
</div>
@endsection
