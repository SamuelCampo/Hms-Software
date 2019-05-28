<script type="text/javascript">
    $(".form_date").datetimepicker({
      format: 'yyyy-mm-dd',
      language:  'es',
      weekStart: 1,
      todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
    });
    
    $( ".cuentacont" ).autocomplete({
      minLength: 2,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/cuentapuc')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
              return {
                  label: item.cod_t4+' '+item.desc_t4,
                  value: item.cod_t4
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( this ).val( ui.item.label );
        $( this ).next().val( ui.item.value );
        return false;
      }
    });
    
</script>