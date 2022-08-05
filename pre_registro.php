<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>DataComunal - Pre-Registro</title>
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <script src="js/jquery-3.2.1.js"></script>
<script src="js/materialize.min.js"></script>
</head>
<link rel="shortcut icon" href="imagenes/miniatura.png">
<body>

<a class="logo" href="index.php"><img class="logo2 responsive-img" src="imagenes/logo.png"></a>
<script src="js/funciones.js"></script>
<div class="container">

            <div class="row card-panel grey lighten-4" style="padding: 16px;text-align: left">
              <i class="material-icons" style="position: absolute;">info</i>
              <label class="clap-text" style="padding-left: 40px;font-size: 15px;">Para poder registrarte, debes pasar por una verificacion previa</label>
            </div>

            <div class="z-depth-5 white row">
                <div class="text-registro col s12"><h5 class="white-text">Pre - Registro</h5></div>
                <div class="row" style="margin-bottom: 0px">
                    <div class="col s12">
                            <form name="form9" class="col s12" action="modulos/pre_registro.php" method="post" onsubmit='return validarform9();'>
                            <div style="padding: 30px">
                                <div class="row">
                                    <div class="input-field col s12 m12">
                                      <input name="nombre_con_pre" type="text" class="validate">
                                      <label for="nombre_con_pre">Nombre Consejo Comunal</label>
                                      <span id='errorNombre' class='error' >*Campo Requerido</span><br>
                                      <span id='errorNombre2' class='error' >*El nombre solo debe contener letras</span>
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="input-field col s12 m6">
                                    <select name="estado_con_pre">
                                      <option value="" disabled selected>Selecciona el Estado</option>
                                      <option value="Zulia">Zulia</option>
                                    </select>
                                    <label for="estado_con_pre">Estado</label>
                                    <span id='errorEstado' class='error' >*Campo Requerido</span>
                                  </div>

                                  <div class="input-field col s12 m6">
                                    <select name="municipio_con_pre">
                                      <option value="" disabled selected>Selecciona el Municipio</option>
                                      <option value="Maracaibo">Maracaibo</option>
                                    </select>
                                    <label for="municipio_con_pre">Municipio</label>
                                    <span id='errorMunicipio' class='error' >*Campo Requerido</span>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="input-field col s12">
                                    <select name="parroquia_con_pre">
                                      <option value="" disabled selected>Selecciona la Parroquia</option>
                                      <option value="Antonio Borjas Romero">Antonio Borjas Romero</option>
                                      <option value="Bolivar">Bolivar</option>
                                      <option value="Cacique Mara">Cacique Mara</option>
                                      <option value="Caracciolo Parra Pérez">Caracciolo Parra Pérez</option>
                                      <option value="Cecilio Acosta">Cecilio Acosta</option>
                                      <option value="Chiquinquirá">Chiquinquirá</option>
                                      <option value="Coquivacoa">Coquivacoa</option>
                                      <option value="Cristo de Aranza">Cristo de Aranza</option>
                                      <option value="Francisco Eugenio Bustamante">Francisco Eugenio Bustamante</option>
                                      <option value="Idelfonso Vásquez">Idelfonso Vásquez</option>
                                      <option value="Juana de Ávila">Juana de Ávila</option>
                                      <option value="Manuel Dagnino">Manuel Dagnino</option>
                                      <option value="Olegario Villalobos">Olegario Villalobos</option>
                                      <option value="Raúl Leoni">Raúl Leoni</option>
                                      <option value="San isidro">San isidro</option>
                                      <option value="Santa Lucía">Santa Lucía</option>
                                      <option value="Venancio Pulgar">Venancio Pulgar</option>

                                    </select>
                                    <label for="parroquia_con_pre">Parroquia</label>
                                    <span id='errorParroquia' class='error' >*Campo Requerido</span>
                                  </div>
                                </div>

                                <h5>Informaciòn de Contacto</h5>
                                <br>

                                <div class="row">
                                  <div class="input-field col s12 m6">
                                    <input name="nombre_cont_pre" type="text" class="validate"></input>
                                    <label for="nombre_cont_pre">Nombre Persona de Contacto</label>
                                    <span id='errorNombreC' class='error' >*Campo Requerido</span><br>
                                    <span id='errorNombreC2' class='error' >*El nombre solo debe contener letras</span>
                                  </div>

                                  <div class="input-field col s2 m2 l2">
                                    <select name="prefijoc_pre">
                                      <option value="" selected="" disabled="">Prefijo</option>
                                      <option value="0414">0414</option>
                                      <option value="0424">0424</option>
                                      <option value="0416">0416</option>
                                      <option value="0426">0426</option>
                                      <option value="0412">0412</option>
                                    </select>
                                    <label for="prefijoc_pre">Prefijo</label>
                                    <span id='errorPrefijo' class='error' >*Campo Requerido</span>
                                  </div>
                                  <div class="input-field col s4 m4 l4">
                                    <input id="telefonoc_pre" type="text" name="telefonoc_pre"></input>
                                    <label for="telefonoc_pre">Numero de Telefono</label>
                                    <span id='errorTelefono' class='error' >*Campo Requerido</span><br>
                                    <span id='errorTelefono2' class='error' >*El telefono solo debe contener numeros</span>

                                  </div> 
                                
                                </div>
                              </div>
                            <div class="row grey lighten-4" style="margin-bottom: 0px;height: 70px">
                                <div class="form-actions col s12" style="padding-top: 18px">
                                    <button id="send-button" type="submit"  class="col s12 offset-m3 m6 btn btn-medium waves-effect" name="action">Enviar</button>
                                </div>
                            </div>
                                </form>
                    </div>

                </div>

            </div>
            <a href="iniciarsesion.php" style="margin-left: 220px">Ya estoy registrado</a>
            <br>
            <br>
            <br>
            </div> 

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script>
<script>
    $(document).ready(function() {
    $('select').material_select();
    $('input[name="telefonoc_pre"]').mask('0000000');
  });
</script>

</html>