
<?php 
  error_reporting(E_ERROR | E_PARSE); // Desactiva la notificación y warnings de error en php.

  include_once('funciones.php');
  include_once('modulos/conexion.php');


        $codigo_validacion = $_GET['user'];
        $sql = "select * from consejo_comunal where codigo_validacion = '$codigo_validacion'";  
        $inst = mysqli_query($con,$sql);
        $rs = mysqli_fetch_array($inst);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>DataComunal</title>
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <script src="js/jquery-3.2.1.js"></script>
<script src="js/materialize.min.js"></script>
 
</head>
<link rel="shortcut icon" href="imagenes/miniatura.png">
<body>

<a class="logo" href="index.php"><img class="logo2 responsive-img" src="imagenes/logo.png"></a>
 <script src="js/funciones.js"></script>
<div class="container">
            <div class="z-depth-5 white row">
                <div class="text-registro col s12"><h5 class="white-text">Registro</h5></div>
                <div class="row" style="margin-bottom: 0px">
                    <div class="col s12">
                            <form name="form1" class="col s12" action="modulos/registro.php" method="post" onsubmit='return validarform();'>
                            <div style="padding: 30px">
                                <div class="row">
                                    <div class="input-field col s12 m12">
                                      <input disabled name="nombre_con" type="text" <?php echo "value='".$rs["nombre_con"]."'" ?> >
                                      <label class="active" for="nombre_con">Nombre Consejo Comunal</label>
                                    </div>
                                </div>
                                <?php 
                                if ( $_GET['error']=='si') 
                                {
                                 echo "<script>  
                                 Materialize.toast('Correo del consejo comunal ya se encuentra registrado.!', 10000); 
                                 </script>";
                               }
                               ?>
                        <input type="hidden" name="codigo_validacion" <?php echo "value='".$codigo_validacion."'";  ?>>
                                
                                <div class="row">
                                  <div class="input-field col s12 m6">
                                    <select name="estado_con" disabled="">
                                     <?php echo " <option value='".$rs["estado_con"]."' selected disabled>".$rs["estado_con"]."</option>" ?>
                                    </select>
                                  </div>

                                  <div class="input-field col s12 m6">
                                    <select name="municipio_con" disabled="">
                                      <?php echo " <option value='".$rs["municipio_con"]."' selected disabled>".$rs["municipio_con"]."</option>" ?>
                                    </select>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="input-field col s12 m6">
                                    <select name="parroquia_con" disabled="">
                                      <?php echo " <option value='".$rs["parroquia_con"]."' selected disabled>".$rs["parroquia_con"]."</option>" ?>
                                    </select>
                                    <label>Parroquia</label>
                                  </div>

                                   <div class="input-field col s12 m6">
                                        <input name="creacion_con" type="text" class="datepicker" placeholder="01/01/2000"/>
                                        <label for="creacion_con">Fecha de Fundacion</label>
                                         <span id='errorFcrea' class='error' >Campo Requerido</span>
                                        
                                    </div>

                                </div>

                                 <div class="row">
                                  <div class="input-field col s12 m12">
                                    <input name="direccion_con" type="text" class="validate"></input>
                                    <label for="direccion_con">Direcciòn</label>
                                     <span id='errorDir' class='error' >Campo Requerido</span>
                                  </div>
                                </div>


                                <div class="row">
                                  <div class="input-field col s12 m12">
                                    <input name="correo_con" type="email" class="validate"></input>
                                    <label for="correo_con" data-error="Correo Invalido" data-success="Correo Valido">Correo Electronico</label>
                                     <span id='errorCorreo' class='error' >Campo Requerido</span>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="input-field col s12">
                                    <input name="pregunta_con" type="text" class="validate"></input>
                                    <label for="pregunta_con">Pregunta de Seguridad</label>
                                     <span id='errorPre' class='error' >Campo Requerido</span><br>
                                     <span id='errorPre2' class='error' >La pregunta solo debe contener letras</span>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="input-field col s12">
                                    <input name="respuesta_con" type="text" class="validate"></input>
                                    <label for="respuesta_con">Respuesta</label>
                                     <span id='errorRes' class='error' >Campo Requerido</span><br>
                                     <span id='errorRes2' class='error' >La respuesta solo debe contener letras</span>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="input-field col s12 m6">
                                    <input name="pass" type="password" class="validate"></input>
                                    <label for="pass">Contraseña</label>
                                    <span id='errorPass' class='error' >Campo Requerido</span><br>
                                    <span id='errorPassC' class='error' >Las contraseñas no coinciden</span>
                                  </div>

                                  <div class="input-field col s12 m6">
                                    <input name="pass2" type="password" class="validate"></input>
                                    <label for="pass2">Validar Contraseña</label>
                                     <span id='errorPass2' class='error' >Campo Requerido</span>
                                  </div>
                                </div>


                                <h5>Informaciòn de Contacto</h5>
                                <br>

                                <div class="row">
                                  <div class="input-field col s12 m12">
                                    <input name="nombre_cont" type="text" class="validate"></input>
                                    <label for="nombre_cont">Nombre Completo Presidente del Consejo</label>
                                     <span id='errorNomC' class='error' >Campo Requerido</span><br>
                                     <span id='errorNomC2' class='error' >El nombre solo debe contener letras</span>
                                  </div>
                                </div>

                                  <div class="row">
                                  <div class="input-field col s12 m6">
                                    <input name="cedulac" id="cedulac" type="text" class="validate"></input>
                                    <label for="cedulac">Cedula</label>
                                     <span id='errorCedula' class='error' >Campo Requerido</span><br>
                                     <span id='errorCedula2' class='error' >La cedula solo debe contener numeros</span>
                                  </div>

                                  

                                    <div class="input-field col s2 m2 l2">
                                      <select name="prefijoc">
                                        <option value="" selected disabled>-----</option>
                                        <option value="0414">0414</option>
                                        <option value="0424">0424</option>
                                        <option value="0416">0416</option>
                                        <option value="0426">0426</option>
                                        <option value="0412">0412</option>
                                      </select>
                                      <label>Prefijo</label>
                                      <span id='errorPref' class='error' >Campo Requerido</span>
                                    </div>
                                    <div class="input-field col s4 m4 l4">
                                    <input name="telefonoc" type="text" class="validate"></input>
                                    <label for="telefonoc">Numero de Telefono</label>
                                     <span id='errorTele' class='error' >Campo Requerido</span><br>
                                     <span id='errorTele2' class='error' >Telefono solo debe contener numeros</span>
                                  </div>
                           
                                </div>

                                <div class="row">
                                  <div class="input-field col s12 m12">
                                    <input name="correo_cont" type="email" class="validate"></input>
                                    <label for="correo_cont" data-error="Correo Invalido" data-success="Correo Valido">Correo Electronico</label>
                                     <span id='errorCorreC' class='error' >Campo Requerido</span>
                                  </div>
                                </div>


                              </div>
                            <div class="row grey lighten-4" style="margin-bottom: 0px;height: 70px">
                             
                                    <button style="margin-top: 15px;" type="submit" name="action" class="col s12 offset-m3 m6 btn btn-medium waves-effect">Registrar</button>
                               
                            </div>
                                </form>
                    </div>

                </div>

            </div>
            <span><a href="iniciarsesion.php" style="font-size: 16px;  font-style: bold; margin-left: 230px">Ya estoy registrado</a></span>
            <br>
            <br>
            </div> 

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script>

