<?
class Tarifa extends CI_Model {
  
  function __construct(){
    parent::__construct();
  }
  
  function homologacion(){
    $this->db->from("ps_plan_tarifario_t63");
    $query = $this->db->get();
    $arr_tplanes = $query->result();
    if(is_array($arr_tplanes)){
      foreach($arr_tplanes as $regplan){
        $arr_planes[$regplan->codplan_t63][$regplan->codplantarifa_t63]=$regplan;
      }
    }
    unset($arr_tplanes);
    $this->db->from("param_tafifhomol_t98");
    $query = $this->db->get();
    $arr_thomol = $query->result();
    if(is_array($arr_thomol)){
      foreach($arr_thomol as $regh){
        $regplan = $arr_planes[$regh->cod_plan_t98][$regh->codigo_t98];
        $arr_homolo["gpt"][$regh->idhomolog_t98][$regh->cod_plan_t98]=$regplan;
        if($regplan->tipoplan_t63=='ISS'){
          $arr_homolo["baseg"][$regplan->codplantarifa_t63]=$regh->idhomolog_t98;
        }
      }
    }
    return $arr_homolo;
  }

  function base_listar($buscado=""){
    if(!empty($buscado)){
      $this->db->from("ps_basetarifas_t95");
      $this->db->like("isscod_t95",$buscado);
      $this->db->or_like("issdesc_t95",$buscado);
      $this->db->or_like("issclasif_t95",$buscado);
      $this->db->or_like("soatcod_t95",$buscado);
      $this->db->or_like("soatdesc_t95",$buscado);
      $query = $this->db->get();
      return $query->result();
    }
  }
  
  function obtener($id){
    $this->db->from("ps_plan_tarifario_t63");
    $this->db->where("codigo_t14",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return  $query->row();
    }
  }
  
  function planes_tipos(){
    $this->db->distinct();
    $this->db->select("codplan_t63");
    $this->db->from("ps_plan_tarifario_t63");
    $this->db->order_by("codplan_t63");
    $query = $this->db->get();
    return $query->result();
  }
  
  function planes_listar($buscado){
    $this->db->from("ps_plan_tarifario_t63");
    if(!empty($buscado)){
      $this->db->like('descripcion_t63',$buscado);
      $this->db->or_like('codplantarifa_t63',$buscado);
      $this->db->or_like('tipoplan_t63',$buscado);
      $this->db->or_like('tiposervicio_t63',$buscado);
    }
    $this->db->order_by("tipoplan_t63",'asc');
    $this->db->order_by("tiposervicio_t63",'asc');
    $this->db->order_by("descripcion_t63",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $resul = $query->result();
    }
    return $resul;
  }
  
} 
?>