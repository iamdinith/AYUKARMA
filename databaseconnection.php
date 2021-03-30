<?php

$server = "LAPTOP-85RN73DG";// use your computer server name
$connectionInfo = array("Database"=>"AYUKARMA");
$conn = sqlsrv_connect($server,$connectionInfo);
if(!$conn){
	echo"connection unsuccess.<br/>";
die(print_r(sqlsrv_errors(), true));
}
?>