<?
  //var_dump($rolesact);
?>
<table class="table" style="margin:0;padding: 0;">
  <tbody class="listado">
    <tr>
      <th >
        <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"su","valor"=>"SI","actual"=>$usuario->su_t0),true)?> Super Usuario
      </th>
      <?
        foreach($roles as $rol){
      ?>
      <th>
        <?=$rol->rol_t2?>
      </th>
      <?
        }
      ?>
    </tr>
    <?
      foreach($servicios as $servicio){
    ?>
    <tr>
      <th>
        <?=$servicio->descripcion_t74?>
      </th>
      <?
        foreach($roles as $rol){
      ?>
      <td class="text-center">
        <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"roles[".$servicio->codigo_t74."][".$rol->codrol_t2."]","valor"=>$rol->codrol_t2,"actual"=>$rolesact[$servicio->codigo_t74][$rol->codrol_t2]),true)?>
      </td>
      <?
        }
      ?>
    </tr>
    <?
      }
    ?>
  </tbody>
</table>