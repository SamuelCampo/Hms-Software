<script>

	<?php 
	$date = new DateTime();
	$date->modify('+8 hours');
	$date_fin = new DateTime();
	$date_fin->modify('+16 hours');
foreach($datconsulta->datordenes as $tipo=>$arr_ordenes){
              if(is_array($arr_ordenes) && ($tipo=='MED'||$tipo=='SUM')){
                foreach($arr_ordenes as $idorden=>$arr_orden){
                  if(is_array($arr_orden)){
                    foreach($arr_orden as $detorden){
                      if($detorden->pos_t67!='HPNP'){
                      @$dias = ($detorden->cantidad_t67*$detorden->frecuencia_t67)/($detorden->dosis_t67*24);
                      ?>
						$('.validar<?= $detorden->idhist_ordenes_t67?>').click(function(event) {
							alert('Hemos registrado una nueva dosis Aplicada');
							var fecha_registrar = $('.fechai<?= $detorden->idhist_ordenes_t67?>').val();
							if ($("#registro<?= $detorden->idhist_ordenes_t67?>")[1]) {
							  $('#validar<?= $detorden->idhist_ordenes_t67?>').append('<td><input type="checkbox" class="validar<?= $detorden->idhist_ordenes_t67?>"><span>'+fecha_registrar+'</span></td>');
							}else{
							 $('#registro<?= $detorden->idhist_ordenes_t67?>').append('<ol><input type="checkbox" checked class="validar<?= $detorden->idhist_ordenes_t67?>"><span>'+fecha_registrar+'</span></ol>');
							 $('#validarB').append('<ol><input type="checkbox" checked class="validar<?= $detorden->idhist_ordenes_t67?>"><span>'+fecha_registrar+'</span></ol>');
							}
							var fecha_inicial = $('#tiempo<?= $detorden->posologia_t67 ?>').attr('data-time');
							var fecha_final = Number(fecha_final)*2;
							var cantidad = $('#cantidad<?= $detorden->idhist_ordenes_t67?>').val();
							var valor_final = Number(cantidad)-1;
							$('#cantidad_final<?= $detorden->idhist_ordenes_t67?>').text(valor_final);
							$('#hora_inicio<?= $detorden->idhist_ordenes_t67?>').text(moment().add($(this).attr('data-time'), 'hours').format('h:mm:ss'));
							var duplicado = Number($(this).attr('data-time'))*2;
							$('#hora_fin<?= $detorden->idhist_ordenes_t67?>').text(moment().add(duplicado, 'hours').format('h:mm:ss'));
							alert($('.fechai<?= $detorden->idhist_ordenes_t67?>').val());
							$.post("<?= site_url('hospitalizacion/ENF/medicacion/'.$this->uri->segment(4).'/guardar') ?>", {orden: $(this).attr("data-number"),historia: "<?= $this->uri->segment(4) ?>",tiempo: $(this).attr('data-time'),cantidad_pe:valor_final,fechaInical: $('.fechai<?= $detorden->idhist_ordenes_t67?>').val()}, function(data, textStatus, xhr) {
								/*optional stuff to do after success */
							});
						});                      
                    <?} ?>
                          $(".fechai<?=$detorden->idhist_ordenes_t67?>").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
});<?php

                }
                  }
                }
              } }?> 


</script>