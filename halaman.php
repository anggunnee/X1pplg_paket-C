<?php

if(isset($_GET['url'])){
    switch ($_GET['url']) {

        case 'tulis-pengaduan':
        include'tulis-pengaduan.php';
        break;

        case'lihat-pengaduan.php';
        include 'lihat-pengaduan.php';

        default:
        echo"Halaman Tidak Ditemukan";
        break;
    
    }
}else{
    echo "Selamat Datang Di Aplikasi Pelaporan Pengaduan Masyarakat,Dimana Aplikasi ini dibuat 
          untuk melaporkan tindakan yang menyimpan dari ketentuan.<br>";
    echo "Anda Login Sebagai :".$_SESSION['nama'];
}