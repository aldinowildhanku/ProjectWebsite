<?php
session_start();
include 'koneksi.php';
	$nama = $_POST['u']; // Ambil value username yang dikirim dari form
	$password = $_POST['p']; // Ambil value password yang dikirim dari form
	

	$stmt = $conn->prepare("SELECT * FROM reg WHERE nama=:nama AND password=:password");
	$stmt ->bindParam(":nama", $_POST['u']);
	$stmt ->bindParam(":password", $_POST['p']);
	$stmt->execute(); // Eksekusi querynya
	$data = $stmt->fetch(); // Ambil datanya dari hasil query tadi
			// Cek apakah variabel $data ada datanya atau tidak
		if(!empty($data)){ // jadi akan dicek data yang di inputkan jika terisi keduanya maka masuk ke menu awal
			$_SESSION['nama'] = $data['nama'];
				header("location: menu.php"); // Kita redirect ke halaman welcome.php
			}else{ // Jika $data nya kosong
			header("location: login.php"); // Redirect kembali ke halaman login.php
					}
  ?>