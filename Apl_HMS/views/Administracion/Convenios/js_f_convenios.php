<script type="text/javascript">
  $(".form_date").daterangepicker({
    locale: {
      format: 'YYYY-MM-DD'
    },
    showDropdowns: true,
    timePicker: false,
    singleDatePicker:true
  });
  
  $( "#tercdesc" ).autocomplete({
      minLength: 3,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/terceros')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
              return {
                  label: item.ident_t16+' '+item.desc_t16,
                  value: item.ident_t16,
                  datos: item
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#tercdesc" ).val( ui.item.label );
        $( "#tercid" ).val( ui.item.value );
        return false;
      }
    });
  
</script>