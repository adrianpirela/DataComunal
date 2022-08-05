<!-- funciones.php -->
<?php 


// funcion para mensaje exitoso
function msjsuccess ( $msj ){
	$msjsuccess = "
		<div class='' style='margin-left: 250px; margin-bottom: 30px;'>
			<span style='color: #15B34D; font-style: italic; font-size: 16px;'>$msj</span>
		</div>
		";
	return $msjsuccess;
}

function msjsuccess1 ( $msj ){
	$msjsuccess1 = "
			<span style='color: #15B34D; font-style: italic; font-size: 13px;'>$msj</span>
	
		";
	return $msjsuccess1;
}

// funcion para mensaje informativo
function msjinfo ( $msj ){
	$msjinfo = "
		<div class='alert alert-info'>
			<button class='close' data-dismiss='alert'><span >&times</span></button>
			<strong>Alerta!</strong> $msj
		</div>
		";
	return $msjinfo;
}

// funcion para mensaje de advertencia
function msjwarning ( $msj ){
	$msjwarning = "
		<div class='alert alert-warning'>
			<button class='close' data-dismiss='alert'><span >&times</span></button>
			<strong>Alerta!</strong> $msj
		</div>
		";
	return $msjwarning;
}

// funcion para mensaje de error
function msjdanger ( $msj ){
	$msjdanger = "
		<div class=''>
			<span style='color: #FF0000; font-style: italic; font-size: 13px;'>$msj</span> 
		</div>
		";
	return $msjdanger;
}

function msjdanger1 ( $msj ){
	$msjdanger1 = "

		<div class='' style='margin-left: 270px; margin-bottom: 30px;'>
			<span style='color: #FF0000; font-style: italic; font-size: 13px;'>$msj</span>
		</div>
			
		";
	return $msjdanger1;
}











// funcion para validad un numero de punto flotante
function validarFlotante ($Cad) {
	// prueba si la entrada es un numero de punto flotante, con un signo opcional
	// preg_match realiza búsquedas en cadenas de texto mediante expresiones regulares. Devolverá el valor booleano.
	return preg_match("/^-?([0-9])+([\.]([0-9])*)?$/", $Cad );
}

// funcion para validad cadenas alfabeticas
function validaAlfa ($Cad) {
	// prueba si la entrada son cadenas alfabeticas
	return preg_match("/^[a-zñÑáéíóúÁÉÍÓÚ]*$/i", $Cad );
}

// funcion para validad cadenas alfabeticas con espacio
function validaAlfaEsp ($Cad) {
	// prueba si la entrada son cadenas alfabeticas con espacio
	return preg_match("/^[a-zñÑáéíóúÁÉÍÓÚ ]*$/i", $Cad );
}

// funcion para validad cadenas alfabeticas con espacio especiales
function validaAlfaEspecial ($Cad) {
	// prueba si la entrada es una cadena alfanumerica con .
	return preg_match("/^[a-zñÑáéíóúÁÉÍÓÚ \.\,]*$/i", $Cad );
}
	
// funcion para validad una cadena alfanumerica
function validaAlfaNum ($Cad) {
	// prueba si la entrada es una cadena alfanumerica
	return preg_match("/^[a-zñÑ0-9]*$/i", $Cad );
}

// funcion para validad un entero
function validaEntero ($texto) {
	// prueba si la entrada es un entero, sin signo
	return preg_match("/^[0-9]+$/", $texto );
}

// funcion para validad un entero con signo opcional
function validaEnteroConSigno ($Cad) {
	// prueba si la entrada es un entero, con un signo opcional
	return preg_match("/^-?([0-9])+$/", $Cad );
}	
	
// Funcion para validar una direccion de correo electronico
function validarDirCorreoElec ($Cad) {
	// prueba si la entrada coincide con los patrones de correo electronico
	return eregi ("^([a-z0-9_-])+([\.a-z0-9_-])*@([a-z0-9-])+(\.[a-z0-9-]+)*\.([a-z]{2,6})$", $Cad);
}

// funcion para eliminar doble espacios en blanco o más de la cadena
function validaUnEsp ($Cad) {
	// prueba si la entrada son cadenas alfabeticas
	return preg_replace('/\s+/', ' ', $Cad);
}

// funcion para mensaje formatear una cadena
function formatearCadena($cadena){ 
    $tofind = "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ· ";
    $replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn-_";
    $cadena = utf8_decode($cadena);
    $cadena = strtr($cadena, utf8_decode($tofind), $replac);
    // cadena en minúscula
    $cadena = strtolower($cadena);
    // cadena en mayúscula
    // $cadena = strtoupper($cadena);
    return utf8_encode($cadena);
}

// funcion para mensaje formatear una cadena con espacio
function formatearCadenaEsp($cadena){ 
    $tofind = "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ· ";
    $replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn- ";
    $cadena = utf8_decode($cadena);
    $cadena = strtr($cadena, utf8_decode($tofind), $replac);
    // cadena en minúscula
    $cadena = strtolower($cadena);
    // cadena en mayúscula
    // $cadena = strtoupper($cadena);
    return utf8_encode($cadena);
}









