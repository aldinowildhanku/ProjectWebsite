<?php
include 'koneksi.php';
    

	//prepare sql and bind parameter
	$stmt = $conn->prepare("INSERT INTO reg SET id_user = :id_user , nama=:nama , password = :password, nomorhp = :nomorhp, email = :email");
	$stmt ->bindParam(":id_user", $_POST['id']);
	$stmt ->bindParam(":nama", $_POST['u']);
	$stmt ->bindParam(":password", $_POST['p']);
	$stmt ->bindParam(":nomorhp", $_POST['hp']);
	$stmt ->bindParam(":email", $_POST['mail']);
	
	if($stmt->execute()) {
		echo "Berhasil";
	}
	else {
		echo "Gagal!";
	}
	header ("location:login.php");
?>
