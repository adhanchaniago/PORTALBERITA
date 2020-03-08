<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
include("pengaturan/koneksi.php");
$show="SELECT * FROM kategori order By id_kategori";
$qry=mysql_query($show) or die ("gagal".mysql_error());
?>
<table width="396" height="31" border="1">
    <tr align="center">
  <td><b>Kategori</b></td>
<?php
    while ($row=mysql_fetch_array($qry))
  {
    $b=$row['kategori'];
  	?>
  <tr align="center">
    <td><?php echo $b;?></td>
    </tr>
        <?php } ?>
</table>
</body>
</html>
