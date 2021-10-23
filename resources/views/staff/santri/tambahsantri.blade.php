@extends('layout/main')
@section('content')
<h3>Data Santri</h3>
 
<a href="/santri"> Kembali</a>


<form action="/santri/store" method="post">
	{{ csrf_field() }}

</form>
	

	
@endsection
	