<?php 

session_start();

if(!$_SESSION['autentificado'])
{
header("location: index.php");
}

$inactivo=60;

if (isset($_SESSION['tiempo']))
{
	$vida_session= time() - $_SESSION['tiempo'];
	if($$vida_session>$inactivo)
	{
		session_destroy();
header("location: index.php");
	}
}


$_SESSION['tiempo']=time();
 ?>
