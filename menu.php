<?php
session_start();
echo "SELAMAT DATANG ". $_SESSION['nama']."<br>";
include 'koneksi.php';
?>
<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<style>
	.bg-color{
		background-color :rgba(50, 115, 220, 0.3);
	}
	
	.bg-bawah{
		background: url('sea.jpg');
	}
</style>
<body>
	
	<div class="jumbotron jumbotron-fluid bg-color">
	<div class="container">

	<center>
		<img src = "lensaku.png" width = "500" height = "200" >
    </center>
	<p class="lead">WONDERFULL INDONESIA BERSAMA LENSAKU</p>
	<center>
	<video width="500" height="240" controls>
			
		<source src="2.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>
	</center>
  </div>
</div>
	<div class="container">
		<div class="container">
			<div class = "row">
			<?php
				$stmt = $conn->query("SELECT * FROM lokasi");
				$stmt->execute();
				
				$row = $stmt->fetchAll(PDO::FETCH_ASSOC); 
				
				foreach($row as $wisata) { //perulangan dari variable row dengan nama wista jika data di database lokasi bertambah maka otomatis data disini bertambah
			?>
			
				<div class = "col-4">	
					<div class="card border-primary mb-3" style="max-width: 18rem;">
						<div class="card-header" align = "center"> <?= $wisata["wisata"] ?>  </div>
						<a href = "wisata.php?tujuan=<?= $wisata["wisata"] ?>">
						<img src = "uploads/<?= $wisata["foto_wisata"]?>" class="card-img-top" height = "200px">
						</a>
					</div>
				</div>
			
			<?php
				}
			?>
				
			</div>
		</div>
		


</body>
</html>