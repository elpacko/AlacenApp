<?php
include("conn.php");
	$resultado = 'Usuario o password incorrectos';
    $sql = "select * from usuarios;";
    $row = mysql_query($sql,$conexion);
	
	if (!$row)
            $resultado  =  "Error: ".$sql.'<br>'.mysql_error();
            $total = mysql_num_rows($row);

		while($rs = mysql_fetch_array($row)){
			if($rs["nombreUsuario"] == $_POST['usuario'] && $rs["password"] == $_POST['password'])
			{
				$resultado = 'ok';
			}
			 
			 
			
		}
		echo $resultado;

?>