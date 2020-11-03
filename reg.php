<html>
<style>
body{
	background: #3498db;
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

.regis{
	background : #3498db;
	padding 5px 8px;
	margin 20px 0px
	color: #fff;
	border: 0;
}
</style>
<body>
	<br/>
	<br/>
		<center>
			<img src ="lensaku.png" height="200" width="400" />
		</center>
		<div class = "reg">
		
<form action="reg-proses.php" method="post">
	<div>
		<label></label><br>
		<input type="hidden" name="id"><br>
	</div>
	
	<div>
		<label>Username</label><br>
		<input type="text" name="u"><br>
	</div>
	
<div>
	<label>Password</label><br>
	<input type="password" name="p"><br><br>
</div>

<div>
	<label>Nomor Handphone</label><br>
	<input type="text" name="hp"><br><br>
</div>

<div>
	<label>Email</label><br>
	<input type="text" name="mail"><br><br>
</div>

<div>
	<input type="submit" value="REGISTER" class="regis">
</div>
</form>
</body>
</html>