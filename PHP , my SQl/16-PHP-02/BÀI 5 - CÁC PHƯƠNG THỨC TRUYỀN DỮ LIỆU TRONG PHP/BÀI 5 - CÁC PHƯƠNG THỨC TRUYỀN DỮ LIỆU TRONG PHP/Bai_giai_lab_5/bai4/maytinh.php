<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Máy tính cá nhân</title>
</head>
<body>
<?php
$loi = NULL;
if($_POST['submit']){
	if($_POST['st1'] != ''){
		$st1 = $_POST['st1'];
	}
	
	if($_POST['st2'] != ''){
		$st2 = $_POST['st2'];
	}
	
	if($_POST['pt'] != 'chuachon'){
		$pt = $_POST['pt'];
	}
	
	if(isset($st1) && isset($st2) && isset($pt)){
		if((is_numeric($st1) == TRUE) && (is_numeric($st2) == TRUE)){
			$kq = NULL;
		
			switch($pt){
				case '+': $kq = $st1 + $st2;
				break;
					case '-': $kq = $st1 - $st2;
					break;
						case 'x': $kq = $st1 * $st2;
						break;
							case ':': $kq = $st1 / $st2;
							break;
			}		
		}
		else{
			$loi = 'ST1 & ST2 Phải là kiểu Số';
		}
	}
	else{
		$loi = 'Vui lòng nhập ST1 & ST2 & PT';	
	}
}
?>
<table align="center" width="300" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td colspan="2" align="center"><?php if($loi){ echo '<span style="color:red; font-weight:bold;">'.$loi.'</span>';}else{echo 'Máy tính đơn giản';}?></td>
  </tr>
  <tr>
    <td width="143"><form method="post"><label>Số thứ nhất</label></td>
    <td width="144"><input type="text" name="st1" /></td>
  </tr>
  <tr>
    <td><label>Phép tính</label></td>
    <td>
    	<select name="pt">
        	<option selected="selected" value="chuachon">Lựa chọn Phép toán</option>
        	<option value="+">Phép +</option>
            <option value="-">Phép -</option>
            <option value="x">Phép x</option>
            <option value=":">Phép :</option>
        </select>
    </td>
  </tr>
  <tr>
    <td><label>Số thứ hai</label></td>
    <td><input type="text" name="st2" /></td>
  </tr>
  <tr>
    <td><input type="submit" name="submit" value="Kết quả" /></td>
    <td><input type="text" name="kq" value="<?php if(isset($kq)){echo $kq;}?>" /></form></td>
  </tr>
</table>
</body> 
</html>
