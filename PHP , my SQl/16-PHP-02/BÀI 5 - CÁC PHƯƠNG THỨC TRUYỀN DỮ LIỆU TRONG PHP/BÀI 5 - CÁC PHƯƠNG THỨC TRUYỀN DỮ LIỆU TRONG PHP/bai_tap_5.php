<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đổi mầu nền website</title>
<style type="text/css">
label#xanh{
color:blue;
}
label#do{
color:red;
}
label#vang{
color:yellow;
}
label#den{
color:black;
}
label#cam{
color:orange;
}
label#ghi{
color:grey;
}
label#trang{
color:white;
}

<?php
if(isset($_POST["color"])){
	$color = $_POST["color"];
	
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
<form method="post">
Lựa chọn mầu nền cho trang web: 
<label id="xanh">Xanh</label> <input name="color" value="blue" type="radio" /> | 
<label id="do">Đỏ</label> <input name="color" value="red" type="radio" /> | 
<label id="vang">Vàng</label> <input name="color" value="yellow" type="radio" /> | 
<label id="den">Đen</label> <input name="color" value="black" type="radio" /> | 
<label id="cam">Cam</label> <input name="color" value="orange" type="radio" /> | 
<label id="ghi">Ghi</label> <input name="color" value="grey" type="radio" /> | 
<label id="trang">Trở về mặc định</label> <input value="white" type="radio" /> 
<input type="submit" name="submit_name" value="Đổi mầu nền" />
</form>
</body>
</html>