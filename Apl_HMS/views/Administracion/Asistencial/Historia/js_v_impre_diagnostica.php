<script type="text/javascript">
  
  $( ".hmsdxdesc" ).autocomplete({
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
        $( this ).val( ui.item.label );
        $( this ).next().val( ui.item.value );
        return false;
      }
    });
  
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
        return false;
      }
    });


 /*
+Autor: Ing Mauricio Garibello R
+Fecha: 10/12/2017
+Nota: Se adiciona codigo para busqueda predictiva de actividades economicas se utiliza llamado a funcion de diagnosticos+  */
  $( "#acteconomica" ).autocomplete({
      minLength: 3,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/acteco')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
            var labdesc = item.cod_120;
              if(item.desc_120){
                labdesc+=' '+item.desc_120;
              }
              return {
                  label: labdesc,
                  value: item.cod_120
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#acteconomica" ).val( ui.item.label );
        $( "#acteconomicacod" ).val( ui.item.value );
        return false;
      }
    });


    
    $( "#dxrelprincipal" ).autocomplete({
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
              return {
                  label: item.codigo_t14+' '+item.descripcion_t14,
                  value: item.codigo_t14
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#dxrelprincipal" ).val( ui.item.label );
        $( "#dxrelprincipalcod" ).val( ui.item.value );
        return false;
      }
    });
    
    $( "#dxsecundario" ).autocomplete({
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
              return {
                  label: item.codigo_t14+' '+item.descripcion_t14,
                  value: item.codigo_t14
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#dxsecundario" ).val( ui.item.label );
        $( "#dxsecundariocod" ).val( ui.item.value );
        return false;
      }
    });
    
    $( "#dxrelsecundario" ).autocomplete({
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
              return {
                  label: item.codigo_t14+' '+item.descripcion_t14,
                  value: item.codigo_t14
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#dxrelsecundario" ).val( ui.item.label );
        $( "#dxrelsecundariocod" ).val( ui.item.value );
        return false;
      }
    });
    
    $( "#dxegreso" ).autocomplete({
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
              return {
                  label: item.codigo_t14+' '+item.descripcion_t14,
                  value: item.codigo_t14
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#dxegreso" ).val( ui.item.label );
        $( "#dxegresocod" ).val( ui.item.value );
        return false;
      }
    });
    
     $( "#dxfallecido" ).autocomplete({
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
              return {
                  label: item.codigo_t14+' '+item.descripcion_t14,
                  value: item.codigo_t14
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#dxfallecido" ).val( ui.item.label );
        $( "#dxfallecidocod" ).val( ui.item.value );
        return false;
      }
    });
    
</script>