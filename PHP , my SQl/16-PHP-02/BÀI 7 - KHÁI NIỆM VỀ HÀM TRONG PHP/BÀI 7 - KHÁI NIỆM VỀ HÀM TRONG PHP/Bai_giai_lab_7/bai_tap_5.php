<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài 5</title>
</head>
<body>
<?php
if($_POST["submit_name"]){
	$content = $_POST["area"];
	$marTViet=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă",
"ằ","ắ","ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề",
"ế","ệ","ể","ễ",
"ì","í","ị","ỉ","ĩ",
"ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ",
"ờ","ớ","ợ","ở","ỡ",
"ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
"ỳ","ý","ỵ","ỷ","ỹ",
"đ",
"À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă",
"Ằ","Ắ","Ặ","Ẳ","Ẵ",
"È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
"Ì","Í","Ị","Ỉ","Ĩ",
"Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ","Ờ","Ớ","Ợ","Ở","Ỡ",
"Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
"Ỳ","Ý","Ỵ","Ỷ","Ỹ",
"Đ");

	$marKoDau=array("a","a","a","a","a","a","a","a","a","a","a",
"a","a","a","a","a","a",
"e","e","e","e","e","e","e","e","e","e","e",
"i","i","i","i","i",
"o","o","o","o","o","o","o","o","o","o","o","o",
"o","o","o","o","o",
"u","u","u","u","u","u","u","u","u","u","u",
"y","y","y","y","y",
"d",
"A","A","A","A","A","A","A","A","A","A","A","A",
"A","A","A","A","A",
"E","E","E","E","E","E","E","E","E","E","E",
"I","I","I","I","I",
"O","O","O","O","O","O","O","O","O","O","O","O","O","O","O","O","O",
"U","U","U","U","U","U","U","U","U","U","U",
"Y","Y","Y","Y","Y",
"D");

	$content = str_replace($marTViet, $marKoDau, $content);
	$content = strtolower($content);
}

	
?>
<form method="post">
<table align="center" border="1" cellpadding="1" cellspacing="1">
	<tr>
    	<td align="center" colspan="2">Hệ thống chuyển đổi ký tự có dấu sang không dấu</td>
    </tr>
	<tr>
    	<td>Nhập nội dung có dấu</td>
    	<td><textarea cols="50" rows="8" name="area"></textarea></td>
    </tr>
    <tr>
    	<td colspan="2"><input type="submit" name="submit_name" value="Chuyển đổi" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
    </tr>
<?php
if($content){
?>
    <tr>
    	<td>Nội dung được chuyển đổi</td>
    	<td><textarea cols="50" rows="8"><?php echo $content;?></textarea></td>
    </tr>
<?php
}
?>
</table>
</form>
</body>
</html>
