<?php
session_start();
include 'koneksi.php';

$username = $_POST['email'];
$password = md5($_POST['pass']);
 
$query = mysqli_query($conn, "SELECT * FROM dbadmin WHERE userid='$username' AND pass='$password'");
//password_verify($password,$hasilhash);
$cek = mysqli_num_rows($query);
if($cek > 0){
	
    $_SESSION['username'] = $username;
	header("location:create.php");
}else{
	header("location:index.php");
} 