
<?php 
include("modulos/conexion.php");
 ?>
<section class="content">
      <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">//Sugerencias</h1></div>

      <span><h5 align="center">Aqui puedes ver las sugerencias realizadas por los usuarios registrados</h5></span>
            <div class="divider"></div>

      <div id="posttable">
        <div class="custom-responsive">
          <table class="striped hover centered">
            <thead>
              <tr>
                <th>Consejo Comunal:</th>
                <th>Correo Asociado:</th>
                <th>Fecha enviada:</th>
                <th>Sugerencia:</th>
                <th>Clasificacion:</th>
              </tr>
            </thead>
            <tbody>
              

            <?php 
              $sql = "select * from sugerencias;";
              $inst = mysqli_query($con,$sql);
              while ($rs = mysqli_fetch_array($inst)) {
              
             ?>

              <tr>
                <?php 

                  $id_consejo = $rs["id_consejo"];
                  $sql2 = "select nombre_con, correo_con from consejo_comunal where id_consejo = '$id_consejo';";
                  $inst2 = mysqli_query($con,$sql2);
                  while ($rs2 = mysqli_fetch_array($inst2)) {

                 ?>
                <td><a><?php echo $rs2["nombre_con"]; ?></a></td>
                <td><a><?php echo $rs2["correo_con"]; ?></a></td>
                <td><a><?php echo $rs["fecha_envio"]; ?></a></td>
                <td><a><?php echo $rs["sugerencia"]; ?></a></td>
                <td><a><?php echo $rs["clasificacion_pag"]; ?></a></td>
              </tr>
              <?php 
              }//end while
              }//end while
             ?>

            </tbody>
          </table>
        </div>
      </div>
    </section>