<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài 4</title>
<style type="text/css">
b{
color:#FF0000;
}
p{
font-family:arial;
font-size:12px;
color:#FF0000;
font-style:italic;
}
</style>
</head>
<body>
<?php
$fp = "counter.txt";
$fo = fopen($fp, r);
$fr = fgets($fo);
$fc = fclose($fo);
echo "Trang web của bạn đã có <b>".$fr."</b> người truy cập";
echo "<p>Mỗi lần bạn bấm phím F5 (Refresh lại trang) cũng được tính là một lần truy cập mới</p>";
$fr++;
$fp = "counter.txt";
$fo = fopen($fp, w);
$fw = fwrite($fo, $fr);
$fc = fclose($fo);
?>
</body>
</html>
