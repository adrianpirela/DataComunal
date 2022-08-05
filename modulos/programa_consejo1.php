<?php 

	include("modulos/conexion.php");
	session_start();
	$id_consejo = $_SESSION['id_consejo'];
	$id_programa = $_POST['id_programa'];

	header("Location: ./../main_consejo.php?pag=programas_consejo1&user=".$id_consejo."&program=".$id_programa.""); 

 ?>