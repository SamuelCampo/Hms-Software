<?
class Objeto extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->arr_tipo = array((object)array("id"=>"S","tipo"=>'Sección'),(object)array("id"=>"M","tipo"=>'Módulo'),(object)array("id"=>"F","tipo"=>'Función'));
    $this->arr_tipoacc = array((object)array("id"=>"R","tipoacc"=>'Restringido'),(object)array("id"=>"P","tipoacc"=>'Público'));
    $this->arr_aplica = array((object)array("id"=>"M","aplica"=>'Módulo'),(object)array("id"=>"R","aplica"=>'Registro'),(object)array("id"=>"I","aplica"=>'Informe'));
  }
  
  function obtener($buscado="",$id=false)
  {
    $this->db->select("o.idobj, o.idobjcont, o.nombre, o.tipobj, o.controlador, p.nombre padre, o.tipoacc, o.aplicablea, o.img, o.alias");
    $this->db->from("gen_obj o");
    $this->db->join("gen_obj p","o.idobjcont = p.idobj","left");
    if($id==true)
    {
      $this->db->where("o.idobj","$buscado");
    }
    elseif(!empty($buscado))
    {
      $this->db->like('o.nombre',"$buscado");
      $this->db->or_like('o.idobj',"$buscado");
      $this->db->or_like('p.nombre',"$buscado");
    }
    $this->db->order_by("o.idgrup, p.nombre, o.nombre",'asc');
    $query = $this->db->get();
    $res = $query->result();
    //var_dump($res);
    if(count($res)>0)
    {
      if($id==true)
      {
        $res = $query->row();
        $res->nomdet = $res->padre." :: ".$res->nombre." :: ".$res->controlador;
      }
      else
      {
        $res = $query->result();
        foreach($res as $reg)
        {
          $reg->nomdet = $reg->padre." :: ".$reg->nombre." :: ".$reg->controlador;
          $temp[]=$reg;
        }
        $res = $temp;
      }
      return $res;
    }
    return false;
  }
  
  function obtenerxalias($alias,$cont)
  {
    $this->db->select("o.idobj, o.idobjcont, o.nombre, o.tipobj, o.controlador, p.nombre padre, o.tipoacc, o.aplicablea, o.img, o.alias");
    $this->db->from("gen_obj o");
    $this->db->join("gen_obj p","o.idobjcont = p.idobj","left");
    $this->db->where("o.alias",$alias);
    $this->db->where("o.controlador",$cont);
    $this->db->order_by("o.idgrup, p.nombre, o.nombre",'asc');
    $query = $this->db->get();
    if ($query->num_rows() > 0){
      return $query->row();
    }
    return false;
  }
  
  function eliminar($id)
  {
    $this->db->where("idobj",$id);
    $this->db->or_where("idobjcont",$id);
    $this->db->delete("gen_obj");
    $this->Perfil->limpia("",$id);
    return true;
  }
  
  function nuevo()
  {
    $arr_mod["idobjcont"]=$this->input->post("idpadre");
    $arr_mod["alias"]=strtolower($this->Planthtml->solonumletra($this->input->post("nombre")));
    $arr_mod["tipobj"]=$this->input->post("tipo");
    $arr_mod["aplicablea"]=$this->input->post("aplica");
    $arr_mod["tipoacc"]=$this->input->post("tipoacc");
    $arr_mod["nombre"]=$this->input->post("nombre");
    $arr_mod["controlador"]=$this->input->post("controlador");
    $arr_mod["img"]=$this->input->post("img");
    $arr_mod["idgrup"]=$this->input->post("idpadre");
    $this->db->insert("gen_obj",$arr_mod);
    $idobj = $this->Modulo->insert_id();
    if($arr_mod["tipobj"]=='M')
    {
      unset($arr_mod);
      $arr_mod["idgrup"]=$idobj;
      $this->db->where("idobj",$idobj);
      $this->db->update("gen_obj",$arr_mod);
    }
    return $idobj;
  }
  
  function modificar($id)
  {
    $arr_mod["idobjcont"]=$this->input->post("idpadre");
    $arr_mod["alias"]=strtolower($this->Planthtml->solonumletra($this->input->post("nombre")));
    $arr_mod["tipobj"]=$this->input->post("tipo");
    $arr_mod["aplicablea"]=$this->input->post("aplica");
    $arr_mod["tipoacc"]=$this->input->post("tipoacc");
    $arr_mod["nombre"]=$this->input->post("nombre");
    $arr_mod["controlador"]=$this->input->post("controlador");
    $arr_mod["img"]=$this->input->post("img");
    if($arr_mod["tipobj"]=='M')
    {
      $arr_mod["idgrup"]=$id;
    }
    else
    {
      $arr_mod["idgrup"]=$this->input->post("idpadre");
    }
    $this->db->where("idobj",$id);
    $this->db->update("gen_obj",$arr_mod);
  }
}
?>