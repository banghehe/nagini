<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm địa chỉ web của Vietpro</title>
</head>
<body>
<h3>Địa chỉ website của Vietpro</h3>
<form method="post">
<select multiple="multiple" name="weblinks[]">
	<option value="http://vietpro.edu.vn">Vietpro Education</option>
	<option value="http://daotaotructuyen.us">Đào tạo trực tuyến</option>
    <option value="http://forum.vietpro.edu.vn">Diễn đàn Vietpro</option>
</select>
<input type="submit" name="submit" value="Tìm kiếm" />
</form>
<?php
if(isset($_POST['submit'])){
	if(!empty($_POST['weblinks'])){
		foreach($_POST['weblinks'] as $weblink){
			echo '<b>web link: </b><a target="_blank" href="'.$weblink.'">'.$weblink.'</a><br />';
		}
	}
	else{
		echo '<span style="color:red;">Bạn chưa lựa chọn chủ đề muốn tìm.</span>';
	}
}
?>
</body>
</html>