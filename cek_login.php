<?php
ob_start(); // untukmembuffer;
include ("pengaturan/koneksi.php");
//membuatvariabeluntukmenampung input username dan password
$username=$_POST['username'];
$password=md5($_POST['password']);
//memproteksidarimysql injection
$username = stripslashes($username); // menghapus backslash padatampilanphp
$password = stripslashes($password);
$username = mysql_real_escape_string($username); // memfilterkarakterkhususmisal '
$password = mysql_real_escape_string($password);
$query=mysql_query("SELECT * FROM admin WHERE username='$username' and password='$password'");
$cek=mysql_num_rows($query);
$r=mysql_fetch_array($query);

if ($cek>0) {
    session_start();
    $_SESSION['username']= $username;
    $_SESSION['password']= $password;
    header ('location:beranda.php');
}
else
{
 echo "<center><br><br><br><br><br><br><b>GAGAL MASUK! </b><br> 
        Username atau Password Anda tidak benar.<br>";
  echo "<input type=button class='tombol' value='ULANGI LAGI' onclick=location.href='index.php'></a></center>";
}
ob_end_flush();
?> 