<?php 

	//abrir la conexión
	include("conexion.php");

	$id_pre = $_POST['id_pre'];
	$estatus_pre = $_POST['estatus_pre'];

	$boton = $_POST['boton'];

	if ($boton === 'opcion1') {
		$sql = "update pre_registro set estatus_pre = '2' where id_pre = '$id_pre';";

		$inst = mysqli_query($con,$sql);
		if (mysqli_affected_rows($con) > 0) 
		{

			function generarCodigo($longitud=6) {
				$key = '';
				$pattern = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$max = strlen($pattern)-1;
				for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
					return $key;
			}

				//Ejemplo de uso

				$codigo = generarCodigo(); // genera un código de 6 caracteres de longitud.


			$sql0 = "select * from pre_registro where id_pre = '$id_pre';";

			$inst0 = mysqli_query($con,$sql0);
        	$rs = mysqli_fetch_array($inst0);

			$sql1 = "insert into consejo_comunal values (null,'$codigo','','2','1','','".$rs['nombre_con_pre']."','".$rs['estado_con_pre']."','".$rs['municipio_con_pre']."','".$rs['parroquia_con_pre']."','','','','','','','','','','','','1');";

			$inst1 = mysqli_query($con,$sql1);

			$sql2 = "delete from pre_registro where id_pre = '$id_pre';";

			$inst2 = mysqli_query($con,$sql2);

			header("Location: ./../main_admin.php?pag=aprobar_consejo&update_estatus_pre=si");
		}
		else
		{
			header("Location: ./../main_admin.php?pag=aprobar_consejo&update_estatus_pre=no");
		}
	}
	else
	{
		$sql = "delete from pre_registro where id_pre = '$id_pre';";

		$inst = mysqli_query($con,$sql);
		if (mysqli_affected_rows($con) > 0) 
		{
			header("Location: ./../main_admin.php?pag=aprobar_consejo&update_estatus_pre=si");
		}
		else
		{
			header("Location: ./../main_admin.php?pag=aprobar_consejo&update_estatus_pre=no");
		}

	}

 ?>