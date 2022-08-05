<?php 

	//abrir la conexión
	include("conexion.php");

	session_start();
	//recibir variables
	$id_consejo = $_SESSION['id_consejo'];
    $sql1 = "select * from consejo_comunal where id_consejo = '$id_consejo'";  
    $inst1 = mysqli_query($con,$sql1);
    $rs1 = mysqli_fetch_array($inst1);
	
	$sugerencia = $_POST["sugerencia"];
	$clasificacion_pag = $_POST["clasificacion_pag"];
	$fecha = date("d-m-Y H:i");
	
	$sql = "insert into sugerencias values (null, '$id_consejo','$clasificacion_pag','$sugerencia','$fecha');";

	$inst = mysqli_query($con,$sql);
	if (mysqli_affected_rows($con) > 0) 
	{

			header("Location: ./../main_consejo.php?pag=sugerencias_consejo&enviado=si");

		
	}
	else
	{

			header("Location: ./../main_consejo.php?pag=sugerencias_consejo");
	}

 ?>