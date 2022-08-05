    <section class="content">
          <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">//Modificar Programa Social</h1></div>
        <!-- Modificar Programa -->  
        <script src="js/funciones.js"></script>
        <form name="form12" class="col s12" action="modulos/mod_programa1.php" method="post" onsubmit='return validarform12();'>
          <span><h5 align="center">Aqui puedes Modificar informacion en sistema de los programas sociales registrados</h5></span>
          <div class="divider"></div>
          <br>
          <div class="container">
             <?php 
            if ( $_GET['error']=='si') 
            {
              echo "<script>  
                Materialize.toast('Seleccione un programa social', 7000); 
                </script>";
            }
            ?>   

            <div class="row">
              <div class="col s12 m12 l8 offset-l2">
              <div class="input-field col s12 m12">
                <select name="id_programa">
                  <option value="" disabled selected>Seleccione Programa a modificar:</option>
                  <?php 
                  include("modulos/conexion.php");

                  $sql = "select * from programas_sociales;";
                  $inst = mysqli_query($con,$sql);

                  while ($rs = mysqli_fetch_array($inst)) {
                    echo "<option value='".$rs["id_programa"]."'>".$rs["nombre_programa"]."</option>";
                  }
                  ?>
                  
                </select>
                <label for="id_programa">Modificar Programa Social:</label>
                <span id='errorPrograma' class='error' >*Campo Requerido</span>
              </div>
              </div>
            </div>
              

            <div class="row">
             <div class="col s12 m12 l8 offset-l2">
              <div class="col l4 offset-l4">
                <button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text center-align" type="submit" name="action">Enviar
                </button>

              </div>

            </div>

          </div>
        </div>
      </form>
          

  </section>

