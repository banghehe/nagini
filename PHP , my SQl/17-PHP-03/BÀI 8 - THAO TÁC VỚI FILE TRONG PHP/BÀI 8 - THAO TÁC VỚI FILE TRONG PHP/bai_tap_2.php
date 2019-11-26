<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Translate</title>
</head>
<body>
<?php
if($_POST["submit_name"]){
	// Mở và đọc nội dung File
	$path = "bai_tap_1.txt";
	$fopen = fopen($path, "r");
	$fread = fread($fopen, filesize($path));
	$fclose = fclose($fopen);
	
	// Dịch nội dung File
	$arr_vi = array("hoc", "lap trinh", "co ban");
	$arr_en = array("learning", "programming", "basic");
	$fread = str_replace($arr_vi, $arr_en, $fread);

	// Mở và ghi nội dung mới cho File
	$fopen = fopen($path, "w");
	$fwrite = fwrite($fopen, $fread);
	$fclose = fclose($fopen);
}
else{
	// Đọc nội dung File để hiển thị vào phần tử textarea
	$path = "bai_tap_1.txt";
	$fopen = fopen($path, "r");
	$fread = fread($fopen, filesize($path));
	$fclose = fclose($fopen);
}
?>
<form method="post">
<table align="center" width="300" border="1" cellpadding="1" cellspacing="1">
<tr><td align="center">HỆ THỐNG DỊCH BÀI BÀI TỰ ĐỘNG</td></tr>
<tr><td>
<textarea name="art"><?php echo $fread;?></textarea>
</td></tr>
<tr><td>
<input type="submit" name="submit_name" value="Translate and Save" />
</td></tr>
</table>
</form>
</body>
</html>
