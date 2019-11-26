<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài 2</title>
<style type="text/css">
body{
font-family:arial;
font-size:12px;
}
span#error{
color:#FF0000;
}
span#success{
color:#00CC00;
}
</style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="file_upload" />
<input type="submit" name="submit_name" value="Upload File" />
</form>
<?php
if($_POST["submit_name"]){
	$file_path = $_FILES["file_upload"]["tmp_name"];
	$file_name = $_FILES["file_upload"]["name"];
	$file_size = $_FILES["file_upload"]["size"];
	$file_type = $_FILES["file_upload"]["type"];
	$file_error = $_FILES["file_upload"]["error"];
	$report = "";
	if($file_error != 0){
		switch($file_error){
		case 1: $report = "<span id=\"error\">Có lỗi xảy ra, do dung lượng File upload vượt quá dung lượng cho phép!</span>";
		break;
		
		case 2: $report = "<span id=\"error\">Có lỗi xảy ra, do dung lượng File upload vượt quá dung lượng cho phép trong file cấu hình hệ thống</span>";
		break;
		
		case 3: $report = "<span id=\"error\">Có lỗi xảy ra, do File upload chỉ được tải lên một phần!</span>";
		break;
		
		case 4: $report = "<span id=\"error\">Có lỗi xảy ra, do File upload không tồn tại!</span>";
		break;
		}
	}
	else{
		$new_path = "upload/".$file_name;
		if(!move_uploaded_file($file_path, $new_path)){
			$report = "<span id=\"error\">Upload File không thành công!</span>";
		}
		else{
			$report = "<span id=\"success\">Upload File thành công!</span>";
		}
	}
	echo $report;
	echo "<br>";
	echo "Tên File: ".$file_name;
	echo "<br>";
	echo "Kiểu File: ".$file_type;
	echo "<br>";
	echo "Dung lượng File: ".$file_size;
}
?>
</body>
</html>
