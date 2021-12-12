@extends('layout/author')
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
            <th>Edit</th>
            <th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($peran as $p)
	<tr>
		<td>{{ $p->IDPERAN }}</td>
		<td>{{ $p->PERAN }}</td>
		<td>{{ $p->AKTIF }}</td>
        <td>
            <form action="{{ url('/peran-edit') }}" method="get">
                <input hidden value="{{ $p->IDPERAN }}" name="IDPERAN">
                <button type="submit" class="btn btn-info btn-sm")>Edit</button>
            </form>
        </td>
        <td>
            <a href="{{ url('/peran-hapus',$p->IDPERAN) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
        </td>
	</tr>

	    @endforeach
	</tbody>

</table>

@endsection
