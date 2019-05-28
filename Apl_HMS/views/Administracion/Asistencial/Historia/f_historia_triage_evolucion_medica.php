      <fieldset>
       <div class="form-group col-lg-6">
         <div class="col-lg-12 text-center" for="evoldiaria"><b>Evolución</b></div>
         <div class="col-lg-12">
           <textarea class="form-control" name="evoldiaria" id="evoldiaria" rows="6"><?$dathistoria->evoldiaria_t68?></textarea>
         </div>
       </div>
        <div class="form-group col-lg-6">
          <div class="col-lg-12 text-center" for="evoldiaria"><b>Plan de manejo</b></div>
          <div class="col-lg-12">
            <textarea class="form-control" rows="6" name="planmanejo" id="planmanejo"><?=$dathistoria->planmanejo_t68?></textarea>
          </div>
       </div>
      </fieldset>
      <?if($btnguardarevolmedic==true){?>
      <div class="form-group">
        <div class="row text-center">
         <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
        </div>
      </div>
      <?}?> 