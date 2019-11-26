<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>6.3</title>
</head>
<body>
<form method="post">
	Nhập số nguyên dương bất kỳ: <input type="text" name="num" />
    <input type="submit" name="submit_name" value="Submit" />
</form>
<br />
<?php
if($_POST["submit_name"]){
	if($_POST["num"] == ""){
	echo "Bạn chưa nhập Số!<br />";
	}
	elseif(is_numeric($_POST["num"]) == FALSE){
		echo "Bạn cần nhập dữ liệu là một Số Nguyên Dương!<br />";
	}
	else{
		$num = $_POST["num"];
	}
	
	if($num){
		$mang_chan = array();
		$mang_le = array();
		for($i=0; $i<=$num; $i++){
			$check = $i%2;
			if($check == 0){
				$mang_chan[$i] = $i;
			}
			else{
				$mang_le[$i] = $i;
			}
		}
		echo "Mảng chẵn<br />";
		print_r($mang_chan);
		echo "<br />";
		echo "Mảng lẻ<br />";
		print_r($mang_le);
	}
}
?>
</body>
</html>
