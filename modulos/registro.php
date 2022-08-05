<?php 

	//abrir la conexión
	include("conexion.php");

	//recibir variables
	
    $nombre_con = $_POST["nombre_con"];
    $codigo_validacion = $_POST["codigo_validacion"];
    $estado_con = $_POST["estado_con"];
    $municipio_con = $_POST["municipio_con"];
    $parroquia_con = $_POST["parroquia_con"];
    $creacion_con = $_POST["creacion_con"];
	$direccion_con = $_POST["direccion_con"];
    $correo_con = $_POST["correo_con"];
    $pregunta_con = $_POST["pregunta_con"];
	$respuesta_con = $_POST["respuesta_con"];
    $pass = $_POST["pass"];
	$nombre_cont = utf8_decode($_POST["nombre_cont"]);
	$cedulac = $_POST["cedulac"];
	$prefijoc = $_POST["prefijoc"];
	$telefonoc = $_POST["telefonoc"];
	$correo_cont = $_POST["correo_cont"];
	$fecha = date("d-m-Y H:i");
	
	//validar
	$consulta = "select * from consejo_comunal where correo_con = '$correo_con';";
	$query = mysqli_query($con,$consulta);
	$rs = mysqli_fetch_array($query);

	if (mysqli_num_rows($query) > 0) {

		header("Location: ./../registro.php?&error=si&user=".$codigo_validacion."");

	}else{

		if ($correo_con === $rs['correo_con']) {
			header("Location: ./../registro.php?&error=si&user=".$codigo_validacion."");
		}
		else
		{

			$sql = "update consejo_comunal set fecha_creacion = '$fecha', tipo_user = '2',estatus = '1',ultimo_inicio = '$fecha',creacion_con = '$creacion_con',direccion_con = '$direccion_con',correo_con = '$correo_con',pregunta_con = '$pregunta_con',respuesta_con = '$respuesta_con',pass = '$pass',nombre_cont = '$nombre_cont',cedulac = '$cedulac',prefijoc = '$prefijoc',telefonoc = '$telefonoc',correo_cont = '$correo_cont',estatus_re = '2' where codigo_validacion = '$codigo_validacion';";

		$inst = mysqli_query($con,$sql);
		mysqli_close($con);
		header("Location: ./../iniciarsesion.php?&registro=si");
		}

		
	}
	

 ?>