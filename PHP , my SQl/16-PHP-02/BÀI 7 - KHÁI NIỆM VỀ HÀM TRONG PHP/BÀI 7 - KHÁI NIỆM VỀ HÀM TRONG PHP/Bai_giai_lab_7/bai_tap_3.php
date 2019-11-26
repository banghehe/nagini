<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài 3</title>
</head>
<body>
<?php
if($_POST["submit_name"]){
	$km = $_POST["km"];
	$check = $_POST["rd"];
}

function taxi_money($km, $check){
	$total = "";
	if($km<=10){
		$total = 15000*$km;
	}
	elseif(($km>10)&&($km<=25)){
		$total = (15000*10) + 19000*($km - 10);
	}
	else{
		$total = (15000*10) + (19000*15) + 7000*($km - 25);
	}
	
	if($check == "yes"){
		$total = $total + ($total/2);
		return $total;
	}
	else{
		$total = $total;
		return $total;
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
    <td><input type="text" name="km" /> Km</td>
  </tr>
  <tr>
    <td>Hành trình có khứ hồi hay không</td>
    <td><input type="radio" name="rd" value="yes" /> Có <input checked="checked" type="radio" name="rd" value="no" /> Không</td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="submit_name" value="Tính" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
  </tr>
  <?php
  if(taxi_money($km, $check)){
  ?>
  <tr>
  	<td colspan="2" align="center" style="color:red;"><?php echo "Tổng số tiền là: <b>".taxi_money($km, $check)."</b> VNĐ";?></td>
  </tr>
  <?php
  }
  ?>
</table>
</form>


</body>
</html>
