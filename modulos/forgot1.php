<?php 

	//abrir la conexión
	include("conexion.php");

	//recibir variables
	$correo_con = $_POST['correo_con'];
    $sql1 = "select * from consejo_comunal where correo_con = '$correo_con'";  
    $inst1 = mysqli_query($con,$sql1);
    $rs1 = mysqli_fetch_array($inst1);
	


	if (empty($correo_con)) {
		header("Location: ./../forgot1.php?&error=si");
	}
	if ($correo_con === $rs1['correo_con']) {
		header("Location: ./../forgot.php?&correorec=".$rs1['correo_con']."");
	}
	else
	{
		header("Location: ./../forgot1.php?&error=si");
	}


 ?>