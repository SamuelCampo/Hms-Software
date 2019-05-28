<legend>SOLICITUD DE AUTORIZACIONES</legend>

  
  <div class="col-lg-10">
      <div class="col-lg-4">
            <label for="xxx" >INFORMACION DE LA ATENCION Y SERVICIOS SOLICITADOS:</label>
            <select class="form-control input-sm" name="motivo_inca" >
              <option selected value="MEDICINA GENERAL"><? $datinca[0]["motivo_inca"]?> </option>
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
              <option selected value="MEDICINA GENERAL"><? $datinca[0]["tipo_inca"]?> </option>
              <option value="AMBULATORIA">Posterior a la atencion inicial de urgencias</option>
              <option value="DEFINITIVA">Servicios electivos</option>
              <option value="DEFINITIVA">Prioritaria</option>
              <option value="DEFINITIVA">No prioritaria</option>
              <option value="OTRO">OTRO</option>
            </select>
            <br>
        </div>
  </div>

  <div class="col-lg-4">
            <label for="xxx" >Ubicacion del Paciente al momento de la solicitud de autorizacion:</label>
            <select class="form-control input-sm" name="tipo_inca" >
              <option selected value="MEDICINA GENERAL"><? $datinca[0]["tipo_inca"]?> </option>
              <option value="AMBULATORIA">Consulta Externa</option>
              <option value="DEFINITIVA">Hospitalizacion</option>
              <option value="DEFINITIVA">Urgencias</option>
              <option value="OTRO">OTRO</option>
            </select>
            <br>
        </div>
        <div class="col-lg-3">
              <label for="xxx">Servicio</label>
              <input type="text" name="obser_inca" class="form-control" id="xxx" placeholder="" value="<? $datinca[0]["obser_inca"]?>">
          <br>
          </div>
          <div class="col-lg-3">
              <label for="xxx">Cama</label>
              <input type="text" name="obser_inca" class="form-control" id="xxx" placeholder="" value="<? $datinca[0]["obser_inca"]?>">
          <br>
          </div>
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
  <div class="col-lg-10"> 
              <div class="form-group no-padding" id="plantordprocs_<?=$idtipoproc?>">
          <div class="col-lg-6 no-margin no-padding">
            <input name="orden[procs][procedimmiento][]" type="text" class="form-control input-sm cump_desc" id="cump_desc_<?=$idtipoproc?>" placeholder="Procedimiento" requiered onfocus="autocompcump('<?=$idtipoproc?>')">
            <input name="orden[procs][procedimmientocod][]" type="hidden" id="cupcodigo_<?=$idtipoproc?>" value="">
          </div>
          <div class="col-lg-1 no-margin no-padding">
            <input name="orden[procs][cantidad][]" type="text" class="form-control input-sm" id="proc_cantidad_<?=$idtipoproc?>" placeholder="Cantidad" value="" requiered>
          </div>
          <div class="col-lg-2 no-margin no-padding">
            <input name="orden[procs][observacion][]" type="text" class="form-control input-sm" id="proc_observ_<?=$idtipoproc?>" placeholder="Observación" >
          </div>
          <div class="col-lg-1 no-margin no-padding text-center">
            <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"orden[procs][aplicado][]","valor"=>"SI",""),true)?>
          </div>
          <div class="col-lg-1 no-margin no-padding text-center">
            <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"orden[procs][externo][]","valor"=>"SI",""),true)?>
          </div>
          
          <div class="col-lg-1" onclick="$(this).parent().remove();">
            <eliminar class="btn bg-navy btn-xs">
              <span class="glyphicon glyphicon-trash btneliminar"></span>
            </eliminar>
          </div>
        </div>
  </div>
</div>  


 <div class="col-lg-12">
              <label for="xxx">JUSTIFICACION</label>
              <input type="text" name="obser_inca" class="form-control" id="xxx" placeholder="" value="<? $datinca[0]["obser_inca"]?>">
          <br>
          </div>                   


           
          
          <div class="col-lg-12">
              <label for="xxx">OBSERVACIONES</label>
              <input type="text" name="obser_inca" class="form-control" id="xxx" placeholder="" value="<? $datinca[0]["obser_inca"]?>">
          <br>
          </div>
        
  </div>
</div>
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



