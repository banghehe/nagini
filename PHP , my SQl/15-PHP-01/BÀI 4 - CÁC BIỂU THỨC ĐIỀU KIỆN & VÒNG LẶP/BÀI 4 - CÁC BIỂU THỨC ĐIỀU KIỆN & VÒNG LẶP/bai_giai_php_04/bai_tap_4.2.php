<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
$tong = 0;
$a = 1;
$b = 100;
for($i=$a; $i<=$b; $i++){
	$tong += $i;
}
echo "Tổng từ $a đến $b = <b>".$tong."</b>";
?>

</body>
</html>
