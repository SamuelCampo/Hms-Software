<legend>INCAPACIDAD MEDICA</legend>

  
  <div class="col-lg-10">
      <div class="col-lg-4">
            <label for="xxx" >INCAPACIDAD POR :</label>
            <select class="form-control input-sm" name="motivo_inca" >
           	  <option selected value="MEDICINA GENERAL"><? $datinca[0]["motivo_inca"]?> </option>
              <option value="MEDICINA GENERAL">MEDICINA GENERAL</option>
              <option value="MATERNIDAD">MATERNIDAD</option>
              <option value="ENFERMEDAD PROFESIONAL">ENFERMEDAD PROFESIONAL</option>
              <option value="ENFERMEDAD LABORAL">ENFERMEDAD LABORAL</option>
              <option value="OTRO">OTRO</option>
            </select>
            <br>
        </div>

      <div class="col-lg-4">
            <label for="xxx" >TIPO DE INCAPACIDAD:</label>
            <select class="form-control input-sm" name="tipo_inca" >
            	<option selected value="MEDICINA GENERAL"><? $datinca[0]["tipo_inca"]?> </option>
              <option value="AMBULATORIA">AMBULATORIA</option>
              <option value="DEFINITIVA">DEFINITIVA</option>
              <option value="OTRO">OTRO</option>
            </select>
            <br>
        </div>
  </div>

<div class="col-lg-12">
      <div class="col-lg-12">
            <legend>INFORMACION DE LA ENFERMEDAD</legend>
      </div>

      <div class="col-lg-12">
          <?php if (empty($datconsulta->dxprincipal_t64) || !empty($datinca[0]["diag_enfer_inca"] )) {?>
              <label for="xxx">DIAGNOSTICO DE LA ENFERMEDAD</label>
              <input type="text" name="diag_enfer_inca" class="form-control" id="dxprincipal" placeholder="" value="<? $datinca[0]["diag_enfer_inca"]?>">
        <?php }else{?>   
               <label for="xxx">DIAGNOSTICO DE LA ENFERMEDAD</label>
              <input type="text" name="diag_enfer_inca" class="form-control" id="dxprincipal" placeholder="" value="<? $datconsulta->dxprincipal_t64?>">
            <?php }?>   
          </div>

<div class="col-lg-12">
      <div class="col-lg-12">
            <legend>INCAPACIDAD</legend>
      </div>
      <div class="col-lg-12">
          <div class="col-lg-3">
              <label for="xxx">DIAS DE INCAPACIDAD</label>
              <input type="text" name="dias_inca" class="form-control" id="dias_inca" onchange="fechaend(this.value);" placeholder="DIAS" value="">
            </div>
            

          <div class="col-lg-3">
            <label for="xxx" >FECHA DE INICIO:</label>
            <div class="input-group" style="display:none">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
             </div>
              <input name="fecha_inic_inca" type="text" class="form-control" id="fecha_inic_inca" placeholder="DD/MM/AÑO" value="">
            
          
          </div>
          <div class="col-lg-3">
            <label for="xxx" >FECHA DE TERMINANCION:</label>
            <div class="input-group" style="display:none">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
             </div>
              <input readonly="readonly" name="fecha_ter_inca" type="date" class="form-control" id="fecha_ter_inca" placeholder="" value="">
            
          </div>
          
          
            <div class="col-lg-3">
              <label for="xxx">PRORROGA</label>
              <select class="form-control input-sm" name="porroga_inca" onchange="habilitar(this.value);">
              <option value="AMBULATORIA">SI</option>
              <option value="DEFINITIVA">NO</option>
              <option value="OTRO">OTRO</option>
            </select>
            <br>
            </div>
             
      </div>
  <div class="col-lg-12">
          <div class="col-lg-3">
              <label for="xxx">FECHA ULTIMA INCAPACIDAD</label>
              <input type="date" readonly="readonly" name="fecha_ult_inca" class="form-control" id="fecha_ult_inca" placeholder="Ultima Incapacidad" value="<? $datinca[0]["fecha_ter_inca"] ?>">
              <br>
          </div>
         
          <div class="col-lg-3">
              <label for="xxx">NUMERO DE DIAS</label>
              <input type="text" readonly="readonly" name="numer_dias_inca" class="form-control" placeholder="DIAS" id="numer_dias_inca" placeholder="ABORTOS" value="<? $datinca[0]["dias_inca"]?>">
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



