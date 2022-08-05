<?php 

	//abrir la conexión
	include("conexion.php");

	session_start();
	//recibir variables
	$id_consejo = $_SESSION['id_consejo'];
    $sql1 = "select * from consejo_comunal where id_consejo = '$id_consejo'";  
    $inst1 = mysqli_query($con,$sql1);
    $rs1 = mysqli_fetch_array($inst1);
	
	$pass = $_POST["pass"];

	if (empty($pass)) {
		header("Location: ./../main_consejo.php?pag=cambio_correo1&update_correo=no");
	}
	if ($pass === $rs1['pass']) {
		header("Location: ./../main_consejo.php?pag=cambio_correo");
	}
	else
	{
		header("Location: ./../main_consejo.php?pag=cambio_correo1&update_correo=no");
	}


 ?>