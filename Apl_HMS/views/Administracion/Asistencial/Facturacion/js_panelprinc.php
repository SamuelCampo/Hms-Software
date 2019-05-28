  <script type="text/javascript">
    
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

    $('#enviar_anulacion').click(function(event) {
      $.post('<?= site_url('facturacion/Factura/anular') ?>', {motivo: $('#motivo').val(),cnfac: $('#cnfac').val()}, function(data, textStatus, xhr) {
        
      }).success(function(){
        alert('Hemos anulado esta factura');
        $('body').removeClass('modal-open');
        $('#myModal').css('display', 'none');
      })
    });

    $('.anular_fac').click(function(event) {
      //alert($(this).attr('id'));
      var numfac = $(this).attr('id');
      $('#cnfac').attr('value', numfac);
      $('#idfact').html(numfac);
    });
    
    $( "#paciente" ).autocomplete({
      minLength: 3,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/paciente/identificacion')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
              return {
                  label: item.identificacion_t3+' '+item.nomcomp_t3,
                  value: item.identificacion_t3,
                  datos: item
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#paciente" ).val( ui.item.label );
        $( "#idpaciente" ).val( ui.item.value );
        return false;
      }
    });
    
    $(".form_dates").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
});

  </script>
  