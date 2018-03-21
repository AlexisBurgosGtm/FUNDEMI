<?php
	$servername = "SERVERALEXIS\SQLEXPRESS";
	$connectioninfo = array("DATABASE" => "SALES","UID"=>"iEx","PWD"=>"iEx","CharacterSet"=>"UTF-8");
	//$servername = "sql5008.site4now.net";
	//$connectioninfo = array("DATABASE" => "DB_A36675_AresAdsOnline","UID"=>"DB_A36675_AresAdsOnline_admin","PWD"=>"razors1805","CharacterSet"=>"UTF-8");
	//$connectioninfo = array("DATABASE" => "ARES","UID"=>"iEx","PWD"=>"iEx","CharacterSet"=>"UTF-8");
	$connn = sqlsrv_connect($servername,$connectioninfo);
	if ($connn)
		{
	#	echo "Conectado exitosamente";
			$empnit = '';
		}
	else
		{
		echo "Falló la conexión";
		die(print_r(sqlsrv_errors(),true));
		}
?>
