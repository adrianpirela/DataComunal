    <section class="content">
          <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">//Eliminar Programa Social</h1></div>
        <!-- Eliminar Programa -->  
        <script src="js/funciones.js"></script>
        <form name="form11" class="col s12" action="modulos/eli_programa.php" method="post" onsubmit='return validarform11();'>
          <span><h5 align="center">Aqui puedes eliminar del sistema los programas sociales</h5></span>
          <div class="divider"></div>
          <br>
          <?php 
            if ( $_GET['error']=='si') 
            {
              echo "<script>  
                Materialize.toast('El programa no se puedo eliminar', 10000); 
                </script>";
            }
            ?>   

          <div class="container">
    

            <div class="row">
              <div class="col s12 m12 l8 offset-l2">
              <div class="input-field col s12 m12">
                <select name="id_programa">
                  <option value="" disabled selected>Seleccione Programa a eliminar:</option>
                  <?php 
                  include("modulos/conexion.php");

                  $sql = "select * from programas_sociales;";
                  $inst = mysqli_query($con,$sql);

                  while ($rs = mysqli_fetch_array($inst)) {
                    echo "<option value='".$rs["id_programa"]."'>".$rs["nombre_programa"]."</option>";
                  }
                  ?>
                  
                </select>
                <label for="id_programa">Eliminar Programa Social:</label>
              </div>
              </div>
            </div>
              

            <div class="row">
             <div class="col s12 m12 l8 offset-l2">
              <div class="col l4 offset-l4">
                <button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text center-align" type="submit" name="action">Eliminar
                </button>

              </div>

            </div>

          </div>
           <span class="error" style="visibility: visible;">*Al eliminar un programa social, tambien se eliminara de los registros de los consejos comunales ya registrado en el sistema</span>
        </div>
      </form>
          

  </section>

