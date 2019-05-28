<div class="container">
	<form action="<?= site_url('facturacion/factura/impresion_masiva')  ?>" name="" method="post">
		<div class="form-group">
			<label for="">Factura incial a imprimir</label>
			<input type="number" name="factura_inicio">
		</div>
		<div class="form-group">
			<label for="">Factura final a imprimir</label>
			<input type="number" name="factura_fin">
		</div>
		<button class="btn" type="submit">Enviar</button>
	</form>
</div>