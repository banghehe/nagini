<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài 1</title>
<style type="text/css">
span#error{
font-family:arial;
font-size:12px;
color:#FF0000;
}
span#success{
font-family:arial;
font-size:12px;
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
	$new_path = "upload/".$file_name;
	if(!move_uploaded_file($file_path, $new_path)){
		echo "<span id=\"error\">Upload File không thành công!</span>";
	}
	else{
		echo "<span id=\"success\">Upload File thành công!<span>";
	}
}
?>
</body>
</html>
