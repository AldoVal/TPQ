@extends('layout/author')
@section('content')
<h1>Data Pengurus</h1>

<br/>
<br/>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama</th>
            <th>Status</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pengurus as $p)
	<tr>
		<td>{{ $p->IDPENGURUS }}</td>
		<td>{{ $p->NAMA }}</td>
        <td>{{ $p->AKTIF }}</td>
	</tr>
	@endforeach
	</tbody>

</table>

@endsection
