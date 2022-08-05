
<?php 
  error_reporting(E_ERROR | E_PARSE); // Desactiva la notificación y warnings de error en php.

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
  
<div class="container">
   <script src="js/funciones.js"></script>
  <div class="row card-panel grey lighten-4" style="padding: 16px;text-align: left">
              <i class="material-icons" style="position: absolute;">info</i>
              <label class="clap-text" style="padding-left: 40px;font-size: 15px;">Ingrese el correo registrado al consejo comunal.</label>
            </div>
            <div class="z-depth-5 white row">

                <div class="text-registro col s12"><h5 class="white-text">Recuperar Contraseña</h5></div>
                <div class="row" style="margin-bottom: 0px">
                    <div class="col s12">
                            <form name="form7" class="col s12" action="modulos/forgot1.php" method="post" onsubmit='return validarform7();'>
                            <div style="padding: 30px">
                                
                                 <?php 
                                if ( $_GET['error']=='si') 
                                {
                                 echo "<script>  
                                 Materialize.toast('El correo no se encuentra asociado a ninguna cuenta', 7000); 
                                 </script>";
                               }
                               ?>

                               <div class="row">
                                  <div class="input-field col s12 m12">
                                    <input name="correo_con" type="text" class="validate"></input>
                                    <label for="correo_con">Ingrese Correo Electronico Asociado</label>
                                    <span id='errorCorreo' class='error' >Campo Requerido</span><br>
                                    <span id='errorCorreoV' class='error' style="font-size: 13px">Correo no valido</span>
                                  </div>
                                </div>
                              </div>
                            <div class="row grey lighten-4" style="margin-bottom: 0px;height: 70px">
                                <div class="form-actions col s12" style="padding-top: 18px">
                                    <button id="send-button" type="submit"  class="col s12 offset-m3 m6 btn btn-medium waves-effect">Enviar</button>
                                </div>
                            </div>
                                </form>
                    </div>
                </div>
            </div>
            </div> 

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script>
<script type="">
    $(document).ready(function() {
   
  });
</script>

</html>