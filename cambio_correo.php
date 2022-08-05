
<?php 
  
  include("funciones.php");

 ?>
<section class="content">
          <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">//Cambiar Correo</h1></div>
        <!-- Cambiar Correo -->  
        <script src="js/funciones.js"></script>
        <form name="form2" class="col s12" action="modulos/mod_correo.php" method="post" onsubmit='return validarform2();'>
          <span><h5 align="center">Aqui puedes modificar el correo electronico asociado a la cuenta</h5></span>
          <div class="divider"></div>
          <br>

          <?php 
            if ( $_GET['update']=='si') 
            {
             echo "<script>  
                Materialize.toast('Correo actualizado exitosamente!', 10000); 
                </script>";
            }
            ?>

          <div class="container">
            <div class="row">
              <div class="col s12 m12 l8 offset-l2">
                <div class="input-field col s12 m12">
                  <input name="correo_con" type="text" class="validate"></input>
                  <label for="correo_con">Ingrese el nuevo correo</label>
                  <span id='errorCorreo1' class='error' >*Campo Requerido</span><br>
                  <span id='errorCorreoV' class='error' >Correo no valido</span><br>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col s12 m12 l8 offset-l2">
                <div class="input-field col s12 m12">
                  <input name="correo_con1" type="text" class="validate"></input>
                  <label for="correo_con1">Verifique el nuevo correo</label>
                  <span id='errorCorreo2' class='error' >*Campo Requerido</span><br>
                  <span id='errorCorreoV2' class='error' >Correo no valido</span><br>
                  <span id='errorCorreoC' class='error' style="font-size: 13px">Los correos no coinciden</span>
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
