@extends('layout/author')
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
            <th>Alamat Ortu</th>
            <th>HP</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
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
        <td>{{ $s->ALAMATORTU }}</td>
        <td>{{ $s->HP }}</td>
        <td>{{ $s->EMAIL }}</td>
        <td>
            <form action="{{ url('/santri-edit') }}" method="get">
                <input hidden value="{{ $s->IDSANTRI }}" name="IDSANTRI">
                <button type="submit" class="btn btn-info btn-sm")>Edit</button>
            </form>
        </td>
        <td>
            <a href="{{ url('/santri-hapus',$s->IDSANTRI) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
        </td>
	</tr>
	@endforeach
	</tbody>

</table>

@endsection
