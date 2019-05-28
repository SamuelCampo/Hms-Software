  <form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post">
    <div class="row paddingh">
      <div class="col-lg-12" style="overflow-x: auto">
        <table class="table condensed" style="width:auto">
          <thead>
            <tr>  
              <th></th>
              <th >
               No. Historia
              </th>      
              <th >
               F/ Ingreso
              </th>
              <th >
               F/ Egreso
              </th>      
              <th >
               Identificación
              </th>     
              <th >
               Aseguradora
              </th>    
              <th >
               Nombre
              </th>            
             </tr>
             <?
             if(!empty($filtrados)){
               foreach($filtrados as $filtrado){
                 //var_dump($filtrado); exit;
                 ?>

                 <tr>  
                   <td>
                     <label class="checkbox-inline">
                        <input type="checkbox" name="filtrados[]" value="<?=$filtrado->identificacion_t1?>">
                    </label>
                   </td>
                    <td>
                      <?=$filtrado->idps_historia_t4?>
                    </td>
                    <td>
                      <?=$filtrado->fingreso_t4?>
                    </td>
                    <td >
                     <?=$filtrado->fsalida_t4?>
                    </td>      
                    <td >
                     <?=$filtrado->identificacion_t3?>
                    </td>     
                    <td >
                     <?=$filtrado->administradora_t3?>
                    </td>    
                    <td >
                     <?=$filtrado->nomcomp_t3?>
                    </td>    
                       
               </tr>        
                 <?
               }
             }
             ?>
         </thead>
        </table>
      </div>
    </div>
    <div class="form-group">
      <div class="row text-center">        
        <button type="submit" class="btn bg-navy">
           Agregar
        </button>
      </div>
    </div>
  </form>