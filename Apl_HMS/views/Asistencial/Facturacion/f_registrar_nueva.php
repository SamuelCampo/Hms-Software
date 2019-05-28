<form action="<?= site_url('facturacion/factura_nueva/registrar/guardar') ?>" name="form" method="post">
	<div class="container">
		<div class="row">
			<div class="col-md-6 no-padding no-margin">
				<label for="#">Paciente</label><br>
				<input type="text" name="convenio" class="form-control" id="paciente" value="">
				<input type="hidden" id="historia1" value="<?= $historia->idps_historia_t4 ?>">
				<input type="hidden" id="idpaciente" value="<?= $historia->paciente_t4 ?>">
			</div>
			<div class="col-md-12">
				<legend>Formula</legend>
			</div>
			<div class="col-md-12 no-padding no-margin">
				<textarea name="formulacion" id="formulacion" class="form-control" cols="15" rows="10"></textarea>
			</div>
			<div class="col-md-12">
				<a class="btn bg-navy" href="#" id="clonar" onclick="clonar()">
					+
				</a>
			</div>
			<div id="clonador">
				<div class="col-md-8 no-padding no-margin">
					<label for="#">Descripcion</label>
					<input type="text" class="form-control" id="idInventario" value="" name="desc_lente[]">
					<input type="hidden" id="codigoInv" name="codigoInv[]" value="">
				</div>
				<div class="col-md-4 no-padding no-margin">
					<label for="#">Valor</label>
					<input type="number" class="form-control" id="valorInventario" value="" name="valorInventario[]">
				</div>
				<div class="col-md-12 text-left" >
					<div class="row">
						<label for="#">Atributos</label>
						<div id="attr">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="campoclonado" class="row">
			
		</div>
		<div class="row" style="margin-top: 50px">
			<legend>Otros</legend>
			<div class="col-md-12 no-margin no-padding">
				<div class="col-md-8 no-margin no-padding">
					<label for="">Descripcion</label>
					<input type="text" name="otro" class="form-control" value="">
				</div>
				<div class="col-md-4 no-margin no-padding">
					<label for="#valor">Valor</label>
					<input type="number" name="valor_otro" class="form-control" value="">
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 50px">
			<legend>Montura</legend>
			<div class="col-md-12 no-margin no-padding">
				<select name="montura" id="montura" class="form-control">
					<option value=""></option>
					<option value="DE ACETATO">DE ACETATO</option>
					<option value="METALICA">METALICA</option>
				</select>
			</div>
			<legend>
				Abono
			</legend>
			<div class="col-md-12 no-margin no-padding">
				<input type="text" class="form-control" id="abono" value="">
			</div>
			<div class="col-md-4 no-padding no-margin">
				<label for="">Observaciones</label>
				<textarea name="obs" id="obs" class="form-control"></textarea>
			</div>
			<div class="col-md-4 no-padding no-margin">
				
			</div>
			<div class="col-md-4 no-padding no-margin">
				<table class="table table-responsive">
					<tbody>
						<tr>
							<td>Total</td>
							<td id="total"></td>
						</tr>
						<tr>
							<td>Abono</td>
							<td id="total_abono"></td>
						</tr>
						<tr>
							<td>Saldo</td>
							<td id="saldo"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<button class="btn bg-navy" type="submit">Guardar</button>
		</div>

	</div>
</form>