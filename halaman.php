<?php

	if(isset($_GET['url'])){
		switch ($_GET['url']) {
			
			case 'tulis-pengaduan':
				include 'tulis-pengaduan.php';
				break;
			
			case 'lihat-pengaduan';
			include 'lihat-pengaduan.php';
			break;

			case 'detail-pengaduan';
			include 'detail-pengaduan.php';
			break;

			case 'lihat-tanggapan';
			include 'lihat-tanggapan.php';
			break;
			
			default:
				echo"Halaman Tidak Ditemukan";
				break;
        }		
	}else{
		echo "Bersama Kita Ciptakan Perubahan,Laporkan masalah di sekitar Anda dan bantu kami
		membangun lingkungan yang lebih baik.<br>";
		echo "Anda Login Sebagai : ".$_SESSION['nama'];
}