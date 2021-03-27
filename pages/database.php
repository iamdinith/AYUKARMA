<?php 

	$server = "DESKTOP-R8SRBBL";// Computer Server Name
	$database = "AYUKARMA"; // Database Name

	$connectionInfo = array("Database"=>$database);
	$conn = sqlsrv_connect($server,$connectionInfo);

	if($conn)
	{

	}
	else
	{
	  echo"connection unsuccess.<br/>";
	die(print_r(sqlsrv_errors(), true));
	}

 ?>