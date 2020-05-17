<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h3>Login</h3>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login Gagal!";
		}else if($_GET['pesan'] == "logout"){
			echo "Berhasil Logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda Harus Login Terlebih Dahulu";
		}
	}
	?>
	<br/>
	<form method="post" action="cek_login.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
</body>
</html>