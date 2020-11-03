<?php
session_start();
?>
<html>
<style>
	body{
		background: #3498db;
		font-family: sans-serif;
	}
	h2{
		color: #fff
	}

	.login {
		padding: 1em;
		margin : 2em auto;
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
	textarea {
		padding: 8px;
		width: 95%;
		background: #efefef;
		border: 0;
		font-size: 10pt;
		margin: 6px 0px;
	}

	.tombol{
		background : #3498db;
		float : left;
		padding 5px 8px;
		margin 20px 0px;
		color: #fff;
		border: 0;

	}
	.link-button{
		background : #3498db;
		float : right;
		margin-top :-15px ;
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

	
	<div class = "login">
		<form action="login-proses.php" method="post">
		<div>
			<label>Username</label><br>
			<input type="text" name="u"><br>
		</div>
	
		<div>
			<label>Password</label><br>
			<input type="password" name="p"><br><br>
		</div>
  
		<div>
			<button type="submit" class="tombol">LOGIN</button>
		</div>
		</form>
		<a href = "reg.php">
			<input type="submit" class = "link-button" value= "REGISTER"> 		
		</a>
	</div>
	
</body>
</html>