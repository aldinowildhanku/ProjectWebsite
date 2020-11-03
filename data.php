<?php
include 'koneksi.php';

$stmt = $conn->prepare("SELECT * FROM pemesanan"); 
	
	if($stmt->execute()) {
		echo "Berhasil";
	}
	else {
		echo "Gagal!";
	}
	$hasil= $stmt -> fetchAll();
	echo "<br>";
	echo "TABLE";
	echo "<table>
	<table border =1>
		<tr>
			<th>kode pemesanan</th>
			<th>nama pemesan</th>
			<th>nama fotografer</th>
			<th>tanggal pemesanan</th>
			<th>paket foto</th>
			<th>jam foto</th>
			<th>lokasi pertemuan</th>
			<th>total harga</th>
		</tr>";
	echo "<br>";
	foreach ($hasil as $baris){
		echo "<tr>
	<td>$baris[kode_pemesanan]</td>
	<td>$baris[nama_pemesan]</td>
	<td>$baris[nama_fotografer]</td>
	<td>$baris[tanggal_pemesanan]</td>
	<td>$baris[paket_foto]</td>
	<td>$baris[jam_foto]</td>
	<td>$baris[lokasi_pertemuan]</td>
	<td>$baris[total_harga]</td>
	</tr>";
	
	
	}
?>
  <form action ="admin.php" method="POST">
	<button type = "" >BACK </button>
  </form>
  &nbsp &nbsp &nbsp &nbsp
    <form action ="datauser.php" method="POST">
	<button type = "" >DATA USER</button>
  </form>