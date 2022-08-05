<section class="content">
      <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">// Dashboard </h1>
      </div>
      <!-- Stat Boxes -->
      <div class="row">
        <div class="col l3 s6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>420</h3>
              <p>Programas Sociales</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer" class="animsition-link">Mas Inormacion<i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div><!-- ./col -->
          <div class="col l3 s6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>69</h3>
                <p>Usuarios Beneficiados</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer" class="animsition-link">Mas Inormacion<i class="fa fa-arrow-circle-right"></i></a>
            </div>
            </div><!-- ./col -->
            <div class="col l3 s6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>36</h3>
                  <p>Usuarios No Beneficiadoss</p>
                </div>
                <div class="icon">
                  <i class="ion ion-email"></i>
                </div>
                <a href="#" class="small-box-footer" class="animsition-link">Mas Inormacion<i class="fa fa-arrow-circle-right"></i></a>
              </div>
              </div><!-- ./col -->
              <div class="col l3 s6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>1337</h3>
                    <p>Poblacion Total</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="#" class="small-box-footer" class="animsition-link">Mas Inormacion<i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>

              <hr>

              <div class="row">
                
                  <div id="grafica" class="col s1 m4 l4" style="width: 410px; height: 300px; margin: 0 auto"></div>
                  <div id="grafica1" class="col s1 m4 l4" style="width: 410px; height: 300px; margin: 0 auto"></div>
                  <div id="grafica2" class="col s1 m4 l4" style="width: 410px; height: 300px; margin: 0 auto"></div>




              </div>
              <script language="JavaScript">


               function drawChart() {
            // Define the chart to be drawn.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Browser');
            data.addColumn('number', 'Percentage');
            data.addRows([
             ['Beneficiados', 120],
             ['No beneficiados', 35],
             ]);
            
            // Set chart options
            var options = {'title':'Browser market shares at a specific website, 2014',
            'width':410,
            'height':260};

            // Instantiate and draw the chart.
            var chart = new google.visualization.PieChart(document.getElementById('grafica'));
            chart.draw(data, options);
          }
          google.charts.setOnLoadCallback(drawChart);
        </script>

        <script language="JavaScript">


               function drawChart() {
            // Define the chart to be drawn.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Browser');
            data.addColumn('number', 'Percentage');
            data.addRows([
             ['Beneficiados', 45.0],
             ['No beneficiados', 55.0],
             ]);
            
            // Set chart options
            var options = {'title':'Browser market shares at a specific website, 2014',
            'width':410,
            'height':260};

            // Instantiate and draw the chart.
            var chart = new google.visualization.PieChart(document.getElementById('grafica1'));
            chart.draw(data, options);
          }
          google.charts.setOnLoadCallback(drawChart);
        </script>

        <script language="JavaScript">


               function drawChart() {
            // Define the chart to be drawn.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Browser');
            data.addColumn('number', 'Percentage');
            data.addRows([
             ['Beneficiados', 45.0],
             ['No beneficiados', 55.0],
             ]);
            
            // Set chart options
            var options = {'title':'Browser market shares at a specific website, 2014',
            'width':410,
            'height':260};

            // Instantiate and draw the chart.
            var chart = new google.visualization.PieChart(document.getElementById('grafica2'));
            chart.draw(data, options);
          }
          google.charts.setOnLoadCallback(drawChart);
        </script>
             
          </div>
        </section>