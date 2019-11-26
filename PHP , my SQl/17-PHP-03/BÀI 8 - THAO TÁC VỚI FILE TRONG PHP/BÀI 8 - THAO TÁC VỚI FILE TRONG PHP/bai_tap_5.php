<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài 5</title>
<style type="text/css">
h3{
font-family:arial;
font-size:12px;
font-weight:bold;
color:#333333;
text-transform:uppercase;
}
</style>
</head>
<body>
<?php
$fp = "counter.txt";
$fo = fopen($fp, r);
$fr = fgets($fo);
$fc = fclose($fo);

echo "<h3>Tổng số người đã truy cập trang web của bạn:</h3>";
$len = strlen($fr);
for($i=0; $i<$len; $i++){
	$num = substr($fr, $i, 1);
	echo "<img src=\"images/$num.gif\">";
}

$fr++;
$fp = "counter.txt";
$fo = fopen($fp, w);
$fw = fwrite($fo, $fr);
$fc = fclose($fo);
?>
</body>
</html>
