<?php 

	//abrir la conexión
	include("conexion.php");

	//recibir variables
	
    $nombre_con_pre = $_POST["nombre_con_pre"];
    $estado_con_pre = $_POST["estado_con_pre"];
    $municipio_con_pre = $_POST["municipio_con_pre"];
    $parroquia_con_pre = $_POST["parroquia_con_pre"];
	$nombre_cont_pre = utf8_decode($_POST["nombre_cont_pre"]);
	$prefijoc_pre = $_POST["prefijoc_pre"];
	$telefonoc_pre = $_POST["telefonoc_pre"];
	$fecha = date("d-m-Y H:i");
	


		$sql = "insert into pre_registro values (null,'$fecha','$nombre_con_pre','$estado_con_pre','$municipio_con_pre','$parroquia_con_pre','$nombre_cont_pre','$prefijoc_pre','$telefonoc_pre','1');";

		$inst = mysqli_query($con,$sql);
		mysqli_close($con);
		header("Location: ./../validacion_registro.php?&pre_registro=si");
	

 ?>