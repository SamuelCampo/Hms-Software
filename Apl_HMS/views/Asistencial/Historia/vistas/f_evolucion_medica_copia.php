 <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_agregar_evolucion" data-toggle="tab">Agregar evoluci�n medica</a></li>
        <li><a href="#tab_evolucion" data-toggle="tab">Evoluci�n Medica</a></li>
        <li><a href="#tab_procedimientos" data-toggle="tab">Procedimientos Quir�rgicos </a></li>
      </ul>
 <div class="tab-content">
  <div class="tab-pane active" id="tab_agregar_evolucion">
     <?=$this->load->view('Asistencial/Historia/f_evolucion_medica_agregar',"",true)?>
  </div>
    

</div>
   
 <div class="tab-pane" id="tab_evolucion">
  <table  class="table table-bordered" style="margin:0;padding: 0;">
    <thead>
      <tr>
       <th >
        D�as
      </th>
      <th >
        Fecha Ingreso
      </th>
      <th >
        Fecha Evolici�n 
      </th>
      <th >
        Hora Evoluci�n
      </th>
      <th >
        Tipo de Servicio
      </th>
      <th >
       Diagnostico de ingreso 
      </th>
      <th >
       Evoluci�n Diaria 
      </th>
       <th >
       Destino del paciente
      </th>
      </tr>
    </thead>
<tbody class="listado">
     
    <tr>
      <td>
      </td>
      <td>
      </td>
      <td>
      </td>
        <td>
      </td>
        <td>
      </td>
      <td>
      </td>
      <td>
      </td>
      <td>
      </td>
    </tr>

