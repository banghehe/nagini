<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài 3</title>
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
<?php
if($_POST["submit_end"]){
	$total_file_upload = $_POST["total_file_upload"];
	for($i=0; $i<$total_file_upload; $i++){
		$file_path = $_FILES["file_upload"]["tmp_name"][$i];
		$file_name = $_FILES["file_upload"]["name"][$i];
		$new_path = "upload/".$file_name;
		$report = "";
		if(!move_uploaded_file($file_path, $new_path)){
			$report .= "<span id=\"error\">Không Upload được File</span> ".$file_name."<br>";
		}
		else{
			$report .= "<span id=\"success\">Upload thành công File</span> ".$file_name."<br>";
		}
		echo $report;
	}
}
?>
</body>
</html>