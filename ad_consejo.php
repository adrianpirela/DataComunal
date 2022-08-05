      
<?php 
  
  include("modulos/conexion.php");



 ?>
<section class="content">
          <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">//Administrar Consejos Comunales </h1></div>

          <span><h5 align="center">Aqui puedes administrar los consejos comunales registrados en el sistema</h5></span>
            <div class="divider"></div>

            <?php 
            if ( $_GET['update_estatus']=='si') 
            {
             echo "<script>  
                Materialize.toast('Estatus actualizado exitosamente!', 7000); 
                </script>";
            }
            if ( $_GET['update_estatus']=='no') 
            {
             echo "<script>  
                Materialize.toast('Estatus no actualizado', 7000); 
                </script>";
            }
            ?>

    <div>
        <div class="custom-responsive">
            <form action="modulos/cambio_estatus.php" method="post">
            <table class="centered striped hover" action="modulos/cambio_estatus.php" method="post">
                <thead>
                    <tr>
                        <th>Codigo Asignado</th>
                        <th>Nombre Consejo Comunal</th>
                        <th>Presidente</th>
                        <th>Numero de Contacto</th>
                        <th>Programas Sociales</th>
                        <th>Ultimo inicio de sesion</th>
                        <th>Activo?</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                          <?php 
                          $sql = "select * from consejo_comunal where tipo_user = '2' and estatus_re ='2'";
                          $inst = mysqli_query($con,$sql);
                          while ($rs = mysqli_fetch_array($inst)) {

                           ?>
                           <td><?php echo $rs["codigo_validacion"]; ?></td>
                            <td><?php echo $rs["nombre_con"]; ?></td>
                            <td><?php echo $rs["nombre_cont"]; ?></td> 
                            <td><?php echo $rs["prefijoc"]; echo "-";  echo $rs["telefonoc"]; ?></td>
                            <td><?php echo "0"; ?></td>
                            <td><?php echo $rs["ultimo_inicio"]; ?></td> 
                            <input type="hidden" name="id_consejo" <?php echo "value='".$rs['id_consejo']."'";  ?>>
                            <input type="hidden" name="estatus" <?php echo "value='".$rs['estatus']."'";  ?>>
                                
                            <td>
                                <?php 

                                    if ($rs["estatus"] === '1') {
                                        echo "<i class='material-icons'>check</i>";  
                                    }
                                    else
                                    {

                                        echo "<i class='material-icons'>close</i>"; 
                                    }
          
                                 ?>

                            </td> 
                            <td>
                                 <?php 

                                     if ($rs["estatus"] === '1') {
                                        echo "<input class='btn red' type='submit' name='boton' value='Inhabilitar'> ";  
                                    }
                                    else
                                    {

                                        echo "<input class='btn green' type='submit' name='boton' value='Habilitar'>"; 
                                    }


                                 ?>
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