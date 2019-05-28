  <script type="text/javascript">
    $( ".tglosa" ).autocomplete({
      minLength: 3,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/tglosa')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
              return {
                label: item.codigo_t100+' '+item.grupo_t100+' '+item.descripcion_t100,
                value: item.codigo_t100
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
    
    function gcant(obj,vunit){
      var cant=obj.val();
      var nvunit = obj.parent().next().children().val();
      if(nvunit){
        if(nvunit!='' && $.isNumeric(nvunit)){
          vunit = nvunit;
        }
      }
      if($.isNumeric(cant) && $.isNumeric(vunit)){
        obj.parent().next().children().val(vunit);
        obj.parent().next().next().children().val(cant*vunit);
      }
    }
    
    function gvunit(obj){
      var cant=obj.parent().prev().children().val();
      var vunit = obj.val();
      if($.isNumeric(cant) && $.isNumeric(vunit)){
        obj.parent().next().children().val(cant*vunit);
      }
    }
  </script>
  