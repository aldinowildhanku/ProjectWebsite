<html>
<?php
session_start();
include 'koneksi.php';
?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<style>
	.bg-image {
		background-image: url("bali1.jpg");
		margin-bottom: auto;
	}
	
	.bg-bottom {
		background-image: url("sea.jpg");
		padding-top: 30px;
	}
	
	.text{
		color: black;
		font-weight: bold;
	}
</style>
</head>
<body>
	<div class="jumbotron jumbotron-fluid bg-image ">
		<center><strong><h1> <?=$_GET['tujuan'] ?> </h1></strong></center>
	</div>
	<div> <?php
				$tujuan =$_GET['tujuan'];
				$sql ="SELECT tentang_wisata FROM lokasi WHERE wisata = '$tujuan'";
				$stmt = $conn->prepare($sql);
				$stmt->execute(); 
				$hasil = $stmt->fetch(PDO::FETCH_ASSOC);
			?>
	</div>	
	<div class="bg-bottom">
	<table border="2" align="center" width="95%">
		<p class="text">
			<?= $hasil['tentang_wisata'] ?>
		</p>
		<br>
		<br>
		<br>
			<p class="text">FOTOGRAFER</p>
				<div class="container">
				<div class = "row">
					<div class = "col-4">	
						<div class="card border-primary mb-3" style="max-width: 18rem;">
						<div class="card-header" align = "center">STANLEY ALAN</div>
						<a href ="transaksi.php?nama=Stanley alan&lokasi=<?=$_GET['tujuan'];?>">
						<img src = "stanley.jpg" class="card-img-top" height = "200px">
						</a>
					</div>
				</div>	
	
				<div class = "col-4">	
					<div class="card border-primary mb-3" style="max-width: 18rem;">
						<div class="card-header" align = "center">JIMMY ISKANDAR</div>
						<a href = "transaksi.php?nama=Jimmy iskandar&lokasi=<?=$_GET['tujuan'];?>">
						<img src = "jimmy.jpg" class="card-img-top" height = "200px">
						</a>
					</div>
				</div>	
	
	
				<div class = "col-4">	
					<div class="card border-primary mb-3" style="max-width: 18rem;">
						<div class="card-header" align = "center">MARSIO JUWONO</div>
						<a href = "transaksi.php?nama=Marsio juwono&lokasi=<?=$_GET['tujuan'];?>">
						<img src = "marsio.jpg" class="card-img-top" height = "200px">
						</a>
					</div>
				</div>
				
					<div class = "col-4">	
					<div class="card border-primary mb-3" style="max-width: 18rem;">
						<div class="card-header" align = "center">JACKY SUHARTO</div>
						<a href = "transaksi.php?nama=Jacky Suharto&lokasi=<?=$_GET['tujuan'];?>">
						<img src = "jackysuharto.jpg" class="card-img-top" height = "200px">
						</a>
					</div>
				</div>
				
					<div class = "col-4">	
					<div class="card border-primary mb-3" style="max-width: 18rem;">
						<div class="card-header" align = "center">RIO MOTRET</div>
						<a href = "transaksi.php?nama=Rio&lokasi=<?=$_GET['tujuan'];?>">
						<img src = "riofotografer.jpg" class="card-img-top" height = "200px">
						</a>
					</div>
				</div>
				
					<div class = "col-4">	
					<div class="card border-primary mb-3" style="max-width: 18rem;">
						<div class="card-header" align = "center">DIERA  BACHIR</div>
						<a href = "transaksi.php?nama=Diera Bachir&lokasi=<?=$_GET['tujuan'];?>">
						<img src = "dierabachir.jpg" class="card-img-top" height = "200px">
						</a>
					</div>
				</div>
	</table>
	</div>
</body>

</html>