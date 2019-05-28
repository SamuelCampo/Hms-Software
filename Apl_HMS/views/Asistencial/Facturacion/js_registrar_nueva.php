<script>
	 idInventario = $('#idInventario').val();
	 codigoInv = $('#codigoInv').val();
	 valorInventario = $('#valorInventario').val();

	 function clonar() {
	 	idclonado = $('#clonador').clone(true);
	 	idclonado.removeAttr('id');
	 	idclonado.find('input').attr('readonly', 'true');
	 	$('#campoclonado').append(idclonado);
	 	$('#clonador').find('input').val("");
	 	$('#clonador').find('input[type="checkbox"]').attr('checked', false);
	 }

	 $('#idInventario').autocomplete({
	 	minLength: 2,
	 	source: function function_name(request , response) {
	 		$.ajax({
	 			url: '<?= site_url('inventarios/buscar') ?>',
	 			type: "post",
	 			dataType: "json",
	 			data: {
	 				consulta: request.term
	 			},
	 			success: function(data){
	 				response($.map(data,function(item) {
	 					console.log(data);
	 					var labdesc;
	 					var labval;
	 					labdesc = item.codigo_t84+" "+item.descripcion_t84+" "+item.cantidad_t84;
	 					costo = item.precio;
	 					labval = item.codigo_t84;
	 					atributos = item.atributos;
	 					return {
	 						label: labdesc,
	 						value: labval,
	 						valor: costo,
	 						atributo: atributos 
	 					}
	 				}));
	 			}
	 		})
	 	},
	 	select: function( event, ui ){
	 		$('#idInventario').val(ui.item.label);
	 		$('#codigoInv').val(ui.item.value);
	 		$('#valorInventario').val(ui.item.valor);
	 		data = ui.item.atributo;
	 		arreglo = data.split(',');
	 		console.log(arreglo);
	 		$('#attr').empty();
	 		$.each(arreglo, function(index, val) {
	 			 $('#attr').append('<div class="col-md-3"><input type="checkbox" name="attr[]" id="" value="'+val+'"><label for="">'+val+'</label></div>');
	 		});
	 		return false;
	 	}
	 })
	 setInterval(function(){
	 	var num = 0;
	 	var numa = 0;
	 	$('input[type="number"]').each(function(index, el) {
	 		if ($(this).val() != ""){
		 		n = parseInt($(this).val());
		 		num = num+n;
		 		console.log(num);
	 		}
	 	});
	 	valor = parseInt($('#abono').val());
	 	$('#total').text(num);
	 	$('#saldo').text(num-valor);
	 },100);


	 $('#abono').keyup(function(event) {
	 	valor = parseInt($(this).val());
	 	$('#total_abono').text(valor);
	 });
</script>