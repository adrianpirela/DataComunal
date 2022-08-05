        
<?php 
  
  include("funciones.php");

 ?>
        <section class="content">
          <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">//Cambiar Contraseña </h1></div>
        <!-- Cambio Contraseña -->  
        <script src="js/funciones.js"></script>
        <form name="form4" class="col s12" action="modulos/mod_password.php" method="post" onsubmit='return validarform4();'>
          <span><h5 align="center">Aqui puedes modificar la contraseña de ingreso</h5></span>
          <div class="divider"></div>
          <br>
          <?php 
            if ( $_GET['update']=='si') 
            {
              echo "<script>  
                Materialize.toast('Contraseña actualizada exitosamente!', 10000); 
                </script>";
            }
            if ( $_GET['update']=='no') 
            {
              echo "<script>  
                Materialize.toast('La contraseña actual no es correcta', 10000); 
                </script>";
            }
            ?>
 
            
      

          <div class="container">
            <div class="row">
              <div class="col s12 m12 l8 offset-l2">
                <div class="input-field col s12 m12">
                  <input name="pass" type="password" class="validate"></input>
                  <label for="pass">Ingrese la contraseña actual</label>
                  <span id='errorPass0' class='error' >Campo Requerido</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col s12 m12 l8 offset-l2">
                <div class="input-field col s12 m12">
                  <input name="pass1" type="password" class="validate"></input>
                  <label for="pass1">Ingrese la nueva contraseña</label>
                  <span id='errorPass' class='error' >Campo Requerido</span>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col s12 m12 l8 offset-l2">
                <div class="input-field col s12 m12">
                  <input name="pass2" type="password" class="validate"></input>
                  <label for="pass2">Verifique la nueva contraseña</label>
                  <span id='errorPass2' class='error' >Campo Requerido</span>
                  <span id='errorPassC' class='error' >Las contraseñas no coinciden</span>
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

