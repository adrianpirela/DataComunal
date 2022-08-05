<?php 

	//abrir la conexión
	include("conexion.php");

	//recibir variables
	
    $id_programa = $_POST["id_programa"];
	
	// validar

		if (empty($id_programa)) {
		header("Location: ./../main_admin.php?pag=programas_admin&erroreli=si");
		}
		else
		{

			$sql = "delete * from programas_sociales where id_programa = '$id_programa';";

		$inst = mysqli_query($con,$sql);
		mysqli_close($con);
		header("Location: ./../main_admin.php?pag=programas_admin&eli=si");
		}

		
	

 ?>