<script>
	$('.despacho').click(function(event) {
		var id = $(this).attr('id');
		var despacho = $('#despachado'+id).val();
		$.post('<?= site_url('inventarios/stock/despacho')  ?>/'+id+'/guardar', {cantidad: despacho,numero_orden: id}, function(data, textStatus, xhr) {
			console.log(data);
		}).success(function(){
			$(this).text('Despachado');
			$('#despachado'+id).attr('readonly','true');
			alert('Despachamos su orden con Exito');
		}).fail(function(){
			alert('Tuvimos un error al despachar la orden');
		});
	});

	$('#add_button').click(function(event) {
		contenido = $('#add_muestra').clone(true);
		contenido.find("*").removeAttr("id");
		contenido.insertAfter('.agregados');
		$('#desc_pro').val('');
		$('#cantidad').val('');
		$('#precio').val('');
	});
	
</script>