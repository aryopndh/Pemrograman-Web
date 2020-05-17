<?php 
session_start();

include 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,"select * from tb_user where username='$username' and password='$password'");

$row = mysqli_fetch_assoc($query);

if($row['hak'] == 1){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:crud/index.php");
}else if($row['hak'] == 2){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:crud/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>