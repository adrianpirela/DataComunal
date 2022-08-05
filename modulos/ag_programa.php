<?php 

	//abrir la conexión
	include("conexion.php");

	//recibir variables
	
    $nombre_programa = $_POST["nombre_programa"];
    $programa_dirigido = $_POST["programa_dirigido"];
    $comentario_programa = $_POST["comentario_programa"];
	$fecha = date("d-m-Y");
	
	// validar
	$consulta = "select * from programas_sociales;";
	$query = mysqli_query($con,$consulta);
	$rs = mysqli_fetch_array($query);


		if ($nombre_programa === $rs['nombre_programa']) {
		header("Location: ./../main_admin.php?pag=ag_programa&error=si");
		}
		else
		{

			$sql = "insert into programas_sociales values (null,'$fecha','$nombre_programa','$comentario_programa','$programa_dirigido');";

		$inst = mysqli_query($con,$sql);
		mysqli_close($con);
		header("Location: ./../main_admin.php?pag=programas_admin&error=no");
		}

		
	

 ?>