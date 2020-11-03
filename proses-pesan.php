<?php
include 'koneksi.php';
	$stmt = $conn->prepare("INSERT INTO pemesanan(nama_pemesan, nama_fotografer, tanggal_pemesanan, paket_foto, jam_foto, lokasi_pertemuan,total_harga) VALUES(:nama_pemesan, :nama_fotografer, :tanggal_foto, :paketfoto, :jam_foto, :lokasi_pertemuan, :total_harga)");
	$stmt->bindParam(":nama_pemesan", $_POST['n']);
	$stmt->bindParam(":nama_fotografer", $_POST['f']);
	$stmt->bindParam(":tanggal_foto", $_POST['tgl']);
	$stmt->bindParam(":paketfoto", $_POST['paketfoto']);
	$stmt->bindParam(":jam_foto",$_POST['jamfoto']);
	$stmt->bindParam(":lokasi_pertemuan", $_POST['lokasi']);
	$stmt->bindParam(":total_harga", $_POST['harga']);
	
	if($stmt->execute()) {
		echo "Berhasil";
	}
	else {
		echo "Gagal!";
	}
	header("location: menu.php")
?>