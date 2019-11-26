<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Search web</title>
</head>
<body>
<form method="POST">
<select name="weblist">
	<option selected="selected">Chọn website theo chủ đề</option>
	<option value="edu">Website Đào tạo</option>
    <option value="ecom">Website Thương mại điện tử</option>
    <option value="entm"> Website Giải trí</option>
</select>
<input type="submit" name="submit_name" value="Submit" />
</form>
<?php
if($_POST["submit_name"] == $_POST["weblist"]){
	echo $_POST["weblist"];
}
else{
	switch($_POST["weblist"]){
		case "edu": echo " <font color='#0000DD'><b>Web Education:</b></font> <br /> http://vietpro.edu.vn <br /> http://daotaotructuyen.us";
		break;
			case "ecom": echo "<font color='#FF6600'><b>Web E-commerce:</b></font> <br> http://123mua.com <br /> http://enbac.com <br />";
			break;
				case "entm": echo "<font color='#FF0099'><b>Web Entertaiment:</b></font> <br /> http://clip.vn <br /> http://movie.zing.vn";
				break;
		
		default: echo "<font color='#BB0000'>Bạn lựa chọn hiển thị danh sách Website theo chủ đề</font>";
	}
}	
?>
</body>
</html>