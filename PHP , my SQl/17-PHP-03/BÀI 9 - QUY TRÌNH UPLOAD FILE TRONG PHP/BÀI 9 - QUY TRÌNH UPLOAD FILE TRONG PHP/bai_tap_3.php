<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài 3</title>
</head>
<body>
<form method="post">
Số File muốn Upload<br>
<input type="text" name="number" />
<input type="submit" name="submit_start" value="Khởi tạo" />
</form>
<?php
$number = $_POST["number"];
if($_POST["submit_start"]){
?>
<hr>
<form method="post" enctype="multipart/form-data" action="upload_bai_tap_3.php">
<?php	
	for($i=1; $i<=$number;$i++){
		echo "<input type=\"file\" name=\"file_upload[]\" /><br>";
	}
?>
<input type="hidden" name="total_file_upload" value="<?php echo $number;?>" />
<input type="submit" name="submit_end" value="Upload File" />
</form>
<?php
}
?>
</body>
</html>