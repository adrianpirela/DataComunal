
<?php 	

	include("modulos/conexion.php");


	$correo_con = $_POST['correo_con'];
	$pass = $_POST['pass'];

	if (empty($correo_con)) 
 	{

 		header("Location: iniciarsesion.php?&error=si");
 		exit();
  	}

  	if (empty($pass)) 
 	{
 	
 		header("Location: iniciarsesion.php?&error=si");
 		exit();
  	}

	$correo_con = mysqli_real_escape_string($con, $correo_con);
	$result = mysqli_query($con, "select * from consejo_comunal where correo_con = '".$correo_con."'");

	if ($row = mysqli_fetch_array($result)) 
	{
		
		if ($row['correo_con']===$correo_con && $row['pass']===$pass) {
			

			if ($row['estatus'] === '2') {
				header("Location: iniciarsesion.php?&inhabilitado=si");
			}

			else
			{
				if ($row['tipo_user']==='2') {
				session_start();
			header("Location: main_consejo.php");
			$_SESSION['id_consejo'] = $row['id_consejo'];
			$id_consejo = $row['id_consejo'];
			$fecha = date("d-m-Y H:i");
			$sql = "update consejo_comunal set ultimo_inicio = '$fecha' where id_consejo = '$id_consejo';";
			$inst = mysqli_query($con,$sql);

			}
			else
			{
				session_start();
			header("Location: main_admin.php");
			$_SESSION['id_consejo'] = $row['id_consejo'];
			$id_consejo = $row['id_consejo'];
			$fecha = date("d-m-Y H:i");
			$sql = "update consejo_comunal set ultimo_inicio = '$fecha' where id_consejo = '$id_consejo';";
			$inst = mysqli_query($con,$sql);
			}

			}

		
		}
		else
		{

			header("Location: iniciarsesion.php?&error=si");
 		exit();

		}

	   }

	   else

	   {

	   	header("Location: iniciarsesion.php?&error=si");


	   }

 ?>