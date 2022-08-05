        
<?php 
  
  include("funciones.php");

 ?>
        
        <section class="content">
          <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">//Cambiar Pregunta de Seguridad</h1></div>
        <!-- Cambio Pregunta -->  
        <script src="js/funciones.js"></script>
        <form class="" name="form3" action="modulos/mod_pregunta.php" method="post" onsubmit='return validarform3();'>
          <span><h5 align="center">Aqui puedes modificar la pregunta de seguridad</h5></span>
          <div class="divider"></div>
          <br>
          
        

          <div class="container">
            
             <?php 
            if ( $_GET['update']=='si') 
            {
              echo "<script>  
                Materialize.toast('Pregunta y respuesta actualizada exitosamente!', 10000); 
                </script>";
            }
            ?>

            <div class="row">

              <div class="col s12 m12 l8 offset-l2">
                <div class="input-field col s12 m12">
                  <input name="pregunta_con" type="text" class="validate"></input>
                  <label for="pregunta_con">Ingrese la nueva pregunta</label>
                  <span id='errorPregunta' class='error' >Campo Requerido</span><br>
                  <span id='errorPre2' class='error' >La pregunta solo debe contener letras</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col s12 m12 l8 offset-l2">
                <div class="input-field col s12 m12">
                  <input name="respuesta_con" type="password" class="validate"></input>
                  <label for="respuesta_con">Ingrese la nueva respuesta</label>
                  <span id='errorRespuesta' class='error' >Campo Requerido</span><br>
                  <span id='errorRes2' class='error' >La respuesta solo debe contener letras</span>
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
