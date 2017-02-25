<?php
include("conn.php");
	
    $sql = "select NombreArticulo, DATEDIFF( siguienteExpirar,CURDATE()) AS diasExpiracion from articulos where DATEDIFF( siguienteExpirar,CURDATE()) <5 order by siguienteExpirar;";
    $row = mysql_query($sql,$conexion);
	
	if (!$row)
             $total = mysql_num_rows($row);

		while($rs = mysql_fetch_array($row)){
		 
				?>
                <li>
                  <!-- drag handle -->
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <!-- checkbox -->
                  <input type="checkbox" value="">
                  <!-- todo text -->
                  <span class="text"><?php echo $rs["NombreArticulo"] ?></span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> en <?php echo $rs["diasExpiracion"] ?> dias</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>


				<?php
			 
			 
			 
			
		}
		 

?>