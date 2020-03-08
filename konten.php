<?php
if(isset($_GET['page'])){
	$page=$_GET['page'];
	switch($page) {
			case'home';
			include("home.php");
			break;
			
			case'portofolio';
			include("portofolio.php");
			break;
			
			case'kontak';
			include("kontak.php");
			break;

			case'kategori';
			include("kategori.php");
			break;

			case'logout';
			include("logout.php");
			break;
	}
} else	{
		include("home.php");
	}
?>