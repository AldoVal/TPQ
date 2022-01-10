@extends('layout/guru')
@section('content')
<h1>Data Santri</h1>

<br/>
<br/>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead class="thead-dark">
		<tr>
			<th>ID Kemajuan</th>
            <th>Nama Santri</th>
            <th>Nama Pengurus</th>
            <th>Status</th>
            <th>Detail</th>
		</tr>
	</thead>
	<tbody>
		@foreach($kemajuan as $k)
	<tr>
		<td>{{ $k->IDKEMAJUAN }}</td>
        <td>{{ $k->NAMASANTRI }}</td>
        <td>{{ $k->NAMA }}</td>
        <td>{{ $k->STATUS }}</td>
        <td>
            <a href="{{ url('/kemajuan-detail',$k->IDKEMAJUAN) }}"><button type="submit" class="btn btn-danger btn-sm">Detail</button></a>
        </td>
	</tr>
	@endforeach
	</tbody>

</table>

@endsection
