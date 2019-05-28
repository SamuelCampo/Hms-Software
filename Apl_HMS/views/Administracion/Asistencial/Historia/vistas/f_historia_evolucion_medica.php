        <div class="form-group">
          <div class="col-lg-6">
           <label for="evoldiaria">Evolución</label>
           <textarea class="form-control" name="evoldiaria" id="evoldiaria" rows="6" required><?=$datconsulta->datevoluciones[0]->evoldiaria_t68?></textarea>
         </div>
        
        <div class="col-lg-6">
          <label for="evoldiaria">Plan de manejo</label>
            <textarea class="form-control" rows="6" name="planmanejo" id="planmanejo" required><?=$datconsulta->datevoluciones[0]->planmanejo_t68?></textarea>
        </div>
       </div>
       <br/><br/>
      <?if($btnguardarevolmedic==true){?>
      <div class="form-group">
        <div class="row text-center">
         <button type="submit" name="formularioenviado" value="evolmed" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
        </div>
      </div>
      <?}?>