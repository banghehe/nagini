<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="POST">
<select name="weblist">
	<option selected="selected">Chon List Website</option>
	<option value="edu">Website Dao tao</option>
    <option value="ecom">Website thuong mai</option>
    <option value="phim"> Website Giai Tri</option>
</select>
<input type="submit" name="submit_name" value="Submit" />
</form>
<?php
if($_POST["submit_name"] == $_POST["weblist"]){
	echo $_POST["weblist"];
}
else{
	switch($_POST["weblist"]){
		case "edu": echo " <font color='#0000DD'><b>Web Education:</b></font> <br> http://abc.com<br />http://def.net <br>
		http://daotaotructuyen.us<br>";
		break;
		case "ecom": echo "<font color='#FF6600'><b>Web Ecom:</b></font> <br> http://qhr.orgm <br> http://quaphuongxa.us <br> http://quaonline.net <br>";
		break;
		case "phim": echo "<font color='#FF0099'><b>Web Entertaiment:</b></font><br> http://phimxixam.com <br> http://phimnhanh.net <br> http://phimhay.com <br>";
		break;
		default: echo "<font color='#BB0000'><em>Ban lua chon hien thi danh sach website theo chu de</em></font>";
	}
}

	
?>

</body>
</html>