<?php 

	$con = mysqli_connect("localhost","root","","datacomunal");

	if (mysqli_connect_errno())
	  {
	  echo "Falla al conectar con MySQL: " . mysqli_connect_error();
	  }
	
 ?>