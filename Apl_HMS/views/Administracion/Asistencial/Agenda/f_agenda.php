<form class="form-horizontal" role="form" action="<?=site_url("pacientes/agenda/nuevo/guardar")?>" method="post">
  <?
  $fecha = explode("T",$fecha);
?>
  <div class="row contenedorsobreadonopd">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_paciente" data-toggle="tab">Paciente</a></li>
        <li><a href="#tab_cita" data-toggle="tab" id="pestcita" >Cita</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_paciente">
          <?=$this->load->view('Asistencial/Agenda/f_agenda_selpac',"",true);?>
        </div>
        <div class="tab-pane" id="tab_cita">
          <?=$this->load->view('Asistencial/Agenda/f_agenda_prop',"",true);?>
        </div>
      </div>
    </div>
  </div>
</form>    

<script type="text/javascript">

  /*
  onsubmit="comprobar();" 
  function comprobar() {
    var fecha= document.getElementById("fecha_programacion").value;
    var hora= document.getElementById("hora_programacion").value;
    var medic= document.getElementById("personal").value;

    .ajax({
                  url: "<?=site_url('json/verifagenda')?>",
                  type: "post",
                  dataType: "json",
                  data: {
                    fecha:fecha,
                    hora:hora,
                    medic:medic
                  },
                  success: function(data){
                
                    console.log(data);
                    
                    document.getElementById('demo2').innerHTML="<div class='alert alert-info'>Su modificaci&oacute;n ha sido realizada.<div>";
                  },
                  error:function(data){
                    console.log(data.status);
                    console.log(data.responseText);
                  }
          })
  }*/
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
</script>
