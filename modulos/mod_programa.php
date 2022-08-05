<?php 

	//abrir la conexión
	include("conexion.php");

	session_start();
	//recibir variables
	
	$id_programa = $_POST['id_programa'];
	$comentario_programa = $_POST['comentario_programa'];
	$programa_dirigido = $_POST['programa_dirigido'];

    $sql1 = "select * from programas_sociales where id_programa = '$id_programa'";  
    $inst1 = mysqli_query($con,$sql1);
    $rs1 = mysqli_fetch_array($inst1);
	
	
	$sql = "update programas_sociales set comentario_programa = '$comentario_programa', programa_dirigido = '$programa_dirigido' where id_programa = '$id_programa';";

	$inst = mysqli_query($con,$sql);
	if (mysqli_affected_rows($con) > 0) 
	{
			header("Location: ./../main_admin.php?pag=programas_admin&update=si");
	
	}
	else
	{
	
			header("Location: ./../main_admin.php?pag=programas_admin&update=no");
	}

 ?>