@extends('layout/author')
@section('content')
<h3>Data Santri</h3>



<form action="/simpansantri" method="post">
	{{ csrf_field() }}
        ID <input type="text" name="IDSANTRI" required="required"> <br/>
		Nama <input type="text" name="NAMASANTRI" required="required"> <br/>
		Gender <input type="text" name="GENDER" required="required"> <br/>
		Tgl Lahir <input type="date" name="TGLLAHIR"> <br/>
        Kota Lahir <input type="text" name="KOTALHR"> <br/>
        Nama Wali <input type="text" name="NAMAORTU"> <br/>
        Alamat <input type="text" name="ALAMATORTU"> <br/>
        HP <input type="text" name="HP"> <br/>
        Email <input type="email" name="EMAIL"> <br/>
        Password <input type="password" name="PASSWORD" value="hidden"> <br/>
        Tgl Masuk <input type="date" name="TANGGALMASUK"> <br/>
        <input hidden type="text" name="AKTIF" value="1"> <br/>
		<input type="submit" value="Simpan Data">
</form>




@endsection
