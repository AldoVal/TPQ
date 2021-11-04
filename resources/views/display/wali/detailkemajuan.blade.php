@extends('layout/wali')
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
		@foreach($detailkemajuan as $k)
	<tr>
		<td>{{ $k->IDDETAILKEMAJUAN }}</td>
		<td>{{ $k->IDKEMAJUAN }}</td>
		<td>{{ $k->IDBAB }}</td>
        <td>{{ $k->KETERANGAN }}</td>
        {{-- <td>
            <form action="{{ url('/editperan') }}" method="get">
                <input hidden value="{{ $p->IDPERAN }}" name="IDPERAN">
                <button type="submit" class="btn btn-info btn-sm")>Edit</button>
            </form>
        </td>
        <td>
            <a href="{{ url('/hapusperan',$p->IDPERAN) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
        </td> --}}
	</tr>

	    @endforeach
	</tbody>

@endsection
