
        <?php 

          include("funciones.php");

         ?>
        <section class="content">
          <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">//Cambiar Correo</h1></div>
        <!-- Datos Perfil -->  
   
        <form class="" name="form6" action="modulos/mod_correo1.php" method="post" onsubmit='return validarform6();'>
          <span><h5 align="center">Aqui puedes modificar el correo electronico asociado a la cuenta</h5></span>
          <div class="divider"></div>
          <br>
            
             <?php 
           
            if ( $_GET['update_correo']=='no') 
            {
              echo "<script>  
                Materialize.toast('Contraseña Incorrecta', 10000); 
                </script>";
            }
            ?>
      

          <div class="container">
            <div class="row">
              <div class="col s12 m12 l8 offset-l2">
                <div class="input-field col s12 m12">
                  <input name="pass" type="password" class="validate"></input>
                  <label for="pass">Ingrese la contraseña actual</label>
                  <span id='errorPass' class='error' >Campo Requerido</span><br>
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

