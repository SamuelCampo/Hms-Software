<script type="text/javascript">
  
  $( "#medico" ).autocomplete({
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
              var labdesc='';
              if(item.tercerref_t16){
                labdesc=' '+item.tercerref_t16.trim();
              }
              if(item.espec_t16){
                labdesc+=' '+item.espec_t16.trim();
              }
              if(item.desc_t16){
                labdesc+=' '+item.desc_t16.trim();
              }
              return {
                label: labdesc,
                value: [item.cod_t16,item]
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
  
 
    <?
        $tiempocita = '00:20:00';
        if(defined('HMSAgdTiempoCita')){
            $tiempocita = HMSAgdTiempoCita;
        }
    ?>
 
  <?
    $agendacabder = 'month,agendaWeek,agendaDay';
    if($avendatipovista=='agendaDay'){
      $agendacabder = '';
    }
  ?>
  $(function() {
      //Date for the calendar events (dummy data)
     var date = new Date();
     var d = date.getDate(),
          m = date.getMonth(),
          y = date.getFullYear();

     //Calendar
     $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: '<?=$agendacabder?>'
         },
         defaultView:'<?=$avendatipovista?>',
         minTime:'07:00:00',
         maxTime:'21:00:00',
         slotDuration:'<?=$tiempocita?>',
         scrollTime:'07:00:00',
         timezone:'America/Bogota',
         editable: false, //Enable drag and drop
         displayEventEnd:false,
         events: {
            url: '<?=site_url('json/agenda')?>',
            type: 'POST',
            data: {
                medico: $("#medicos").val()
            },
            error: function() {
              $('#script-warning').show();
            }
          },
        eventTextColor: '#000',
        <?if($avendatipovista=='agendaWeek' && ($this->Modulo->usr->roles["rolprinc"]->codrol_t2=='ADT' || $this->Modulo->usr->roles["rolprinc"]->codrol_t2=='ADM' || $this->Modulo->usr->su_t0=='SI' ) ){?>
        dayClick: function(date, jsEvent, view) {
          var hora = parseInt(date.format('H'));
          if(hora >= 7 && hora <= 21){
            if(view.name=='agendaWeek' || view.name=='agendaDay'){
              var url = Ps_Url+'/pacientes/agendat/nuevo/fecha/'+date.format();
              
              if(document.getElementById('medicos').value!=''){
                url+= '/medico/'+document.getElementById('medicos').value;
                if(document.getElementById('ordenref')){
                  url+='/orden/'+document.getElementById('ordenref').value;
                }
              }else{
                alert("Seleccione un médico");
                return false;
              }
              window.location = url;
            }
          }else{
            if(hora=='0'){
              var url = Ps_Url+'/pacientes/agendat/imprimir/'+date.format()+'/'+document.getElementById('medicos').options[document.getElementById('medicos').selectedIndex].value;
              window.open(url);
              return false;
            }else{
              alert('Horario no permitido');
              return false;
            }
          }
        }
        <?}?>
     });
     

 });
</script>