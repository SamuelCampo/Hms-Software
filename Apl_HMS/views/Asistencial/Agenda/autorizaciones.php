<?php //var_dump($dathistoria); ?>
<div class="row no-padding no-margin">
  <div class="row panel-heading">
    <legend class="no-margin no-padding">
      Historia Clinica No. <?=$dathistoria->idps_historia_t4?> <b><?=$dathistoria->identificacion_t3?> <?=$dathistoria->nomcomp_t3?></b> <?=$edad?> a&ntilde;os
    </legend>
      <div class="form-group">
        <div class="col-lg-3">
          <label class="control-label">Administradora:</label>
          <?=$dathistoria->administradora_t3?>
        </div>
        <div class="col-lg-2">
          <label class="control-label">Servicio:</label>
          <?=$dathistoria->ubicacion_t4?>
        </div>
        <div class="col-lg-3">
          <label class="control-label">Ingreso:</label>
          <?=$dathistoria->fingreso_t4?>
        </div>
        <div class="col-lg-4">
          <label class="control-label">Dx Principal:</label>
          <?=$dathistoria->diagnostico?>
        </div>
      </div>
  </div>
</div>
<form action="<?= site_url('pacientes/autorizaciones_agenda/crear/'.$this->uri->segment(4)."/guardar") ?>" name="form1" method="post">
<legend>SOLICITUD DE AUTORIZACIONES</legend>
  <div class="col-lg-10">
      <div class="col-lg-6">
            <label for="xxx" >INFORMACION DE LA ATENCION Y SERVICIOS SOLICITADOS:</label>
            <select class="form-control input-sm" name="info_solicitud" >
              <option value="MEDICINA GENERAL">ENFERMEDAD GENERAL</option>
              <option value="MATERNIDAD">ACCIDENTE DE TRABAJO</option>
              <option value="MATERNIDAD">ACCIDENTE DE TRANSITO</option>
              <option value="ENFERMEDAD PROFESIONAL">ENFERMEDAD PROFESIONAL</option>
              <option value="ENFERMEDAD LABORAL">EVENTO CATASTROFICO</option>
              <option value="OTRO">OTRO</option>
            </select>
            <br>
        </div>

      <div class="col-lg-4">
            <label for="xxx" >Tipo de servicios solicitados:</label>
            <select class="form-control input-sm" name="tipo_inca" >
              <option value="AMBULATORIA">Posterior a la atencion inicial de urgencias</option>
              <option value="DEFINITIVA">Servicios electivos</option>
              <option value="DEFINITIVA">Prioritaria</option>
              <option value="DEFINITIVA">No prioritaria</option>
              <option value="OTRO">OTRO</option>
            </select>
            <br>
        </div>
  </div>
  <div class="col-lg-5">
            <label for="xxx" >Ubicacion del Paciente al momento de la solicitud de autorizacion:</label>
            <select class="form-control input-sm" name="servicio_actual" >
              <option selected value="<?= $dathistoria->ubicacion_t4 ?>"><?= $dathistoria->ubicacion_t4 ?></option>
              <option value="AMBULATORIA">Consulta Externa</option>
              <option value="DEFINITIVA">Hospitalizacion</option>
              <option value="DEFINITIVA">Urgencias</option>
              <option value="OTRO">OTRO</option>
            </select>
            <br>
  </div>
  <div class="col-lg-3">
              <label for="xxx">Especialidad</label>
              <select class="form-control input-sm" name="especialidad" id="especialidades" >
          <option value="">SELECCIONE ESPECIALIDAD</option>
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Especialidades->obtener_especialidades_medico(),"idps_especialidades_t11","especialidades_t9",$agendaunimed->idps_especialidades_t11))?>
        </select>
          <br>
  </div>
  <div class="col-lg-3">
              <label for="xxx">Cama</label>
              <input type="text" name="id_cama" class="form-control" id="xxx" placeholder="" value="<? $datinca[0]["obser_inca"]?>">
          <br>
  </div>
