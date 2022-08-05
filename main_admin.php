<?php 
  error_reporting(E_ERROR | E_PARSE); // Desactiva la notificación y warnings de error en php.
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Control Panel - Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/materialize.min.js"></script>
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
        <span class="white-text name">Administrador</span>
        <span class="white-text email">Admin</span>
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
      <li><a class="active" href="main_admin.php?pag=dashboard"><i class="material-icons pink-item">dashboard</i>Dashboard</a></li>
      <li><div class="divider"></div></li>

      <li><a class="subheader">Administrar</a></li>
       <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Perfiles<i class="material-icons pink-item">person</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="main_admin.php?pag=perfil">Actualizar Informacion</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Consejos Comunales<i class="material-icons pink-item">local_library</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="main_admin.php?pag=aprobar_consejo">Aprobar</a></li>
                <li><a href="main_admin.php?pag=ad_consejo">Administrar</a></li>
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
                <li><a href="main_admin.php?pag=programas_admin">Programas Sociales Disponibles</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>

         <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Estadisticas<i class="material-icons pink-item">poll</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="main_admin.php?pag=estadisticas_consejo">Programas Sociales</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>



         <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Reportes<i class="material-icons pink-item">content_paste</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="main_admin.php?pag=reporte_usuarios">Usuarios registrados</a></li>
                <li><a href="main_admin.php?pag=reporte_programas">Programas sociales</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>

      <li><a href="main_admin.php?pag=sugerencias_admin"><i class="material-icons pink-item">thumbs_up_down</i>Sugerencias</a></li>
      <li><a href="salir.php"><i class="material-icons pink-item">power_settings_new</i>Salir</a></li>
    </ul>

    <main>
        
      <?php 


      $pagina = $_GET['pag'];
      if ( $pagina == '' or $pagina == 'dashboard')
      {
        include_once("dashboard_admin.php");
      }
      if ( $pagina == 'perfil')
      {
        include_once("perfil.php");
      }
      if ( $pagina == 'aprobar_consejo')
      {
        include_once("aprobar_consejo.php");
      }
      if ( $pagina == 'ad_consejo')
      {
        include_once("ad_consejo.php");
      }
      if ( $pagina == 'sugerencias_admin')
      {
        include_once("sugerencias_admin.php");
      }
      if ( $pagina == 'reporte_usuarios')
      {
        include_once("reporte_usuarios.php");
      }
      if ( $pagina == 'reporte_programas')
      {
        include_once("reporte_programas.php");
      }
       if ( $pagina == 'estadisticas_consejo')
      {
        include_once("estadisticas_consejo.php");
      }
       if ( $pagina == 'cambio_password')
      {
        include_once("cambio_password.php");
      }
       if ( $pagina == 'cambio_pregunta')
      {
        include_once("cambio_pregunta.php");
      }
       if ( $pagina == 'programas_admin')
      {
        include_once("programas_admin.php");
      }
      if ( $pagina == 'ag_programa')
      {
        include_once("ag_programa.php");
      }
      if ( $pagina == 'eli_programa')
      {
        include_once("eli_programa.php");
      }
       if ( $pagina == 'mod_programas')
      {
        include_once("mod_programas.php");
      }
      if ( $pagina == 'mod_programas1')
      {
        include_once("mod_programas1.php");
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

       <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script> -->
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
            $('input[name="cedula"]').mask('V-00000000');
            $('input[name="telefono"]').mask('0000000');
          });
          </script>
        </div>
      </body>
    </html>
