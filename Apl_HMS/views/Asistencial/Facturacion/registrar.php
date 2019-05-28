<?php 
	$num = 0;
		//var_dump($convenios);
	  if ($convenios[0]->descripcion_t95 == $historia->tipocta_t4) {
		for ($i=0; $i < count($convenios); $i++) {
			if ($convenios[$i]->grupo_t95 == "AMBU") {
				$ambu = $convenios[$i]->valor_t95;
			}else if($convenios[$i]->grupo_t95 == "AYDX"){
				$aydx = $convenios[$i]->valor_t95;
			}else if($convenios[$i]->grupo_t95 == "BASA"){
				$basa = $convenios[$i]->valor_t95;
			}else if($convenios[$i]->grupo_t95 == "CONS"){
				$cons = $convenios[$i]->valor_t95;
			}else if($convenios[$i]->grupo_t95 == "HOSP"){
				$hosp = $convenios[$i]->valor_t95;
			}else if($convenios[$i]->grupo_t95 == "LABO"){
				$labo = $convenios[$i]->valor_t95;
			}else if($convenios[$i]->grupo_t95 == "ODON"){
				$odon = $convenios[$i]->valor_t95;
			}else if($convenios[$i]->grupo_t95 == "PATO"){
				$pato = $convenios[$i]->valor_t95;
			}else if($convenios[$i]->grupo_t95 == "PROC"){
				$proc = $convenios[$i]->valor_t95;
			}else if($convenios[$i]->grupo_t95 == "QUIR"){
				$quir = $convenios[$i]->valor_t95;
			}else if($convenios[$i]->grupo_t95 == "TERA"){
				$tera = $convenios[$i]->valor_t95;
			}else if($convenios[$i]->grupo_t95 == "MED"){
				 $med = $convenios[$i]->valor_t95;
			}else if($convenios[$i]->grupo_t95 == "SUM"){
				 $sum = $convenios[$i]->valor_t95;
			}
		}
	}
?>
<?php if ($historia->estado_t4 == "PROGRAMADO"): ?>
	<div class="alert alert-danger" role="alert">Este paciente no esta admitido es obligatorio revisar que su admisi&oacute;n se encuentre completa y cambiar de estado.</div>
<?php endif ?>
<form action="<?= site_url('facturacion/factura/imprimir/'.$historia->idps_historia_t4)  ?>" name="" method="post">
	<h3>Digitar Factura</h3>
	<hr>
	<div class="row">
		<div class="col-md-6">
			<label for="#">Convenio</label><br>
			<input type="text" name="convenio" class="form-control" id="tercdesc" value="<?= $historia->administradora_t3  ?>">
			<input type="hidden" name="codadministradora" id="tercid" value="<?= $eps->ident_t16 ?>" required>
			<?php //var_dump($eps); ?>
		</div>
		<div class="col-md-6">
			<label for="#">Paciente</label><br>
			<input type="text" name="convenio" class="form-control" id="" value="<?= $historia->paciente_t4." ".$historia->nomcomp_t3  ?>">
			<input type="hidden" id="historia1" value="<?= $historia->idps_historia_t4 ?>">
			<input type="hidden" id="idpaciente" value="<?= $historia->paciente_t4 ?>">
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<label for="#">Fecha de la factura</label>
			<input type="text" name="fecha_facturacion" value="<?= date('Y-m-d') ?>" class="form-control">
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-5">
					<label for="">Numero de Factura</label>
					<input type="text" name="" value="<?= $this->uri->segment(5) ?>" disabled class="form-control">
				</div>
				<?php if ($this->uri->segment(5) != ""): ?>
				<div class="col-md-2">
					<br>
					<div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
                    <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('facturacion/factura/verificar/'.$this->uri->segment(4)."/".$this->uri->segment(5)."/".$this->uri->segment(6))?>" data-toggle="tooltipn" data-placement="bottom" title="Imprimmir">
                      <span class="glyphicon glyphicon-print"></span>
                    </a>
                  </div>
                  <br>
					<div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
                    <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('facturacion/factura/verificar/'.$this->uri->segment(4)."/".$this->uri->segment(5)."/grupo")?>" data-toggle="tooltipn" data-placement="bottom" title="Imprimir Por Grupos">
                      <span class="glyphicon glyphicon-print"></span>
                    </a>
                  </div>
				</div>
				<?php endif ?>
				<div class="col-md-5">
					<label for="#">Serie</label>
					<select name="serie" id="" class="form-control">
						<?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Factura->series(),"idcm_cuentaseries_t97","descripcion_t97",$datfac->idserie_t96))?>
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<label for="#">Tipo de cuenta</label>
			<select name="tipo_cuenta" id="" class="form-control">
			<?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Factura->tiposctas(),"tipocta_t99","tipocta_t99",$dathistoria->tipocta_t4))?>
			</select>
			<!--<input type="text" name="tipo_cuenta" value="<?= $historia->tipocta_t4 ?>" disabled class="form-control">-->
		</div>
		<div class="col-md-3">
			<label for="#">Copago</label>
			<select class="form-control" name="copago" id="n_copago">
                <option value="0">No copago</option>
                <option value="1">nivel 1, 11.5%</option>
                <option value="2">nivel 2 17.3%</option>
                <option value="3">nivel 3 23%</option>
                <option value="4">subsi 2 10%</option>
              </select>
		</div>
		<div class="col-md-3">
			<label for="#">Valor Copago</label>
			<input type="text" name="total_copago" class="form-control" id="t_c" value="<?= $dat_listos[0]->copago_t96 ?>">
		</div>
