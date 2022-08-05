        <?php 

        include("modulos/conexion.php");
        include("funciones.php");

        $id_consejo = $_SESSION['id_consejo'];
        $sql = "select * from consejo_comunal where id_consejo = '$id_consejo'";  
        $inst = mysqli_query($con,$sql);
        $rs = mysqli_fetch_array($inst);

        ?>
        <script src="js/funciones.js"></script>
        <section class="content">
          <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">//Perfil </h1></div>
        <!-- Datos Perfil -->  
          
          <form class="" name="form2" action="modulos/mod_perfil.php" method="post">
            <span><h5 align="center">Aqui puedes modificar la informacion perteneciente a tu perfil</h5></span>
            <div class="divider"></div>
            <br>
              
            <?php 
            if ( $_GET['update']=='si') 
            {
              echo "<script>  
                Materialize.toast('Perfil actualizado exitosamente!', 10000); 
                </script>";

            }
            ?>
            
              <a href=""></a>
            <div class="row">
              <div class="col s12 m12 l8 offset-l2">
                <div class="input-field col s12 m12">
                  <input disabled <?php echo "value='".$rs["nombre_con"]."'" ?> id="nombre_con" type="text">
                  <label class="active" for="nombre_con">Nombre Consejo Comunal</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col s12 m12 l8 offset-l2">
                <div class="input-field col s12 m6">
                  <select disabled="">
                    <?php echo " <option value='".$rs["estado_con"]."' selected disabled>".$rs["estado_con"]."</option>" ?>
                  </select>
                  <label>Estado</label>
                </div>

                <div class="input-field col s12 m6">
                  <select disabled="">
                    <?php echo " <option value='".$rs["municipio_con"]."' selected disabled>".$rs["municipio_con"]."</option>" ?>
                  </select>
                  <label>Municipio</label>
                </div>

              </div>
            </div>

       <div class="row">
        <div class="col s12 m12 l8 offset-l2">
          <div class="input-field col s12 m6">
            <select disabled="">
             <?php echo " <option value='".$rs["parroquia_con"]."' selected disabled>".$rs["parroquia_con"]."</option>" ?>
            </select>
            <label>Parroquia</label>
          </div>

          <div class="input-field col s12 m6">
            <?php echo "<input disabled type='text' id='fechacreacion' name='fechacreacion' value='".$rs["creacion_con"]."' class='datepicker' />" ?>
            <label class="" for="fechacreacion">Fecha de Fundacion</label>
          </div>
      </div>
    </div>

    <div class="row">
        <div class="col s12 m12 l8 offset-l2">
          <div class="input-field col s12 m12">
            <input id="direccion_con" name="direccion_con" type="text" <?php echo "value='".$rs["direccion_con"]."'" ?>></input>
            <label for="direccion_con">Direcciòn</label>
             <span id='errorDir' class='error' >Campo Requerido</span>
          </div>
      </div>
    </div>

    <div class="row">
        <div class="col s12 m12 l8 offset-l2">
         <div class="input-field col s12 m12">
          <input id="email" type="email" disabled="" <?php echo "value='".$rs["correo_con"]."'" ?>></input>
          <label for="email" data-error="Correo Invalido" data-success="Correo Valido">Correo Electronico</label>
          <span class="error" style="visibility: visible; font-size: 12px">Para cambiar el correo debe dirigirse al modulo de Seguridad</span>
        </div>
      </div>
    </div>

  
    <div class="row">
        <div class="col s12 m12 l8 offset-l2">
      <h5>Informaciòn de Contacto</h5>
      </div>
    </div>

      <div class="row">
        <div class="col s12 m12 l8 offset-l2">
          <div class="input-field col s12 m12">
            <input id="nombre_cont" name="nombre_cont" type="text" <?php echo "value='".$rs["nombre_cont"]."'" ?>></input>
            <label for="nombre_cont">Nombre Completo Presidente del Consejo</label>
            <span id='errorNomC' class='error' >Campo Requerido</span><br>
            <span id='errorNomC2' class='error' >El nombre solo debe contener letras</span>
          </div>
      </div>
    </div>

    <div class="row">
        <div class="col s12 m12 l8 offset-l2">
         <div class="input-field col s12 m6">
          <input id="cedulac" name="cedulac" type="text" <?php echo "value='".utf8_encode($rs["cedulac"])."'" ?>></input>
          <label for="cedulac">Cedula</label>
          <span id='errorCedula' class='error' >Campo Requerido</span><br>
          <span id='errorCedula2' class='error' >La cedula solo debe contener numeros</span>
        </div>
        <div class="input-field col s2 m2 l2">
          <select name="prefijoc">
            <?php echo " <option value='".$rs["prefijoc"]."' selected>".$rs["prefijoc"]."</option>" ?>
            <option value="0414">0414</option>
            <option value="0424">0424</option>
            <option value="0416">0416</option>
            <option value="0426">0426</option>
            <option value="0412">0412</option>
          </select>
          <label>Prefijo</label>
          <span id='errorPref' class='error' >Campo Requerido</span>
        </div>
        <div class="input-field col s4 m4 l4">
          <input id="telefonoc" type="text" name="telefonoc" <?php echo "value='".utf8_encode($rs["telefonoc"])."'" ?>></input>
          <label for="telefonoc">Numero de Telefono</label>
          <span id='errorTele' class='error' >Campo Requerido</span><br>
          <span id='errorTele2' class='error' >Telefono solo debe contener numeros</span>
        </div>                
      </div>
    </div>

    <div class="row">
        <div class="col s12 m12 l8 offset-l2">
          <div class="input-field col s12 m12">
            <input id="correo_cont" name="correo_cont" type="email" <?php echo "value='".$rs["correo_cont"]."'" ?>></input>
            <label for="correo_cont" data-error="Correo Invalido" data-success="Correo Valido">Correo Electronico</label>
            <span id='errorCorreC' class='error' >Campo Requerido</span>
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
</form>
  </section>

