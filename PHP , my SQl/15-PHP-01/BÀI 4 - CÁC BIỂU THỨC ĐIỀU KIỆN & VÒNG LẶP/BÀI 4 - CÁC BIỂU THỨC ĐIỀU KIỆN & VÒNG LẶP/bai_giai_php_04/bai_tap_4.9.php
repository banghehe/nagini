<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
$a = 5;
$b = 2;
$c = 1;
$d = 0;
$e = 3;

// Tìm SLN
$max = $a;
if($max > $b){
	$max = $max;
}
else{
	$max = $b;
}

if($max > $c){
	$max = $max;
}
else{
	$max = $c;
}

if($max > $d){
	$max = $max;
}
else{
	$max = $d;
}

if($max > $e){
	$max = $max;
}
else{
	$max = $e;
}

echo "Số lớn nhất trong 5 số: $a , $b , $c , $d , $e là <b>$max</b>";
echo "<p></p>";

// Tìm SBN
$min = $a;
if($min < $b){
	$min = $min;
}
else{
	$min = $b;
}

if($min < $c){
	$min = $min;
}
else{
	$min = $c;
}

if($min < $d){
	$min = $min;
}
else{
	$min = $d;
}

if($min < $e){
	$min = $min;
}
else{
	$min = $e;
}

echo "Số bé nhất trong 5 số: $a , $b , $c , $d , $e là <b>$min</b>";
?>

</body>
</html>
