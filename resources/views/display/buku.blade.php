@extends('layout/guru')
@section('content')
<h1>Data Peran</h1>

<br/>
<br/>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>ID Buku</th>
			<th>Buku</th>
            <th>Tambah Bab</th>
            <th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($buku as $b)
	<tr>
		<td>{{ $b->IDBUKU }}</td>
		<td>{{ $b->BUKU }}</td>
        <td>
            <form action="{{ url('/bab-tambah') }}" method="get">
                <input hidden value="{{ $b->IDBUKU }}" name="IDBUKU">
                <button type="submit" class="btn btn-info btn-sm")>Tambah</button>
            </form>
        </td>
        <td>
            <a href="{{ url('/buku-hapus',$b->IDBUKU) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
        </td>
	</tr>

	    @endforeach
	</tbody>

</table>

@endsection
