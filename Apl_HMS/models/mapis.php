<?
class mapis extends CI_Model {
  

  function __construct(){
    parent::__construct();
    $pkac=$this->session->userdata('pkaccesouser');
    if($pkac){
      $this->pkaccesouser=$pkac;
    }
  }
    
   function search($data=""){
       
       $query = $this->db->query("SELECT mapCodigoMapiiss , mapNivelAtencion, mapDescripcion FROM mapiss WHERE 
        mapCodigoMapiiss = '$data' ");
    return $query->result_array();
    //return $resultado;
       
     } 
    
    
    
    
    
}
    ?>
    