<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
table tr td{
font-family:arial;
font-size:12px;
color:#000000;
text-transform:capitalize;
}
table tr td#title{
font-weight:bold;
background:#FF6600;
color:#FFFFFF;
text-align:center;
}
table tr td.left{
font-weight:bold;
background:#333333;
color:#FFFFFF;
}
</style>
</head>
<body>
<?php
define("TBL_WIDTH", "width");
define("TBL_HEIGHT", "height");
define("TBL_ALIGN", "align");
define("TBL_BORDER", "border");
define("TD_COLSPAN", "colspan");
define("TD_ID", "id");
define("TD_CLASS", "class");
$tbl_width_1 = 300;
$tbl_width_2 = 100;
$tbl_width_3 = 200;
$tbl_height;
$tbl_align = "center";
$tbl_border = 1;
$td_colspan = 2;
$td_id = "title";
$td_class = "left";
?>
<table <?php echo TBL_WIDTH;?>=<?php echo $tbl_width_1;?> <?php echo TBL_BORDER;?>=<?php echo $tbl_border;?> <?php echo TBL_ALIGN;?>=<?php echo $tbl_align;?>>
	<tr>
    	<td <?php echo TD_ID;?>=<?php echo $td_id;?> <?php echo TD_COLSPAN;?>=<?php echo $td_colspan;?>>thông tin thành viên</td>
    </tr>
    <tr>
    	<td <?php echo TD_CLASS;?>=<?php echo $td_class;?> <?php echo TBL_WIDTH;?>=<?php echo $tbl_width_2;?>>họ tên đầy đủ</td>
        <td <?php echo TBL_WIDTH;?>=<?php echo $tbl_width_3;?>>nguyễn văn a</td>
    </tr>
    <tr>
    	<td <?php echo TD_CLASS;?>=<?php echo $td_class;?>>giới tính</td>
        <td>nam</td>
    </tr>
    <tr>
    	<td <?php echo TD_CLASS;?>=<?php echo $td_class;?>>năm sinh</td>
        <td>17/10/90</td>
    </tr>
    <tr>
    	<td <?php echo TD_CLASS;?>=<?php echo $td_class;?>>địa chỉ</td>
        <td>từ liêm - hà nội</td>
    </tr>
    <tr>
    	<td <?php echo TD_CLASS;?>=<?php echo $td_class;?>>số điện thoại</td>
        <td>0913 538 768</td>
    </tr>
</table>
</body>
</html>