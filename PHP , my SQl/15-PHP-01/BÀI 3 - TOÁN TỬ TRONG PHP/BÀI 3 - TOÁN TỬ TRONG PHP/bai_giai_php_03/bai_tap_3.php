<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài 3</title>
</head>
<body>
<?php
/*	Cách 1	*/
$a = 1;
echo (--$a)."<br>";
/*	Cách 2	*/
$a = 1;
echo ($a-1)."<br>";
/*	Cách 3	*/
$a = 1;
echo ($a%1)."<br>";
/*	Cách 4	*/
$a = 1;
echo ($a*0)."<br>";
/*	Cách 5	*/
$a = 1;
echo ($a+=-1)."<br>";
/*	Cách 6	*/
$a = 1;
echo ($a*=0);
?>
</body>
</html>