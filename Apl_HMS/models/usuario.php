<?
class Usuario extends CI_Model {
  
  var $arr_estados;

  function __construct(){
    parent::__construct();
    $this->arr_estados = array(
      (object)array("estado"=>"A"),
      (object)array("estado"=>"I")
    );
  }
  
  function perf_nuevo($idusr,$roles){
    foreach($roles as $codservicio=>$arr_serv){
      foreach($arr_serv as $codrol){
        $arr_datos["id_usuarios_t6"]=$idusr;
        $arr_datos["cod_rol_t6"]=$codrol;
        $arr_datos["servicio_t6"]=$codservicio;
        $arr_datos["usrmod_t6"]=$this->Modulo->usr->idusr;
        $arr_datos["fmod_t6"]=$this->Modulo->ahora();
        $this->db->insert('ps_usuario_rol_t6', $arr_datos);
      }
    }
  }
  
  function perf_limpiar($idusr){
    $this->db->delete('ps_usuario_rol_t6', array('id_usuarios_t6'=>$idusr));
  }
  
  function perf_obtener($idusr,$arreglo=true){
    $arr_resul=false;
    $this->db->from("ps_usuarios_t0 u");
    $this->db->join('ps_usuario_rol_t6 ur', 'u.idps_usuarios_t0 = ur.id_usuarios_t6', 'inner');
    $this->db->join('ps_roles_t2 r', 'ur.cod_rol_t6 = r.codrol_t2', 'inner');
    $this->db->join('ps_servicioshab_t74 sr', 'ur.servicio_t6 = sr.codigo_t74', 'inner');
    $this->db->where("u.idps_usuarios_t0",$idusr);
    $this->db->order_by("r.rol_t2",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      if($arreglo==false){
        return $arr_datos;
      }
      foreach($arr_datos as $fila){
        $arr_resul[$fila->servicio_t6][$fila->cod_rol_t6]=$fila->cod_rol_t6;
        $arr_resul[$fila->descripcion_t74][$fila->cod_rol_t6]=$fila->cod_rol_t6;
        if(empty($arr_resul["rolprinc"])){
          $arr_resul["rolprinc"]=$fila;
        }
        if(empty($arr_resul["rolsec"])){
          $arr_resul["rolsec"]=$fila;
        }
      }
    }
    return $arr_resul;
  }
  
  function rol_listar(){
    $this->db->from("ps_roles_t2");
    $this->db->order_by("rol_t2",'asc');
    $query = $this->db->get();
    if ($query->num_rows() > 0){
      return $query->result();
    }
    return false;
  }
  
  function rol_obtener($id){
    $this->db->from("ps_roles_t2");
    $this->db->where("idps_roles_t2",$id);
    $this->db->order_by("rol_t2",'asc');
    $query = $this->db->get();
    if ($query->num_rows() > 0){
      return $query->row();
    }
    return false;
  }
  
  function rol_reg($id=""){
    $arr_rol["rol_t2"]=$this->input->post("rol");
    $arr_rol["codrol_t2"]=$this->input->post("codrol");
    $arr_rol["usrmod_t2"]=$this->Modulo->usr->idusr;
    $arr_rol["fmod_t2"]=$this->Modulo->ahora();
    if(empty($id)){
      $this->db->insert("ps_roles_t2",$arr_rol);
      $id = $this->db->insert_id();
    }else{
      $this->db->where("idps_roles_t2",$id);
      $this->db->update("ps_roles_t2",$arr_rol);
    }
    return $id;
  }
  
