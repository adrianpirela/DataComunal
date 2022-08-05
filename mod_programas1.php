         <?php 

        include("modulos/conexion.php");
        include("funciones.php");

        $id_programa = $_GET['user'];
        $sql = "select * from programas_sociales where id_programa = '$id_programa'";  
        $inst = mysqli_query($con,$sql);
        $rs = mysqli_fetch_array($inst);

        ?>  

        <section class="content">
          <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">//Modificar Programa Social</h1></div>
        <!-- Agregar Programa -->  
        <script src="js/funciones.js"></script>
        <form name="form13" class="col s12" action="modulos/mod_programa.php" method="post" onsubmit='return validarform13();'>
          <span><h5 align="center">Aqui puedes Modificar informacion en sistema de los programas sociales registrados</h5></span>
          <div class="divider"></div>
          <br>
          <?php 
            if ( $_GET['error']=='si') 
            {
              echo "<script>  
                Materialize.toast('El programa ya se encuentra registrado', 10000); 
                </script>";
            }
            if ( $_GET['eli']=='si') 
            {
              echo "<script>  
                Materialize.toast('Programa eliminado del sistema con exito', 10000); 
                </script>";
            }
            ?>   

            <?php 



             ?>

          <div class="container">
            <div class="row">
              <div class="col s12 m12 l8 offset-l2">
                <div class="input-field col s12 m12">
                  <input name="nombre_programa" <?php echo "value='".$rs["nombre_programa"]."'" ?> type="text" class="validate" disabled></input>
                  <label for="nombre_programa">Nombre Programa Social</label>
                </div>
              </div>
            </div>
            <input type="hidden" name="id_programa" <?php echo "value='".$rs['id_programa']."'";  ?>>
            <div class="row">
              <div class="col s12 m12 l8 offset-l2">
                <div class="input-field col s12 m12">
                  <input name="comentario_programa" <?php echo "value='".$rs["comentario_programa"]."'" ?> type="text" class="validate"></input>
                  <label for="comentario_programa">Descripcion</label>
                  <span id='errorComentario' class='error' >*Campo Requerido</span><br>
                  <span id='errorComentario2' class='error' >*El comentario solo debe contener letras</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col s12 m12 l8 offset-l2">
              <div class="input-field col s12 m12">
                <select name="programa_dirigido">
                  <?php echo " <option value='".$rs["programa_dirigido"]."' selected>".$rs["programa_dirigido"]."</option>" ?>
                  <option value="Adultos Mayores">Adultos Mayores</option>
                  <option value="Adultos">Adultos</option>
                  <option value="Jovenes">Jovenes</option>
                  <option value="Niños">Niños</option>
                  <option value="Todos">Todos</option>
                </select>
                <label for="programa_dirigido">Dirigido a:</label>
                <span id='errorDirigido' class='error' >*Campo Requerido</span>
              </div>
              </div>
            </div>
              

            <div class="row">
             <div class="col s12 m12 l8 offset-l2">
              <div class="col l4 offset-l4">
                <button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text center-align" type="submit" name="action">Guardar
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
          

  </section>

