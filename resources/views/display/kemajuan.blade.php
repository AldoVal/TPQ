@extends('layout/guru')
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
            <th>Kemajuan</th>
            <th>Detail</th>
		</tr>
	</thead>
	<tbody>
		@foreach($santri as $s)
	<tr>
		<td>{{ $s->IDSANTRI }}</td>
		<td>{{ $s->NAMASANTRI }}</td>
		<td>{{ $s->GENDER }}</td>
        <td>
            <form action="{{ url('/kemajuan-tambah') }}" method="get">
                <input hidden value="{{ $s->IDSANTRI }}" name="IDSANTRI">
                <button type="submit" class="btn btn-info btn-sm")>Tambah</button>
            </form>
        </td>
        <td>
            <a href="{{ url('/kemajuan-detail',$s->IDSANTRI) }}"><button type="submit" class="btn btn-danger btn-sm">Detail</button></a>
        </td>
	</tr>
	@endforeach
	</tbody>

</table>

@endsection
