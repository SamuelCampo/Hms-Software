  <script type="text/javascript">
    
    var urlautocomp;
    var baseurlautocomp;
    var valtipopms;
    baseurlautocomp = "<?=site_url('json')?>";
    base_url = "<?= site_url('pacientes/guardar_orden')  ?>"
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

    function guardarSuministro(){
      $('#agregarSum').clone().appendTo('#ajax');
      valtipopms = $('#tipopmss').val(); // Tipo de suminisitro
      valcod_desc = $('#cod_desc').val(); // descripcion del suministro
      valvalor = $('#valor').val(); // Cantidad del suministro
      valcosto = $('#costo').val(); // Costo del Suministro
      valpaciente = $('#idpaciente').val(); // Codigo del Cliente
      valhistoria = $('#historia1').val();
      valcod = $('#cod').val();
      valrips = $('#archrips').val();

      $.post(base_url, {
        paciente: valpaciente,
        historia: valhistoria,
        suministro: valtipopms,
        co_suministro: valcod,
        valcod_desc: valcod_desc,
        cantidad: valvalor,
        costo: valcosto,
        valrips: valrips
      }, function(data, textStatus, xhr) {
        console.log(data);
      }).success(function(){
        alert('Hemos guardado la orden con exito');
        //location.reload();
      }).fail(function(){
        alert('Hemos tenido un error al guardar la orden');
      });

    }
    
    /*$( "#formdigitarfac" ).submit(function() {
      if($("#cod").val()==''){
        alert("Seleccione el item a facturar");
        $("#cod_desc").focus();
        return false;
      }
    });*/

    $('#btn-guardar').click(function(){
      if ($('.check').prop('checked')){
        return true
      }
    });

    $('#FacValidado').click(function(){
      if ($(this).prop('checked')){
        $('#btn-guardar').text('Facturar');
      }else{
        $('#btn-guardar').text('Guardar Suministro');
      }
    })
  
    
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
              console.log(data);
              var labdesc;
              var labval;
              switch(valtipopms) {
                case 'PR':
                  labdesc = item.codplantarifa_t63;
                  if(item.descripcion_t63){
                    labdesc+=' '+item.descripcion_t63;
                  }
                  labval = item.codplantarifa_t63;
                  costo = item.valor_t63;
                  tipo_d = item.tiposervicio_t63;
                  tipo_r = item.archrips_t63;
                  break;
                case 'MD':
                  labdesc = item.codigoatc_t73;
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
                  if(item.tarifa1_t73){
                    labdesc+=+' '+item.tarifa1_t73;
                  }
                  labval = item.codigoatc_t73;
                  costo = item.tarifa1_t73;
                  tipo_d = item.tipo_t73;
                  tipo_r = "AM";
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
                  tipo_d = item.tipo_t91;
                  tipo_r = "AT";
                  break;
              }

              return {
                label: labdesc,
                value: labval,
                price: costo,
                tipo: tipo_d,
                arch: tipo_r
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#cod_desc" ).val( ui.item.label );
        $( "#cod" ).val( ui.item.value);
        $( "#costo" ).val(ui.item.price);
        $( "#tipopmss" ).val(ui.item.tipo);
        $("#archrips").val(ui.item.arch);
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
                  datos: item.cod_t16
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#tercdesc" ).val( ui.item.label );
        $( "#tercid" ).val( ui.item.value );
        var nombre = ui.item.label;
        var codigo = ui.item.datos;
        guardartercero(nombre,codigo);
        return false;
      }
    });

        function guardartercero(nombre,codigo){
          var identificacion = $("#idpaciente").val();
        $.post("<?= site_url('pacientes/guardartercero')  ?>", {nombre: nombre,codigo: codigo,identificacion: identificacion}, function(data, textStatus, xhr) {
          console.log(data);
        });
    }
    
    $( "#conveniodesc" ).autocomplete({
      minLength: 3,
      source: function( request, response ) {
        $.ajax({
        url: "<?=site_url('json/convenios')?>",
        type: "post",
        dataType: "json",
        data: {
          consulta: request.term
        },
        success: function(data) {
          response($.map(data, function (item) {
              return {
                  label: item.codigo_t95+' '+item.descripcion_t95+' '+item.desc_t16,
                  value: item.codigo_t95,
                  datos: item
              }
          }));
        }
      })},
      select: function( event, ui ) {
        $( "#conveniodesc" ).val( ui.item.label );
        $( "#convenio" ).val( ui.item.value );
        return false;
      }
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

    $( "#dx" ).autocomplete({
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
        $( "#dx" ).val( ui.item.label );
        $( "#dxcod" ).val( ui.item.value );
        return false;
      }
    });
    
    
    
    
    
    var cantdig;
    $('#dgnumrad').val(Math.floor((Math.random() * 100000) + 1));
    $('#dgnumfac').val(Math.floor((Math.random() * 1000) + 1));
    $('#dgvalor').val(Math.floor((Math.random() * 1000) + 1)*1500);
    function radica(obj){
      obj.value=Math.floor((Math.random() * 100000) + 1);
    }
    function guardafac(){
      $( "#factsregclon" ).clone().appendTo("#cont_facts").show();
    }
    function fcantdig(valor){
      cantdig = valor;
    }
    function valdig(valor){
      val = $('#dgvalordig').val()*1+(valor*5)*1;
      $('#dgvalordig').val(val);
    }
    
    $(".form_date").daterangepicker({
      locale: {
        format: 'YYYY-MM-DD'
      },
      showDropdowns: true,
      timePicker: false,
      singleDatePicker:true
    });
  </script>
  