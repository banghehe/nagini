<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài 6</title>
<style type="text/css">
body{
font-family:arial;
font-size:12px;
}
h3{
font-family:arial;
font-size:14px;
font-weight:bold;
color:#FF0000;
text-transform:uppercase;
}
p#intro{
width:400px;
height:auto;
font-style:italic;
color:#FF0000;
}
#area{
width:400px;
height:150px;
}
#txt{
width:400px;
height:auto;
}
p{
width:400px;
height:auto;
}
</style>
</head>
<body>
<h3>hệ thống tự động tạo mô tả ngắn (intro text) cho bài viết</h3>
<p id="intro">Hệ thống có ưu điểm là loại bỏ được các từ cuối cùng vô nghĩa trong câu.<br> <b>Ví dụ</b> như: <b>...tră</b> hay <b>...ng</b> hoặc <b>...th</b> ...</p>
<form method="post">
Nội dung chi tiết bài viết<br>
<textarea id="area" name="details"></textarea><br>
Hiển thị tin vắn tắt với số ký tự<br>
<input id="txt" type="text" name="num" /><br>
<input type="submit" name="submit_name" value="Đăng bài" />
</form>
<?php
$num = $_POST["num"];
$details = $_POST["details"];
$arr_char = array(".", ",", ";", "!", ":", " ");
$start_post = 0;
if($_POST["submit_name"]){
	$intro = substr($details, $start_post, $num);
	for($i=$num; $i>=$start_post; $i--){
		$replace_char = substr($intro, $i, 1);
		if(in_array($replace_char, $arr_char) == TRUE){
			$end_post = $i;
			break;
		}
	}
}
$intro = substr($details, $start_post, $end_post);
echo "<p>$intro...<a href=\"#\">chi tiết</a></p>";
?>
</body>
</html>