// funcion para validar cualquier fecha
function validacualquierfecha($fecha){
	// strtotime(time) : El rango válido de una marca de tiempo es típicamente desde Fri, 13 Dec 1901 20:45:54 UTC a Tue, 19 Jan 2038 03:14:07 UTC. (Estas son las fechas que se corresponden con los valores máximo y mínimo de un entero con signo de 32 bit.)
	$fechatemp=date("Y-m-d",strtotime($fecha));

	if ( $fechatemp == '1970-01-01' )
	{
		if ( $fechatemp == $fecha )
		{
			$valida = true;
		}
		else
		{
			$valida = false;
		}
	}
	else
	{
		// descomponer fecha año-mes-dia
		$arrayFecha = explode("-", $fechatemp, 3);
		$year = $arrayFecha[0];
		$mes = $arrayFecha[1];
		$dia = $arrayFecha[2];

		$valida=checkdate($mes,$dia,$year);
	}
	// retorna booleano 1 ó 0
	return $valida;
}

// funcion para cambiar la fecha de cualquier formato a año-mes-día
function cambiarcualquierfecha($fecha){
	$fecha=date("Y-m-d",strtotime($fecha));
	return $fecha;
}

// funcion para descomponer fecha año-mes-dia
function descomponerfecha($fecha){
	//con  "/",
    //con  "-",
    //o con  "."

	$arrayFecha = explode("-", $fecha, 3);
	$year = $arrayFecha[0];
	$mes = $arrayFecha[1];
	$dia = $arrayFecha[2];

	$fecha="$year-$mes-$dia";

	return $fecha;
	// return $year;
	// return $mes;
	// return $dia;
}

// funcion para validar fecha en calendario del año 1 al 32767
function validafecha($fecha){

	// descomponer fecha año-mes-dia
	$arrayFecha = explode("-", $fecha, 3);
	$year = $arrayFecha[0];
	$mes = $arrayFecha[1];
	$dia = $arrayFecha[2];

	$valida=checkdate($mes,$dia,$year);

	// retorna booleano 1 ó 0
	return $valida;
}

// funcion para validar fecha en calendario
function datecheck($input,$format=""){
	$separator_type= array(
	   //con  "/",
	   //con  "-",
	   //o con  "."
	   "-"
	);
	foreach ($separator_type as $separator) {
	    $find= stripos($input,$separator);
	    if($find<>false){
	        $separator_used= $separator;
	    }
	}
	$input_array= explode($separator_used,$input);
	if ($format=="mdY") {
	    return checkdate($input_array[0],$input_array[1],$input_array[2]);
	} elseif ($format=="Ymd") {
	    return checkdate($input_array[1],$input_array[2],$input_array[0]);
	} else {
	    return checkdate($input_array[1],$input_array[0],$input_array[2]);
	}
	$input_array=array();
}

// funcion para cambiar la fecha al formato año-mes-día
function cambiarfecha($fecha){
	list($dia,$mes,$year)=explode("-",$fecha);
	$fecha="$year-$mes-$dia";
	return $fecha;
}
 
// funcion para cambiar la fecha al formato día-mes-año
function cambiarfechadeBD($fecha){
	//formato fecha americana
	$fecha=date("d-m-Y",strtotime($fecha));
	//El nuevo valor de la variable: $fecha2="dd-mm-aaaa"
	return $fecha;
}

// funcion para verificar el Rango de Años de una Fecha
function verificaryears($fecha,$yearsmax,$yearsmin) {
	list($d,$m,$a) = explode("-",$fecha);

	// $yearsmax= 100;
	// $yearsmin= 10;


	if ( $a >= date("Y")-$yearsmax and $a <= date("Y")-$yearsmin )
	{
		$year = true; // Rango correcto
	}else
	{
		$year = false; // Rango incorreto
	}
	return $year;
}

// Funcion para calcular la edad a partir de la fecha de nacimiento
// Recibe parametro $nacimiento (debe ser en formato yyyy-mm-dd)
// Devuelve la edad calculada
function Calcularedad($nacimiento) { 
	list($year, $mes, $dia) = explode("-", $nacimiento);
	$yeardif = date("Y") - $year;
	$mesdif = date("m") - $mes;
	$diadif = date("d") - $dia;
	
	if (($diadif < 0) or ($mesdif < 0)) {
		$yeardif = $yeardif - 1;
	}
	
	if ($nacimiento == '') { $yeardif = ''; }	
	
	return $yeardif;
}

// Funcion para restar años a la fecha actual
// Salida bajo el formato yyyy-mm-dd
function subtractyearsBD($years) { 
	date("d-m-Y");
	$Y=date("Y")-$years;
	$fecha=date($Y."-m-d");
	
	return $fecha;	
}

//Funcion para restar años a la fecha actual
//Salida bajo el formato dd-mm-yyyy
function subtractyears($years) { 
	date("d-m-Y");
	$Y=date("Y")-$years;
	$fecha=date("d-m-".$Y);
	
	return $fecha;
}


?>