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
  
  $( ".ipsremit" ).autocomplete({
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
                  value: item.ident_t16
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( this ).val( ui.item.label );
        $( this ).next().val(ui.item.value);
        return false;
      }
    });

  $('#pestcita').click(function(event) {
    documentos = $('#documento').val();
    especialidads = $('#idespecialidad').val();
    medicos = $('#idpersonal').val();
    fecha = $('#fecha_programacion').val();
    $('#ulltimasCitas').empty();
    //alert(documentos+especialidads+medicos+fecha);
    $.post("<?= site_url()."/pacientes/citas" ?>", {documento: documentos ,especialidad: especialidads, medico: medicos,fechas: fecha}, function(data, textStatus, xhr) {
        $.each(JSON.parse(data), function(i, val) {
          if(val.estado_t12 == "PROGRAMADO"){
              var color = 'red';
            }
          $('#ulltimasCitas').append('<p style="color:'+color+'">El paciente '+val.nomcomp_t12+' ha tenido cita el '+val.fecha_programacion_t12+'</p>');
          });
    }).success(function(){
    });
  });
  
  $( "#documento" ).autocomplete({
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
        $( "#documento" ).val( ui.item.value );
        ps_agenda_datpaccargar(ui.item.datos);
        return false;
      }
    });
  
  function ps_agenda_datpaccargar(obj) {
    document.getElementById('nombre1').value = '';
    document.getElementById('nombre2').value = '';
    document.getElementById('apellido1').value = '';
    document.getElementById('apellido2').value = '';
    document.getElementById('telefono_contacto').value = '';
    document.getElementById('municipio').value = '';
    document.getElementById('municipiocod').value = '';
    $( "#msjformagenda" ).html('');
    $( "#msjformagenda" ).hide();
    if(obj.nombre1_t3!='')document.getElementById('nombre1').value = obj.nombre1_t3;
    if(obj.nombre2_t3!='')document.getElementById('nombre2').value = obj.nombre2_t3;
    if(obj.apellido1_t3!='')document.getElementById('apellido1').value = obj.apellido1_t3;
    if(obj.apellido2_t3!='')document.getElementById('apellido2').value = obj.apellido2_t3;
    if(obj.telefono_t3!='')document.getElementById('telefono_contacto').value = obj.telefono_t3;
    if(obj.municipio_t3!='')document.getElementById('municipio').value = obj.municipio_t3;
    if(obj.municipiocod_t3!='')document.getElementById('municipiocod').value = obj.municipiocod_t3;
  }
  
  $( "#proc_desc" ).autocomplete({
      minLength: 0,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/cupsnoh')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
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
                value: item.codplantarifa_t63,
                datos: item
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#proc_desc" ).val( ui.item.label );
        $( "#procedimiento" ).val( ui.item.value );
        return false;
      }
    });
    
    $( "#pestcita" ).click(function() {
      idespec = $( "#idespecialidad" ).val();
      identpaciente = $( "#documento" ).val();
      fecha = $( "#fecha_programacion" ).val();
      $.ajax({
        url: "<?=site_url('json/paciente/ultcitaespec')?>",
        type: "post",
        dataType: "json",
        data: {
          idespec: idespec,
          identpaciente: identpaciente,
          fecha_programacion: fecha
        },
        success: function(data) {
          if(data.fecha_programacion_t12){
            msj = 'El paciente '+data.identificacion_t12+' '+data.nomcomp_t12+' ya ha sido atendido por ésta especialidad en el mes actual el día '+data.fecha_programacion_t12;
            $( "#msjformagenda" ).html(msj);
            $( "#msjformagenda" ).show();
            return confirm(msj);
          }
        }
      });
      //alert("Cambió a cita");
      //return false;
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

  
  
</script>