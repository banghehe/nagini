<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đổi mầu nền trang web với Phương thức GET</title>
<style type="text/css">
a{
font-family:arial;
font-size:12px;
font-weight:bold;
text-decoration:none;
text-transform:capitalize;
}
a#xanh{
color:blue;
}
a#do{
color:red;
}
a#vang{
color:yellow;
}
a#den{
color:black;
}
a#cam{
color:orange;
}
a#ghi{
color:grey;
}
a#trang{
color:white;
}

<?php
if(isset($_GET["color"])){
	$color = $_GET["color"];
	
	echo "
	body{
	font-family:arial;
	font-size:12px;
	font-weight:bold;
	text-transform:none;
	background:$color;
	}
	";	
}
?>

</style>
</head>
<body>
Lựa chọn mầu nền cho trang web: 
<a id="xanh" href="bai_tap_6.php?color=blue">Xanh</a> | 
<a id="do" href="bai_tap_6.php?color=red">Đỏ</a> | 
<a id="vang" href="bai_tap_6.php?color=yellow">Vàng</a> | 
<a id="den" href="bai_tap_6.php?color=black">Đen</a> | 
<a id="cam" href="bai_tap_6.php?color=orange">Cam</a> | 
<a id="ghi" href="bai_tap_6.php?color=grey">Ghi</a> | 
<a id="trang" href="bai_tap_6.php?color=white">Mầu mặc định</a> 
</body>
</html>
