<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>6.1</title>
</head>
<body>
<?php
$arr = array(6, 5, 1, 9, 8);
sort($arr);
echo "Sắp xếp theo thứ tự tăng dần <br />";
foreach($arr as $value){
	echo $value."<br />";
}
rsort($arr);
echo "Sắp xếp theo thứ tự giảm dần <br />";
foreach($arr as $value){
	echo $value."<br />";
}
?>
</body>
</html>
