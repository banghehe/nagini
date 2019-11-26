<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài 4</title>
<style type="text/css">
#banner{
font-family:arial;
font-size:14px;
font-weight:bold;
color:#FFFFFF;
text-transform:uppercase;
}
#navbar a{
font-family:arial;
font-size:12px;
font-weight:bold;
color:#000066;
text-decoration:none;
text-transform:capitalize;
padding-left:10px;
}
#navbar a:hover{
color:#0099FF;
}
#left-menu{
font-family:arial;
font-size:12px;
font-weight:bold;
color:#FFFFFF;
text-align:center;
text-transform:uppercase;
}
.menu-item a{
font-family:arial;
font-size:12px;
font-weight:bold;
color:#000066;
text-decoration:none;
text-transform:capitalize;
padding-left:10px;
}
.menu-item a:hover{
color:#0099FF;
}
#body{
font-family:arial;
font-size:12px;
color:#333333;
}
#footer{
font-family:arial;
font-size:11px;
color:#FFFFFF;
text-transform:capitalize;
}
</style>
</head>
<body>
<table align="center" width="800" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td height="80" colspan="5" align="center" bgcolor="#0099FF" id="banner">trung tâm đào tạo trực tuyến lập trình - thiết kế - đồ họa website vietpro</td>
  </tr>
  <tr id="navbar">
    <td width="20%" height="30"><a href="bai_tap_4.php?page=home">trang chủ</a></td>
    <td width="20%"><a href="bai_tap_4.php?page=about">giới thiệu</a></td>
    <td width="20%"><a href="bai_tap_4.php?page=news">tin tức</a></td>
    <td width="20%"><a href="bai_tap_4.php?page=contact">liên hệ</a></td>
    <td width="20%"><a href="bai_tap_4.php?page=forum">diễn đàn</a></td>
  </tr>
  <tr>
    <td id="left-menu" height="30" bgcolor="#0099FF">danh mục chính</td>
    <td id="body" align="center" colspan="4" rowspan="6">
		<?php
		switch($_GET["page"]){
		case "home": include_once("trangchu.php");
		break;
		
		case "about": include_once("gioithieu.php");
		break;
		
		case "news": include_once("tintuc.php");
		break;
		
		case "contact": include_once("lienhe.php");
		break;
		
		case "forum": include_once("diendan.php");
		break;
		
		default: include_once("trangchu.php");
		}
		?>
    </td>
  </tr>
  <tr>
    <td class="menu-item" height="30"><a href="bai_tap_4.php?page=home">trang chủ</a></td>
  </tr>
  <tr>
    <td class="menu-item" height="30"><a href="bai_tap_4.php?page=about">giới thiệu</a></td>
  </tr>
  <tr>
    <td class="menu-item" height="30"><a href="bai_tap_4.php?page=news">tin tức</a></td>
  </tr>
  <tr>
    <td class="menu-item" height="30"><a href="bai_tap_4.php?page=contact">liên hệ</a></td>
  </tr>
  <tr>
    <td class="menu-item" height="30"><a href="bai_tap_4.php?page=forum">diễn đàn</a></td>
  </tr>
  <tr>
    <td height="60" colspan="5" align="center" bgcolor="#000066" id="footer">bản quyền thuộc về trung tâm đào tạo trực tuyến vietpro</td>
  </tr>
</table>

</body>
</html>
