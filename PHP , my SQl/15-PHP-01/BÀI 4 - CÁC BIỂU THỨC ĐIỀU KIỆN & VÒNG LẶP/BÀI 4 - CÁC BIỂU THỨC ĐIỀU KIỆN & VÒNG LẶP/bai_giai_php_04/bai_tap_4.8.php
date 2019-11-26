<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
$thang = "tháng một";
switch($thang){
case "tháng một": echo "<b>$thang</b> tiếng Anh là <b>January</b>";
break;

case "tháng hai": echo "<b>$thang</b> tiếng Anh là <b>February</b>";
break;

case "tháng ba": echo "<b>$thang</b> tiếng Anh là <b>March</b>";
break;

case "tháng tư": echo "<b>$thang</b> tiếng Anh là <b>April</b>";
break;

case "tháng năm": echo "<b>$thang</b> tiếng Anh là <b>May</b>";
break;

case "tháng sáu": echo "<b>$thang</b> tiếng Anh là <b>June</b>";
break;

case "tháng bẩy": echo "<b>$thang</b> tiếng Anh là <b>July</b>";
break;

case "tháng tám": echo "<b>$thang</b> tiếng Anh là <b>August</b>";
break;

case "tháng chín": echo "<b>$thang</b> tiếng Anh là <b>September</b>";
break;

case "tháng mười": echo "<b>$thang</b> tiếng Anh là <b>October</b>";
break;

case "tháng mười một": echo "<b>$thang</b> tiếng Anh là <b>November</b>";
break;

case "tháng mười hai": echo "<b>$thang</b> tiếng Anh là <b>December</b>";
break;

default: echo "Bạn chưa nhập đúng tên của tháng bằng tiếng Việt";
}
?>

</body>
</html>
