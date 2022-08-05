<?php 
  error_reporting(E_ERROR | E_PARSE); // Desactiva la notificación y warnings de error en php.

  include_once('funciones.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>DataComunal - Inicio de Sesion</title>
  <link rel="stylesheet" href="css/materialize.min.css">
  <script src="js/jquery-3.2.1.js"></script>
  <script src="js/materialize.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<link rel="shortcut icon" href="imagenes/miniatura.png">
<body>

<a class="logo" href="index.php"><img class="logo2 responsive-img" src="imagenes/logo.png"></a>

<div class="container">
            <div class="z-depth-5 white row">
                <div class="text-registro col s12"><h5 class="white-text">Iniciar Sesion</h5></div>
                <div class="row" style="margin-bottom: 0px">
                    <div class="col s12">
                            <form name="form2" action="control.php" method="post" class="col s12">
                            <div style="padding: 30px">
                              <?php 
                              if ( $_GET['error']=='si') 
                              {
                                $msj = "Correo y/o contraseña invalidos";
                                echo msjdanger($msj);
                              }
                              ?>
                              <?php 
                              if ( $_GET['update_pass']=='si') 
                              {
                                echo "<script>  
                                 Materialize.toast('Contraseña recuperada!', 7000); 
                                 </script>";
                                 }
                                 if ( $_GET['registro']=='si') 
                              {
                                echo "<script>  
                                 Materialize.toast('Registro efectuado exitosamente', 7000); 
                                 </script>";
                                 }
                              ?>
                               <div class="row">
                                  <div class="input-field col s12 m12">
                                    <input name="correo_con" type="email" class="validate"></input>
                                    <label for="correo_con" data-error="Correo Invalido" data-success="Correo Valido">Correo Electronico</label>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="input-field col s12">
                                    <input name="pass" type="password" class="validate"></input>
                                    <label for="pass">Contraseña</label>
                                  </div>
                                </div>

                                <a href="forgot1.php">¿Olvido su contraseña?</a><br><br>
                                <a href="pre_registro.php">¿No estas registrado?</a>

                              </div>
                            <div class="row grey lighten-4" style="margin-bottom: 0px;height: 70px">
                                <div class="form-actions col s12" style="padding-top: 18px">
                                    <button id="send-button" type="submit"  class="col s12 offset-m3 m6 btn btn-medium waves-effect" name="action" >Iniciar Sesion</button>
                                </div>
                            </div>
                                </form>
                    </div>
                </div>
            </div>
            </div> 

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script>
<script>
    $(document).ready(function() {
   
  });
</script>

</html>