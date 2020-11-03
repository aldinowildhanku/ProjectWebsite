<?php
include 'koneksi.php';
$id = $_GET['id'];
$stmt = $conn->prepare("select * from reg where id_user=:id_user");
	$stmt -> bindParam(':id_user',$_GET['ido']);
	$stmt->execute();
	$hasil= $stmt -> fetch();

?>
<form action="update.php" method="post">
    
   
 <input type="hidden" name="id_user" value=" <?php echo "$id"; ?> "><br>
  Nama User<br>
  <input type="text" name="nama" value=<?php echo $hasil['nama']?>><br>
  Password:<br>
  <input type="text" name="p" value=<?php echo $hasil['password'] ?>><br>
  Nomor Handphone:<br>
  <input type="text" name="hp" value=<?php echo $hasil['nomorhp']?>><br><br>
   email:<br>
  <input type="text" name="mail" value=<?php echo $hasil['email']?>><br><br>
  <input type="submit" value="Submit">
  
</form>