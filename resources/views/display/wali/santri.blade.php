@extends('layout/wali')
@section('content')
<h1>Data Santri</h1>

<br/>
<br/>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Gender</th>
			<th>Tgl Lahir</th>
			<th>Kota Lahir</th>
		</tr>
	</thead>
	<tbody>
		@foreach($santri as $s)
	<tr>
		<td>{{ $s->IDSANTRI }}</td>
		<td>{{ $s->NAMASANTRI }}</td>
		<td>{{ $s->GENDER }}</td>
		<td>{{ $s->TGLLAHIR }}</td>
		<td>{{ $s->KOTALHR }}</td>
	</tr>
	@endforeach
	</tbody>

</table>

@endsection
