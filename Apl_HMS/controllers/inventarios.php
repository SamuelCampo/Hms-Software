<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Inventarios extends CI_Controller {
  
  function __construct(){    
    parent::__construct();  
    $this->output->cache(0);
    $this->seccion = "Adminitraci&oacute;n";
    $this->load->model('Cups');
    $this->load->model('Cie10');
    $this->load->model('Agenda');
    $this->load->model('inventario');
  }
  
  public function stock(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "buscar":
          $arr_datos["buscado"]=$this->input->post("buscado");
        case "mensaje":
        case "0":
          if(empty($arr_datos["buscado"])){
            $arr_lista["buscado"]="";
          }else{
            $arr_lista["buscado"]=$arr_datos["buscado"];
            $arr_lista["inventario"]=$this->inventario->ver($arr_lista["buscado"]);
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $this->Planthtml->cont["tit_seccion"]="Inventarios / Stock";
          $this->Planthtml->cont["contenido"] = $this->load->view('Inventarios/l_vista.php',$arr_lista,true);
          break;
          
          case "nuevo":
          
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Stock / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $this->load->model('inventario');
            $identif = $this->inventario->guardarInventario();
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"));
            redirect(site_url()."/inventarios/stock/ver/".$mensaje);
          }else{
            $arr_formusr["roles"]=$this->Usuario->rol_listar();
            $arr_formusr["servicios"]=$this->Serviciohab->listar();
            $this->Planthtml->cont["contenido"] = $this->load->view('Inventarios/l_nuevo',$arr_formusr,true);
            $this->Planthtml->cont["js"] = $this->load->view('RRHH/Personal/js_f_personal',"",true);
          }
          break;
      case 'ver':

          $data['inventario'] = $this->inventario->ver();
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Stock / Nuevo";
          $this->Planthtml->cont["contenido"] = $this->load->view('Inventarios/l_vista',$data,true);
          $this->Planthtml->cont["js"] = $this->load->view('RRHH/Personal/js_f_personal',"",true);
        break;
          
       case "modificar":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Usuarios / Modificar";
          $id = $this->uri->segment(4);
          if($this->uri->segment(5)=="guardar"){
            $this->load->model('inventario');
            $identif = $this->inventario->modificarInventario();
            $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente"))."/buscado/".$idusr;
            redirect(site_url()."/inventarios/stock/modificar/".$this->input->post('cod')."/mensaje/".$mensaje);
          }else{
            $data['inventario'] = $this->inventario->ver($id);
            $this->Planthtml->cont["contenido"] = $this->load->view('Inventarios/form_modificar',$data,true);
            $this->Planthtml->cont["js"] = $this->load->view('RRHH/Personal/js_f_personal',"",true);
          }
          break;
        case "eliminar":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Usuarios / Eliminar";
          $id = $this->uri->segment(4);
          if($this->uri->segment(5)=="guardar"){
            $this->Usuario->eliminar($id);
            $mensaje=urlencode(base64_encode("Usuario eliminado satisfactoriamente"));
            redirect(site_url()."/administracion/usuarios/mensaje/".$mensaje);
          }else{
            $arr_modificar["usuario"]=$this->Usuario->obtener($id,true);
            $arr_modificar["personal"]=$this->Personal->obtener($arr_modificar["usuario"]->identificacion_t0);
            $arr_modificar["mensaje"]="Se eliminará el usuario ".$arr_modificar["usuario"]->nombre_t0." [".$arr_modificar["usuario"]->idps_usuarios_t0."] ";
            $this->Planthtml->cont["contenido"] = $this->load->view('Genericas/gen_eliminar',$arr_modificar,true);
          }
          break;
          case 'despacho':
          $arr_datos["buscado"]=$this->input->post("buscado");
          if(empty($arr_datos["buscado"])){
            $arr_lista["buscado"]="";
          }else{
            $arr_lista["buscado"]=$arr_datos["buscado"];
            $arr_lista["inventario"]=$this->Inventario->BuscarOrdenes($arr_lista["buscado"]);
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $this->Planthtml->cont["tit_seccion"]="Inventarios / Despacho";
          $id = $this->uri->segment(4);
          if($this->uri->segment(5)=="guardar"){
            $this->Inventario->guardarDespacho($id);
            $mensaje=urlencode(base64_encode("Usuario eliminado satisfactoriamente"));
            redirect(site_url()."/administracion/usuarios/mensaje/".$mensaje);
          }else{
          $this->Planthtml->cont["contenido"] = $this->load->view('Inventarios/l_despacho.php',$arr_lista,true);
          $this->Planthtml->cont["js"] = $this->load->view('Inventarios/js_despacho',"",true);
          }
          break;
          case 'carga_factura':
          $arr_datos["buscado"]=$this->input->post("buscado");
          if(empty($arr_datos["buscado"])){
            $arr_lista["buscado"]="";
          }else{
            $arr_lista["buscado"]=$arr_datos["buscado"];
            $arr_lista["inventario"]=$this->Inventario->BuscarOrdenes($arr_lista["buscado"]);
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $this->Planthtml->cont["tit_seccion"]="Inventarios / Despacho";
          $id = $this->uri->segment(4);
          if($this->uri->segment(5)=="guardar"){
            $this->Inventario->guardarDespacho($id);
            $mensaje=urlencode(base64_encode("Usuario eliminado satisfactoriamente"));
            redirect(site_url()."/administracion/usuarios/mensaje/".$mensaje);
          }else{
          $this->Planthtml->cont["contenido"] = $this->load->view('Inventarios/l_cargar_factura.php',$arr_lista,true);
          $this->Planthtml->cont["js"] = $this->load->view('Inventarios/js_despacho',"",true);
          $this->Planthtml->cont["js"] .= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
          }
          break;
      }
      $this->Planthtml->generar();
   }
  }

  function buscar(){
    $consulta = $this->input->post('consulta');
    $data = $this->inventario->verS($consulta);
    echo json_encode($data);
  }
  
  

}
?>