<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class cambio_roles extends CI_Model {
    
    function __construct(){
    parent::__construct();
 
    }
    
    public function cambio_masivo($data){
        
        $primerquery = $this->db->query("UPDATE ps_usuario_rol_t6 SET ps_usuario_rol_antiguo_t6 = cod_rol_t6 WHERE NOT cod_rol_t6 = 'ADM' ");
        $primerquerydouble = $this->db->query("UPDATE ps_usuario_rol_t6 SET rol_respald_t6 = cod_rol_t6 WHERE NOT cod_rol_t6 = 'ADM'");
        $segundoquery = $this->db->query("UPDATE ps_usuario_rol_t6 SET cod_rol_t6 = '$data' WHERE NOT cod_rol_t6 = 'ADM'");
        if($segundoquery == true ){
            return true;
        }else{
            return false;
        }
        
    }
    
    public function volver_roles(){
        $primerquery = $this->db->query("UPDATE ps_usuario_rol_t6 SET cod_rol_t6 = ps_usuario_rol_antiguo_t6 WHERE NOT cod_rol_t6 = 'ADM'");
        if($primerquery == true){
            return true;
        }else{
            return false;
        }
    }
    
}

    
    
?>