  <script type="text/javascript">
    
    var urlautocomp;
    var baseurlautocomp;
    var valtipopms;
    baseurlautocomp = "<?=site_url('json')?>";
    urlautocomp = baseurlautocomp+'/cups';
    valtipopms = 'PR';
    
    function urltipop(){
      valtipopms = $('#tipopms').val();
      switch(valtipopms) {
        case 'PR':
          urlautocomp = baseurlautocomp+'/cups';
          break;
        case 'MD':
          urlautocomp = baseurlautocomp+'/cums';
          break;
        case 'SU':
          urlautocomp = baseurlautocomp+'/sumins';
          break;
      }
    }
    
    $( "#cod_desc" ).autocomplete({
      minLength: 3,
      source: function( request, response ) {
        $.ajax({
        url: urlautocomp,
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
              var labdesc;
              var labval;
              switch(valtipopms) {
                case 'PR':
                  labdesc = item.codplantarifa_t63;
                  if(item.descripcion_t63){
                    labdesc+=' '+item.descripcion_t63;
                  }
                  labval = item.codplantarifa_t63;
                  break;
                case 'MD':
                  if(item.pos_t73){
                    if(item.pos_t73=='NO POS'){
                      labdesc = 'NO POS '+item.codigoatc_t73;
                    }else{
                      labdesc = item.codigoatc_t73;
                    }
                  }else{
                    labdesc = item.codigoatc_t73;
                  }
                  if(item.principioact_t73){
                    labdesc+=' '+item.principioact_t73;
                  }
                  if(item.nombreatc_t73){
                    labdesc+=' '+item.nombreatc_t73;
                  }
                  if(item.farmaceutica_t73){
                    labdesc+=' '+item.farmaceutica_t73;
                  }
                  if(item.concentracion_t73){
                    labdesc+=+' '+item.concentracion_t73;
                  }
                  labval = item.codigoatc_t73;
                  break;
                case 'SU':
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
                  labval = item.codigoatc_t91;
                  break;
              }
                
              return {
                label: labdesc,
                value: labval
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#cod_desc" ).val( ui.item.label );
        $( "#cod" ).val( ui.item.value );
        return false;
      }
    });
    
    
    $( ".teventoad" ).autocomplete({
      minLength: 3,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/teventoad')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
              return {
                label: item.grupo_t101+' - '+item.descripcion_t101,
                value: item.codigo_t101
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
  