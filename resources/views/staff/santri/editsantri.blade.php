<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h3>Edit Pegawai</h3>
 
	<a href="/santri"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($santri as $s)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
	@endforeach
		
</body>
</html>