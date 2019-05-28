<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Financiero extends CI_Controller {
  
  var $seccion;
  function __construct(){    
    parent::__construct();  
    $this->output->cache(0);
    $this->seccion = "Financiero";
  }

  public function compras(){
    if($this->Modulo->error == false){
      $this->load->model('Compra');
      $this->Planthtml->cont["tit_seccion"]="Financiero / Asientos Compras";
      $msjdescobj = "Registro";
      $urlfunc = "compras";
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
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["regsast"]=$this->Compra->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/Compras/l_compras',$arr_lista,true);
          break;
        case "registrar":
            $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
            if($this->uri->segment(4)=="guardar"){
              $id_ast = $this->uri->segment(5);
              $tipdoc = $this->uri->segment(6);
              $id_ast = $this->Asientocont->registrar($id_ast,$tipdoc);
              $mensaje=urlencode(base64_encode("$msjdescobj creado satisfactoriamente"))."/buscado/".$id_ast;
              redirect("financiero/$urlfunc/mensaje/".$mensaje);
            }else{
              $id_doc = $this->uri->segment(4);
              if(!is_null($id_doc)){
                $arr_vast["regcompra"]=$this->Compra->obtener($id_doc);
              }
              $cont["tit_seccion"].=" / Registrar";
              $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/Compras/f_compra',$arr_vast,true);
              $this->Planthtml->cont["js"] = $this->load->view('Financiero/Compras/js_f_compra','',true);
            }
          break;
         case "eliminar":
           echo $this->uri->segment(4);
           $this->Asientocont->eliminar($this->uri->segment(4),$this->uri->segment(5));
           $mensaje=urlencode(base64_encode("Registro eliminada satisfactoriamente"));
           redirect("financiero/asientos/mensaje/".$mensaje);
          break;
        case "ver":
          $this->Planthtml->cont["tit_seccion"].=" / Descargar";
          $docnum = $this->uri->segment(4);
          $tipdoc = $this->uri->segment(5);
          switch($tipdoc){
            case "VENTA":
              $this->Asientocont->verventa($docnum);
              break;
            default:
              $mensaje=urlencode(base64_encode("Documento no parametrizado"));
              redirect("financiero/asientos/mensaje/".$mensaje);
              break;
          }

      }
      $this->Planthtml->generar();
    }
	}
  
  public function asientos(){
    if($this->Modulo->error == false){
      $this->Planthtml->cont["tit_seccion"]="Financiero / Asientos Contables";
      $msjdescobj = "Registro";
      $urlfunc = "asientos";
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
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["regsast"]=$this->Asientocont->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/AsientoCont/l_asientos',$arr_lista,true);
          break;
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $id_puc = $this->Asientocont->registrar();
            $mensaje=urlencode(base64_encode("$msjdescobj creado satisfactoriamente"))."/buscado/".$id_puc;
            redirect("financiero/$urlfunc/mensaje/".$mensaje);
          }else{
            $cont["tit_seccion"].=" / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/AsientoCont/f_asientocont',"",true);
            $this->Planthtml->cont["js"] = $this->load->view('Financiero/AsientoCont/js_f_asientocont',"",true);
          }
          break;
            
          case "registrar":
            $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
            if($this->uri->segment(4)=="guardar"){
              $id_ast = $this->uri->segment(5);
              $tipdoc = $this->uri->segment(6);
              $id_ast = $this->Asientocont->registrar($id_ast,$tipdoc);
              $mensaje=urlencode(base64_encode("$msjdescobj creado satisfactoriamente"))."/buscado/".$id_ast;
              redirect("financiero/$urlfunc/mensaje/".$mensaje);
            }else{
              $id_ast = $this->uri->segment(4);
              $tipdoc = $this->uri->segment(5);
              if(!is_null($id_ast)){
                $arr_vast["asiento"]=$this->Asientocont->obtener($id_ast,$tipdoc);
              }
              $cont["tit_seccion"].=" / Registrar";
              $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/AsientoCont/f_asientocont',$arr_vast,true);
              $this->Planthtml->cont["js"] = $this->load->view('Financiero/AsientoCont/js_f_asientocont','',true);
            }
          break;
         case "eliminar":
           echo $this->uri->segment(4);
           $this->Asientocont->eliminar($this->uri->segment(4),$this->uri->segment(5));
           $mensaje=urlencode(base64_encode("Registro eliminada satisfactoriamente"));
           redirect("financiero/asientos/mensaje/".$mensaje);
          break;
        case "ver":
          $this->Planthtml->cont["tit_seccion"].=" / Descargar";
          $docnum = $this->uri->segment(4);
          $tipdoc = $this->uri->segment(5);
          switch($tipdoc){
            case "VENTA":
              $this->Asientocont->verventa($docnum);
              break;
            default:
              $mensaje=urlencode(base64_encode("Documento no parametrizado"));
              redirect("financiero/asientos/mensaje/".$mensaje);
              break;
          }
          
      }
      $this->Planthtml->generar();
    }
	}
  
  public function puc(){
    if($this->Modulo->error == false){
      $this->Planthtml->cont["tit_seccion"]="Parámetros / PUC";
      $msjdescobj = "Registro";
      $urlfunc = "puc";
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
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["pucs"]=$this->Puc->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/PUC/l_puc',$arr_lista,true);
          break;
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $id_puc = $this->Puc->registrar();
            $mensaje=urlencode(base64_encode("$msjdescobj creado satisfactoriamente"))."/buscado/".$id_puc;
            redirect("financiero/$urlfunc/mensaje/".$mensaje);
          }else{
            $cont["tit_seccion"].=" / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/PUC/f_puc_nuevo',"",true);
          }
          break;
            
          case "registrar":
            $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
            if($this->uri->segment(4)=="guardar"){
              $id_puc = $this->uri->segment(5);
              $id_puc = $this->Puc->registrar($id_puc);
              $mensaje=urlencode(base64_encode("$msjdescobj creado satisfactoriamente"))."/buscado/".$id_puc;
              redirect("financiero/$urlfunc/mensaje/".$mensaje);
            }else{
              $id_puc = $this->uri->segment(4);
              if(!is_null($id_puc)){
                $arr_vpuc["puc"]=$this->Puc->obtener($id_puc);
              }
              $cont["tit_seccion"].=" / Registrar";
              $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/PUC/f_puc_nuevo',$arr_vpuc,true);
            }
          break;

        
         case "eliminar":
           echo $this->uri->segment(4);
           $this->Puc->eliminar($this->uri->segment(4));
           $mensaje=urlencode(base64_encode("Cuenta eliminada satisfactoriamente"));
           redirect("financiero/puc/mensaje/".$mensaje);
          break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function ccosto(){
    if($this->Modulo->error == false){
      $this->Planthtml->cont["tit_seccion"]="Parámetros / Centros de Costo";
      $msjdescobj = "Registro";
      $urlfunc = "ccosto";
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
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["arr_ccosto"]=$this->Ccosto->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/CentrosCosto/l_ccosto',$arr_lista,true);
          break;
        case "registrar":
            $this->Planthtml->cont["tit_seccion"].=" / Registrar";
            if($this->uri->segment(4)=="guardar"){
              $id_puc = $this->uri->segment(5);
              $id_puc = $this->Ccosto->registrar($id_puc);
              $mensaje=urlencode(base64_encode("$msjdescobj creado satisfactoriamente"))."/buscado/".$id_puc;
              redirect("financiero/$urlfunc/mensaje/".$mensaje);
            }else{
              $id_puc = $this->uri->segment(4);
              if(!is_null($id_puc)){
                $arr_vpuc["ccosto"]=$this->Ccosto->obtener($id_puc);
              }
              $cont["tit_seccion"].=" / Registrar";
              $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/CentrosCosto/f_ccosto',$arr_vpuc,true);
            }
          break;

        
         case "eliminar":
           echo $this->uri->segment(4);
           $this->Ccosto->eliminar($this->uri->segment(4));
           $mensaje=urlencode(base64_encode("Centro de Costo eliminado satisfactoriamente"));
           redirect("financiero/ccosto/mensaje/".$mensaje);
          break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function bodegas(){
    if($this->Modulo->error == false){
//      $this->load->model("Contrato");
      $this->Planthtml->cont["tit_seccion"]="Parámetros / Bodegas";
      $msjdescobj = "Registro";
      $urlfunc = "bodegas";
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
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          //$arr_lista["datos"]=$this->Contrato->listar($arr_lista["buscado"]);
          //$arr_lista["datestado"]=$this->Constante->estados;
          $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/Bodegas/l_bodegas',$arr_lista,true);
          break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            //$desc_creado = $this->Reqpersonal->registrar();
            $mensaje=urlencode(base64_encode("$msjdescobj creado satisfactoriamente"))."/buscado/".$desc_creado;
            redirect("financiero/$urlfunc/mensaje/".$mensaje);
          }else{
            
            $cont["tit_seccion"].=" / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/Almacenes/f_almacenes_nuevo',$arr_nuevo,true);
          }
          break;
          
        case "modificar":
          $this->Planthtml->cont["tit_seccion"].=" / Modificar";
          $id = $this->Parametros->registrar($this->uri->segment(4));
          $mensaje=urlencode(base64_encode("$msjdescobj modificado satisfactoriamente"))."/buscado/".$id;
          redirect("financiero/$urlfunc/mensaje/".$mensaje);
          break;
        
         case "eliminar":
          $this->Planthtml->cont["tit_seccion"].=" / Eliminar";
          if($this->uri->segment(5)=="guardar"){
            $this->Claseb->eliminar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("$msjdescobj eliminada satisfactoriamente"));
            redirect("financiero/$urlfunc/mensaje/".$mensaje);
          }else{
            $id = $this->uri->segment(4);
            $reg = $this->Claseb->obtener($id);
            $arr_modificar["mensaje"]="Se eliminará el registro ".$reg->clb;
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_almacenes_eliminar',$arr_modificar,true);
          }
          break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function gruposarticulos(){
    if($this->Modulo->error == false){
      $this->load->model("Grupoarticulo");
      $this->Planthtml->cont["tit_seccion"]="Parámetros / Grupos de Artículos";
      $this->Planthtml->cont["arr_vplantprincruta"]=array('Parámetros','Grupos de Artículos');
      $msjdescobj = "Registro";
      $urlfunc = "gruposarticulos";
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
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["v_l_gruposarticulos_res"]=$this->Grupoarticulo->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/GruposArticulos/l_gruposarticulos',$arr_lista,true);
          break;
          
        case "registrar":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $desc_creado = $this->Grupoarticulo->registrar($this->uri->segment(5));
            $mensaje=urlencode(base64_encode("$msjdescobj creado satisfactoriamente"))."/buscado/".$desc_creado;
            redirect("financiero/$urlfunc/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["tit_seccion"].=" / Registrar";
            $id = $this->uri->segment(4);
            if(!empty($id)){
              $arr_v_reg["v_f_gruposarticulos_reg"]=$this->Grupoarticulo->obtener($id);
            }
            $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/GruposArticulos/f_gruposarticulos_reg',$arr_v_reg,true);
          }
          break;
          
         case "eliminar":
          $this->Planthtml->cont["tit_seccion"].=" / Eliminar";
          $this->Grupoarticulo->eliminar($this->uri->segment(4));
          $mensaje=urlencode(base64_encode("Grupo eliminado satisfactoriamente"));
          redirect("financiero/$urlfunc/mensaje/".$mensaje);
          break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function articulos(){
    if($this->Modulo->error == false){
      $this->load->model("Articulo");
      $this->load->model("Grupoarticulo");
      $this->Planthtml->cont["tit_seccion"]="Parámetros /Artículos";
      $this->Planthtml->cont["arr_vplantprincruta"]=array('Parámetros','Artículos');
      $msjdescobj = "Registro";
      $urlfunc = "articulos";
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
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["v_l_articulos_res"]=$this->Articulo->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/Articulos/l_articulos',$arr_lista,true);
          break;
          
        case "registrar":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $desc_creado = $this->Articulo->registrar($this->uri->segment(5));
            $mensaje=urlencode(base64_encode("$msjdescobj creado satisfactoriamente"))."/buscado/".$desc_creado;
            redirect("financiero/$urlfunc/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["tit_seccion"].=" / Registrar";
            $id = $this->uri->segment(4);
            if(!empty($id)){
              $arr_v_reg["v_f_articulos_reg"]=$this->Articulo->obtener($id);
            }
            $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/Articulos/f_articulos_reg',$arr_v_reg,true);
            $this->Planthtml->cont["js"] = $this->load->view('Financiero/Articulos/js_f_articulos',"",true);
          }
          break;
          
         case "eliminar":
          $this->Planthtml->cont["tit_seccion"].=" / Eliminar";
          $this->Articulo->eliminar($this->uri->segment(4));
          $mensaje=urlencode(base64_encode("Artículo eliminado satisfactoriamente"));
          redirect("financiero/$urlfunc/mensaje/".$mensaje);
          break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function terceros(){
    if($this->Modulo->error == false){
      $this->Planthtml->cont["tit_seccion"]="Parámetros / Terceros";
      $this->Planthtml->cont["arr_vplantprincruta"]=array('Parámetros','Terceros');
      $msjdescobj = "Registro";
      $urlfunc = "terceros";
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
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["v_l_terceros_res"]=$this->Tercero->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/Terceros/l_terceros',$arr_lista,true);
          break;
          
        case "registrar":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $desc_creado = $this->Tercero->registrar($this->uri->segment(5));
            $mensaje=urlencode(base64_encode("$msjdescobj creado satisfactoriamente"))."/buscado/".$desc_creado;
            redirect("financiero/$urlfunc/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["tit_seccion"].=" / Registrar";
            $id = $this->uri->segment(4);
            if(!empty($id)){
              $arr_v_reg["v_f_terceros_reg"]=$this->Tercero->obtener($id);
            }
            $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/Terceros/f_terceros_reg',$arr_v_reg,true);
            $this->Planthtml->cont["js"] = $this->load->view('Financiero/Terceros/js_f_terceros',"",true);
          }
          break;
          
         case "eliminar":
          $this->Planthtml->cont["tit_seccion"].=" / Eliminar";
          $this->Tercero->eliminar($this->uri->segment(4));
          $mensaje=urlencode(base64_encode("Tercero eliminado satisfactoriamente"));
          redirect("financiero/$urlfunc/mensaje/".$mensaje);
          break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function bancos(){
    if($this->Modulo->error == false){
//      $this->load->model("Contrato");
      $this->Planthtml->cont["tit_seccion"]="Parámetros /Bancos";
      $this->Planthtml->cont["arr_vplantprincruta"]=array('Parámetros','Bancos');
      $msjdescobj = "Registro";
      $urlfunc = "bancos";
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
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          //$arr_lista["datos"]=$this->Contrato->listar($arr_lista["buscado"]);
          //$arr_lista["datestado"]=$this->Constante->estados;
          $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/Bancos/l_bancos',$arr_lista,true);
          break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            //$desc_creado = $this->Reqpersonal->registrar();
            $mensaje=urlencode(base64_encode("$msjdescobj creado satisfactoriamente"))."/buscado/".$desc_creado;
            redirect("financiero/$urlfunc/mensaje/".$mensaje);
          }else{
            
            $cont["tit_seccion"].=" / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_bancos_nuevo',$arr_nuevo,true);
          }
          break;
          
        case "modificar":
          $this->Planthtml->cont["tit_seccion"].=" / Modificar";
          $id = $this->Parametros->registrar($this->uri->segment(4));
          $mensaje=urlencode(base64_encode("$msjdescobj modificado satisfactoriamente"))."/buscado/".$id;
          redirect("financiero/$urlfunc/mensaje/".$mensaje);
          break;
        
         case "eliminar":
          $this->Planthtml->cont["tit_seccion"].=" / Eliminar";
          if($this->uri->segment(5)=="guardar"){
            $this->Claseb->eliminar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("$msjdescobj eliminada satisfactoriamente"));
            redirect("financiero/$urlfunc/mensaje/".$mensaje);
          }else{
            $id = $this->uri->segment(4);
            $reg = $this->Claseb->obtener($id);
            $arr_modificar["mensaje"]="Se eliminará el registro ".$reg->clb;
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_bancos_eliminar',$arr_modificar,true);
          }
          break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function impuestos(){
    if($this->Modulo->error == false){
      $this->Planthtml->cont["tit_seccion"]="Parámetros / Impuestos";
      $this->Planthtml->cont["arr_vplantprincruta"]=array('Parámetros','Impuestos');
      $msjdescobj = "Registro";
      $urlfunc = "impuestos";
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
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["datos"]=$this->Impuesto->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/Impuestos/l_impuestos',$arr_lista,true);
          break;
          
        case "registrar":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $idimp = $this->uri->segment(5);
            $desc_creado = $this->Impuesto->registrar($idimp);
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$desc_creado;
            redirect("financiero/impuestos/mensaje/".$mensaje);
          }else{
            $cont["tit_seccion"].=" / Registrar";
            $idimp = $this->uri->segment(4);
            $arr_reg["impuesto"]=$this->Impuesto->obtener($idimp);
            $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/Impuestos/f_impuesto',$arr_reg,true);
            $this->Planthtml->cont["js"] = $this->load->view('Financiero/Impuestos/js_f_impuesto','',true);
          }
          break;
          
        case "modificar":
          $this->Planthtml->cont["tit_seccion"].=" / Modificar";
          $id = $this->Parametros->registrar($this->uri->segment(4));
          $mensaje=urlencode(base64_encode("$msjdescobj modificado satisfactoriamente"))."/buscado/".$id;
          redirect("financiero/$urlfunc/mensaje/".$mensaje);
          break;
        
         case "eliminar":
          $this->Planthtml->cont["tit_seccion"].=" / Eliminar";
          if($this->uri->segment(5)=="guardar"){
            $this->Claseb->eliminar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("$msjdescobj eliminada satisfactoriamente"));
            redirect("financiero/$urlfunc/mensaje/".$mensaje);
          }else{
            $id = $this->uri->segment(4);
            $reg = $this->Claseb->obtener($id);
            $arr_modificar["mensaje"]="Se eliminará el registro ".$reg->clb;
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_retenciones_eliminar',$arr_modificar,true);
          }
          break;
      }
      $this->Planthtml->generar();
    }
	}
  
}
?>