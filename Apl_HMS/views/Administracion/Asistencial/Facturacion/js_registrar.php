
<script>
	var total = <?= $total ?>
	$('#t_c').attr('value', $("#total_fac").attr('value'));

	$('#n_copago').change(function(){
		if ($(this).val() == 1) 
			{
				$total = $("#t_c").val() * 0.115;
				$('#t_c').attr('value', $total);
			}
		else if ($(this).val() == 2) 
			{
				$total = $("#t_c").val() * 0.175;
				$('#t_c').attr('value', $total);
			}
		else if ($(this).val() == 3) 
			{
				$total = $("#t_c").val() * 0.23;
				$('#t_c').attr('value', $total);
			}
	})
  $( "#dxprincipal" ).autocomplete({
      minLength: 3,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/cie10')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
            var labdesc = item.codigo_t14;
              if(item.descripcion_t14){
                labdesc+=' '+item.descripcion_t14;
              }
              return {
                  label: labdesc,
                  value: item.codigo_t14
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#dxprincipal" ).val( ui.item.label );
        $( "#dxprincipalcod" ).val( ui.item.value );
        var des = ui.item.label;
        var dxcod = ui.item.value;
        guardardx(des,dxcod);
        return false;
      }
    });

      function guardardx(des,dxcod){
      $.post('<?= site_url('pacientes/guardarDiagnostico')  ?>', {des: des,dxcod: dxcod,id:$('#historia1').val()}, function(data, textStatus, xhr) {
        console.log(data);
      });
    }
</script>