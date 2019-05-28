<?
  //var_dump($datlprocs);
?>
<div class="table-responsive col-lg-12">
  <table class="table">
    <thead>
      <tr><th>Orden No.</th>
        <th>Fecha</th>
        <th>Procedimiento</th>
        <th>Cantidad</th>
        <th>Pendiente</th>
        <th></th>
      </tr>
    </thead>
    <tbody class="listado">
    <?
    if(!empty($datlprocs) /*&& empty($datlinca)*/){
       //var_dump($datlinca);
      // exit;

      foreach($datlprocs as $orden=>$arr_orden){
        ?>
        
        <?
        if(is_array($arr_orden)){
          foreach($arr_orden as $reg){
              // debug($reg);
        ?>
          <tr>
            <td width="10%">
              <?=$reg->orden_t67?>
            </td>
            <td width="10%">
              <?=$reg->fmod_t67?>
            </td>
            <td width="45%">
              <?=$reg->descripcion_t67?>
            </td>
            <td width="10%">
              <?=$reg->cantidad_t67?>
            </td>
            <td width="10%">
              <?=$reg->cantidadpen_t67?>
            </td>
            <td width="10%">
<!--               <a href="<?=site_url("pacientes/historia/imprimir/examenes/".$dathistoria->idps_historia_t4."/".$reg->orden_t67."/".$reg->idhist_ordenes_t67)?>"><i class="fa fa-print"></i></a> -->
                   <a href="<?=site_url("pacientes/historia/imprimir/examenes/".$dathistoria->idps_historia_t4."/".$reg->orden_t67)?>"><i class="fa fa-print"></i></a>
                  <a href="<?=site_url("pacientes/historia/imprimir/examenespk/".$dathistoria->idps_historia_t4."/".$reg->orden_t67."/".$reg->idhist_ordenes_t67)?>"><i class="fa fa-print"></i></a>
                          <a href="<?=site_url('consexterna/examenespk/gestionar/'.$dathistoria->idps_historia_t4.'/evolucorden/'.$reg->idhist_ordenes_t67)?>" alt="Ver examenes"><i class="fa fa-cogs"></i></a>
              <a href="<?=site_url('consexterna/'.$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6.'/gestionar/'.$dathistoria->idps_historia_t4.'/evolucorden/'.$reg->idhist_ordenes_t67)?>"><i class="fa fa-cogs"></i></a>
            </td>
          </tr>
        <?
          }
        }
      }
    }
    ?>
     <?
    if(!empty($datlinca) /*&& empty($datlprocs)*/){
   
      //exit;
      foreach($datlinca as $i=>$inca){
   
        ?>
        
       
          <tr>
            <td width="10%">
              <?=$inca["id_inca"]?>
            </td>
            <td width="10%">
              <?=$inca["fecha_inic_inca"]?>
            </td>
            <td width="50%">
              <span>Incapacidad</span>
            </td>
          <td width="10%">
            
            </td>
            <td width="10%">
           
            </td>
            <td width="5%">
              <a href="<?=site_url("pacientes/historia/imprimir/incapacidad/".$dathistoria->idps_historia_t4."/".$arr_orden->orden_t67)?>"><i class="fa fa-print"></i></a>
             <!-- <a href="<?=site_url($this->Constante->arr_defservcios[$dathistoria->ubicacion_t4]->controlador_t90.'/'.$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6.'/gestionar/'.$dathistoria->idps_historia_t4.'/evolucorden/'.$arr_orden->idhist_ordenes_t67)?>"><i class="fa fa-cogs"></i></a>-->
            </td>
          </tr>
        <?
    
        }
      }
 
    ?>
    </tbody>
  </table>
</div>