<html>
<body>

<div class = "admin">
<form action="admin-proses.php" enctype="multipart/form-data" method="post">
	<div>
		<label>Nama Destinasi</label><br>
		<input type="text" name="w"><br>
	</div>
	
  <div>
	<label>Tentang Destinasi</label><br>
	<input type="text-area" name="tw"><br><br>
  </div>
  
  <div>
  <label>UPLOUD FOTO</label>
  <input type="file" name="foto"><br>
  </div>
  <div>
	<button type="submit" class="tombol">SUBMIT</button>
	
  </div>
  </form>
  <form action ="data.php" method="POST">
	<button type = "" >DATA PEMESAN </button>
  </form>
  <div>
  <form action ="menu.php" method="POST">
	<button type = "" >MENU</button>
  </form>
  </div>
</body>
</html>