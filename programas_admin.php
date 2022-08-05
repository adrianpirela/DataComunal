<?php 
  
  include("modulos/conexion.php");

 ?>
<section class="content">
      <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">//Programas sociales</h1></div>

      <span><h5 align="center">Aqui agregar los programas sociales disponibles para los consejos comunales</h5></span>
            <div class="divider"></div>

              <?php 
            if ( $_GET['error']=='no') 
            {
              echo "<script>  
                Materialize.toast('Programa agregado exitosamente', 7000); 
                </script>";
            }
              if ( $_GET['erroreli']=='si') 
            {
              echo "<script>  
                Materialize.toast('El programa no se puedo eliminar', 7000); 
                </script>";
            }
             if ( $_GET['update']=='si') 
            {
              echo "<script>  
                Materialize.toast('Programa actualizado exitosamente', 7000); 
                </script>";
            }
             if ( $_GET['update']=='no') 
            {
              echo "<script>  
                Materialize.toast('El programa no se puedo actualizar', 7000); 
                </script>";
            }
            ?>   

      <div id="posttable">
        <div class="custom-responsive">
          <table class="striped hover centered">
            <thead>
              <tr>
                <th>ID Registro:</th>
                <th>Fecha de Registro:</th>
                <th>Nombre Programa:</th>
                <th>Dirigido a:</th>
                <th>Descripcion:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                 <?php 
                          $sql = "select * from programas_sociales";
                          $inst = mysqli_query($con,$sql);
                          while ($rs = mysqli_fetch_array($inst)) {

                ?>
                <td><a><?php echo $rs["id_programa"]; ?></a></td>
                <td><a><?php echo $rs["fecha_registro"]; ?></a></td>
                <td><a><?php echo $rs["nombre_programa"]; ?></a></td>
                <td><a><?php echo $rs["programa_dirigido"]; ?></a></td>
                <td><a><?php echo $rs["comentario_programa"]; ?></a></td>
              </tr>
              <?php 
             }
               ?>
        
            </tbody>
          </table>
        </div>
        <br>
      <div class="row">
              <div class="col s12 m4 l4 center-align" style="padding-bottom: 15px;">
               <a class="waves-effect waves-light btn" href="main_admin.php?pag=ag_programa"> <i class="material-icons right">add_circle</i>Agregar</a>  
              </div>
              <div class="col s12 m4 l4 center-align" style="padding-bottom: 15px;">
                <a class="waves-effect waves-light btn" href="main_admin.php?pag=mod_programas"> <i class="material-icons right">create</i>Modificar</a>  
              </div>
              <div class="col s12 m4 l4 center-align">
                <a class="waves-effect waves-light btn disabled" href="main_admin.php?pag=eli_programa"> <i class="material-icons right">delete</i>Eliminar</a>  
              </div>
            </div>
      </div>
    </section>