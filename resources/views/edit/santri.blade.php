@extends('layout/author')
@section('content')
<div class="container-fluid px-4">
	<h1 class="mt-2 mb-4">Edit Santri</h1>
	<form action = "{{ url('/santri-update',$request->IDSANTRI)  }}" method = "post">
		@csrf
			<div class="content">
				<div class="row mb-3">
				<input type="hidden" class="form-control" name='IDSANTRI' value="{{ $request->id }}"/>
					<label  class="col-sm-2 col-form-label ">ID SANTRI</label>
					<div class="col-sm-4">
					  <input type="type" placeholder="{{ $request->IDSANTRI }}" class="form-control" name='IDSANTRI'>
					</div>
				</div>
                <div class="row mb-3">
					<label class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->ALAMATORTU }}" class="form-control" name='ALAMATORTU'>
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">HP</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->HP }}" class="form-control" name='HP'>
					</div>
				</div>
                <div class="row mb-3">
					<label class="col-sm-2 col-form-label">EMAIL</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->EMAIL }}" class="form-control" name='EMAIL'>
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">Status</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->AKTIF }}" class="form-control" name='AKTIF'>
					</div>
				</div>
			</div>
			<input type = 'submit' class="btn btn-primary"/>
	</form>
</div>
@endsection
