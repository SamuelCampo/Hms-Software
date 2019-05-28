<script type="text/javascript">
  /*
  * Author: Abdullah A Almsaeed
  * Date: 4 Jan 2014
  * Description:
  *      This is a demo file used only for the main dashboard (index.html)
  **/
    <?
        $tiempocita = '00:20:00';
        if(defined('HMSAgdTiempoCita')){
            $tiempocita = HMSAgdTiempoCita;
        }

        if (!empty($defaultDate)) {
          if ($defaultDate === "--" ) {
            if ($this->uri->segment(6) == "" || $this->uri->segment(3) == "ordenref"){ 
            $fechaActual = date('Y-m-d');
            } else if($this->uri->segment(6)){
              $fechaActual = $this->uri->segment(6);
            }
          }else{
            $fechaActual = $defaultDate; 
          }
 
        }
       
    ?>
 

 
 
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
        document.getElementById('medicos').innerHTML = peticion.responseText;
        document.getElementById('medicosa').innerHTML = peticion.responseText;
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
         defaultDate: '<?= $fechaActual ?>',
         defaultView:'<?=$avendatipovista?>',
         minTime:'07:00:00',
         maxTime:'17:00:00',
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
            },
          },
        eventTextColor: '#000',
        <?if($avendatipovista=='agendaWeek' && ($this->Modulo->usr->roles["rolprinc"]->codrol_t2=='ADT' || $this->Modulo->usr->roles["rolprinc"]->codrol_t2=='ADM' || $this->Modulo->usr->su_t0=='SI' ) ){?>
        dayClick: function(date, jsEvent, view) {
          var hora = parseInt(date.format('H'));
          if(hora >= 7 && hora <= 17){
            if(view.name=='agendaWeek' || view.name=='agendaDay'){
              var url = Ps_Url+'/pacientes/agenda/nuevo/fecha/'+date.format();
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
                  if(document.getElementById('ordenref')){
                    url+='/orden/'+document.getElementById('ordenref').value;
                  }
                }else{
                  alert("Seleccione un médico");
                  return false;
                }
              }else{
                alert("Seleccione un médico");
                return false;
              }
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