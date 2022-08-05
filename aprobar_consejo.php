<?php 
  
  include("modulos/conexion.php");



 ?>

<section class="content">
      
      <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">//Aprobar Consejos Comunales </h1></div>

      <span><h5 align="center">Aqui puedes Aprobar / Rechazar los consejos comunales pre registrados en el sistema</h5></span>
            <div class="divider"></div>
            <?php 
            if ( $_GET['update_estatus_pre']=='si') 
            {
             echo "<script>  
                Materialize.toast('Estatus actualizado exitosamente!', 7000); 
                </script>";
            }
            if ( $_GET['update_estatus_pre']=='no') 
            {
             echo "<script>  
                Materialize.toast('Estatus no actualizado', 7000); 
                </script>";
            }
            ?>
      <div id="posttable">
        <form action="modulos/cambio_estatus_pre.php" method="post">
        <table class="responsive-table striped hover centered" id="names-table">
          <thead>
            <tr>
             
              <th>Nombre Consejo Comunal:</th>
              <th>Fecha de pre-registro:</th>
              <th>Presidente:</th>
              <th>Numero de Contacto:</th>
              <th>Aprobar / Rechazar:</th>
            </tr>
             <?php 
                 $sql = "select * from pre_registro where estatus_pre = '1'";
                 $inst = mysqli_query($con,$sql);
                 while ($rs = mysqli_fetch_array($inst)) {

              ?>
          </thead>
          <tbody>
            <tr>
              <td><a><?php echo $rs["nombre_con_pre"]; ?></a></td>
              <td><a><?php echo $rs["fecha_pre"]; ?></a></td>
              <td><a><?php echo $rs["nombre_cont_pre"]; ?></a></td>
              <td><a><?php echo $rs["prefijoc_pre"]; echo "-";  echo $rs["telefonoc_pre"]; ?></a></td>
              <input type="hidden" name="id_pre" <?php echo "value='".$rs['id_pre']."'";  ?>>
              <input type="hidden" name="estatus_pre" <?php echo "value='".$rs['estatus_pre']."'";  ?>>
              <td>
                <div class="btn-toolbar">

                 <?php 

               
                  echo "<button name='boton' class='btn green' value='opcion1' type='submit'>
                    <i class='material-icons'>done</i>
                    </button>";  
              

                  echo "<button name='boton' class='btn red' value='opcion2' type='submit'>
                    <i class='material-icons'>remove</i>
                    </button>"; 
              


                ?>

                  <!-- <a href="#">
                    <button class='btn green' type='submit'>
                    <i class='material-icons'>done</i>
                    </button>
                  </a>
                  <a href="#">
                    <button class="btn red" type="submit">
                    <i class="material-icons">remove</i>
                    </button>
                  </a>
 -->

                </div>
              </td>
            </tr>
             <?php 
                        }//end while
                        ?>
        

          </tbody>
        </table>
          </form>
      </div>
    </div>
  </section>
 <script type="text/javascript">
  
  function mifuncion(tipo)
{
if (tipo=="opcion1")
{
document.form.formu.oculto.valu="opcion1";
document.form.formu.action="modulos/cambio_estatus_pre.php" //si deseamos que haga submit a otro archivo
document.form.formu.submit();
}
else if (tipo=="opcion2")
{
document.form.formu.oculto.valu="opcion2";
document.form.formu.action="otrophp2.php" //si deseamos que haga submit a otro archivo
document.form.formu.submit();
}
}
</script>