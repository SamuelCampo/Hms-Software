<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class cambio_rol extends CI_Controller
{
 
    public function __construct() {
       parent::__construct();
       $this->load->model('cambio_roles');
    }
    
   public function cambio_rol_nuevo(){
       $data = $this->input->post('roles');
       $result = $this->cambio_roles->cambio_masivo($data);
       
       if($result == true){
             redirect(site_url()."/administracion/roles?errorMssg=".urlencode("Los roles fueron actualizados"));
       }else{
            redirect(site_url()."/administracion/roles?errorMssg=".urlencode("Hubo un error"));
       }
       
   }
   
   
   public function volver_rol(){
       $result = $this->cambio_roles->volver_roles();
       
       if($result == true){
          redirect(site_url()."/administracion/roles?errorMssg=".urlencode("Todos los roles fueron devueltos a su estado anterior"));
       }else{
          redirect(site_url()."/administracion/roles?errorMssg=".urlencode("hubo un error"));
       }
   }
}


?>