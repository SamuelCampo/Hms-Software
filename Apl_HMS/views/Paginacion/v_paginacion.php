
      <script>
        function paginacion_pag(pagina){
          document.getElementById("paginacion_pagactual").value = pagina;
          document.getElementById("<?=$this->Paginacion->paginacion->form?>").submit();
        }
      </script>
      <input type="hidden" name="paginacion_pagactual" id="paginacion_pagactual" value="" />
      <?if($this->Paginacion->paginacion->pagactual!=false){?>
        <ul class="pagination pagination-sm no-margin no-padding">
          <?if($this->Paginacion->paginacion->pagfr!=false){?>
            <li><a href="#" onclick="paginacion_pag(1)"><i class="fa fa-step-backward" aria-hidden="true"></i></a></li>
          <?}
            if($this->Paginacion->paginacion->pagant!=false){?>
            <li><a href="#" onclick="paginacion_pag(<?=$this->Paginacion->paginacion->pagant?>)"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
          <?}
            for($i=$this->Paginacion->paginacion->paginicial;$i<=$this->Paginacion->paginacion->pagfinal;$i++){
              $classact='';
              if($i==$this->Paginacion->paginacion->pagactual){$classact='class="bg-navy"';}
              ?>
            <li ><a <?=$classact?> href="#" onclick="paginacion_pag(<?=$i?>)"><?=$i?></a></li>
          <?}
          ?>
          <?if($this->Paginacion->paginacion->pagsig!=false){?>
            <li><a href="#" onclick="paginacion_pag(<?=$this->Paginacion->paginacion->pagsig?>)"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
          <?}
          if($this->Paginacion->paginacion->pagfr!=false){?>
            <li><a href="#" onclick="paginacion_pag(<?=$this->Paginacion->paginacion->pagfr?>)"><i class="fa fa-step-forward" aria-hidden="true"></i></a></li>
          <?}?>
          <?if($this->Paginacion->paginacion->pagmsj!=false){?>
            <li>
              <a href="#" class="bg-navy-active">
                <?=$this->Paginacion->paginacion->pagmsj?>
              </a>
            </li>
          <?}?>
        </ul>
      <?}?>
