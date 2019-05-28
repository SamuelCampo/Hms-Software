<style>
  .input-sm{
    position: relative;
    top: 10px;
    margin-right: 5px; 
  }
</style>
<div class="container">
  <div class="row">
        <div class="col-md-6">
            <div class="form-group col-md-12">
           <input type="checkbox" class="input-sm" name="precuocupacion_somatica" value="SI">
           <label for="">Preocupacion somatica</label> 
          </div>
          <div class="form-group col-md-12">
            <input type="checkbox" class="input-sm" name="ansiedad_psiquica" value="SI">
            <label for="">Ansiedad Psiquica</label>
          </div>
          <div class="form-group col-md-12">
           <input type="checkbox" class="input-sm" name="barreras_emocionales" value="SI">
           <label for="">Barreras Emocionales</label> 
          </div>
          <div class="form-group col-md-12">
            <input type="checkbox" class="input-sm" name="desorganizacion_conceptual" value="SI"><label for="">Desorganizacion Conceptual (Incoherencia)</label>
          </div>
          <div class="form-group col-md-12">
            <input type="checkbox" class="input-sm" name="autodepresivo" value="SI"><label for="">Autodesprecio y sentimiento de culpa</label>
          </div>
          <div class="form-group col-md-12">
            <input type="checkbox" class="input-sm" name="ansiedad_somatica" value="SI"><label for="">Ansidad Somatica</label>
          </div>
          <div class="form-group col-md-12">
            <input type="checkbox" class="input-sm" name="alteraciones_moto_espe" value="SI"><label for="">Alteraciones motoras especificas</label>
          </div>
          <div class="form-group col-md-12">
            <input type="checkbox" class="input-sm" name="autoestima_exa" value="SI">
            <label for="">Autoestima Exagerada</label>
          </div>
          <div class="form-group col-md-12">
            <input type="checkbox" class="input-sm" name="humor_depre" value="SI"><label for="">Humor depresivo</label>
          </div>
        </div>
          
          <div class="col-md-6">
            <div class="form-group col-md-12">
             <input type="checkbox" class="input-sm" name="hostilidad" value="SI"><label for="">Hostilidad</label>
            </div>
            <div class="form-group col-md-12">
             <input type="checkbox" class="input-sm" name="suspicacia" value="SI"><label for="">Suspicacia</label>
            </div>
            <div class="form-group col-md-12">
             <input type="checkbox" class="input-sm" name="alucinaciones" value="SI"><label for="">Alucinaciones</label>
            </div>
            <div class="form-group col-md-12">
             <input type="checkbox" class="input-sm" name="enlentesimiento_motor" value="SI"><label for="">Enlentecimiento Motor</label>
            </div>
            <div class="form-group col-md-12">
             <input type="checkbox" class="input-sm" name="falta_coperacion" value="SI"><label for="">Falta de cooperación</label>
            </div>
            <div class="form-group col-md-12">
             <input type="checkbox" class="input-sm" name="transtorno_pensamiento" value="SI"><label for="">transtornos del Pensamiento</label>
            </div>
            <div class="form-group col-md-12">
            <input type="checkbox" class="input-sm" name="embotamiento" value="SI"><label for="">Embotamiento o transtornos afectivos</label>
            </div>
            <div class="form-group col-md-12">
            <input type="checkbox" class="input-sm" name="agitacion_psicomotriz" value="SI"><label for="">Agitación psicomotriz</label> 
            </div>
            <div class="form-group col-md-12">
            <input type="checkbox" class="input-sm" name="desorientacion" value="SI"><label for="">Desorientacion y confunsión</label> 
            </div>
          </div>
        </div>
  <div class="row">
    <div class="col-md-6">
        <div class="form-group">
          <label for="">Gravedad de la enfermedad actual</label>
          <select name="gravedad" id="" class="form-control">
            <option value="No Evaluado">No Evaluado</option>
            <option value="Normal no enfermo">Normal no enfermo</option>
            <option value="Dudosamente enfermo">Dudosamente enfermo</option>
            <option value="Levemente enfermo">Levemente enfermo</option>
            <option value="Moderadamente Enfermo">Moderadamente Enfermo</option>
            <option value="Gravemente Enfermo<">Gravemente Enfermo</option>
            <option value="Entre los pacientes mas estremadamente enfermos">Entre los pacientes mas estremadamente enfermos</option>
          </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
          <label for="">¿Como se encuentra el paciente en estos momentos? (Mejoria)</label>
          <select name="mejoria" id="" class="form-control">
            <option value="No Evaluado">No Evaluado</option>
            <option value="Mucho Mejor">Mucho Mejor</option>
            <option value="Moderadamente Mejor">Moderadamente Mejor</option>
            <option value="Levemente Mejor">Levemente Mejor</option>
            <option value="Sin Cambios">Sin Cambios</option>
            <option value="Moderadamente Peor">Moderadamente Peor</option>
            <option value="Mucho Peor">Mucho Peor</option>
          </select>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-1"></div>
  <div class="form-group col-md-10">
    <label for="">Observaciones</label>
    <textarea name="obs" id="" class="form-control"></textarea>
  </div>    
  </div>

</div>