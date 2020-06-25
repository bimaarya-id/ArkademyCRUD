!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA PRODUK</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA produk</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama produk</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
			<tr>
				<td>harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>jumlah</td>
				<td><input type="number" name="jumlah"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>