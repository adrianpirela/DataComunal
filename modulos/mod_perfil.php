<?php 

	//abrir la conexión
	include("conexion.php");

	session_start();
	//recibir variables
	$id_consejo = $_SESSION['id_consejo'];
    $sql1 = "select * from consejo_comunal where id_consejo = '$id_consejo'";  
    $inst1 = mysqli_query($con,$sql1);
    $rs1 = mysqli_fetch_array($inst1);
	
	$direccion_con = $_POST["direccion_con"];
	$nombre_cont = $_POST["nombre_cont"];
	$cedulac = $_POST["cedulac"];
	$prefijoc = $_POST["prefijoc"];
	$telefonoc = $_POST["telefonoc"];
	$correo_cont = $_POST["correo_cont"];

	
	$sql = "update consejo_comunal set direccion_con = '$direccion_con', nombre_cont = '$nombre_cont', cedulac = '$cedulac', prefijoc = '$prefijoc', telefonoc = '$telefonoc', correo_cont = '$correo_cont' where id_consejo = '$id_consejo';";

	$inst = mysqli_query($con,$sql);
	if (mysqli_affected_rows($con) > 0) 
	{
		if ($rs1['tipo_user']=='2') 
		{
			header("Location: ./../main_consejo.php?pag=perfil&update=si");
		}
		else
		{
			header("Location: ./../main_admin.php?pag=perfil&update=si");
		}
		
	}
	else
	{
		if ($rs1['tipo_user']=='2') 
		{
			header("Location: ./../main_consejo.php?pag=perfil");
		}
		else
		{
			header("Location: ./../main_admin.php?pag=perfil");
		}
	}

 ?>