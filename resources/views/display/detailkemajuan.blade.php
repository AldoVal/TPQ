@extends('layout/guru')
@section('content')
<h1>Detail Kemajuan</h1>

<br/>
<br/>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>ID Detail</th>
			<th>ID KEMAJUAN</th>
			<th>ID BAB</th>
            <th>KETERANGAN</th>
		</tr>
	</thead>
	<tbody>
		@foreach($detailkemajuan as $d)
	<tr>
		<td>{{ $d->IDDETAILKEMAJUAN }}</td>
		<td>{{ $d->IDKEMAJUAN }}</td>
		<td>{{ $d->IDBAB }}</td>
        <td>{{ $d->KETERANGAN }}</td>
	</tr>

	    @endforeach
	</tbody>

</table>

@endsection
