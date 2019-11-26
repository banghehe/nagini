<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<table align="center" width="800" border="1">
  <tr>
    <td colspan="10" align="center" bgcolor="#0099FF">Bảng Chửu Chương</td>
  </tr>
<?php
for($i=1; $i<=9; $i++){
?>
<tr>
<?php
	for($j=1; $j<=10; $j++){
		echo "<td>$i x $j = ".$i*$j."</td>";
	}
?>
</tr>	
<?php    
}
?>
</table>

</body>
</html>
