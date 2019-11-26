<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>6.2</title>
</head>
<body>
<form method="post">
	Số thứ nhất: <input type="text" name="st1" />
    Số thứ hai: <input type="text" name="st2" />
    <input type="submit" name="submit_name" value="Submit" />
</form>
<br />
<?php
if($_POST["submit_name"]){
	if($_POST["st1"] == ""){
	echo "Bạn chư nhập Số Thứ Nhất!<br />";
	}
	elseif(is_numeric($_POST["st1"]) == FALSE){
		echo "Bạn cần nhập dữ liệu là một Số Nguyên!<br />";
	}
	else{
		$st1 = $_POST["st1"];
	}
	
	if($_POST["st2"] == ""){
		echo "Bạn chư nhập Số Thứ Hai!<br />";
	}
	elseif(is_numeric($_POST["st2"]) == FALSE){
		echo "Bạn cần nhập dữ liệu là một Số Nguyên!<br />";
	}
	else{
		$st2 = $_POST["st2"];
	}
	
	if($st1 && $st2){
		$result = $st1 - $st2;
		if($result > 0){
			for($i=0; $i<=$result; $i++){
				$arr[$i] = $st1;
				$st1--;
			}
			echo "Mảng giảm<br />";
			print_r($arr);
		}
		
		if($result < 0){
			$result = $st2 - $st1;
			for($i=0; $i<=$result; $i++){
				$arr[$i] = $st1;
				$st1++;
			}
			echo "Mảng tăng<br />";
			print_r($arr);
		}
	}	
}
?>
</body>
</html>
