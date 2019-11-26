<?php
$fp = "textfile.rar";
$fo = fopen($fp, "rb");
header("Content-Type: application/octet-stream");
header("Content-Length: ".filesize($fp)); 
header("Content-Disposition: attachment; filename=".$fp);
$fr = fpassthru($fo);
$fc = fclose($fo);
?>