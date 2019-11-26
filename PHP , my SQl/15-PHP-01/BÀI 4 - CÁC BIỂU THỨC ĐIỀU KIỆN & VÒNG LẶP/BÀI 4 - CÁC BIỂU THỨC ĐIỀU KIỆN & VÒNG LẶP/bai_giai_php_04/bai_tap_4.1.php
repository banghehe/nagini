<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
$a = "Thay đổi giá trị của biến a để kiểm tra kết quả";
$result = gettype($a);

if($result == "string"){
	echo "<b>\"".$a. "\"</b> là dữ liệu kiểu chuỗi";
}
elseif($result == "double"){
	echo "<b>\"".$a. "\"</b> là dữ liệu số thực";
}
elseif($result == "integer"){
	echo "<b>\"".$a. "\"</b> là dữ liệu số nguyên";
}
elseif($result == "boolean"){
	echo "<b>\"".$a. "\"</b> là dữ liệu kiểu Boolean";
}
else{
	echo "<b>\"".$a. "\"</b> là kiểu dữ liệu chưa cập nhật";
}
?>

</body>
</html>
