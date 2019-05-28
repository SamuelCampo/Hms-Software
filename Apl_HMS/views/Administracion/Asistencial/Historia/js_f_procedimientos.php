<script type="text/javascript">
  
  var autocompprocidtipo = "", autocompprocidcumpdesc = "", autocompprocidcumpcod = "";
  var proccantid="", procobsid="", idplantordprocs = "";
  
  function autocompcump(idtipo){
    autocompprocidtipo = "#idtipoproce_"+idtipo;
    autocompprocidcumpdesc = "#cump_desc_"+idtipo;
    autocompprocidcumpcod = "#cupcodigo_"+idtipo;
    proccantid = "#proc_cantidad_"+idtipo;
    procobsid = "#proc_observ_"+idtipo;
    idplantordprocs = "#plantordprocs_"+idtipo;
  }
  
  
    
  $( ".cump_desc" ).autocomplete({
      minLength: 3,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/cups')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term,
          tipo: $(autocompprocidtipo).val()
        },
        success: function(data) {
          response($.map(data, function (item) {
              var labdesc;
              labdesc = item.codplantarifa_t63;
              if(item.descripcion_t63){
                labdesc+=' '+item.descripcion_t63;
              }
              return {
                label: labdesc,
                value: item.codplantarifa_t63
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $(autocompprocidcumpdesc).val( ui.item.label );
        $(autocompprocidcumpcod).val( ui.item.value );
        return false;
      }
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
    
    
    function btnagregarordenprocs(){
      var divclonado = $(idplantordprocs).clone(true);
      divclonado.find("input").attr("readonly",true);
      divclonado.find("*").removeAttr("id");
      divclonado.insertAfter(idplantordprocs);
      limpiaplantillaprocs();
    }
    
    function btnagregarprocsdescqx(){
      var divclonado = $(idplantordprocs).clone(true);
      divclonado.find("input").attr("readonly",true);
      divclonado.find("*").removeAttr("id");
      divclonado.insertAfter(idplantordprocs);
      $(autocompprocidcumpdesc).val('');
      $(autocompprocidcumpcod).val('');
      $(autocompprocidcumpdesc).focus();
    }

    function btnagregarprocsdescqxs(){
      $( ".procedimientoQ" ).clone().appendTo( ".clonar" );
      $(".clonar").find("input").attr("readonly",true);
      $('.clonar').find("#procedimientoQ").removeAttr("class");
    }
    
    function limpiaplantillaprocs(){
      $(autocompprocidcumpdesc).val('');
      $(autocompprocidcumpcod).val('');
      $(proccantid).val('');
      $(procobsid).val('');
      $(autocompprocidcumpdesc).focus();
    }
</script>