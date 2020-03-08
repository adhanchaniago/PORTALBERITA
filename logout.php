<?php
ob_start();
if (!isset($_SESSION))
	{
		session_start();
    }
    unset($_SESSION['username']);
    session_destroy();
    echo "<script>alert('Anda Telah Berhasil Keluar!');window.location='index.php';</script>";

ob_flush();
?>