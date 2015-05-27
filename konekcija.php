<?php 

$dbhost="localhost"; 
$dbusername="root"; 
$dbpassword=""; 
$dbname="stomatoloska_ordinacija"; 

 $veza = new PDO("mysql:dbname=$dbname;host=$dbhost;charset=utf8",$dbusername, $dbpassword);
 $veza->exec("set names utf8");

?>