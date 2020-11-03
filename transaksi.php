<?php
session_start();
include 'koneksi.php';
	
?>

<html>
<style>
body{
	font-family: sans-serif;
}
h2{
	color: #fff
}

.reg {
	padding: 1em;
	margin : 1em auto;
	width: 17em;
	background: #fff;
	border-radius: 3px;
}

label{
	font-size: 10pt;
	color: #555;	
}

input[type="text"],
input[type="password"],
input[type="text"],
input[type="text"],
textarea {
	padding: 8px;
	width: 95%;
	background: #efefef;
	border: 0;
	font-size: 10pt;
	margin: 6px 0px;
}

.trans{
	background : #3498db;
	padding 5px 8px;
	margin 20px 0px
	color: #fff;
	border: 0;
}
</style>
<body background="sea.jpg">
	<br/>
	<br/>
		<center>
			<img src ="lensaku.png" height="200" width="400" />
		</center>
		<div class = "reg">
		
<form action="proses-pesan.php" method="post">
	<div>
		<label></label><br>
		<input type="hidden" name="id"><br>
	</div>
	
	<div>
		<label>Nama pemesan</label><br>
		<input type="text" name="n" value="<?php 
		echo $_SESSION['nama']?>"><br>
	</div>
	
<div>
	<label>Fotografer</label><br>
	<input type="text" name="f" value="<?= $_GET['nama'] ?>"><br><br>
</div>

<div>
	<label>Tanggal Foto</label><br>
	<input type="date" name="tgl"><br><br>
</div>
<br>
<div>
	<label>Paket Foto</label><br>
	<select name="paketfoto" id="paketfoto">
	<option value="300000">A - 30 Foto</option> 
	<option value="600000">B - 60 Foto</option>
	<option value="900000">C - 90 Foto</option>
	</select>
	
</div>
<br>
<div>
	<label>Jam Foto</label><br>
	<select name="jamfoto">
	<option value="08:00">08:00</option>
	<option value="10:00">10:00</option>
	<option value="13:00">13:00</option>
	<option value="17:00">17:00</option>
	<option value="19:00">19:00</option>
	</select>
</div>

<br>

<div>
	<label>Lokasi Foto</label><br>
	<input type="text" name="lf" value="<?= $_GET['lokasi'] ?>"><br><br>
</div>

<br>
<div>
	<label>Lokasi pertemuan</label><br>
	<input type="text" name="lokasi" placeholder = "JL.Mahguharjo No.23213"><br><br>
</div>
<div>
	<label>Harga</label><br>
	<input type="text" name="harga" placeholder = "0" id="harga"><br><br>
</div>

<div>
	<input type="submit" value="TRANSAKSI" class="trans">
</div>
</form>

<script>
	var select = document.getElementById('paketfoto')
	select.addEventListener('change', function(){
		document.getElementById('harga').value = select.value
	})
</script>
</body>
</html>
