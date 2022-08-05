<?php 

	//abrir la conexión
	include("conexion.php");

	$id_programa = $_POST['id_programa'];
    $sql1 = "select * from programas_sociales where id_programa = '$id_programa';";  
    $inst1 = mysqli_query($con,$sql1);
    $rs1 = mysqli_fetch_array($inst1);
	 

    	if (empty($id_programa)) {
    		header("Location: ./../main_admin.php?pag=mod_programas&error=si");
    	}
    	else
    	{
    				if ($id_programa = $rs1['id_programa']) 
					{
					header("Location: ./../main_admin.php?pag=mod_programas1&user=".$rs1['id_programa']."");
					}
					else
					{
						header("Location: ./../main_admin.php?pag=mod_programas&error=si");
					}

    	}
		

 ?>