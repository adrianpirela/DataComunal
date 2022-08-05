<?php 
  error_reporting(E_ERROR | E_PARSE); // Desactiva la notificación y warnings de error en php.


    include("modulos/conexion.php");
    session_start();
    $id_consejo = $_SESSION['id_consejo'];
    $sql = "select * from consejo_comunal where id_consejo = '$id_consejo'";  
    $inst = mysqli_query($con,$sql);
    $rs = mysqli_fetch_array($inst);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Control Panel - Consejo Comunal</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
    <script src="js/funciones.js"></script>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/Chart.bundle.js"></script>
    <script src="js/utils.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
         google.charts.load('current', {packages: ['corechart']});     
      </script>
  </head>
  <link rel="shortcut icon" href="imagenes/miniatura.png">
  <body>


    <ul id="slide-out" class="side-nav fixed z-depth-4">
      <li>
        <div class="userView">
          <div class="background">
            <img src="imagenes/photo1.png">
          </div>
          <a href="#!user"><img class="circle" src="imagenes/avatar.png"></a>
          <span class="white-text name">Consejo Comunal</span>
          <a href="main_consejo.php?pag=perfil"><span class="white-text email"><?php echo "".utf8_encode($rs["nombre_con"])."" ?></span></a>
        </div>
      </li>

       <li>
        <div class="" style="height: 50px">
          <div class="background">
          </div>
          <img src="imagenes/logo.png" style="height: 50px; margin-left: 25px;">
 
        </div>
      </li>
      <li><div class="divider"></div></li>

      <li><a class="active" href="main_consejo.php?pag=dashboard"><i class="material-icons pink-item">dashboard</i>Dashboard</a></li>
      <li><div class="divider"></div></li>

      <li><a class="subheader">Administrar</a></li>
       <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Perfil<i class="material-icons pink-item">person</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="main_consejo.php?pag=perfil">Actualizar Informacion</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
         <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Programas Sociales<i class="material-icons pink-item">group</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="main_consejo.php?pag=programas_consejo">Programas Sociales</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>

         <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Seguridad<i class="material-icons pink-item">security</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="main_consejo.php?pag=cambio_correo1">Cambiar Correo</a></li>
                <li><a href="main_consejo.php?pag=cambio_password">Cambiar Contraseña</a></li>
                <li><a href="main_consejo.php?pag=cambio_pregunta">Cambiar Preguntas de Seguridad</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>

      <li><a href="main_consejo.php?pag=sugerencias_consejo"><i class="material-icons pink-item">thumbs_up_down</i>Sugerencias</a></li>
      <li><a href="salir.php"><i class="material-icons pink-item">power_settings_new</i>Salir</a></li>
      
  
    </ul>

    <main>
        
      <?php 


      $pagina = $_GET['pag'];
      if ( $pagina == '' or $pagina == 'dashboard')
      {
        include_once("dashboard_consejo.php");
      }
      if ( $pagina == 'perfil')
      {
        include_once("perfil.php");
      }
      if ( $pagina == 'sugerencias_admin')
      {
        include_once("sugerencias_admin.php");
      }
       if ( $pagina == 'cambio_password')
      {
        include_once("cambio_password.php");
      }
       if ( $pagina == 'cambio_pregunta')
      {
        include_once("cambio_pregunta.php");
      }
      if ( $pagina == 'cambio_correo1')
      {
        include_once("cambio_correo1.php");
      }
      if ( $pagina == 'cambio_correo')
      {
        include_once("cambio_correo.php");
      }
      if ( $pagina == 'sugerencias_consejo')
      {
        include_once("sugerencias_consejo.php");
      }
       if ( $pagina == 'programas_consejo')
      {
        include_once("programas_consejo.php");
      }
       if ( $pagina == 'programas_consejo1')
      {
        include_once("programas_consejo1.php");
      }



      ?>


    </main>
    

        <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
              © 2017 DataComunal. Todos los derechos reservados.
            </div>
          </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script>
        <script>
        // Hide sideNav
        $('.button-collapse').sideNav({
        menuWidth: 300, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
          draggable: true // Choose whether you can drag to open on touch screens
          });
          $(document).ready(function(){
            $('select').material_select();
            $('.tooltipped').tooltip({delay: 50});
            $('.modal').modal();
            // $('input[name="cedulac"]').mask('V-00000000');
            $('input[name="telefonoc"]').mask('0000000');
             
          });

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
          
          </script>
          
        </div>
      </body>
    </html>
    