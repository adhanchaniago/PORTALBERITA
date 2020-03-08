<?php
session_start();
if (!isset($_SESSION['username'])){
header("Location:./index.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table width="606" height="246" border="1">
  <tbody>
    <tr>
      <td  height="37" colspan="2"><?php include("header.php"); ?></td>
    </tr>
    <tr>
      <td width="439" height="176" valign="top"><?php include("konten.php"); ?></td>
      <td width="151" valign="top"><?php include("menu.php"); ?></td>
    </tr>
    <tr>
      <td colspan="2"><?php include("footer.php"); ?></td>
    </tr>
  </tbody>
</table>
</body>
</html>