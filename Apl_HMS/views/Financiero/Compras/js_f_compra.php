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

    $( ".calcvtotal" ).blur(function() {
      cant = $( "#cantidad" ).val();
      if(isNaN(parseInt(cant))){
        cant=0;
      }
      vunit = $( "#vunit" ).val();
      if(isNaN(parseInt(vunit))){
        vunit=0;
      }
      $( "#vtotal" ).val(cant*vunit);
    });

    $( ".impuestodesp" ).autocomplete({
      minLength: 2,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/impuestos')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
              return {
                  label: item.codigo_t400+' '+item.descripcion_t400,
                  value: item.codigo_t400
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

    $( ".articulodesp" ).autocomplete({
      minLength: 2,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/articulos')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
              return {
                  label: item.cod_t9+' '+item.desc_t9,
                  value: item.cod_t9
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
    
    $( ".ccostodesp" ).autocomplete({
      minLength: 2,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/ccosto')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
              return {
                  label: item.cod_t11+' '+item.desc_t11,
                  value: item.cod_t11
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
    
    $( ".tercerodesp" ).autocomplete({
      minLength: 2,
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
                  label: item.cod_t16+' '+item.desc_t16,
                  value: item.cod_t16
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
    
    $("#btnagregs").click(function () {
      var regclon = $('#detregs').clone();
      regclon.removeAttr("id");
      regclon.find("input").attr('readonly','readonly');
      regclon.find("input").attr('required','required');
      regclon.insertAfter("#detregs");
      $('#detregs').find("input").val('');
    });
</script>