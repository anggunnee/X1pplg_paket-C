<?php

$username= $_POST['username'];
$password = $_POST['password'];

include 'koneksi.php';
$sql   ="SELECT*FROM masyarakat WHERE username='$username' AND password='$password'";
$query =mysqli_query($koneksi, $sql);

if(mysqli_num_rows($query)>0){
	session_start();
	$_SESSION['username'] = $username;
	$data = mysqli_fetch_array($query);
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['username'] = $data['username'];

	echo "<script>alert(Login berhasil'); window.location.assign('index.php'); </script>";
}else{
	
    echo"<script>alert('Maaf Anda Gagal Login'); </script>";
}