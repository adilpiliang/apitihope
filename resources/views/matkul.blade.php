<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat Pencarian Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
 
 
	<p>Cari Data Pegawai :</p>
	<form action="/matkul/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Matkul .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
		
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama Matkul</th>
			<th>Dosen</th>
			<th>Semester</th>
		</tr>
		@foreach($matkul as $p)
		<tr>
			<td>{{ $p->nama_matkul }}</td>
			<td>{{ $p->nama_model }}</td>
			<td>{{ $p->semester }}</td>
		</tr>
		@endforeach
	</table>
 
	<br/>
	Halaman : {{ $matkul->currentPage() }} <br/>
	Jumlah Data : {{ $matkul->total() }} <br/>
	Data Per Halaman : {{ $matkul->perPage() }} <br/>
 
 
	{{ $matkul->links() }}
 
 
</body>
</html>