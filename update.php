<?php
include 'koneksi.php';
$id = $_POST['id'];
$stmt = $conn->prepare("UPDATE reg SET nama = :nama , password = :password , nomorhp = :nomorhp , email = :email WHERE id_user = :id_user");
	$stmt -> bindParam(':id_user',$_POST['id_user']);
	$stmt ->bindParam(":nama", $_POST['nama']);
	$stmt ->bindParam(":password", $_POST['p']);
	$stmt ->bindParam(":nomorhp", $_POST['hp']);
	$stmt ->bindParam(":email", $_POST['mail']);
	
	if($stmt->execute()) {
		echo "Berhasil";
	}
	else {
		echo "Gagal!";
	}
	header("location: datauser.php")


?>