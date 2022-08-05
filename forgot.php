
<?php 
  error_reporting(E_ERROR | E_PARSE); // Desactiva la notificación y warnings de error en php.
  include_once('modulos/conexion.php');
  include_once('funciones.php');
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>DataComunal - Recuperar Contraseña</title>
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <script src="js/jquery-3.2.1.js"></script>
  <script src="js/materialize.min.js"></script>
</head>
<link rel="shortcut icon" href="imagenes/miniatura.png">
<body>

<a class="logo" href="index.php"><img class="logo2 responsive-img" src="imagenes/logo.png"></a>
<?php 

                                  $correo_con = $_GET['correorec'];
                                  $sql = "select * from consejo_comunal where correo_con = '$correo_con'";  
                                  $inst = mysqli_query($con,$sql);
                                  $rs = mysqli_fetch_array($inst);

                                 ?>

<div class="container">
<script src="js/funciones.js"></script>
            <div class="z-depth-5 white row">
                <div class="text-registro col s12"><h5 class="white-text">Recuperar Contraseña</h5></div>
                <div class="row" style="margin-bottom: 0px">
                    <div class="col s12">
                            <form name="form8" class="col s12" <?php echo "action='modulos/forgot.php?&correorec=".$rs['correo_con']."'";  ?> method="post" onsubmit='return validarform8();'>
                            <div style="padding: 30px">
                                <?php 
                                if ( $_GET['error']=='si') 
                                {
                                 echo "<script>  
                                 Materialize.toast('La respuesta no es la correcta', 7000); 
                                 </script>";
                               }
                               ?>
                                

                                <div class="row">
                                    <div class="input-field col s12 m12">
                                      <input disabled <?php echo "value='".$rs["nombre_con"]."'" ?> id="nombre_con" type="text">
                                      <label class="active" for="nombre_con">Nombre Consejo Comunal</label>
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="input-field col s12">
                                    <input disabled <?php echo "value='".$rs["pregunta_con"]."'" ?> id="pregunta_con" type="text"></input>
                                    <label class="active" for="pregunta_con">Pregunta de Seguridad</label>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="input-field col s12">
                                    <input name="respuesta_con" name="respuesta_con" type="text" class="validate"></input>
                                    <label for="respuesta_con">Respuesta</label>
                                    <span id='errorRespuesta' class='error' >Campo Requerido</span><br>
                                    <span id='errorRes' class='error' >La pregunta solo debe contener letras</span>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="input-field col s12 m6">
                                    <input name="pass0" type="password" class="validate"></input>
                                    <label for="pass0">Nueva Contraseña</label>
                                    <span id='errorPass1' class='error' >Campo Requerido</span><br>
                                    <span id='errorPassC' class='error' >Las contraseñas no coinciden</span>
                                  </div>
                                  <div class="input-field col s12 m6">
                                    <input name="pass00" type="password" class="validate"></input>
                                    <label for="pass00">Validar Contraseña</label>
                                    <span id='errorPass' class='error' >Campo Requerido</span>
                                  </div>
                                </div>
                                
                              </div>
                            <div class="row grey lighten-4" style="margin-bottom: 0px;height: 70px">
                                <div class="form-actions col s12" style="padding-top: 18px">
                                    <button id="send-button" type="submit"  class="col s12 offset-m3 m6 btn btn-medium waves-effect" name="action">Recuperar Contraseña</button>
                                </div>
                            </div>
                                </form>
                    </div>
                </div>
            </div>
            </div> 

</body>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script> -->
<script type="">
    $(document).ready(function() {
   
  });
</script>

</html>