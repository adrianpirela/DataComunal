<?php 

	//abrir la conexión
	include("conexion.php");

	$id_consejo = $_POST['id_consejo'];
	$estatus = $_POST['estatus'];

	if ($estatus === '1') {
		$sql = "update consejo_comunal set estatus = '2' where id_consejo = '$id_consejo';";

	$inst = mysqli_query($con,$sql);
	if (mysqli_affected_rows($con) > 0) 
	{
		header("Location: ./../main_admin.php?pag=ad_consejo&update_estatus=si");
	}
	else
	{
		header("Location: ./../main_admin.php?pag=ad_consejo&update_estatus=no");
	}

	}
	else
	{

	$sql = "update consejo_comunal set estatus = '1' where id_consejo = '$id_consejo';";

	$inst = mysqli_query($con,$sql);
	if (mysqli_affected_rows($con) > 0) 
	{
		header("Location: ./../main_admin.php?pag=ad_consejo&update_estatus=si");
	}
	else
	{
		header("Location: ./../main_admin.php?pag=ad_consejo&update_estatus=no");
	}
	}



 ?>