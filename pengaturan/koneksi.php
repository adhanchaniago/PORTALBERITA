<?php
$username="root";
$password=""; //kosongkan jika tidak ada
$host="localhost";
$database="materi_portalberita";
mysql_connect($host,$username,$password) or die ("koneksi server gagal");
mysql_select_db($database) or die ("koneksi database gagal");
?>