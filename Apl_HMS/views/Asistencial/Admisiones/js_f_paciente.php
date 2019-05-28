<script type="text/javascript">
  /*
  * Author: Abdullah A Almsaeed
  * Date: 4 Jan 2014
  * Description:
  *      This is a demo file used only for the main dashboard (index.html)
  **/
$('#enviar').click(function(event) {
  if ($('#ubicacion').val() == "HOSPITALIZACIÓN") 
    {
      if ($('#numero_camas').val() == "") 
        {
          alertify.error('Error no es permotido el paciente de hospitalizacion sin cama');
          return false;
        }
    }
});
$('#direccion').blur(function(event) {
  var direccion = $(this).val();
  if ($(this).val().length <= 9){
    alert('El campo de residencia debe ser minmo de 10 caracteres');
  };
});

$('#emerg1').keyup(function(event) {
  valor = $(this).val();
  $('#respons1').val(valor);
  $('#emerg2').val(valor);
  $('#emerg3').val(valor);
});

$('#emerg1tel').keyup(function(event) {
  valor = $(this).val();
  $('#emerg2tel').val(valor);
  $('#emerg3tel').val(valor);
});
  $("#identificacion").blur(function(){
    $.ajax({
        url: "<?=site_url('json/paciente/consultaexiste')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: $("#identificacion").val()
        },
        success: function(data) {
          if(data.identificacion_t3){
            $("form").find("*").attr("disabled",true);
            res = confirm("El número de idetificación "+data.identificacion_t3+" ya existe en la base de datos en el estado "+data.estado_t3+', desea hacer un reingreso?');
            if(res){
              var url = '<?=site_url('pacientes/admisiones/nuevo/paciente')?>/'+data.identificacion_t3;
            }else{
              var url = '<?=site_url('pacientes/admisiones/gestionar')?>/'+data.idps_historia_t4;
            }
            window.location = url;

            //var url = '<?=site_url('pacientes/admisiones/nuevo/paciente')?>/'+data.identificacion_t3;
            //window.location = url;
          }
        }
      })
  });

  $("#ubicacion").change(function(){
    $.post("<?= site_url('pacientes/camas_destino')  ?>", {ubicacion: $(this).val()}, function(data, textStatus, xhr) {
      console.log(data);
      $('#numero_camas').empty();
      if (data != "") 
      {
        $.each(JSON.parse(data),function(data, val) {
        $('#numero_camas').append('<option value="'+val.identificador_cama+'">'+val.identificador_cama+'</option>');   
        });
      }
    })
});

  $("#autorizacion").blur(function(){

    $.post("<?= site_url('pacientes/autorizacion')  ?>", {autorizacion: $(this).val()}, function(data, textStatus, xhr) {
      console.log(data);
      if (data != " "){
        alert('Esta autorizacion ha sido utilizada');
        $('#autorizacion').css('border', '1px solid red');
      }else{
        $('#autorizacion').css('border', '1px solid #ccc');
      }
    }).success(function(){
    });
});
 
  $( "#ocupacion" ).autocomplete({
      minLength: 3,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/ocupaciones')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
            return {
                label: item.codigo_t72+' '+item.ocupacion_t72,
                value: item.codigo_t72
            }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#ocupacion" ).val( ui.item.label );
        $( "#ocupacioncod" ).val( ui.item.value );
        return false;
      }
    });
 
  $( "#municipio" ).autocomplete({
      minLength: 3,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/ciudades')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
              return {
                  label: item.codigo_dane_t13+' '+item.departamento_t13+' - '+item.municipio_t13,
                  value: item.codigo_dane_t13
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#municipio" ).val( ui.item.label );
        $( "#municipiocod" ).val( ui.item.value );
        return false;
      }
    });
 
  $("#tipoafiliacion").change(function(){ cuotamodcop(); });
  $("#nivel").change(function(){ cuotamodcop(); });
  
  function cuotamodcop(){
     $("#cuotamod").val('');
     $("#copago").val('');
     if($("#tipoafiliacion").val()=='SUBSIDIADO'){
       cuotamodcopcarga();
     }else{
       if($("#tipoafiliacion").prop("selectedIndex")>0 && $("#nivel").prop("selectedIndex")>0){
         cuotamodcopcarga();
       }
     }
   }
   
   function cuotamodcopcarga(){
     var tipoafiliacion = $("#tipoafiliacion").val();
     var nivel = $("#nivel").val();
     $.ajax({
         url: "<?=site_url('json/paciente/cuotamodcopago')?>",
         type: "post",
         dataType: "json",
         data: {
           tipoaf:  tipoafiliacion,
           nivel:   nivel
         },
         success: function(data){
           $.map(data, function (item) {
              $("#cuotamod").val(item.valorcuotamode_t69);
              $("#copago").val(item.valorcopago_t69);
            });
         }
       });
   }
   
   function calculaedad(){
    fact = new Date();
    if($.isNumeric($('#fnacim_ano').val()) && $('#fnacim_mes').val() && $('#fnacim_dia').val()){
      fnacim = new Date($('#fnacim_ano').val(),$('#fnacim_mes').val(),$('#fnacim_dia').val());
      var dif = fact - fnacim;
      var anos = Math.floor(dif / (1000 * 60 * 60 * 24 * 360)); 
      $('#edad').val(anos);
    }
  }

  $('#fnacim_ano').blur(function(event) {
    edad = $('#edad').val();
    if (edad >= 19){
      if ($('#idident').val() == "RC" || $('#idident').val() == "TI"){
          alert('El tipo de identificacion no es correctar');
      }
    }
  });
 
</script>