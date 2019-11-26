<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
$tong_chan = 0;
$a = 1;
$b = 50;
for($i=$a; $i<=$b; $i++){
	$kiem_tra = $i%2;
	if($kiem_tra == 0){
		$tong_chan += $i;
	}
}
echo "Tổng chẵn từ $a đến $b = <b>".$tong_chan."</b>";
?>

</body>
</html>
