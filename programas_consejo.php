<?php 
	
	 include("modulos/conexion.php");

 ?>

<section class="content">
      
      <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">//Programas Sociales</h1></div>

      <span><h5 align="center">Aqui puedes ver los programas sociales habilitados en el sistema</h5></span>
            <div class="divider"></div>


            <div class = "row">

            	<?php 

            	$sql = "select * from programas_sociales";  
            	$inst = mysqli_query($con,$sql);
            	while ($rs = mysqli_fetch_array($inst)) {


            	 ?>
            	 <form action="modulos/programa_consejo1.php" method="post">
            	<div class = "col s12 m6 l3">
            		<div class = "card blue-grey lighten-4 hoverable" style="height: 422px">
            			<div class = "card-image waves-effect waves-block waves-light">
            				<img class = "activator" src = "imagenes/photo1.png">                
            			</div>

            			<div class = "card-content activator">     
            				<span class="card-title activator red-text text-darken-4"><?php echo $rs['nombre_programa']; ?></span>             
            				<p><?php echo $rs['comentario_programa']; ?></p>
            				<p> <span class="red-text text-darken-4">Dirigido a:</span> <?php echo $rs['programa_dirigido']; ?></p>
            			</div>

            				<div class = "card-action">
            					<button class = "btn waves-effect waves-light blue-grey">
            						<span>Entrar</span>
            						</button>
            					</div>
            				</div>
            			</div>
            			<input type="hidden" name="id_programa" <?php echo "value='".$rs['id_programa']."'";  ?>>
            		</form>
            	<?php 
            }//end of
            	 ?>





            </div>

     
    </div>
  </section>