<script>
    $(document).ready(function() {
    $('select').material_select();
    $('input[name="telefonoc"]').mask('0000000');
    // $('input[name="cedulac"]').mask('V-00000000');

     var options = {
                translation: {
                    '0': {pattern: /\d/},
                    '1': {pattern: /[1-9]/},
                    '9': {pattern: /\d/, optional: true},
                    '#': {pattern: /\d/, recursive: true},
                    'C': {pattern: /V|v|E|e/, fallback: 'V'}
                }
            };

    $('#cedulac').mask('C-19999999', options);
            $('#cedulac').on('input', function (e) {
                var cedulac = $(this).val();
                if (cedulac.length > 9) {
                    var cedula = cedulac.substring(2);
                    if (cedula > 80000000) {
                        $(this).val('E-' + cedula);
                    }
                }
              });
          
    var pickadate = $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 120,
            max: new Date(),
            today: false,
            clear: false,
            close: 'Enviar',
            format: 'dd/mm/yyyy',
            monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'],
            showMonthsShort: undefined,
            showWeekdaysFull: undefined,
            labelMonthNext: 'Mes siguiente',
            labelMonthPrev: 'Mes anterior',
            labelMonthSelect: 'Seleccione el mes',
            labelYearSelect: 'Seleccione el año'
        });
  });
</script>

</html>