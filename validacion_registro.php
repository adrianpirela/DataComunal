<?php 
  error_reporting(E_ERROR | E_PARSE); // Desactiva la notificación y warnings de error en php.
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>DataComunal - Pre-Registro</title>
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
              <label class="clap-text" style="padding-left: 40px;font-size: 15px;">Ingrese el codigo que le fue suministrado</label>
            </div>
            
            <?php 
            if ( $_GET['pre_registro']=='si') 
            {
              echo "<script>  
                Materialize.toast('Datos enviados exitosamente!', 7000); 
                </script>";

            }
            if ( $_GET['validacion']=='no') 
            {
              echo "<script>  
                Materialize.toast('El codigo ingresado es incorrecto o el usuario ya se encuentra registrado', 7000); 
                </script>";

            }
            ?>

            <div class="z-depth-5 white row">
                <div class="text-registro col s12"><h5 class="white-text">Validación - Registro</h5></div>
                <div class="row" style="margin-bottom: 0px">
                    <div class="col s12">
                            <form name="form10" method="post" action="modulos/validar_usuario.php" class="col s12" onsubmit='return validarform10();'>
                            <div style="padding: 30px">
                                <div class="row" style="margin-left: 100px">
                                    <div class="input-field col s6 m6">
                                      <input name="codigo" type="text" class="">
                                      <label for="codigo">Codigo</label>
                                      <span id='errorCodigo' class='error' >*Campo Requerido</span><br>
                                    </div>

                                    <div class="input-field col s6 m6">
                                        <button class="waves-effect waves-light btn" type="submit" name="action"><i class="material-icons">send</i>
                                        </button>
                                    </div>

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
    $('select').material_select();

    var options = {
            translation: {
                '0': {pattern: /\d/},
                '1': {pattern: /[1-9]/},
                '9': {pattern: /\d/, optional: true},
                '#': {pattern: /\d/, recursive: true},
                'F': {pattern: /[\dA-Za-z]/}
            }
        };
        $('input[name="codigo"]').mask('FFF-FFF', options);
  });
</script>

</html>