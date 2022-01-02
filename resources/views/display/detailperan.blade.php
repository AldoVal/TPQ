@extends('layout/author')
@section('content')
<h1>Detail Peran</h1>

<br/>
<br/>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>ID Detail</th>
			<th>ID Peran</th>
			<th>ID PENGURUS</th>
            <th>Edit</th>
            <th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($peran as $p)
	<tr>
		<td>{{ $p->IDDETAILPERAN }}</td>
		<td>{{ $p->IDPERAN }}</td>
		<td>{{ $p->IDPENGURUS }}</td>
	</tr>

	    @endforeach
	</tbody>

</table>

@endsection
