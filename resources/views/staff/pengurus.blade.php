@extends('layout/author')
@section('content')
<h1>Data Peran</h1>

<br/>
<br/>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Email</th>
            <th>HP</th>
            <th>Gender</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pengurus as $p)
	<tr>
		<td>{{ $p->IDPENGURUS }}</td>
		<td>{{ $p->NAMA }}</td>
		<td>{{ $p->EMAIL }}</td>
        <td>{{ $p->HP }}</td>
		<td>{{ $p->GENDER }}</td>
		<td>{{ $p->PASSWORD }}</td>
        <td>{{ $p->AKTIF }}</td>
	</tr>
	@endforeach
	</tbody>

</table>

@endsection
