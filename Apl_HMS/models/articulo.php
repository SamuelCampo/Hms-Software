<?
  class Articulo extends CI_Model {
 
    var $arr_tipoart;
    var $arr_unidades;
    
    function __construct(){
      parent::__construct();
      $this->arr_tipoart = array(
        (object)array("tipo"=>"ARTICULO"),
        (object)array("tipo"=>"SERVICIO")
      );
      $this->arr_unidades = array(
        (object)array("unidad"=>"DIA"),
        (object)array("unidad"=>"SEMANA"),
        (object)array("unidad"=>"MES"),
        (object)array("unidad"=>"SERVICIO"),
        (object)array("unidad"=>"METRO")
      );
    }
    
    function listar($buscado,$paginar=true){
      $this->db->from("param_articulos_t9");
      if(!empty($buscado)){
        $this->db->like('id_articulos_t9',$buscado);
        $this->db->or_like('cod_t9',$buscado);
        $this->db->or_like('desc_t9',$buscado);
      }
      $this->db->order_by("cod_t9",'asc');
      $query = $this->db->get();
      $arr_datos = $query->result();
      if(count($arr_datos) > 0){
        if($paginar==true){
          return $this->Paginacion->paginar($arr_datos);
        }else{
          return $arr_datos;
        }
      }
      return false;
    }
    
      
    function obtener($id){
      $this->db->from("param_articulos_t9");
      $this->db->where("id_articulos_t9",$id);
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        return $query->row();
      }
      return false;
    }
    
    function registrar($id=""){
      $ogrupoart = $this->Grupoarticulo->obtener($this->input->post("grupoarticulo"),true);
      $arr_reg["cod_t9"]=$this->input->post("codarticulo");
      $arr_reg["desc_t9"]=$this->input->post("nombrearticulo");
      $arr_reg["ctagasto_t9"]=$this->input->post("ctagastosarticulo");
      $arr_reg["ctaingreso_t9"]=$this->input->post("ctaingresosarticulo");
      $arr_reg["tipo_t9"]=$this->input->post("tipoarticulo");
      $arr_reg["grupocod_t9"]=$ogrupoart->cod_t8;
      $arr_reg["grupo_t9"]=$ogrupoart->desc_t8;
      $arr_reg["iva_t9"]=$this->input->post("ivaarticulo");
      $arr_reg["compra_t9"]=$this->input->post("compraarticulo");
      $arr_reg["venta_t9"]=$this->input->post("ventaarticulo");
      $arr_reg["cantidad_t9"]=$this->input->post("cantidad");
      $arr_reg["valor1_t9"]=$this->input->post("valor1");
      $arr_reg["valor2_t9"]=$this->input->post("valor2");
      $arr_reg["actfijo_t9"]=$this->input->post("actfijoarticulo");
      $arr_reg["usrmod_t9"]=$this->Modulo->usr->idusr;
      $arr_reg["fechmod_t9"]=$this->Modulo->ahora();
      if(empty($id)){
        $this->db->insert("param_articulos_t9",$arr_reg);
        $id = $this->db->insert_id();
      }else{
        $this->db->where("id_articulos_t9",$id);
        $this->db->update("param_articulos_t9",$arr_reg);
      }
      return $arr_reg["cod_t9"];
    }
    
    function eliminar($id){
      $this->db->where("id_articulos_t9",$id);
      $this->db->delete("param_articulos_t9");
    }
  }
?>