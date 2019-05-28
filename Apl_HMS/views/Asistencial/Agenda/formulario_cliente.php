<div class="container">
	<div class="row">
		<?php if ($this->uri->segment(3) == "exito"): ?>
			<?php echo "<h5 class='text-center'>En un periodo no mayor a 24 horas sera contactado por nuestro equipo para la confirmaci&oacute;n de su cita.</h5>" ?>
		<?php endif ?>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form action="<?= site_url('pacientes/agendarCitaCliente/enviar')  ?>" class="form-inline" method="post">
				<div class="row">
					<div class="col-lg-6">
						<label for="">Nombre</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="col-lg-6">
						<label for="">Apellido</label>
						<input type="text" name="apellido" class="form-control">
					</div>
					<div class="col-lg-6">
						<label for="">Numero de Documento</label>
						<input type="text" name="documento" class="form-control">
					</div>
					<div class="col-lg-6">
						<label for="">Fecha de solicitud de la cita</label>
						<input type="text" name="fecha_cita" class="form-control">
					</div>
					<div class="col-lg-6">
						<label for="">Especialidad a la cita</label>
						<input type="text" name="especialidad" class="form-control">
					</div>
					<div class="col-lg-6">
						<label for="">Codigo del procedimiento</label>
						<input type="text" name="cod" class="form-control">
					</div>
					<div class="col-lg-6">
						<label for="">Numero de Telefono</label>
						<input type="text" name="telefono" class="form-control">
					</div>
					<div class="col-lg-6">
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>