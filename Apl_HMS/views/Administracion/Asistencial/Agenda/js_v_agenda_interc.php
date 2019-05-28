<script type="text/javascript">
  /*
  * Author: Abdullah A Almsaeed
  * Date: 4 Jan 2014
  * Description:
  *      This is a demo file used only for the main dashboard (index.html)
  **/
 
 
 
  function med_ret(idespec) {
    consulta = idespec;
    peticion = null;
    peticion = inicializa_xhr();
    if (peticion) {
      peticion.onreadystatechange = med_carga;
      peticion.open("GET", Ps_Url+'/ajax/menumedxespec/' + consulta, true);
      peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      peticion.setRequestHeader("Charset","ISO-8859-1");
      peticion.send(consulta);
    }
  }

  function med_carga() {
    if (peticion.readyState == 4) {
      if (peticion.status == 200) {
        document.getElementById('menumedicosxespec').innerHTML = peticion.responseText;
      }
    }
  }
  
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
         maxTime:'15:00:00',
         slotDuration:'00:20:00',
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
              var url = Ps_Url+'/pacientes/agendainterc/nuevo/fecha/'+date.format();
              if(document.getElementById('especialidades')){
                if(document.getElementById('especialidades').selectedIndex>0){
                  url+= '/especialidad/'+document.getElementById('especialidades').options[document.getElementById('especialidades').selectedIndex].value;
                }else{
                  alert("Seleccione una especialidad");
                  return false;
                }
              }else{
                alert("Seleccione una especialidad");
                return false;
              }

              if(document.getElementById('medicos')){
                if(document.getElementById('medicos').selectedIndex>0){
                  url+= '/medico/'+document.getElementById('medicos').options[document.getElementById('medicos').selectedIndex].value;
                }else{
                  alert("Seleccione un médico");
                  return false;
                }
              }else{
                alert("Seleccione un médico");
                return false;
              }
              url+='/interc/'+<?=$aginterc_interc?>;
              window.location = url;
            }
          }else{
            if(hora=='0'){
              var url = Ps_Url+'/pacientes/agenda/imprimir/'+date.format()+'/'+document.getElementById('medicos').options[document.getElementById('medicos').selectedIndex].value;
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