
<?php 

	include("modulos/conexion.php");

	$id_consejo = $_GET['user'];
	$id_programa = $_GET['program'];

	$sql1 = "select * from programas_sociales where id_programa = '$id_programa'";  
	$inst1 = mysqli_query($con,$sql1);
    $rs1 = mysqli_fetch_array($inst1);

    
 ?>
 <script src="js/funciones.js"></script>
<section class="content">
      <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">//Estadisticas <?php echo $rs1['nombre_programa']; ?></h1></div>

      <?php 
                              if ( $_GET['error']=='no') 
                              {
                                echo "<script>  
                                 Materialize.toast('Data Ingresada Exitosamente!', 7000); 
                                 </script>";
                              }
                               if ( $_GET['error']=='si') 
                              {
                                echo "<script>  
                                 Materialize.toast('El trimestre ya contiene data o en el año no se puede añadir mas data', 7000); 
                                 </script>";
                              }
                              ?>

          <span><h5 align="center">Aqui puedes ver las estadisticas del programa <?php echo $rs1['nombre_programa']; ?></h5></span>
                    <div class="divider"></div>
                            <div class="container">
                              <span><h6 align="center">Estadisticas Año 2017 <?php echo $rs1['nombre_programa']; ?></h6></span>
                            <div class="divider"></div>
                    </div> 
                                 


 

              <div class="row" style="margin-left: 100px;">
            <?php 
            $sql2 = "select * from estadisticas_programa_consejo where id_programa = '$id_programa' and id_consejo = '$id_consejo' and estadistica_anno = '2017'";  
            $inst2 = mysqli_query($con,$sql2);
            while ($rs2 = mysqli_fetch_array($inst2)) {
             ?>

             <div id="canvas-holder" class="col s12 m4 l3" style="width:360px; height: 160px; margin: auto;">
                  <canvas id="<?php echo $rs2['id_estadisticas'] ?>" />
              </div>

              <?php 
              }// end of while
              ?>
               </div>

                 <div class="container">
                              <span><h6 align="center">Estadistica Anual 2017 <?php echo $rs1['nombre_programa']; ?></h6></span>
                            <div class="divider"></div>
                    </div>   

              <div style="width:600px; height: 400px; margin: auto; padding: 0; display: block;" class="col s12 m12 l12">
              <canvas id="2017"></canvas>
              </div>






              <!-- //Año 2018 -->
              <div class="divider"></div>
              <div class="container">
                              <span><h6 align="center">Estadisticas Año 2018 <?php echo $rs1['nombre_programa']; ?></h6></span>
                            <div class="divider"></div>
                    </div> 


                <div class="row" style="margin-left: 100px;">
            <?php 
            $sql2 = "select * from estadisticas_programa_consejo where id_programa = '$id_programa' and id_consejo = '$id_consejo' and estadistica_anno = '2018'";  
            $inst2 = mysqli_query($con,$sql2);
            while ($rs2 = mysqli_fetch_array($inst2)) {
             ?>

             <div id="canvas-holder" class="col s12 m4 l3" style="width:360px; height: 160px; margin: auto;">
                  <canvas id="<?php echo $rs2['id_estadisticas'] ?>" />
              </div>

              <?php 
              }// end of while
              ?>
               </div>

                 <div class="container">
                              <span><h6 align="center">Estadistica Anual 2018 <?php echo $rs1['nombre_programa']; ?></h6></span>
                            <div class="divider"></div>
                    </div>   

              <div style="width:600px; height: 400px; margin: auto; padding: 0; display: block;" class="col s12 m12 l12">
              <canvas id="2018"></canvas>
              </div>



















       <script>

        <?php 

        $sql3 = "select * from estadisticas_programa_consejo where id_programa = '$id_programa' and id_consejo = '$id_consejo'";  
        $inst3 = mysqli_query($con,$sql3);
        while ($rs3 = mysqli_fetch_array($inst3)) {

         ?>

         var ctx = document.getElementById("<?php echo $rs3['id_estadisticas'] ?>");

         var myPieChart = new Chart(ctx,{
          type: 'pie',
          data: {
            datasets: [{
              data: [ <?php echo  $rs3['estadisticas_nobeneficiados']; ?>,<?php echo $rs3['estadistica_beneficiados']; ?>,],
              backgroundColor: [
              window.chartColors.red,
              window.chartColors.blue,
              ],
              label: '"<?php echo $rs3['estadistica_trimestre']; ?>"',
            }],
            labels: [
            "No Beneficiados",

            "Beneficiados"
            ]
          },
          options: {
            responsive: true,
            title:{
              display:true,
              text:'<?php echo $rs3['estadistica_trimestre']; ?>'
            }
          }
        });       

         <?php 
      }//end of while
      ?>
    </script>

  <script>

    <?php 

      $sql4 = "select * from estadisticas_programa_consejo where id_programa = '$id_programa' and id_consejo = '$id_consejo' and estadistica_anno ='2017'";  
        $inst4 = mysqli_query($con,$sql4);
        while ($rs4 = mysqli_fetch_array($inst4)) {

        $estadisticas_nobeneficiados[] = $rs4['estadisticas_nobeneficiados'];
        $estadistica_beneficiados[] = $rs4['estadistica_beneficiados'];
        $estadistica_trimestre[] = $rs4['estadistica_trimestre'];
        $estadistica_anno[] = $rs4['estadistica_anno'];
        }

             ?>

    var ctx = document.getElementById("2017");

    var MyLineChart = new Chart(ctx, {
      type: 'line',
            data: {

              labels: ["<?php echo $estadistica_trimestre[0];?>", "<?php echo $estadistica_trimestre[1];?>", "<?php echo $estadistica_trimestre[2];?>", "<?php echo $estadistica_trimestre[3];?>"],

                datasets: [{
            label: "Beneficiados",
            borderColor: window.chartColors.blue,
            backgroundColor: window.chartColors.blue,
            fill: false,
            data: [


              <?php echo $estadistica_beneficiados[0]; ?>,
              <?php echo $estadistica_beneficiados[1]; ?>,
              <?php echo $estadistica_beneficiados[2]; ?>,
              <?php echo $estadistica_beneficiados[3]; ?>  
                

            ],
            yAxisID: "y-axis-1",
        }, {
            label: "No Beneficiados",
            borderColor: window.chartColors.red,
            backgroundColor: window.chartColors.red,
            fill: false,
            data: [

                <?php echo $estadisticas_nobeneficiados[0];?>,
                <?php echo $estadisticas_nobeneficiados[1];?>,
                <?php echo $estadisticas_nobeneficiados[2];?>,
                <?php echo $estadisticas_nobeneficiados[3];?>

            ],
            yAxisID: "y-axis-2"
        }]


            },

            

            options: {
                responsive: true,
                hoverMode: 'index',
                stacked: false,
                title:{
                    display: true,
                    text:'Estadistica Anual'
                },
                scales: {
                    yAxes: [{
                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: "left",
                        id: "y-axis-1",
                    }, {
                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: "right",
                        id: "y-axis-2",

                        // grid line settings
                        gridLines: {
                            drawOnChartArea: false, // only want the grid lines for one axis to show up
                        },
                    }],
                }
            }
        });
        

    // <?php 
    //     }//end of while
    //  ?>
    </script>

    <script>

    <?php 

      $sql5 = "select * from estadisticas_programa_consejo where id_programa = '$id_programa' and id_consejo = '$id_consejo' and estadistica_anno ='2018'";  
        $inst5 = mysqli_query($con,$sql5);
        while ($rs5 = mysqli_fetch_array($inst5)) {

        $estadisticas_nobeneficiados2[] = $rs5['estadisticas_nobeneficiados'];
        $estadistica_beneficiados2[] = $rs5['estadistica_beneficiados'];
        $estadistica_trimestre2[] = $rs5['estadistica_trimestre'];
        $estadistica_anno2[] = $rs5['estadistica_anno'];
        }

             ?>

    var ctx = document.getElementById("2018");

    var MyLineChart = new Chart(ctx, {
      type: 'line',
            data: {

              labels: ["<?php echo $estadistica_trimestre2[0];?>", "<?php echo $estadistica_trimestre2[1];?>", "<?php echo $estadistica_trimestre2[2];?>", "<?php echo $estadistica_trimestre2[3];?>"],
              
                datasets: [{
            label: "Beneficiados",
            borderColor: window.chartColors.blue,
            backgroundColor: window.chartColors.blue,
            fill: false,
            data: [

                <?php echo $estadistica_beneficiados2[0]; ?>,
              <?php echo $estadistica_beneficiados2[1]; ?>,
              <?php echo $estadistica_beneficiados2[2]; ?>,
              <?php echo $estadistica_beneficiados2[3]; ?>  

            ],
            yAxisID: "y-axis-1",
        }, {
            label: "No Beneficiados",
            borderColor: window.chartColors.red,
            backgroundColor: window.chartColors.red,
            fill: false,
            data: [


              <?php echo $estadisticas_nobeneficiados2[0];?>,
                <?php echo $estadisticas_nobeneficiados2[1];?>,
                <?php echo $estadisticas_nobeneficiados2[2];?>,
                <?php echo $estadisticas_nobeneficiados2[3];?>
              

            ],
            yAxisID: "y-axis-2"
        }]


            },

            

            options: {
                responsive: true,
                hoverMode: 'index',
                stacked: false,
                title:{
                    display: true,
                    text:'Estadistica Anual'
                },
                scales: {
                    yAxes: [{
                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: "left",
                        id: "y-axis-1",
                    }, {
                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: "right",
                        id: "y-axis-2",

                        // grid line settings
                        gridLines: {
                            drawOnChartArea: false, // only want the grid lines for one axis to show up
                        },
                    }],
                }
            }
        });
        

    // <?php 
    //     }//end of while
    //  ?>
    </script>


    

  
    <!-- //Modals
 -->
 <form name="form14" class="col s12" action="modulos/ag_data.php" method="post" onsubmit='return validarform14();'>
        	<br>
    <div id="modal1" class="modal modal-fixed-footer" style="height: 600px">
    <div class="modal-content">
      <h4>Agregar Data - <?php echo $rs1['nombre_programa']; ?></h4>

         <input type="hidden" name="id_consejo" <?php echo "value='".$id_consejo."'";  ?>>
          <input type="hidden" name="id_programa" <?php echo "value='".$id_programa."'";  ?>>

        	<span class="red-text">*<?php echo $rs1['indicacion']; ?></span>
        	<br>
          <div class="row modal-form-row">
            <div class="input-field col s12 m6 l6">
              <input name="estadistica_poblacion" id="estadistica_poblacion" type="number" class="validate">
              <label for="estadistica_poblacion">Poblacion Total</label>
              <span id='errorPoblacion' class='error' >*Campo Requerido</span>
            </div>

            <div class="input-field col s12 m6 l6">
            <select name="estadistica_anno">
            	<option value="" disabled selected>Selecciona el Año</option>
            	<option value="2017">2017</option>
            	<option value="2018">2018</option>
            </select>
            <label for="estadistica_anno">Año</label>
            <span id='errorAnno' class='error' >*Campo Requerido</span>
            </div>
          </div>

            <div class="row modal-form-row">

            	<div class="input-field col s12 m6 l6">
            		<select name="estadistica_trimestre">
            			<option value="" disabled selected>Selecciona el Trimestre</option>
            			<option value="Ene - Feb - Mar">Ene - Feb - Mar</option>
            			<option value="Abr - May - Jun">Abr - May - Jun</option>
            			<option value="Jul - Ago - Sep">Jul - Ago - Sep</option>
            			<option value="Oct - Nov - Dic">Oct - Nov - Dic</option>
            		</select>
            		<label for="estadistica_trimestre">Año</label>
            		<span id='errorTrimestre' class='error' >*Campo Requerido</span>
            	</div>

            <div class="input-field col s12 m6 l6">
              <input name="estadistica_beneficiados" type="number" class="validate">
              <label for="estadistica_beneficiados">Total Beneficiados</label>
              <span id='errorBeneficiados' class='error' >*Campo Requerido</span>
            </div>
          </div>   
          </div>
    <div class="modal-footer">
    		<button id="send-button" type="submit"  class="col s12 offset-m3 m6 btn btn-medium waves-effect" name="action">Enviar</button>

    </div>  
     </div>       
        </form>
   
    
        <div class="fixed-action-btn">

          <a href="#modal1" class="btn-floating pulse btn-large waves-effect waves-light green tooltipped modal-trigger" data-tooltip="Agregar Datos" data-position="left"><i class="material-icons">add</i></a>

        </div>

  </section>