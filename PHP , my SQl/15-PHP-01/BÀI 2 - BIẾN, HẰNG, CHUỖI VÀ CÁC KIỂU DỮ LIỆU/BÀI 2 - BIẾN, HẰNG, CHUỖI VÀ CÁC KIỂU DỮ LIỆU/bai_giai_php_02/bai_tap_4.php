<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
$kieu_int = 100;
$kieu_dou = 3.14;
$kieu_str = "Kiểm tra kiểu dữ liệu";
$kieu_boo = TRUE;
echo "<b>".$kieu_int." </b>là kiểu ".gettype($kieu_int)."<br>";
echo "<b>".$kieu_dou." </b>là kiểu ".gettype($kieu_dou)."<br>";
echo "<b>\"".$kieu_str."\"</b> là kiểu ".gettype($kieu_str)."<br>";
echo "<b>".$kieu_boo." </b>là kiểu ".gettype($kieu_boo);
?>
</body>
</html>