<div class="col-lg-12">
      <div class="col-lg-12">
            <legend>INFORMACION DE LA ENFERMEDAD</legend>
      </div>

      <fieldset>
      <div class="form-group">
          <div class="col-lg-6">        
            <label for="dxprincipalcod">DX Principal</label>
            <input name="dxprincipal" type="text" class="form-control" id="dxprincipal" placeholder="Dx Principal" value="<?=$datconsulta->dxprincipal_t64?>" required="">
            <input name="dxprincipalcod" type="hidden" id="dxprincipalcod" value="<?=$datconsulta->dxprincipalcod_t64?>">
          </div>

          <div class="col-lg-3">
            <legen>TIPO DE DIAGNOSTICO:</legen>
            <select class="form-control input-sm" name="tipooption" >
              <option></option>
              <option value="01">01-Confirmado Nuevo</option>
              <option value="02">02-Confirmado Repetido</option>
              <option value="03">03-Impresion Diagnostica</option>
              </select> 
         </div>

         <div class="form-group">
          <div class="col-lg-12">
          <label for="dxtercero">Observacion de DX Principal</label>
            <input name="dxtercero" type="text" class="form-control "  placeholder="Observacion de DX Principal" value="<?=$datconsulta->dxtercero_t64?>">
            <input name="dxtercerocod" type="hidden" id="dxtercerocod" value="<?=$datconsulta->dxtercerocod_t64?>">
          </div>
        </div>
      </div>
    


<div class="col-lg-12">
      <div class="col-lg-12">
            <legend>SERVICIOS SOLICITADOS</legend>
      </div>

<div class="row"> 
<?
  //var_dump($datlprocs);
?>
<div class="table-responsive col-lg-12">
  <small>Seleccione la orden a generar la autorizacion</small>
  <table class="table">
    <thead>
      <tr>
        <th>Accion</th>
        <th>Orden No.</th>
        <th>Fecha</th>
        <th>Procedimiento</th>
        <th>Cantidad</th>
      </tr>
    </thead>
    <tbody class="listado">
    <?
    if(!empty($datconsulta->datordenes) /*&& empty($datlinca)*/){
       //var_dump($datlinca);
      // exit;

      foreach($datconsulta->datordenes as $orden=>$arr_orden){
        ?>
        
        <?
        if(is_array($arr_orden)){
          foreach($arr_orden as $a => $reg){
          for ($i=0; $i < count($reg); $i++) {       
        ?>
          <tr>
            <td>
              <input type="radio" name="orden" value="<?= $reg[$i]->idhist_ordenes_t67 ?>">
            </td>
            <td width="10%">
              <?=$reg[$i]->orden_t67?>
            </td>
            <td width="10%">
              <?=$reg[$i]->fmod_t67?>
            </td>
            <td width="45%">
              <?=$reg[$i]->descripcion_t67?>
            </td>
            <td width="10%">
              <?=$reg[$i]->cantidad_t67?>
            </td>
          </tr>
        <?
            }
          }
        }
      }
    }
    ?>
    </tbody>
  </table>
</div>
</div>  


 <div class="col-lg-12">
              <label for="xxx">JUSTIFICACION</label>
              <input type="text" name="jsutificacion" class="form-control" id="xxx" placeholder="" value="<? $datinca[0]["obser_inca"]?>">
          <br>
          </div>                   


           
          
          <div class="col-lg-12">
              <label for="xxx">OBSERVACIONES</label>
              <input type="text" name="observacion" class="form-control" id="xxx" placeholder="" value="<? $datinca[0]["obser_inca"]?>">
          <br>
          </div>
        
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="col-md-12">
      <button class="btn <?= $this->Planthtml->colorpric ?>" type="submit">Guardar</button>
    </div>
  </div>
</div>
</form>
<body onload="actual();"></body>
<script type="text/javascript" >
  
  
    function actual() {
      
        document.getElementById("fecha_inic_inca").value=new Date().toJSON().slice(0,10); //hoy.getFullYear()+ "/" + (hoy.getMonth()+1)+ "/" +hoy.getDate() ;
        
    }

    function fechaend(dias){
        

            var fecha = new Date(),
              dia = fecha.getDate(),
              mes = fecha.getMonth() + 1,
              anio = fecha.getFullYear(),
              tiempo = dias,
              addTime = tiempo * 86400; //Tiempo en segundos
              menosTime = addTime - 86400;
       
          fecha.setSeconds(menosTime); //Añado el tiempo
       

         document.getElementById("fecha_ter_inca").value=fecha.toJSON().slice(0,10) ;
    } 

    function habilitar(value){
      console.log(value,document.getElementById("fecha_ult_inca"));
      if(value=="AMBULATORIA"){
        document.getElementById("fecha_ult_inca").removeAttribute("readonly"); 
        document.getElementById("numer_dias_inca").removeAttribute("readonly"); 
      }else{
          document.getElementById("fecha_ult_inca").setAttribute("readonly","readonly"); 
        document.getElementById("numer_dias_inca").setAttribute("readonly","readonly"); 
      }
    } 


</script>



