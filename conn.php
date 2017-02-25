<?php 
/*$conexion=mysql_connect("localhost","root","")or die("Error en conexion al servidor::".mysql_error());
mysql_select_db("busesteo",$conexion)or die("Error en la conexion a la BD:::".mysql_error());*/

@$conexion=mysql_connect("127.0.0.1","root","karina02")or die("Error en conexion al servidor::".mysql_error());
mysql_select_db("Alacenapp",$conexion)or die("Error en la conexion a la BD:".mysql_error());

?>
