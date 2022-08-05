<?php 

	//abrir la conexión
	include("conexion.php");

	$codigo = $_POST['codigo'];
    $sql1 = "select * from consejo_comunal where codigo_validacion = '$codigo';";  
    $inst1 = mysqli_query($con,$sql1);
    $rs1 = mysqli_fetch_array($inst1);
	 

    	if (empty($codigo)) {
    		header("Location: ./../validacion_registro.php?&validacion=no");
    	}
    	else
    	{
    		if ($rs1['estatus_re'] === '2' ) {
    			header("Location: ./../validacion_registro.php?&validacion=no");
    		}
    		else
    		{

    				if ($codigo = $rs1['codigo_validacion']) 
					{
					header("Location: ./../registro.php?&user=".$rs1['codigo_validacion']."");
					}
					else
					{
						header("Location: ./../validacion_registro.php?&validacion=no");
					}

    		}

    	}
		

 ?>