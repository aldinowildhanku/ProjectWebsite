<?php
include 'koneksi.php';

$stmt = $conn->prepare("SELECT * FROM reg"); 
	
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
			<th>ID USER</th>
			<th>NAMA</th>
			<th>PASSWORD</th>
			<th>NOMOR HANDPHONE</th>
			<th>EMAIL</th>
			<th>EDIT</th>
		</tr>";
	echo "<br>";
	foreach ($hasil as $baris){
		//echo $baris ["id"];
		//echo "<br>";
		echo "<tr>
	<td>$baris[id_user]</td>
	<td>$baris[nama]</td>
	<td>$baris[password]</td>
	<td>$baris[nomorhp]</td>
	<td>$baris[email]</td>
	<td><a href = \"edit.php?id=$baris[id_user]\">edit</a></td>
	</tr>";
	
	
	}
?>
  <form action ="data.php" method="POST">
	<button type = "" >BACK</button>
  </form>