  function obtenerxident($identif){
    $this->db->from("ps_usuarios_t0 u");
    $this->db->where("u.identificacion_t0",$identif);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $query->row();
    }
  }

  function usuariosMedicos(){
    $this->db->from("ps_personal_t10");
    $this->db->where('cargo_t10 = "Medico"');
    $this->db->or_where('cargo_t10 = "Auxiliar"');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
  }
  
  function obtener($buscado,$id=false){
    $resul = false;
    $this->db->from("ps_usuarios_t0 u");
    if($id==true){
      $this->db->where("u.idps_usuarios_t0",$buscado);
    }elseif(!empty($buscado)){
      $this->db->like('u.nombre_t0',$buscado);
      $this->db->or_like('u.idps_usuarios_t0',$buscado);
      $this->db->or_like('u.identificacion_t0',$buscado);
      $this->db->or_like('u.email_t0',$buscado);
    }
    $this->db->order_by("u.nombre_t0",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      //var_dump($query); exit;
      if($id==true){
        $resul =  $query->row();
      }else{
        $resul = $query->result();
      }
    }
    return $resul;
  }
  
 function registrar($idusr,$datos=""){
   if(empty($datos)){
     $datos = (object)$this->input->post();
   }
   $idusr = $datos->id_usuarios;
   $datactualusr = $this->obtener($datos->id_usuarios,true);
   $datactpersonal = $this->Personal->obtener($datos->numero_identificacion);
    $cnt = $datos->cnt;
     if(!empty($cnt)){
       $arr_nuevo["cnt_t0"]=hash_hmac('md5',$datos->cnt,$this->Modulo->llave);
     }
     $arr_nuevo["idps_usuarios_t0"]=$datos->id_usuarios;
     $arr_nuevo["nombre_t0"]=$datactpersonal->nomcomp_t10;
     $arr_nuevo["identificacion_t0"]=$datos->numero_identificacion;
     $arr_nuevo["estado_t0"]=$datos->estado;
     $arr_nuevo["su_t0"]=$datos->su;
     $arr_nuevo["email_t0"]=$datos->email;
     $arr_nuevo["telefono_t0"]=$datos->telefono;
     $arr_nuevo["tel_movil_t0"]=$datos->tel_movil;
     $arr_nuevo["usrmod_t0"]=$this->Modulo->usr->idusr;
     $arr_nuevo["fechmod_t0"]=$this->Modulo->ahora();
     if(empty($datactualusr->idps_usuarios_t0)){
       $this->db->insert("ps_usuarios_t0",$arr_nuevo);
     }else{
        $this->db->where("idps_usuarios_t0",$datactualusr->idps_usuarios_t0);
        $this->db->update("ps_usuarios_t0",$arr_nuevo);
     }
     $arr_roles = $datos->roles;
     if(is_array($arr_roles)){
       $this->perf_limpiar($idusr);
       $this->perf_nuevo($idusr,$arr_roles);
     }
     $firma = (object)$_FILES["firma"];
     //var_dump($firma); exit;
     if(!empty($firma->name) && !empty($firma->tmp_name)){
        move_uploaded_file($firma->tmp_name,FCPATH."/img/frm/".md5($arr_nuevo["identificacion_t0"]).".png");
      }
      $arr_espec = $datos->especialidades;
      $this->db->where("idps_personal_t11",$datos->numero_identificacion);
      $this->db->delete("ps_personal_espec_t11");
      if(is_array($arr_espec)){
        foreach($arr_espec as $espec){
          $arr_nespecpers["idps_personal_t11"]=$datos->numero_identificacion;
          $arr_nespecpers["idps_especialidades_t11"]=$espec;
          $arr_nespecpers["usrmod_t11"]=$this->Modulo->usr->idusr;
          $arr_nespecpers["fmod_t11"]=$this->Modulo->ahora();
          $this->db->insert("ps_personal_espec_t11",$arr_nespecpers);
          unset($arr_nespecpers);
        }
      }
     return $idusr;
    }

  
  
  function eliminar($id){
      $this->db->where("idps_usuarios_t0",$id);
      $this->db->delete("ps_usuarios_t0");
    }
  
  function validausuario($idusr,$cnt,$llave){
    $cnt_enc = hash_hmac('md5',$cnt,$llave);
    //var_dump($cnt_enc); exit;
    $this->db->from("ps_usuarios_t0 u");
    $this->db->where("u.idps_usuarios_t0",$idusr);
    $query = $this->db->get();
    $usr = $query->row();
    //var_dump($usr);
    //exit;
    //return $usr;
    if(count($usr)>0){
      if($usr->estado_t0=='ACTIVO'){
        if($usr->cnt_t0!==$cnt_enc){
          return false;
        }
        $usr->estado = $usr->estado_t0;
        $usr->nombre = $usr->nombre_t0;
        $usr->idps_usuarios = $usr->idps_usuarios_t0;
        $usr->idusr = $usr->idps_usuarios_t0;
        $usr->roles = $this->perf_obtener($usr->idps_usuarios_t0);
        if($usr->roles == false && $usr->su_t0 =='SI'){
          $usr->roles["rolprinc"]=(object)array("cod_rol_t6"=>'SUP');
        }
        $usr->personal = $this->Personal->obtener($usr->identificacion_t0);
        return $usr;
      }
    }
    return false;
  }

}
?>