<?php
include("conn.php");
$sql = "select 
	NombreArticulo 
	from articulos 
	where NombreArticulo ='".$_POST['NombreArticulo']."' LIMIT 1;";
	$row = mysql_query($sql,$conexion);
	if ($row){
		$total = mysql_num_rows($row);
		echo $total;
	} ?>