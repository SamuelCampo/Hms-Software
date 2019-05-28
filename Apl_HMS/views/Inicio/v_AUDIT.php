  <div class="col-lg-8">
    <div class="panel panel-primary padmarg0">
      <div class="panel-heading <?=$this->Planthtml->estilo->colorprinc?> cajapanelprinctit">
        <h3 class="panel-title ">INDICADORES DE RADICACIÓN</h3>
      </div>
      <div class="panel-body padmarg0">
        <div class="pad">
        <canvas id="myChart" style="width: 800px; height: 480px; display: block; margin: 0 auto;"></canvas>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Radicadas", "Digitadas", "Auditadas", "Glosadas75"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
          <!-- Progress bars -->
          <div class="clearfix">
              <span class="pull-left">Cuentas Radicadas</span>
              <small class="pull-right">40</small>
          </div>
          <div class="progress xs">
              <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
          </div>

          <div class="clearfix">
              <span class="pull-left">Cuentas Digitadas</span>
              <small class="pull-right">80</small>
          </div>
          <div class="progress xs">
              <div class="progress-bar progress-bar-red" style="width: 90%;"></div>
          </div>

          <div class="clearfix">
              <span class="pull-left">Cuentas Auditadas</span>
              <small class="pull-right">10</small>
          </div>
          <div class="progress xs">
              <div class="progress-bar progress-bar-light-blue" style="width: 5%;"></div>
          </div>

          <div class="clearfix">
              <span class="pull-left">Cuentas  Glosadas</span>
              <small class="pull-right">75</small>
          </div>
          <div class="progress xs">
              <div class="progress-bar progress-bar-aqua" style="width: 75%;"></div>
          </div>
      </div><!-- /.pad -->
      </div>
    </div>
  </div>
  
 