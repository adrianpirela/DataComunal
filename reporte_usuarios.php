      
<?php 
  
  include("modulos/conexion.php");

 ?>
<section class="content">
      <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">//Reporte Usuarios registrados</h1></div>

      <span><h5 align="center">Aqui puedes generar el reporte de los usuarios registrado en el sistema.</h5></span>
            <div class="divider"></div>

      <div id="posttable">
        <div class="custom-responsive">
          <table class="striped hover centered">
            <thead>
              <tr>
                <th>ID Registro</th>
                <th>Fecha de Registro:</th>
                <th>Nombre Consejo Comunal:</th>
                <th>Correo:</th>
                <th>Estado:</th>
                <th>Municipio:</th>
                <th>Parroquia:</th>
                <th>Direccion:</th>
                <th>Fecha de Creacion:</th>
                <th>Presidente:</th>
                <th>Numero de Contacto:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php 
                          $sql = "select * from consejo_comunal where tipo_user = '2' and estatus_re = '2'";
                          $inst = mysqli_query($con,$sql);
                          while ($rs = mysqli_fetch_array($inst)) {

                ?>
                <td><a><?php echo $rs["id_consejo"]; ?></a></td>
                <td><a><?php echo $rs["fecha_creacion"]; ?></a></td>
                <td><a><?php echo $rs["nombre_con"]; ?></a></td>
                <td><a><?php echo $rs["correo_con"]; ?></a></td>
                <td><a><?php echo $rs["estado_con"]; ?></a></td>
                <td><a><?php echo $rs["municipio_con"]; ?></a></td>
                <td><a><?php echo $rs["parroquia_con"]; ?></a></td>
                <td><a><?php echo $rs["direccion_con"]; ?></a></td>
                <td><a><?php echo $rs["creacion_con"]; ?></a></td>
                <td><a><?php echo $rs["nombre_cont"]; ?></a></td>
                <td><a><?php echo $rs["prefijoc"]; echo "-";  echo $rs["telefonoc"]; ?></a></td>
              </tr>
              <?php 
                }//end of while
               ?>

            </tbody>
          </table>
        </div>
        <br>
        <div class="row">
         <div class="col s12 m12 l8 offset-l2">
          <div class="col l4 offset-l4">
            <button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text center-align" type="submit" name="action">Generar Reporte
            </button>
          </div>
        </div>
      </div>
      </div>
    </section>