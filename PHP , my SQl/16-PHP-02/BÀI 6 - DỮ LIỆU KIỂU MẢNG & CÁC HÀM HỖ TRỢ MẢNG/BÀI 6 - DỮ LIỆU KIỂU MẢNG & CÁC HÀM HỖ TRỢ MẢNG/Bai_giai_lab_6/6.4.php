<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>6.4</title>
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
	
	//Tạo mảng với các phần tử ngẫu nhiên
	$arr = array();
	for($i=0; $i<5; $i++){
		$arr[$i] = rand(1, 10);
	}
	
	//Kiểm tra sự tồn tại vừa $num trong mảng vừa tạo
	if(in_array($num, $arr)){
		echo "$num tồn tại trong mảng ngẫu nhiên!";
	}
	else{
		echo "$num không tồn tại trong mảng ngẫu nhiên!";
	}
}
?>
</body>
</html>
