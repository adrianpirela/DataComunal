<?php 

	//abrir la conexión
	include("conexion.php");

	
	//recibir variables
	$correo_con = $_GET['correorec'];
	$respuesta_con = $_POST['respuesta_con'];
	$pass00 = $_POST['pass00'];
    $sql1 = "select * from consejo_comunal where correo_con = '$correo_con'";  
    $inst1 = mysqli_query($con,$sql1);
    $rs1 = mysqli_fetch_array($inst1);
	$id_consejo = $rs1['id_consejo'];


	if (empty($pass00)) {
		header("Location: ./../forgot.php?&error=si");
	}
	if ($respuesta_con === $rs1['respuesta_con']) {

		$sql = "update consejo_comunal set pass = '$pass00' where id_consejo = '$id_consejo';";

		$inst = mysqli_query($con,$sql);

		if (mysqli_affected_rows($con) > 0) 
		{
			header("Location: ./../iniciarsesion.php?&update_pass=si");
	
		}
		else
		{
			header("Location: ./../forgot.php?&error=si");

		}
		
	}
	else
	{
		header("Location: ./../forgot.php?&error=si");
	}


 ?>