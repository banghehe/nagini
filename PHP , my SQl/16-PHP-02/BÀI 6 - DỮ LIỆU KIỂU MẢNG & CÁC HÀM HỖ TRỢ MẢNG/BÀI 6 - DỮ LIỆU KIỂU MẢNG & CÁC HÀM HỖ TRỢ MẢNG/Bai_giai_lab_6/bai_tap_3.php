<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài 3</title>
</head>

<body>
<form method="post">
Hãy nhập một số nguyên bé hơn 20: <input type="text" name="num" />
<input type="submit" name="submit_name" value="Tạo Mảng" />
</form>
<?php
if($_POST["submit_name"]){
	$num = $_POST["num"];
	$mang_chan = array();
	$mang_le = array();
	for($i=1; $i<=$num; $i++){
		$bien_kiem_tra = ($i%2);
		if($bien_kiem_tra == 0){
			//Tạo mảng chẵn
			$mang_chan[] = $i;
		}
		else{
			//Tạo mảng lẻ
			$mang_le[] = $i;
		}
	}
	echo "Mảng chẵn: ";
	print_r($mang_chan);
	echo "<p>";
	echo "Mảng lẻ: ";
	print_r($mang_le);
}
?>
</body>
</html>
