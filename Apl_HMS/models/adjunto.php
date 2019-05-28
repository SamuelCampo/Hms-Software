<?
  class Adjunto extends CI_Model {
    var $tabla;
    var $subfijt;
    function __construct()  {
      parent::__construct();
    }
    
    function descargar($id){
      $dat_adj = $this->obtener($id);
      $arr_adj["tipo"]='A';
      $arr_adj["mime"]=$dat_adj->mime_adj;
      $arr_adj["disp"]="attachment";
      $arr_adj["nomarchiv"]=$dat_adj->nombre_adj;
      $arr_adj["ruta"]=$this->Modulo->alm_arch."/".$this->tabla."/".md5($id);
      return $arr_adj;
    }
    
    function obtener($id){
      $this->db->from($this->tabla);
      $this->db->where("idadj_adj",$id);
      $query = $this->db->get();
      if ($query->num_rows() > 0){
        return $query->row();
      }
      return false;
    }
    
    function listar($id){
      $this->db->from($this->tabla);
      $this->db->where("idreg_adj$this->subfijt",$id);
      $query = $this->db->get();
      if ($query->num_rows() > 0){
        return $query->result();
      }
      return false;
    }
    
    function nuevo($idreg){
      if(is_array($_FILES)){
        foreach($_FILES as $idcampo=>$arr_adjuntos){
          if(is_array($arr_adjuntos)){
            foreach($arr_adjuntos["name"] as $idadj=>$valor){
              if(!empty($arr_adjuntos["name"][$idadj]) && !empty($arr_adjuntos["tmp_name"][$idadj])){
                unset($arr_nuevo);
                $arr_nuevo["idreg_adj$this->subfijt"]=$idreg;
                $arr_nuevo["nombre_adj$this->subfijt"]=$arr_adjuntos["name"][$idadj];
                $arr_nuevo["mime_adj$this->subfijt"]=$arr_adjuntos["type"][$idadj];
                $arr_nuevo["usrmod_adj$this->subfijt"]=$this->Modulo->usr->idsgi_usuarios;
                $arr_nuevo["fechmod_adj$this->subfijt"]=$this->Modulo->ahora();
                if(!$this->Modulo->reg_insertar($this->tabla,$arr_nuevo)){
                  $this->Modulo->msjerror.= "Adj::$tipo:I:".$arr_adjuntos["name"][$idadj];
                  return false;
                }
                $idinsertadj=$this->db->insert_id();
                $ruta = $this->Modulo->alm_arch."/".$this->tabla;
                if(!move_uploaded_file($arr_adjuntos["tmp_name"][$idadj],$ruta."/".md5($idinsertadj))){
                  $this->Modulo->msjerror.= "Adj::$tipo:M:".$arr_adjuntos["name"][$idadj];
                  return false;
                }
              }
            }
          }
        }
      }
    return true;
  }
  
  function img_gen_fun_ext($ext){ 
    return "imagecreatefrom".$ext;
  }
  
  function imgconvertjpg($actimagen,$nuevaimagen){
    $imagen=getimagesize($actimagen);//obtenemos el tipo 
    $extencion=image_type_to_extension($imagen[2],false);//aqui obtenemos la extencion de la imagen 
    $imagecreate=$this->img_gen_fun_ext($extencion);//generamos el nombre de la funcion a la que hay que llamar 
    $nimagent=$imagecreate($actimagen);//creamos la imagen con la funcion creada 
    imagejpeg($nimagent,$nuevaimagen);//escribimos la imagen nueva como jpg 
  }
  
  function imgconvertpng($actimagen,$nuevaimagen){
    $imagen=getimagesize($actimagen);//obtenemos el tipo 
    $extencion=image_type_to_extension($imagen[2],false);//aqui obtenemos la extencion de la imagen 
    $imagecreate=$this->img_gen_fun_ext($extencion);//generamos el nombre de la funcion a la que hay que llamar 
    $nimagent=$imagecreate($actimagen);//creamos la imagen con la funcion creada 
    imagepng($nimagent,$nuevaimagen);//escribimos la imagen nueva como jpg 
  }
}
?>