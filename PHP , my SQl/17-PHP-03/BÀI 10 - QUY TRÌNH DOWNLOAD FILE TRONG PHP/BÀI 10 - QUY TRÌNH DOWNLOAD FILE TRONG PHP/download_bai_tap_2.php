<?php
$filename = $_GET["file"];
$fp = "file/".$filename;
$fo = fopen($fp, "rb");
header("Content-Type: application/octet-stream");
header("Content-Length: ".filesize($fp)); 
header("Content-Disposition: attachment; filename=".$filename);
$fr = fpassthru($fo);
$fc = fclose($fo);
?>