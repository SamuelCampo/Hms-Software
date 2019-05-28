<script type="text/javascript">
  var datmed;

  $( ".cum_descnp" ).autocomplete({
      minLength: 3,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/cums/POS')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
              var labdesc;
              labdesc = item.codigoatc_t73.trim();
              if(item.principioact_t73){
                labdesc+=' '+item.principioact_t73.trim();
              }
              if(item.farmaceutica_t73){
                labdesc+=' '+item.farmaceutica_t73.trim();
              }
              if(item.concentracion_t73){
                labdesc+=' '+item.concentracion_t73.trim();
              }
              if(item.unidad_t73){
                labdesc+=' '+item.unidad_t73.trim();
              }
              return {
                label: labdesc,
                value: [item.idps_medicamentos_t73,item]
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( this ).val( ui.item.label );
        $( this ).next().val( ui.item.value[0] );
        return false;
      }
    });
  
  $( ".cum_desc" ).autocomplete({
      minLength: 3,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/cums')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
              var labdesc;
              labdesc = item.codigoatc_t73.trim();
              
              if(item.ubicacion_t73){
                labdesc+=' '+item.ubicacion_t73.trim();
              }
              if(item.principioact_t73){
                labdesc+=' '+item.principioact_t73.trim();
              }
              if(item.farmaceutica_t73){
                labdesc+=' '+item.farmaceutica_t73.trim();
              }
              if(item.concentracion_t73){
                labdesc+=' '+item.concentracion_t73.trim();
              }
              if(item.unidad_t73){
                labdesc+=' '+item.unidad_t73.trim();
              }
              return {
                label: labdesc,
                value: [item.idps_medicamentos_t73,item]
              }
          }));
        }
      })},
      select: function( event, ui ) {
        datmed = ui.item.value[1];
        $( this ).val( ui.item.label );
        $( this ).next().val( ui.item.value[0] );
        return false;
      }
    });
    
    $( ".udos_desc" ).autocomplete({
      minLength: 1,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/medcsudosis')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
              return {
                  label: item.udos,
                  value: item.udos
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
    
    $( ".via_desc" ).autocomplete({
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
        $( this ).val( ui.item.label );
        $( this ).next().val( ui.item.value );
        return false;
      }
    });
    
    $("#btnagregarordenmedcs").click(function () {
      //$('#plantordmedcs').clone(false).removeAttr("style").insertAfter("#plantordmedcs");
      //$('#plantordmedcs').clone(false).find("*").addAttr("readonly").insertAfter("#plantordmedcs");

        if($("#codigo").val()==""){
          alert("Debe indicar el medicamento a formular");
          $("#cum_desc").focus();
          return false;
        }
        if($("#durante").val()==""){
          alert("Debe indicar el tiempo del tratamiento");
          $("#durante").focus();
          return false;
        }
        if($("#dosis").val()==""){
          alert("Debe la dosis a tomar");
          $("#durante").focus();
          return false;
        }
        if(!$.isNumeric($("#cantidad").val()) || $("#cantidad").val()==""){
          alert("Debe indicar una cantidad válida");
          $("#cantidad").focus();
          return false;
        }

      var divclonado = $('#plantordmedcs').clone(true);
      divclonado.find("input").attr("readonly",true);
      divclonado.find("select").attr("disabled",true);
      divclonado.find("*").removeAttr("id");
      divclonado.insertAfter("#plantordmedcs");
      limpiaplantilla();
     
     /*
      var divclonado = $('#plantordmedcs').clone(true,true);
      divclonado.removeAttr("style");
      divclonado.attr("id","#plantordmedcsact").insertAfter("#plantordmedcs");
      */
      
    });
    
    function limpiaplantilla(){
      $("#cum_desc").val('');
      $("#codigo").val('');
      $("#cantidad").val('');
      $("#durante").val('');
      $("#dosis").val('');
      $("#posologia").val('');
      $("#observ").val('');

      /*
      $("#dosis").val('');
      $("#frecuencia").val('');
      $("#via_desc").val('');
      $("#via").val('');
      $("#summed").val('');
      */
     
      $("#formula").val('');
      $("#cum_desc").focus();
      
    }

    function comprobarmeds(valor){
      var dosis=document.getElementById("cantidad").value="";
        var dosis=document.getElementById("dosis").value="";
        var posologia= document.getElementById("posologia").value="";
        var durante=document.getElementById("durante").value="";
      var medicamento=valor;
      var buscado=/JARABE/;
      var buscado2=/SOLUCION/;
      var buscado3=/POLVO/;
      console.log(medicamento,buscado,buscado2,buscado3);
  
      if(buscado.test(medicamento) || buscado2.test(medicamento) || buscado3.test(medicamento)){
        console.log("La palabra está en la cadena");
        document.getElementById("cantidad").removeAttribute("readonly"); 
        document.getElementById("durante").removeAttribute("onchange");
          document.getElementById("posologia").removeAttribute("onchange", "calcular();");
        document.getElementById("dosis").removeAttribute("onchange", "calcular();");
       
        
       } else{
        console.log("La palabra  no está en la cadena");
        document.getElementById("cantidad").setAttribute("readonly", "readonly");
        document.getElementById("durante").setAttribute("onchange", "calcular();");
       
       }
    }

    function calcular(){
       var dosis=document.getElementById("dosis").value;
        var posologia= document.getElementById("posologia").value;
        var durante=document.getElementById("durante").value;
        
       
        var aux=0;
        
            aux= (24/posologia)*dosis*durante;
            document.getElementById("cantidad").value=aux;
            console.log(dosis,posologia,durante,aux);
      
        document.getElementById("posologia").setAttribute("onchange", "calcular();");
        document.getElementById("dosis").setAttribute("onchange", "calcular();");
    }
    
    function cantidad(){
      /*
      if($.isNumeric($("#frecuencia").val())){
        frec = $("#frecuencia").val();
      }
      if($.isNumeric($("#dosis").val())){
        dosis = $("#dosis").val();
      }
      if($.isNumeric($("#durante").val())){
        durac = $("#durante").val();
      }
      if($("#diashoras").val()=='HORAS'){
        $("#cantidad").val((24/frec)*durac*dosis);
      }else{
        $("#cantidad").val(frec*durac*dosis);
      }
      */
    }
    
    $(document).ready(function(){
        $("#frecuencia").blur(function(){
            cantidad();
        });
        $("#dosis").blur(function(){
            cantidad();
        });
        $("#durante").blur(function(){
            cantidad();
        });
    });
    
</script>