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
	$pass1 = $_POST["pass1"];


	if ($pass == $rs1['pass']) {
		
		$sql = "update consejo_comunal set pass = '$pass1' where id_consejo = '$id_consejo';";
		$inst = mysqli_query($con,$sql);

		if (mysqli_affected_rows($con) > 0) 
		{

		if ($rs1['tipo_user'] == '2') {
			header("Location: ./../main_consejo.php?pag=cambio_password&update=si");
		}
		else
		{
			header("Location: ./../main_admin.php?pag=cambio_password&update=si");
		}
		

	}
	else
	{

		if ($rs1['tipo_user'] == '2') 
		{
			header("Location: ./../main_consejo.php");
		}
		else
		{
			header("Location: ./../main_admin.php");
		}

		
	}

	}
	else
	{
		if ($rs1['tipo_user'] == '2') {
			header("Location: ./../main_consejo.php?pag=cambio_password&update=no");
		}
		else
		{
			header("Location: ./../main_admin.php?pag=cambio_password&update=no");
		}


	}


 ?>