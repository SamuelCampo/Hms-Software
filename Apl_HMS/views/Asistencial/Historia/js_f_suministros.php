<script type="text/javascript">
    
  
  $( "#sumin_desc" ).autocomplete({
      minLength: 3,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/sumins')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
              var labdesc;
              labdesc = item.codigoatc_t91;
              if(item.principioact_t91){
                labdesc+=' '+item.principioact_t91;
              }
              if(item.nombreatc_t91){
                labdesc+=' '+item.nombreatc_t91;
              }
              if(item.farmaceutica_t91){
                labdesc+=' '+item.farmaceutica_t91;
              }
              if(item.concentracion_t91){
                labdesc+=+' '+item.concentracion_t91;
              }
              return {
                label: labdesc,
                value: item.codigoatc_t91
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#sumin_desc" ).val( ui.item.label );
        $( "#sum_codigo" ).val( ui.item.value );
        return false;
      }
    });
    
    $( "#via_desc" ).autocomplete({
      minLength: 1,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/medcsviaadmon')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
              return {
                  label: item.via,
                  value: item.via
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#via_desc" ).val( ui.item.label );
        $( "#via" ).val( ui.item.value );
        return false;
      }
    });
    
    $("#btnagregarordensumins").click(function () {
      //$('#plantordmedcs').clone(false).removeAttr("style").insertAfter("#plantordmedcs");
      //$('#plantordmedcs').clone(false).find("*").addAttr("readonly").insertAfter("#plantordmedcs");
      
      
      var divclonado = $('#plantordsumins').clone(true);
      divclonado.find("input").attr("readonly",true);
      divclonado.find("*").removeAttr("id");
      divclonado.insertAfter("#plantordsumins");
      limpiaplantillasumins();
     
     /*
      var divclonado = $('#plantordmedcs').clone(true,true);
      divclonado.removeAttr("style");
      divclonado.attr("id","#plantordmedcsact").insertAfter("#plantordmedcs");
      */
      
    });
    
    function limpiaplantillasumins(){
      $("#sumin_desc").val('');
      $("#sum_codigo").val('');
      $("#cantidad").val('');
    }
    
</script>