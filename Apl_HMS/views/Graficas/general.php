
<div class="row">
	<div class="col-md-6">
		<canvas id="myChart" style="width: 100%;"></canvas>
	</div>
	<div class="col-md-6">
		<canvas id="egresos" style="width: 100%;"></canvas>
	</div>
	<div class="col-md-6">
		<canvas id="facturas" style="width: 100%;"></canvas>
	</div>
	<div class="col-md-12 chart-container" style="padding: 30px">
		<div class="row">
		    <div class="col-md-4 no-margin no-padding">
		      <input type="text" class="form-control fechas_date" id="fecha_inicial" placeholder="Fecha Inicio">
		    </div>
		    <div class="col-md-4 no-margin no-padding">
		      <input type="text" class="form-control fechas_date" id="fecha_final" placeholder="Fecha Mes">
		    </div>
		    <div class="col-md-4">
		    	<button class="btn btn-bg-navy" id="procedimientoActualizar">Actualizar</button>
		    </div>
		  </div>
		  <div id="muestra">
			<canvas id="procedimientos" class="chartjs-render-monitor" style="width: 100%;"></canvas>
		  </div>
		  <div id="muestra">
			<canvas id="Cirugias" class="chartjs-render-monitor" style="width: 100%;"></canvas>
		  </div>
	</div>
</div>