@extends('layout/author')
@section('content')
<h3>Tambah Peran</h3>



<form action="/simpanperan" method="post">
	{{ csrf_field() }}
        ID      <input type="text" name="IDPERAN" required="required"> <br/>
		Peran   <input type="text" name="PERAN" required="required"> <br/>
		Status  <input type="text" name="AKTIF" value="1"> <br/>

		<input type="submit" value="Simpan Data">
</form>




@endsection

