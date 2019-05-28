<?
class Inventario extends CI_Model {
  
  function __construct(){
    parent::__construct();
  }
  
  function obtener($id){
    $this->db->from("ps_inv_detallle_t84");
    $this->db->where("codigo_t14",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return  $query->row();
    }
  }
  
  function listar($buscado){
    $this->db->from("ps_inv_detallle_t84");
    $this->db->join("ps_cums_t73","codigo_t84=codigoatc_t73","inner");
    if(!empty($buscado)){
      $this->db->like('codigo_t84',$buscado);
      $this->db->or_like('descripcion_t84',$buscado);
      $this->db->or_like('almacencod_t84',$buscado);
    }
    $this->db->order_by("descripcion_t84",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $resul = $query->result();
    }
    return $resul;
  }

  function BuscarOrdenes($buscado){
    $this->db->from('ps_hist_ordenes_t67');
    $this->db->where('idpaciente_t67', $buscado);
    $this->db->where('Estado_orden = ""');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $resul = $query->result();
    }
    return $resul;

  }

  function guardarDespacho($id){
    $this->db->select('codigo_t67,tipo_t67');
    $this->db->where('idhist_ordenes_t67', $id);
    $resultado = $this->db->get('ps_hist_ordenes_t67', 1)->result();


    if ($resultado[0]->tipo_t67 == "MED") {
      $this->db->select('stock_t73');
      $this->db->where('codigoatc_t73',$resultado[0]->codigo_t67);
      $cantidad = $this->db->get('ps_cums_t73',1)->result();

      $total = $cantidad[0]->stock_t73 - $this->input->post('cantidad');

      var_dump($total);
      exit;
      $this->db->where('codigoatc_t73',$resultado[0]->codigo_t67);
      $this->db->update('ps_cums_t73',array('stock_t73' => $total ));
    }else{
      $this->db->select('stock_t91');
      $this->db->where('codigoatc_t91',$resultado[0]->codigo_t67);
      $cantidad = $this->db->get('ps_sumins_t91',1)->result();

      $total = $cantidad[0]->stock_t91 - $this->input->post('cantidad');

      $this->db->where('codigoatc_t91',$resultado[0]->codigo_t67);
      $this->db->update('ps_sumins_t91',array('stock_t91' => $total ));
    }
  

    $this->db->where('idhist_ordenes_t67', $id);
    return $this->db->update('ps_hist_ordenes_t67', array('entregado' =>  $this->input->post('cantidad'),'Estado_orden' => "DESPACHADO"));
  }
  
    function guardarInventario()
  {
  $arr_grupo = (object)$this->input->post();
   if($arr_grupo->cod === "MED"){
    $num = $this->db->count_all_results('ps_cums_t73');
    $nuevoregistro = $num+1;
    $arr_datos = array(
      'idps_medicamentos_t73' => $nuevoregistro,
      'tipo_t73' => $arr_grupo->grupo,
      'codigoatc_t73' => $arr_grupo->cod,
      'principioact_t73' => $arr_grupo->desc_s,
      'concentracion_t73'=> $arr_grupo->pres_s,
      'ubicacion_t73'  => $arr_grupo->ubicacion,
      'tarifa1_t73' => $arr_grupo->precio2,
      'tarifa2_t73' => $arr_grupo->precio1,
      'usrmod_t73' => $this->Modulo->usr->idusr,
      'fmod_t73' => $this->Modulo->ahora()
    );
   $valor =  $this->db->insert('ps_cums_t73', $arr_datos);
  }else if($arr_grupo->grupo === "INV"){
    $num = $this->db->count_all_results('ps_inv_detallle_t84');
    $nuevoregistro = $num+1;
    $arr_inv = array(
      'idps_inv_detallle_t84' => $nuevoregistro,
      'codigo_t84' => $arr_grupo->cod,
      'descripcion_t84' => $arr_grupo->pres_s,
      'almacen_t84' => $arr_grupo->ubicacion,
      'cantidad_t84' => $arr_grupo->cantidad,
      //'stock_min' => $arr_grupo->min,
      'usrmod_t84' => $this->Modulo->usr->idusr,
      'atributos' => $arr_grupo->atributos,
      //'fechav_t84' => $arr_grupo->fechav,
      'precio' => $arr_grupo->precio2,
      'fmod_t84' => $this->Modulo->ahora()
    );
   $resultado =  $this->db->insert('ps_inv_detallle_t84', $arr_inv);
  }else{
    $num = $this->db->count_all_results('ps_sumins_t91');
    $nuevoregistro = $num+1;
    $arr_datos = array(
      'idps_medicamentos_t91' => $nuevoregistro,
      'tipo_t91' => $arr_grupo->grupo,
      'codigoatc_t91' => $arr_grupo->cod,
      'nombreatc_t91' => $arr_grupo->desc_s,
      'concentracion_t91'=> $arr_grupo->pres_s,
      'tarifa1_t91' => $arr_grupo->precio2,
      'tarifa2_t91' => $arr_grupo->precio1,
      'usrmod_t91' => $this->Modulo->usr->idusr,
      'fmod_t91' => $this->Modulo->ahora()
    );
    $valor = $this->db->insert('ps_sumins_t91', $arr_datos);
  }
 // var_dump($arr_grupo);
  //exit();
  }
  function ver($buscado){
  $this->db->select('*');
  if(!empty($buscado)){
    $this->db->like('codigoatc_t73', $buscado, 'match');
    $this->db->or_like('principioact_t73', $buscado, 'match');
  }
  $query = $this->db->get('ps_cums_t73');
  $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $resul['cums'] = $query->result();
    }
  $this->db->select('*');
  if(!empty($buscado)){
    $this->db->like('codigoatc_t91', $buscado, 'match');
    $this->db->or_like('nombreatc_t91', $buscado, 'match');
  }
  $query = $this->db->get('ps_sumins_t91');
  $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $resul['sums'] = $query->result();
    }

    // Inventario
    $this->db->select('*');
  if(!empty($buscado)){
    $this->db->like('codigo_t84', $buscado, 'match');
    $this->db->or_like('descripcion_t84', $buscado, 'match');
  }
  $query = $this->db->get('ps_inv_detallle_t84');
  $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $resul['inv'] = $query->result();
    }
    return $resul;
  }

  function verS($id){
  $this->db->select('*');
  $this->db->like('codigo_t84',$id, 'MATCH');
  //$this->db->l('codigo_t84 =',$id);
  $query = $this->db->get('ps_inv_detallle_t84');
  $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $resul = $query->result();
    }
    return $resul;
  }
  

  function salidamerc($datossalida){
    if(!empty($datossalida->codigo) && !empty($datossalida->almacen) && $datossalida->cantidad>0){
      $this->db->from("ps_inv_detallle_t84");
      $this->db->where("codigo_t84",$datossalida->codigo);
      $this->db->where("almacencod_t84",$datossalida->almacen);
      $query = $this->db->get();
      $actinv = $query->row();
      //var_dump($actinv);
      $arr_modinv["cantidad_t84"]=$actinv->cantidad_t84-$datossalida->cantidad;
      $arr_modinv["usrmod_t84"]=$this->Modulo->usr->idusr;
      $arr_modinv["fmod_t84"]=$this->Modulo->ahora();
      $this->db->where("idps_inv_detallle_t84",$actinv->idps_inv_detallle_t84);
      $this->db->update("ps_inv_detallle_t84",$arr_modinv);
      //exit;
    }
  }

  public function modificarInventario()
  {
    $arr_inv = (object)$this->input->post();

    var_dump($arr_inv);
    if ($arr_inv->grupo == "SUMI") {
      $arr_modificar['stock_t91'] = $arr_inv->cantidad;
      $arr_modificar['stock_min_t91'] = $arr_inv->min;
      $arr_modificar['tarifa1_t91'] = $arr_inv->precio1;
      $arr_modificar['tarifa2_t91'] = $arr_inv->precio2;
      $arr_modificar['fecha_v_t91'] = $arr_inv->fechav;
      $arr_modificar['cod_proveedor_t91'] = $arr_inv->labo;
      $this->db->where('codigoatc_t91', $arr_inv->cod);
      return $this->db->update('ps_sumins_t91', $arr_modificar);
    } else {
      $arr_modificar['stock_t73'] = $arr_inv->cantidad;
      $arr_modificar['stock_min_t73'] = $arr_inv->min;
      $arr_modificar['tarifa1_t73'] = $arr_inv->precio1;
      $arr_modificar['tarifa2_t73'] = $arr_inv->precio2;
      $arr_modificar['fecha_v_t73'] = $arr_inv->fechav;
      $arr_modificar['cod_proveedor_t73'] = $arr_inv->labo;
      $this->db->where('codigoatc_t73', $arr_inv->cod);
     return $this->db->update('ps_cums_t73', $arr_modificar);
    }
  }
  
} 
?>