<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
// Giải PT bậc nhất 1 ẩn số
// aX + b = 0

$a = 5;
$b = 6;
if(($a == 0) && ($b == 0)){
	echo "Phương trình $a X + $b = 0 có nghiệm với mọi giá trị của X";
}
elseif(($a == 0) && ($b !== 0)){
	echo "Phương trình $a X + $b = 0 vô nghiệm với mọi giá trị của X";
}
else{
	$nghiem = -$b/$a;
	echo "Phương trình $a X + $b = 0 có nghiệm X = $nghiem";
}
?>

</body>
</html>
