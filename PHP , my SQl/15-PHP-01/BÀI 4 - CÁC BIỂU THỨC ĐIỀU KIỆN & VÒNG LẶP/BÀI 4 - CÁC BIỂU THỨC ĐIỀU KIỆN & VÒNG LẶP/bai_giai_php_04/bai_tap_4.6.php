<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
// Giải PT bặc 2 một ẩn số
// aX2 + bX + c = 0

$a = 5;
$b = 6;
$c = 1;

if($a == 0){
	if(($b == 0) && ($c == 0)){
		echo "Phương trình $a X2 + $b X + $c = 0 có nghiệm với mọi giá trị của X";
	}
	elseif(($b == 0) && ($c !== 0)){
		echo "Phương trình $a X2 + $b X + $c = 0 vô nghiệm với mọi giá trị của X";
	}
	else{
		$nghiem = -$c/$b;
		echo "Phương trình $a X2 + $b X + $c = 0 có nghiệm X = $nghiem";
	}
}
else{
	$delta = ($b*$b) - (4*$a*$c);
	if($delta < 0){
		echo "Phương trình $a X2 + $b X + $c = 0 vô nghiệm với mọi giá trị của X";
	}
	elseif($delta == 0){
		$nghiem_kep = -$b/(2*$a);
		echo "Phương trình $a X2 + $b X + $c = 0 có nghiệm kép X1 = X2 = $nghiem_kep";
	}
	else{
		$nghiem1 = (-$b - sqrt($delta))/(2*$a);
		$nghiem2 = (-$b + sqrt($delta))/(2*$a);
		echo "Phương trình $a X2 + $b X + $c = 0 có 2 nghiệm phân biệt X1 = <b>$nghiem1</b> và X2 = <b>$nghiem2</b>";
	}
}
?>

</body>
</html>
