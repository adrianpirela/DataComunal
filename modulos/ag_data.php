<?php 

	//abrir la conexión
	include("conexion.php");

	//recibir variables
	
    $id_programa = $_POST["id_programa"];
    $id_consejo = $_POST["id_consejo"];
    $estadistica_trimestre = $_POST["estadistica_trimestre"];
    $estadistica_anno = $_POST["estadistica_anno"];
	$estadistica_poblacion = $_POST["estadistica_poblacion"];
	$estadistica_beneficiados = $_POST["estadistica_beneficiados"];
	$fecha_registro = date("d-m-Y");

	$estadistica_nobeneficiados = $estadistica_poblacion - $estadistica_beneficiados;
	
	$validacion = "";

	$consulta = "select * from estadisticas_programa_consejo where id_programa = '$id_programa';";
	$query = mysqli_query($con,$consulta);
	$rs = mysqli_fetch_array($query);


	if ($estadistica_trimestre = $rs['estadistica_trimestre'] && $estadistica_anno = $rs['estadistica_anno']) 
	{
			header("Location: ./../main_consejo.php?pag=programas_consejo1&user=".$id_consejo."&program=".$id_programa."&error=si");
	}
	else
	{

		$sql = "insert into estadisticas_programa_consejo values (null,'$id_consejo','$id_programa','$estadistica_trimestre','$estadistica_anno','$estadistica_poblacion','$estadistica_beneficiados','$estadistica_nobeneficiados','$fecha_registro');";

		$inst = mysqli_query($con,$sql);
		mysqli_close($con);
		header("Location: ./../main_consejo.php?pag=programas_consejo1&user=".$id_consejo."&program=".$id_programa."&error=no");

	}


		
	

 ?>