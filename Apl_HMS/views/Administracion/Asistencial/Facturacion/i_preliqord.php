<table class="table" style="margin:0;padding: 0;">
  <thead>
    <tr>
      <th nowrap>
        Fecha
      </th>
      <th nowrap>
         Id Paciente
      </th>
      <th nowrap>
        Paciente
      </th>
      <th nowrap>
        Id Médico
      </th>
      <th nowrap>
        Médico
      </th>
      <th nowrap>
        Especialidad
      </th>
      <th nowrap>
        Estado
      </th>
      <th nowrap>
        Tipo
      </th>
      <th nowrap>
        Codigo Proc
      </th>
      <th nowrap>
        Procedimiento
      </th>
      <th nowrap>
        Tercero
      </th>
      <th nowrap>
        Valor
      </th>
    </tr>
</thead>
<tbody>
  <?
  if(is_array($datpreliq)){
    foreach($datpreliq as $arr_reg){
      if(is_array($arr_reg)){
        foreach($arr_reg as $reg){
        ?>
          <tr>
            <td nowrap>
              <?=$this->Modulo->formatofechahora($reg->fecha)?>
            </td>
            <td nowrap>
               <?=$reg->identificacion?>
            </td>
            <td nowrap>
              <?=$this->Planthtml->mayusc($reg->paciente)?>
            </td>
            <td nowrap>
               <?=$reg->medident?>
            </td>
            <td nowrap>
              <?=$this->Planthtml->mayusc($reg->med)?>
            </td>
            <td nowrap>
              <?=$this->Planthtml->mayusc($reg->medespec)?>
            </td>
            <td nowrap>
              <?=$this->Planthtml->mayusc($reg->estado)?>
            </td>
            <td nowrap>
              <?if(empty($reg->tipo)){?>CONS
              <?}else{?><?=$reg->tipo;?><?}?>
            </td>
            <td nowrap>
              <?=$reg->codigo?>
            </td>
            <td nowrap>
              <?=$this->Planthtml->mayusc($reg->proc)?>
            </td>
            <td nowrap>
              <?=$this->Planthtml->mayusc($reg->tercero)?>
            </td>
            <td nowrap>
              <?=$reg->valor?>
            </td>
          </tr>
        <?  
        }
      }
    }
  }
  ?>
</table>