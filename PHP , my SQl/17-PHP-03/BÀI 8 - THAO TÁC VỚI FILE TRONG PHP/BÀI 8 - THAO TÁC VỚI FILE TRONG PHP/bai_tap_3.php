<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài 3</title>
<style type="text/css">
table tr td#title{
width:auto;
height:32px;
background:#0099FF;
font-family:arial;
font-size:14px;
font-weight:bold;
color:#FFFFFF;
text-align:center;
text-transform:uppercase;
}
table tr td#link-title{
width:auto;
height:25px;
font-family:arial;
font-size:12px;
text-align:center;
text-transform:capitalize;
}
table tr td#link-title a{
color:#0000FF;
text-decoration:none;
}
table tr td#link-title a:hover{
text-decoration:underline;
}
</style>
</head>
<body>

<table align="center" border="1">
	<tr>
    	<td id="title" colspan="2">hệ thống quản lý địa chỉ website</td>
    </tr>
    <tr>
    	<td><form method="post"><input type="text" name="add_new_link" /></td>
        <td><input type="submit" name="submit_name" value="Thêm một địa chỉ mới" /></form></td>
    </tr>
    <tr>
    	<td id="link-title" colspan="2"><a href="bai_tap_3.php?action=list-web-link">danh sách toàn bộ các địa chỉ website</a></td>
    </tr>
<?php
if(($_GET["action"] == "list-web-link")&&(!$_POST["submit_name"])){
	$list_link = "";
	$fp = "list_web_link.txt";
	$fo = fopen($fp, r);
	while(!feof($fo)){
		$list_link .= fgetc($fo);
	}
	$fc = fclose($fo);
	
	$arr_link = explode("|", $list_link);
	echo "<tr><td colspan=\"2\">";
	foreach($arr_link as $value){
		echo "<a href=\"$value\" target=\"_blank\">$value</a><br>";
	}
	echo "</td></tr>";	
}
?>
</table>
<?php
if($_POST["submit_name"]){
	$new_link = $_POST["add_new_link"];
	$fp = "list_web_link.txt";
	$fo = fopen($fp, a);
	$fw = fwrite($fo, $new_link."|");
	$fc = fclose($fo);
}

?>
</body>
</html>
