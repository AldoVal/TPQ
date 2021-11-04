@extends('layout/wali')
@section('content')
<h1>Kemajuan</h1>

<br/>
<br/>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>ID KEMAJUAN</th>
			<th>ID SANTRI</th>
			<th>ID PENGURUS</th>
			<th>TANGGAL</th>
			{{-- <th>STATUS</th>
            <th>Edit</th> --}}
		</tr>
	</thead>
	<tbody>
		@foreach($kemajuan as $k)
	<tr>
		<td>{{ $k->IDKEMAJUAN }}</td>
		<td>{{ $k->IDSANTRI }}</td>
		<td>{{ $k->IDPENGURUS }}</td>
		<td>{{ $k->TANGGAL }}</td>
		<td>{{ $k->STATUS }}</td>
        {{-- <td>
            <form action="{{ url('/editkemajuan') }}" method="get">
                <input hidden value="{{ $k->IDKEMAJUAN }}" name="IDKEMAJUAN">
                <button type="submit" class="btn btn-info btn-sm")>Edit</button>
            </form>
        </td> --}}
        {{-- <td>
            <a href="{{ url('/hapussantri',$k->IDKEMAJUAN) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
        </td> --}}
	</tr>
	@endforeach
	</tbody>

</table>


@endsection
