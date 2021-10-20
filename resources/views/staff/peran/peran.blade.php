@extends('layout/main')
@section('content')
<h1>Data Peran</h1>

<br/>
<br/>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>ID</th>
			<th>Peran</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		@foreach($santri as $s)
	<tr>
		<td>{{ $s->IDPERAN }}</td>
		<td>{{ $s->PERAN }}</td>
		<td>{{ $s->AKTIF }}</td>
	</tr>
	@endforeach
	</tbody>
	
</table>

@endsection