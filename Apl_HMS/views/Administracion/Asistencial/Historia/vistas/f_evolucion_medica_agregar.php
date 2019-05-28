<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#conceptos" aria-expanded="true" aria-controls="collapseOne">
        <i class="glyphicon glyphicon-transfer"></i>   Conceptos de entrada del Paciente 
      </a>
      </h4>
    </div>
    <div id="conceptos" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <fieldset>
          <form class="form-horizontal" role="form" action="" method="post">
              <div class="row">
                <div class="col-xs-6">
                  <div class="form-group">
                   <label for="motivo" class="col-lg-2 control-label">Estado de ingreso del paciente</label>
                   <div class="col-lg-9">
                     <textarea class="form-control" rows="6"></textarea>
                   </div>
                  </div>
                  <div class="form-group">
                   <label for="motivo" class="col-lg-2 control-label">Motivo de consulta</label>
                   <div class="col-lg-9">
                     <textarea class="form-control" rows="6"></textarea>
                   </div>
                  </div>
               </div>

               <div class="col-xs-6">
                  <div class="form-group">
                   <label for="motivo" class="col-lg-2 control-label">Enfermedad actual</label>
                   <div class="col-lg-9">
                    <textarea class="form-control" rows="6"></textarea>
                   </div>
                  </div>
                  <div class="form-group">
                   <label for="fejecucion" class="col-lg-2 control-label">Indicaciones medicas/conducta</label>
                   <div class="col-lg-9">
                    <textarea class="form-control" rows="6"></textarea>
                   </div>
                  </div>
               </div>
               <div class="text-center">
                  <br/>
                  <button type="submit" class="btn bg-navy">Guardar</button>
               </div>
            </div>
           </form>
        </fieldset>
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#laboratorios" aria-expanded="false" aria-controls="collapseTwo">
       <i class="glyphicon glyphicon-list-alt"></i>  Laboratorios e imagenes Diagnosticas   
      </a>
      </h4>
    </div>
    <div id="laboratorios" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
     <div class="panel-body">
     <fieldset>
     <form class="form-horizontal" role="form" action="" method="post">
       <div class="row">
        <div class="col-xs-6">
          <div class="form-group">
         <label for="fejecucion" class="col-lg-2 control-label">Laboratorios</label>
         <div class="col-lg-9">
           <input name="medico" type="text" class="form-control input-sm" id="medico" placeholder="Examen de sangre para el azucar y colesterol" value="">
         </div>
         </div>
          <div class="form-group">
          <label for="fejecucion" class="col-lg-2 control-label">Resultados de Laboratorios</label>
          <div class="col-lg-9">
            <textarea class="form-control" rows="6"></textarea>
          </div>
          </div>
        <div class="form-group">
         <label for="fejecucion" class="col-lg-2 control-label">Procedimientos</label>
         <div class="col-lg-9">
           <input name="medico" type="text" class="form-control input-sm" id="medico" placeholder="Examen de sangre para el azucar y colesterol" value="">
         </div>
         </div>
          
         <div class="form-group">
         <label for="fejecucion" class="col-lg-2 control-label"> Resultados de procedimientos</label>
         <div class="col-lg-9">
           <input name="medico" type="text" class="form-control input-sm" id="medico" placeholder="Examen de sangre para el azucar y colesterol" value="">
         </div>
         </div>
          <div class="form-group">
          <label for="fejecucion" class="col-lg-2 control-label">Plan de Tratamiento</label>
          <div class="col-lg-9">
            <textarea class="form-control" rows="6"></textarea>
          </div>
          </div>
        </div>
       
   <div class="col-xs-6">
      <div class="form-group">
      <label for="fejecucion" class="col-lg-2 control-label">Imagenes Diagnosticas</label>
      <div class="col-lg-9">
        <input name="medico" type="text" class="form-control" id="medico" placeholder="ver imagenes diagnosticas" value="">
      </div>
     </div>
      <div class="form-group">
       <label for="fejecucion" class="col-lg-2 control-label">Resultados de Imagenes Diagnosticos</label>
       <div class="col-lg-9">
         <textarea class="form-control" rows="6"></textarea>
       </div>
      </div>
      <div class="form-group">
         <label for="fejecucion" class="col-lg-2 control-label"> Examenes</label>
         <div class="col-lg-9">
           <input name="medico" type="text" class="form-control input-sm" id="medico" placeholder="Examen de sangre para el azucar y colesterol" value="">
         </div>
         </div>
      <div class="form-group">
         <label for="fejecucion" class="col-lg-2 control-label"> Resultados de Examenes</label>
         <div class="col-lg-9">
           <input name="medico" type="text" class="form-control input-sm" id="medico" placeholder="Examen de sangre para el azucar y colesterol" value="">
         </div>
      </div>
      <div class="form-group">
       <label for="fejecucion" class="col-lg-2 control-label">Medicamentos</label>
       <div class="col-lg-9">
         <textarea class="form-control" rows="6"></textarea>
       </div>
      </div>
     
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
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#evolucion" aria-expanded="false" aria-controls="collapseThree">
         <i class="glyphicon glyphicon-log-out"></i> Evolución diaria</span> 
        </a>
      </h4>
    </div>
    <div id="evolucion" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
         <fieldset>
    <form class="form-horizontal" role="form" action="" method="post">
      
      <div class="form-group">
         <label for="fejecucion" class="col-lg-2 control-label">Evolución diaria</label>
         <div class="col-lg-6">
           <textarea class="form-control" rows="6"></textarea>
         </div>
       </div>

        <div class="form-group">
         <label for="fejecucion" class="col-lg-2 control-label">Plan de manejo</label>
        <div class="col-lg-6">
           <textarea class="form-control" rows="6"></textarea>
         </div>
       </div>
   
        <div class="form-group">
         <label for="fejecucion" class="col-lg-2 control-label">Destino del paciente</label>
         <div class="col-lg-6">
         <select class="form-control input-sm" name="tipo_identificacion"  >
           <option>Salida</option>
           <option>Hospitalización</option>
           <option>Observación</option>
           <option>Cirugía</option>
         </select>
         </div>
       </div>
       <div class="form-group">
         <label for="fejecucion" class="col-lg-2 control-label">Condiciones de salida</label>
         <div class="col-lg-6">
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