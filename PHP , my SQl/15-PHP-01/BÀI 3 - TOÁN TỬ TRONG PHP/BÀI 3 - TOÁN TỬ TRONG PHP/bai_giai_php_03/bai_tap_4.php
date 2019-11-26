<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài 4</title>
</head>
<body>
<?php
$a = 1;
echo $a; //Kết quả t
$a++;
echo $a; //Kết quả u
$b = $a--;
echo $b; //Kết quả v
$c = --$a;
echo $c; //Kết quả x
$a += $b;
echo $a; //Kết quả y
$b *= $c;
echo $c; //Kết quả z
?>
</body>
</html>