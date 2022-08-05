 
        
<?php 
  
  include("funciones.php");
  include("modulos/conexion.php");

 ?>
 <section class="content">
      <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">//Sugerencias</h1></div>
      <span><h5 align="center">Aqui puedes escribirnos tus sugerencias</h5></span>
          <div class="divider"></div>
          <br>
      <div class="container">
        <div class="row">
          <script src="js/funciones.js"></script>
          <form name="form5" class="col s12" action="modulos/sugerencia_consejo.php" method="post" onsubmit='return validarform5();'">

             <?php 
            if ( $_GET['enviado']=='si') 
            {
              echo "<script>  
                Materialize.toast('Datos enviados exitosamente!', 6000); 
                </script>";
            }
            ?>

            <div class="row">
              <h5>Dinos que te parece la pagina!</h5>
              <p>
                <input type="radio" name="clasificacion_pag" value="Excelente" id="Excelente" />
                <label for="Excelente">Excelente</label>
              </p>
              <p>
                <input type="radio" name="clasificacion_pag" value="Normal" id="Normal" />
                <label for="Normal">Normal</label>
              </p>
              <p>
                <input type="radio" name="clasificacion_pag" value="Pesima" id="Pesima" />
                <label for="Pesima">Pesima</label>
              </p>
              <span id='errorClasificacion' class='error' >Campo Requerido</span>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input type="text" name="sugerencia" maxlength="250" />
                <label for="sugerencia">Sugerencia: </label>
                <span id='errorSugerencia' class='error' >Campo Requerido</span>
              </div>
            </div>
            <div class="center-align"><input class="btn btn-success" type="submit" value="Enviar" name="action" /></div>
          </form>
        </div>
        </div>
<div class="divider"></div>
             <span><h5 align="center">Sugerencias Enviadas</h5></span>
<hr>
        
        <div id="posttable">
        <div class="custom-responsive">
          <table class="striped hover centered">
            <thead>
              <tr>
                <th>Fecha enviada:</th>
                <th>Sugerencia:</th>
                <th>Clasificacion:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php 
              $id_consejo = $_SESSION['id_consejo'];
              $sql = "select * from sugerencias where id_consejo = '$id_consejo'";
              $inst = mysqli_query($con,$sql);
              while ($rs = mysqli_fetch_array($inst)) {

         ?>
                <td><a><?php echo $rs["fecha_envio"]; ?></a></td>
                <td><a><?php echo $rs["sugerencia"]; ?></a></td>
                <td><a><?php echo $rs["clasificacion_pag"]; ?></a></td>
              </tr>
              <?php 
                 }//end while
               ?>
            </tbody>
          </table>
        </div>
      </div>

      
    </section>