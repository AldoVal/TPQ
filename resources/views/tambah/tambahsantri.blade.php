@extends('layout/author')
@section('content')
<h3>Data Santri</h3>

<a href="/dashboard"> Kembali</a>


<form action="/santri/store" method="post">
	{{ csrf_field() }}
        ID <input type="text" name="IDSANTRI" required="required"> <br/>
		Nama <input type="text" name="NAMASANTRI" required="required"> <br/>
		Gender <input type="number" name="GENDER" required="required"> <br/>
		Tgl Lahir <textarea name="TGKLAHIR" required="required"></textarea> <br/>
        Kota Lahir <input type="text" name="KOTALHR" required="required"> <br/>
        Nama <input type="text" name="NAMASANTRI" required="required"> <br/>
		<input type="submit" value="Simpan Data">
</form>




@endsection