</table>
 </div>
   
   <div class="tab-pane" id="tab_procedimientos">
     <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
       Procedimiento Quir�rgico</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
        
         
     <fieldset>
       <form  class="form-horizontal" role="form" action="" method="post" >
          <div class="form-group">
           <label for="especialidades" class="col-lg-1 control-label">  </label>
            <div class="col-xs-2">
          <label for="ex1">Sala de cirug�a n�</label>
          <input id="ex1" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-2">
          <label for="ex2">Fecha</label>
          <input  id="ex2" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-2">
          <label for="ex3">Hora inicio Anestes�a</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-2">
          <label for="ex3">Hora incio cirug�a </label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
         </div>
        <div class="form-group">
            <label for="especialidades" class="col-lg-1 control-label">  </label>
            <div class="col-xs-3">
          <label for="ex1">Documento Identificaci�n </label>
          <input  id="ex1" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-3">
          <label for="ex2">Nombres</label>
          <input  id="ex2" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-3">
          <label for="ex3">Apellidos</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex1">Edad</label>
          <input  id="ex1" type="text" class="form-control input-sm">
          </div> 
            
        </div>
        
          <div class="form-group">
          <label for="especialidades" class="col-lg-1 control-label">  </label>
          <div class="col-xs-2">
          <label for="ex3">N� de historia</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-2">
          <label for="ex2">Sexo</label>
          <input  id="ex2" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-2">
          <label for="ex3">Peso</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
           <div class="col-xs-2">
          <label for="ex3">Talla CMS</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
           <div class="col-xs-2">
          <label for="ex3">Eps</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          </div>
          <div class="form-group">
          <label for="especialidades" class="col-lg-1 control-label">  </label>
          <div class="col-xs-9">
          <label for="ex1">Cirug�a </label>
          <input  id="ex1" type="text" class="form-control input-sm">
          </div>
         </div>
         
         <div class="form-group">
          <label for="especialidades" class="col-lg-1 control-label">  </label>
          <div class="col-xs-6">
          <label for="ex1">Tipo de paciente </label>
          <label class="checkbox-inline">
             <input type="checkbox" id="checkboxEnLinea1" value="opcion_1"> Programado
             </label>
             <label class="checkbox-inline">
             <input type="checkbox" id="checkboxEnLinea2" value="opcion_2"> Urgencia
             </label>
             <label class="checkbox-inline">
             <input type="checkbox" id="checkboxEnLinea3" value="opcion_3"> Ambulatorio
             </label>
          </div>
        </div>
         <div class="form-group">
          <label for="especialidades" class="col-lg-1 control-label">  </label>
          <div class="col-lg-6">
           <label for="ex2">Tipo de cirug�a </label>
           <label class="checkbox-inline">
             <input type="checkbox" id="checkboxEnLinea1" value="opcion_1"> Limpia
             </label>
             <label class="checkbox-inline">
             <input type="checkbox" id="checkboxEnLinea2" value="opcion_2"> Limpia Contaminada
             </label>
             <label class="checkbox-inline">
             <input type="checkbox" id="checkboxEnLinea3" value="opcion_3"> Sucia
             </label>
          </div>
         
        </div>
         
          <div class="form-group">
             <label for="especialidades" class="col-lg-1 control-label"> </label>
            <div class="col-lg-7">
               <label for="ex2">Tipo de Anestes�a </label>
               <label class="checkbox-inline">
             <input type="checkbox" id="checkboxEnLinea1" value="opcion_1"> General
             </label>
             <label class="checkbox-inline">
             <input type="checkbox" id="checkboxEnLinea2" value="opcion_2"> Peridual
             </label>
             <label class="checkbox-inline">
             <input type="checkbox" id="checkboxEnLinea3" value="opcion_3"> Local
             </label>
             <label class="checkbox-inline">
             <input type="checkbox" id="checkboxEnLinea4" value="opcion_4"> Disociativa
             </label>
            </div>
          </div>
       
         <div class="form-group">
           <label for="especialidades" class="col-lg-1 control-label">  </label>
            <div class="col-xs-3">
          <label for="ex1">Cirujano </label>
          <input  id="ex1" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-3">
          <label for="ex2">Ayudante </label>
          <input  id="ex2" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-3">
          <label for="ex3">Anestesi�logo</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
         </div>
         <div class="form-group">
          <label for="especialidades" class="col-lg-1 control-label">  </label>
          <div class="col-xs-3">
          <label for="ex3">Instrumentador</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-3">
          <label for="ex3">Circulante</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
           <div class="col-xs-3">
          <label for="ex1">Tipo de seguridad Social</label>
          <input  id="ex1" type="text" class="form-control input-sm">
          </div>
        </div>
         
       
       <div class="form-group">
      <div class="row text-center">
       <br/>
       <Button  type = "button"  class = "btn btn-default"   > 
       <span  class = "glyphicon glyphicon-floppy-disk"  aria-hidden = "true" > Guardar</span> 
       </button>
       <Button  type = "button"  class = "btn btn-default"  > 
       <span  class = "glyphicon glyphicon-edit"  aria-hidden = "true" > Editar </span> 
       </button>
       <Button  type = "button"  class = "btn btn-default"  > 
       <span  class = "glyphicon glyphicon-file"  aria-hidden = "true" > Nuevo</span> 
       </button>
      <Button  type = "button"  class = "btn btn-default"  > 
       <span  class = "glyphicon glyphicon-print"  aria-hidden = "true" > Imprimir</span> 
       </button>
      </div>
      </div>
      </form>
     </fieldset> 
        
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Informe de Anestes�a</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
      
        <fieldset>
        <form  class="form-horizontal" role="form" action="" method="post" >
           
      <div class="form-group">
           <label for="especialidades" class="col-lg-1 control-label">  </label>
           <div class="col-lg-7">
               <label for="ex2">Riesgo ASA </label>
               <label class="checkbox-inline">
             <input type="checkbox" id="checkboxEnLinea1" value="opcion_1"> 1
             </label>
             <label class="checkbox-inline">
             <input type="checkbox" id="checkboxEnLinea2" value="opcion_2"> 2
             </label>
             <label class="checkbox-inline">
             <input type="checkbox" id="checkboxEnLinea3" value="opcion_3">3
             </label>
             <label class="checkbox-inline">
             <input type="checkbox" id="checkboxEnLinea4" value="opcion_4"> 4
             </label>
             <label class="checkbox-inline">
             <input type="checkbox" id="checkboxEnLinea4" value="opcion_4"> 5
             </label>
             <label class="checkbox-inline">
             <input type="checkbox" id="checkboxEnLinea4" value="opcion_4"> U
             </label>
           </div>  
      </div> 
        <legend>Evaluaci�n Preanest�sica</legend>
       <div class="form-group">
          <label for="especialidades" class="col-lg-1 control-label">  </label>
            <div class="col-xs-1">
          <label for="ex1">FR</label>
          <input  id="ex1" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex2">FC </label>
          <input  id="ex2" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">T.A.</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">PVC</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">HB</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">HTO</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">GLIC</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">CREAT</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">T.PROTR</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">BILIRT</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
       </div>
        <div class="form-group">
          <label for="especialidades" class="col-lg-1 control-label">  </label>
          <div class="col-xs-1">
          <label for="ex3">B.DIR</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">RH</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
           <div class="col-xs-3">
          <label for="ex1">OTROS</label>
          <input  id="ex1" type="text" class="form-control input-sm">
          </div>
           <div class="col-xs-3">
          <label for="ex1">Cirug�a Propuesta</label>
          <input  id="ex1" type="text" class="form-control input-sm">
           </div>
        </div>
        <div class="form-group">
           <label for="especialidades" class="col-lg-1 control-label">  </label>
          <div class="col-xs-5">
          <label for="ex1">Historia</label>
          <textarea class="form-control" rows="4"></textarea>
          </div>
            <div class="col-xs-5">
          <label for="ex1">Antecedentes</label>
          <textarea class="form-control" rows="4"></textarea>
            </div>
        </div>
        <div class="form-group">
           <label for="especialidades" class="col-lg-1 control-label">  </label>
        <label > RX  Valoraci�n M.I EKG y expresiones</label>
        </div>
        <div class="form-group">
           <label for="especialidades" class="col-lg-1 control-label"></label>
           <div class="col-xs-1">
          <label for="ex1">Dientes</label>
          <input  id="ex1" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex2">Cuello</label>
          <input  id="ex2" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">HTO</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">GLIC</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">CREAT</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
           <div class="col-xs-1">
          <label for="ex3">T.PROTR</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">BILIRT</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
        </div>
        <div class="form-group">
           <label for="especialidades" class="col-lg-1 control-label"></label>
          <div class="col-xs-1">
          <label for="ex3">V�a A�rea</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">Mallampati 1-2-3-4</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">Estado conciencia </label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
        </div>
    <div class="form-group">
           <label for="especialidades" class="col-lg-1 control-label">  </label>
           <legend>     Registro Anestes�a</legend>
        </div>
         <div class="form-group">
          <label for="especialidades" class="col-lg-1 control-label"> </label>
          <div class="col-xs-3">
          <label for="ex3">Dx Preoperatorio</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-3">
          <label for="ex3">Dx Post Operatorio </label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
           <div class="col-xs-3">
          <label for="ex1">Operaci�n </label>
          <input  id="ex1" type="text" class="form-control input-sm">
          </div>
        </div>
          <div class="form-group">
          <label for="especialidades" class="col-lg-1 control-label">  </label>
          <div class="col-xs-3">
          <label for="ex3">Cirujanos</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-3">
          <label for="ex3">Anestesiologos </label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
           <div class="col-xs-3">
          <label for="ex1">Tiempo de ayuno  </label>
          <input  id="ex1" type="text" class="form-control input-sm">
          </div>
        </div>
        <div class="form-group">
           <label for="especialidades" class="col-lg-1 control-label">  </label>
        <label > T�cnica</label>
        </div>
        <div class="form-group">
           <label for="especialidades" class="col-lg-1 control-label"></label>
          <div class="col-xs-1">
          <label for="ex3">Local</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">Bloqueo</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">General </label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">Caudal</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">otra</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
            <div class="col-xs-1">
          <label for="ex3">Disociativa</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
           
        </div>
           
        <div class="form-group">
           <label for="especialidades" class="col-lg-1 control-label"></label>
           <div class="col-xs-1">
          <label for="ex3">Epidural</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">Espinal</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">Espacio</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-1">
          <label for="ex3">Nivel</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
             <div class="col-xs-1">
          <label for="ex3">Aguja</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
             <div class="col-xs-1">
          <label for="ex3">Cateter</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
        </div>
        
      <div class="form-group">
          <label for="especialidades" class="col-lg-1 control-label"> </label>
          <div class="col-xs-3">
          <label for="ex3">Posici�n:</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-3">
          <label for="ex3">Respiraci�n E.A.C:</label>
          <input  id="ex3" type="text" class="form-control input-sm">
          </div>
          <div class="col-xs-3">
          <label for="ex1">SpO2: </label>
          <input  id="ex1" type="text" class="form-control input-sm">
          </div></div>
         <div class="form-group">
           <label for="especialidades" class="col-lg-1 control-label"> </label>
           <div class="col-xs-3">
          <label for="ex1">Co2ET: </label>
          <input  id="ex1" type="text" class="form-control input-sm">
          </div>
           <div class="col-xs-3">
          <label for="ex1">PVC: </label>
          <input  id="ex1" type="text" class="form-control input-sm">
          </div>
           <div class="col-xs-3">
          <label for="ex1">Hemoragias: </label>
          <input  id="ex1" type="text" class="form-control input-sm">
          </div>
        </div>
        <div class="form-group">
          <label for="especialidades" class="col-lg-1 control-label"></label>
          <div class="col-xs-4">
          <label for="ex1">Estado al llegar al Quir�fano : </label>
           <textarea class="form-control" rows="6"></textarea>
          </div>
          <div class="col-xs-4">
          <label for="ex1">Estado al salir del Quir�fano : </label>
           <textarea class="form-control" rows="6"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="especialidades" class="col-lg-1 control-label"></label>
          <div class="col-xs-2">
          <label for="ex1">Sa de CxN�: </label>
           <input  id="ex1" type="text" class="form-control input-sm">
          </div> 
        </div>
         <div class="form-group">
          <label for="especialidades" class="col-lg-1 control-label"></label>
          <div class="col-xs-4">
          <label for="ex1">Observaciones: </label>
           <textarea class="form-control" rows="6"></textarea>
          </div>
         </div>
        
         <div class="form-group">
      <div class="row text-center">
       <br/>
       <Button  type = "button"  class = "btn btn-default"   > 
       <span  class = "glyphicon glyphicon-floppy-disk"  aria-hidden = "true" > Guardar</span> 
       </button>
       <Button  type = "button"  class = "btn btn-default"  > 
       <span  class = "glyphicon glyphicon-edit"  aria-hidden = "true" > Editar </span> 
       </button>
       <Button  type = "button"  class = "btn btn-default"  > 
       <span  class = "glyphicon glyphicon-file"  aria-hidden = "true" > Nuevo</span> 
       </button>
      <Button  type = "button"  class = "btn btn-default"  > 
       <span  class = "glyphicon glyphicon-print"  aria-hidden = "true" > Imprimir</span> 
       </button>
      </div>
      </div>
        
       </form>
        </fieldset> 
      </div>
    </div>
  </div>
  
</div>
 </div>
   

 
 </div>
 </div>