<div class="col-md-3">
			<label for="#">Valor Total</label>
			<input type="text" name="total_facturado" class="form-control" value="" id="t_ca" readonly>
		</div>
<div class="col-md-3">
			<label for="#">Cuota Moderadora</label>
			<input type="text" name="cuota_moderadora" class="form-control" value="<?= $dat_listos[0]->cuota_mo_t96 ?>" id="">
		</div>
		<div class="col-md-3">
			<label for="#">Diagnostico</label>
			<input type="text" name="dx_principal" value="<?= $datconsulta[0]->dxprincipal_t64 ?>" id="dxprincipal" class="form-control">
			<input type="hidden" name="" value="" id="dxprincipalcod">
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-6">
					<label for="#">Fecha de Ingreso</label>
					<input type="text" name="fingreso" class="form-control fechas_date" value="<?= $historia->fingreso_t4 ?>" readonly>
				</div>
				<div class="col-md-6">
					<label for="#">Fecha de Egreso</label>
					<input type="text" name="fegreso" class="form-control fechas_date" value="<?= $historia->fsalida_t4 ?>" readonly>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<br>
			<?php if ($dat_listos[0]->estado_t96 != "FACTURADO"): ?>
				<?php if ($historia->estado_t4 != "PROGRAMADO"): ?>
					<button type="submit" name="generarFactura" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Facturar</button><input type="checkbox" class="form-control" style="margin-top: -30px" name="facturar" value="SI" required><br>	
					<?php else: ?>
				<?php endif ?>
			<?php endif ?>
		</div>
		<div class="row">
		<div class="col-md-6">
		<a href="<?= site_url($this->uri->uri_string()); ?>" type="submit" name="generarFactura" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Reliquidar</a>
		</div>
		<div class="col-md-5 text-center ">
			<br>
			<span class="alert alert-warning">PARA FACTURAR ES NECESARIO QUE RELIQUIDE DESPUES DE GUARDAR LOS CARGOS</span>
		</div>
		</div>
	</div><br>
	<br>
	<br>
	<!-- Agregar Suministro -->
	<?php if ($dat_listos[0]->estado_t96 != "FACTURADO"): ?>
				<div class=" container row" id="agregarSum">
		    <div class="row no-margin no-padding col-md-8" id="cont_facts">
          <div class="form-group no-margin no-padding">
            <div class="col-lg-1 no-margin no-padding">
              <select onchange="urltipop()" id="tipopms" name="tipopms" class="form-control input-sm">
                <option value="PR">PR</option>
                <option value="MD">MD</option>
                <option value="SU">SU</option>
              </select>
            </div>
            <input type="hidden" name="tipopmss" id="tipopmss" value="">
            <div class="col-lg-11 no-margin no-padding">
              <input type="text" name="cod_desc" id="cod_desc" class="form-control input-sm" placeholder="COD CUPS CUMS" >
              <input type="hidden" name="cod" id="cod">
            </div>
          </div>
          <div class="form-group no-margin no-padding">
            <div class="col-lg-2 no-margin no-padding">
              <input type="text" name="cantidad" class="form-control input-sm" id="valor" placeholder="#" >
            </div>
            <div class="col-lg-4 no-margin no-padding">
              <input type="text" name="valor" class="form-control input-sm" id="costo" value="" placeholder="$" >
              <input type="hidden" id="archrips" name="archrips">
            </div>
            <?//if($datfac->validado_t96!='SI'){?>
            <?//}?>
          </div>
        </div>
       </div>
      <button id="gurdar-sum" type="button" onclick="guardarSuministro()" class="btn <?= $this->Planthtml->estilo->colorprinc ?>">Guardar Suministro</button>
	<?php endif ?>

	<!-- Fin de agregar Suministro -->
	<div class="row">
		<div class="col-md-3">
			<label for="#">Grupo</label>
		</div>
		<div class="col-md-1">
			<label for="#">Valor Unit</label>
		</div>
		<div class="col-md-2">
			<label for="#">Valor Total</label>
		</div>
		<div class="col-md-1" style="margin-left: -40px">
			<label for="#">Conf.</label>
		</div>
	</div>	
	<?php foreach ($ordenes as $fila): ?>
		<!-- Colocamos los precios y valores de los procedimientos -->
		<div class="row">
			<div class="col-md-1">
				<input type="text" disabled name="grupo" class="form-control" value="<?= $fila->tipo_t67  ?>">
			</div>
			<div class="col-md-7" style="margin-left: -30px">
				<input type="text" name="procedimiento[]" class="form-control" value="<?= $fila->descripcion_t67  ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-md-1" style="">
				<input type="number" name="cantidad[]" class="form-control val_can" data-orden="<?= $fila->idhist_ordenes_t67 ?>" value="<?= $fila->cantidad_t67  ?>" placeholder="Cantidad a facturar">
			</div>
			<div class="col-md-1" style="margin-left: -30px">
				<input type="number" disabled name="codigo_cups" placeholder="Codigo Cups" class="form-control" value="<?= $fila->codigo_t67 ?>">
			</div>
			<?php $contar = count($costos[0]); ?>
					<?php foreach ($costos as $key) { ?>
						<?php if ($key[0]->codplantarifa_t63 == $fila->codigo_t67) { ?>
						<div class="col-md-2" style="margin-left: -30px">
							<?php 
							if ($fila->tipo_t67 == "AMBU") {
							  $valor = $ambu * $key[0]->valor_t63;
							}else if($fila->tipo_t67 == "AYDX"){
								if ($aydx > 0) {
									$valor = $aydx * $key[0]->valor_t63;
								}else{
									$valor = $fila->valunit_t67;
								}
							}else if($fila->tipo_t67 == "BASA"){
								if ($basa > 0) {
									$valor = $basa * $key[0]->valor_t63;
								}else{
									$valor = $key[0]->valor_t63;
								}
							}else if($fila->tipo_t67 == "CONS"){
								if ($cons > 0) {
									$valor = $key[0]->valor_t63 * $cons / 100 + $key[0]->valor_t63;
								}else{
									$valor = $fila->valunit_t67;
								}
							}else if($fila->tipo_t67 == "HOSP"){
								if ($hosp > 0) {
									$valor = $hosp * $key[0]->valor_t63;
								}else{
									$valor = $fila->valunit_t67;
								}
							}else if($fila->tipo_t67 == "LABO"){
								if ($labo > 0) {
									$valor = $labo * $key[0]->valor_t63;
								}else{
									$valor = $key[0]->valor_t63;
								}
							}else if($fila->tipo_t67 == "ODON"){
								if ($odon > 0) {
									$valor = $odon * $key[0]->valor_t63;
								}else{
									$valor = $key[0]->valor_t63;
								}
							}else if($fila->tipo_t67 == "PATO"){
								if ($pato > 0) {
									$valor = $pato * $key[0]->valor_t63;
								}else{
									$valor = $key[0]->valor_t63;
								}
							}else if($fila->tipo_t67 == "PROC"){
								if ($proc > 0) {
									$valor = $proc * $key[0]->valor_t63;
								}else{
									$valor = $fila->valunit_t67;
								}
							}else if($fila->tipo_t67 == "QUIR"){
								if ($quir > 0) {
									$valor = $quir * $key[0]->valor_t63;
								}else{
									$valor = $fila->valunit_t67;
								}
							}else if($fila->tipo_t67 == "TERA"){
								if ($tera > 0) {
									$valor = $tera * $key[0]->valor_t63;
								}else{
									$valor = $fila->valunit_t67;
								}
							}else if($fila->tipo_t67 == "MED" || $fila->tipo_t67 == "MD"){
								if ($med > 0) {
										$valor = $med * $key[0]->valor_t6;
									}else{
										$valor = $key[0]->valunit_t67;
										}
							}else if($fila->tipo_t67 == "SUM"){
								if ($sum > 0 ){
									$valor = $sum * $key[0]->valor_t6 ;
								}else{
									$valor = $key[0]->valunit_t67;
								}
							}
							 ?>
							 <input type="hidden" name="cambiar_valor[]" value="<?= $fila->idhist_ordenes_t67.'T'.$valor ?>">
							<input type="number" name="valor" placeholder="" class="form-control val_actual" data-orden="<?= $fila->idhist_ordenes_t67 ?>" value="<?= round($valor)  ?>">
							<input type="hidden" name="valor[]" placeholder="" class="form-control" value="<?= $valor  ?>">
						</div>
					<?php } ?>
			<?php } ?>
			<?php $contara = count($medicamentos[0]); ?>
				<?php foreach ($medicamentos as $l) { ?>
					<?php if ($l[0]->codigoatc_t73 == $fila->codigo_t67) { ?>
							<?php if($fila->tipo_t67 == "MED" || $fila->tipo_t67 == "MD"){
									if ($med > 0) {
										$valor = $med * $l[0]->tarifa1_t73;
									}else{
										$valor = $l[0]->tarifa1_t73;
									}
								
							}else if($fila->tipo_t67 == "SUM"){
								if ($sum > 0) {
									$valor = $sum * $l[0]->tarifa1_t73; 
								}else{
									$valor = $l[0]->tarifa1_t73;
								}
								
							} ?>
					<div class="col-md-2" style="margin-left: -30px">
						<input type="hidden" name="cambiar_valor[]" value="<?= $fila->idhist_ordenes_t67.'T'.$fila->valunit_t67 ?>">
						<input type="number" name="valor" placeholder="" class="form-control" value="<?= round($fila->valunit_t67) ?>">
						<input type="hidden" name="valor[]" placeholder="" class="form-control" value="<?= $fila->valunit_t67 ?>">
					</div>
					<?php } ?>

			<?php } ?>
			<?php if($valor <= 0){ ?> 
					<div class="col-md-2" style="margin-left: -30px">
						<input type="hidden" name="cambiar_valor[]" value="<?= $fila->idhist_ordenes_t67.'T'.$fila->valunit_t67 ?>">
						<input type="number" name="valor" placeholder="" id="" data-orden="<?= $fila->idhist_ordenes_t67 ?>" class="form-control val_actual" value="<?= round($fila->valunit_t67) ?>">
						<input type="hidden" name="valor[]" placeholder="" class="form-control" value="<?= $fila->valunit_t67 ?>">
					</div>
			<?php } ?>
			<div class="col-md-2" style="margin-left: -30px">
				<?php 
				if (!empty($valor)) {
				 	$total_valor = $fila->cantidad_t67*$valor;
				 }else{
				 	$total_valor = $fila->cantidad_t67*$fila->valunit_t67;
				 }  ?>
				<input type="number" readonly name="Val_total[]" value="<?= round($total_valor)?>" placeholder="" class="form-control">
			</div>
			<div class="col-md-2" style="margin-left: -30px">
				<input type="checkbox" name="conf[]" value="<?= $fila->idhist_ordenes_t67.'T'.$total_valor ?>" class="form-control" <?php if (!empty($fila->idfactura_t67)): ?>
					checked
				<?php endif ?>>
			</div>
		</div>
		<?php $total += $total_valor ?>
	<?php endforeach ?>
	<div id="ajax"></div>
	<div class="row">
		<div class="col-md-4">
			<label for="#">Observacion</label>
			<textarea name="observaciones" class="form-control" ><?php echo $dat_listos[0]->obs1_t96 ?></textarea></div>
		<div class="col-md-4">
			<label for="#">Autorización</label>
			<textarea name="autorizacion" class="form-control" id="autorizacion" value="" required><?= $dat_listos[0]->autorizacion ?></textarea></div>
	</div>
	<input type="hidden" name="total_fac" id="total_fac" value="<?= round($total) ?>">
</form>