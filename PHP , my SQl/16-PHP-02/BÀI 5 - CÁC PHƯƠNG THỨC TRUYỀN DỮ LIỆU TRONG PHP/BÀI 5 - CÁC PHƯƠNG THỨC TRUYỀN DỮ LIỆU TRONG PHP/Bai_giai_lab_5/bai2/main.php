<?php
if(isset($_GET['ten'])){
	$ten = 	$_GET['ten'];
}

if(isset($_GET['tuoi'])){
	$tuoi = $_GET['tuoi'];
}

if(isset($_GET['noisong'])){
	$noiSong = 	$_GET['noisong'];
}

if(isset($ten) && isset($tuoi) && isset($noiSong)){
	echo '<b>Tên:</b> '.$ten.', <b>Tuổi:</b> '.$tuoi.', <b>Nơi sống:</b> '.$noiSong;
}
else{
	echo 'Thông tin chi tiết của mỗi người';	
}
?>