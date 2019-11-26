<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
function xe_taxi($skm, $kh){
	if($skm <= 10){
		//$stien0 = $skm * 15000; sai
		$stien = $skm * 15000;
		//return $stien;
	}
	elseif($skm <= 25){
		//$stien1 = (10*15000) + (($smk -10) * 19000); sai
		$stien = (10*15000) + (($smk -10) * 19000);
		//return $stien;
	}
	else{
		//$stien2 = ( ( 10*15000 ) + ( 15 *19000 ) ) + ($number - 25)*7000; sai
		$stien = ( ( 10*15000 ) + ( 15 *19000 ) ) + ($number - 25)*7000;
		//return $stien;
	}
		
	if($kh == "yes"){
		$stien = $stien + ($stien/2);
		return $stien;
	}
	else{
		$stien = $stien;
		return $stien;
	}
}

if($_POST["submit_name"]){
	// Validate Form
	if($_POST["skm"] == ""){
		$result = "<b>Bạn cần phải điền số Km đi được!</b>";
	}
	elseif(is_numeric($_POST["skm"]) == FALSE){
		$result = "<b>Số Km đi được phải là dạng số!</b>";
	}
	else{
		$skm = $_POST["skm"];
	}
		
	$kh = $_POST["rd"];
		
	if($skm && $kh){
		$result = "Số tiền bạn cần phải thanh toán là: <b>".xe_taxi($skm, $kh)."</b> VNĐ";
	}
}	
?>
<form method="post">
<table align="center" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td align="center" colspan="2">Hệ thống tính tiền Taxi tự động</td>
  </tr>
  <tr>
    <td>Nhập số Km đi được</td>
    <td><input type="text" name="skm" /> Km</td>
  </tr>
  <tr>
    <td>Hành trình có khứ hồi hay không</td>
    <td><input type="radio" name="rd" value="yes" /> Có <input checked="checked" type="radio" name="rd" value="no" /> Không</td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="submit_name" value="Tính" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
  </tr>
  <?php
  if($result){
  ?>
  <tr>
  	<td colspan="2" align="center" style="color:red;"><?php echo $result;?></td>
  </tr>
  <?php
  }
  ?>
</table>
</form>
</body>
</html>
