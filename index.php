<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - ARkademy</title>
</head>
<body>

	<h2>CRUD DATAAR ARKADEMY</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH PRODUK</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from produk");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_produk']; ?></td>
				<td><?php echo $d['keterangan']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['jumlah']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['produk_id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>