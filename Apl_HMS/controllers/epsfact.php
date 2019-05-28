<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Epsfact extends CI_Controller {

  function __construct(){
		parent::__construct();
    $this->load->model('Tarifa');
    $this->load->model('Factura');
    $this->load->model('Agenda');
    $this->load->model('usuario');
    $this->load->model('modelo_universal');
    

  }
 /*$this->session->set_flashdata( 'item' ,  'valor' );*/



  public function cuentas(){
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
        }
        if(empty($arr_datos["mensaje"])){
          $arr_lista["mensaje"]="";
        }else{
          $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
        }
        $var=$_SESSION['usr'];
        if($var->roles[0]->cod_rol_t6=='ADM'){
          $page=$this->uri->segment(4, "1");
          
           $limit=50;
           $multi=$limit*$page;
            $tope=($multi)-$limit;
           
                $arr_lista["datctas"]=$this->Factura->listar($arr_lista["buscado"],$tope,$limit);
                 $this->load->library('pagination'); //Cargamos la librería de paginación
               ///CONFIG DE LA PAGINACION
                 $config['base_url'] = site_url().'/epsfact/cuentas/mensaje'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
                 $config['total_rows'] = $this->Factura->conteo();
                 $config['per_page'] = $limit; //Número de registros mostrados por páginas
                 $config['num_links'] = 10; //Número de links mostrados en la paginación
                 $config["uri_segment"] = 4;//el segmento de la paginación
                 $config ['use_page_numbers'] = TRUE;
        }else{
           $page=$this->uri->segment(4, "1");
          
           $limit=50;
           $multi=$limit*$page;
            $tope=($multi)-$limit;
          $arr_lista["datctas"]=$this->Factura->listar_activo($arr_lista["buscado"],$limit,$tope);
           $config['base_url'] = site_url().'/epsfact/cuentas/mensaje'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
                 $config['total_rows'] = $this->Factura->conteo();
              
                 $config['per_page'] = $limit; //Número de registros mostrados por páginas
                $config['num_links'] = 10; //Número de links mostrados en la paginación
                 $config["uri_segment"] = 4;//el segmento de la paginación
                
                 $config ['use_page_numbers'] = TRUE;
        }
        $arr_lista["datos"]=$this->Factura->get_user_rol($arr_lista["buscado"]);
        #Esta data es la que usare para renderizar
        $this->pagination->initialize($config);
        $this->Planthtml->cont["tit_seccion"]="Facturación/ Consulta de Cuentas";
        $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/l_cuentas',$arr_lista,true);
        $this->Planthtml->cont["js"] = $this->load->view('EPSfacturacion/js_mostrado','',true);
        break;
      }
      $this->Planthtml->generar();
    }
	}

	public function buscar(){
	    $data['radicado'] = $this->input->post('radicado');
	    /*var_dump($radicado);
	    exit; el problema no esta aqui al parecer es cuando llega al modelo*/
	    $data['tercero'] = $this->input->post('tercero');
	    $data['factura'] = $this->input->post('numfactura');
	    $data = $this->Factura->buscar($data);
	    $arr_lista["datctas"] = $data;
	    if($arr_lista == true){
	         $this->load->library('pagination'); //Cargamos la librería de paginación
               ///CONFIG DE LA PAGINACION
                 $config['base_url'] = site_url().'/epsfact/cuentas/mensaje'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
                 $config['total_rows'] = count($data);
              
                 $config['per_page'] = $limit; //Número de registros mostrados por páginas
                $config['num_links'] = 10; //Número de links mostrados en la paginación
                 $config["uri_segment"] = 4;//el segmento de la paginación
                
                 $config ['use_page_numbers'] = TRUE;
                 
	      $arr_lista["datos"]=$this->Factura->get_user_rol();
	      $this->Planthtml->cont["tit_seccion"]="Facturaciòn / Consulta de Cuentas";
        $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/l_cuentas',$arr_lista,true);
        
        $this->Planthtml->generar();
	    }else{
	      print_r('no hay data');
	    }

	}

  public function radicacion(){
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
        }
        if(empty($arr_datos["mensaje"])){
          $arr_lista["mensaje"]="";
        }else{
          $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
        }
        //$arr_lista["datpaciente"]=$this->Factura->prefactura_listar($arr_lista["buscado"]);
        $this->Planthtml->cont["tit_seccion"]="Cuentas M�dicas / Radicaci�n";
        $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_radicacion','',true);
        $this->Planthtml->cont["js"] = $this->load->view('EPSfacturacion/js_f_radicacion','',true);
        break;
        
        case "lote":
          $this->Planthtml->cont["tit_seccion"]="Cuentas M�dicas / Radicaci�n";
          $lote = $this->uri->segment(4);

          if($this->uri->segment(5)=="guardar"){
            if($lote!='NA'){
              $datlote = $this->Factura->loteencab($lote);
            }
            $lote = $this->Factura->radicar($datlote);
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$this->uri->segment(4);
            redirect(site_url()."/epsfact/radicacion/lote/".$lote);
          }else{
            // var_dump($lote);
            // exit;
            $arr_vradic["datlote"] = $this->Factura->lote($lote);
            // debug($arr_vradic);
             redirect(site_url()."/epsfact/cuentas?message='<div class='col-lg-2 alert-success'>Se Actualización ha sido Exitosa</div>'");
          }
          break;
          
      }
      $this->Planthtml->generar();
    }
	}
private function valius($valuerunus,$identificacion,$factum){

 
       
                               
                  $run=file('./uploads/'.$valuerunus);
                // debug($run);
                  foreach ($run as $key=>$value) {
                    $n=explode(",", $value);
                    // var_dump($dataap["identificacion"]);
                    // var_dump($nom[1]);
                    // debug($identificacion.' '.$n[1],false);
                        if($identificacion==$n[1]){
                          if($n[10]=="F"){
                            $n[10]="FEMENINO";
                          }
                          else{
                            $n[10]="MASCULINO";
                            
                          }
                          $this->modelo_universal->update('cm_cuentas_t96',
                          array(
                            'pacid_t96'=>$n[1],
                            'pacnom_t96'=>$n[6]." ".$n[7]." ".$n[4]." ".$n[5],
                            'edad_t96'=>$n[9],
                            'sexo_t96'=>$n[10],
                            ),
                            array(
                              'factnum_t96'=>$factum
                              )
                            );
                            // debug($this->db->last_query());
                            // debug($this->db->last_query());
                            break;
                                      //$this->Factura->updatepac($run[$key]);
                                      // echo"pasaaaada";
                                      // echo"<br>";
                            
                                      //var_dump($run[$key]);
                                      
                        }
                    }
                               
                
              
          
      
}
  public function radicacionbd(){
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
        }
        if(empty($arr_datos["mensaje"])){
          $arr_lista["mensaje"]="";
        }else{
          $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
        }
        $arr_lista["datos"]=$this->Usuario->obtener($arr_lista["buscado"]);
        //$arr_lista["datpaciente"]=$this->Factura->prefactura_listar($arr_lista["buscado"]);
        $this->Planthtml->cont["tit_seccion"]="Cuentas Médicas/ Radicación opr base de datos";
        $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_radicacionbd','',true);
        $this->Planthtml->cont["js"] = $this->load->view('EPSfacturacion/js_f_radicacionbd','',true);
         $this->Planthtml->cont["js"] = $this->load->view('EPSfacturacion/js_check_factura','',true);
        break;
      case "lote":
      // var_dump($_FILES['AF']['name']);
      // var_dump(file($_FILES['AF']['name']));
            $this->Planthtml->cont["tit_seccion"]="Cuentas Médicas / Radicación";

            if($this->input->post('lote')!=""){
              $newlote=$this->input->post('lote');
            }
            else{
              $newlote=$this->Factura->newlote();
            }

            // var_dump($newlote);
          // var_dump($this->input->post());
          // exit();
                  $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'txt|text';
                
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
               // var_dump($config);
                $this->load->library('upload', $config);
                  // var_dump($_FILES);
              // exit();
        //cargo todos los archivos y guardo el nombre si existe ct.
      
        $arrayn=array();
    
        foreach ($_FILES as $key => $new) {
    // debug($key);
          if($new['name']){

           if($this->upload->do_upload($key))
            {
                $data = array('upload_data' => $this->upload->data());
                $arrayn[$key]=$data['upload_data']['file_name'];
               }
          }
        }

    

        //   foreach($arrayn as $key=> $value){

         //  if($key=='CT'){

         //   $filas=file('./uploads/'. $value);

          //    foreach($filas as $value){
        //        $nom=explode(",", $value);
              //var_dump($nom[0]);

        //         if(!ctype_digit($nom[0])){
        //           redirect(site_url()."/administracion/terceros/registrar");
        //         } else{


        //           // $v = explode(",", $value);
        //           $tipo=substr($nom[2], 0,2);


        //           switch($tipo){

        //               case 'AF':

        //                 if(array_key_exists('AF', $arrayn)){
        //                 $value = $arrayn['AF'];
        //                 $filasnotas = file('./uploads/'. $value);


        //                   if($nom[3]!=(count($filasnotas))){


        //                     redirect(site_url()."/epsfact/radicacionbd?errorMssg=".urlencode("<div class='col-lg-12 alert alert-warning' >La informacion de AF no concuerda con el CT<div>"));
        //                   }
        //               }
        //               break;
        //               case 'AM':
        //                 if(array_key_exists("AM", $arrayn)){
        //                   $value=$arrayn['AM'];
        //                   $filasnotas=file('./uploads/'. $value);
        //                     if($nom[3]!=(count($filasnotas))){
        //                       redirect(site_url()."/epsfact/radicacionbd?errorMssg=".urlencode("<div class='col-lg-12 alert alert-warning' >La informacion de AM no concuerda con el CT<div>"));


        //                     }
        //                 }
        //               break;

        //               case 'AT':
        //                 if(array_key_exists("AT", $arrayn)){
        //                     $value=$arrayn['AT'];
        //                     $filasnotas=file('./uploads/'. $value);
        //                       if($nom[3]!=(count($filasnotas))){
        //                         redirect(site_url()."/epsfact/radicacionbd?errorMssg=".urlencode("<div class='col-lg-12 alert alert-warning' >La informacion de AT no concuerda con el CT<div>"));
        //                       }
        //                 }
        //               break;
        //               case 'AP':
        //                 if(array_key_exists("AP", $arrayn)){
        //                   echo $tipo;
        //                   $value=$arrayn['AP'];
        //                   $filasnotas=file('./uploads/'. $value);
        //                     if($nom[3]!=(count($filasnotas))){
        //                     redirect(site_url()."/epsfact/radicacionbd?errorMssg=".urlencode("<div class='col-lg-12 alert alert-warning' >La informacion de AP no concuerda con el CT<div>"));
        //                     }
        //                 }
        //               break;

        //               case 'AC':
        //                 if(array_key_exists("AC", $arrayn)){
        //                   echo "<script>alert('entra');</script>";
        //                     $value=$arrayn['AC'];
        //                     echo $value;
        //                     $filasnotas=file('./uploads/'. $value);
        //                       if($nom[3]!=(count($filasnotas))){
        //                         redirect(site_url()."/epsfact/radicacionbd?errorMssg=".urlencode("<div class='col-lg-12 alert alert-warning' >La informacion de AC no concuerda con el CT<div>"));
        //                       }
        //                 }
        //               break;
        //               }
        //           }
        //       }

        //   }

        // }
        

        // si existe el ct empiezas el for
        //guardo los nombres y voy pasandolo por el foreach
        //////////////HACER AF
      // var_dump($arrayn);
         
    // exit;
        ////////////////
        ////////VERIFICAR US y lo abre
        // foreach ($arrayn as $key=> $value) {
        //   if($key=='US'){
        //       $filas=file('./uploads/'. $value);
              
        //       foreach($filas as $value){
        //           $nom=explode(",", $value);
        //           $data["identificacion"]=($nom[1]);
        //           //$this->Factura->colocaciondatos();
        //       }
        //   }
        // }
        
        
        ////////VERIFICAR US

            foreach ($_FILES as $key => $new) {
              # code...

                if($new['name']){


                // var_dump($new);
                // exit();
                if (  $this->upload->do_upload($key))
                {
                $data = array('upload_data' => $this->upload->data());
                // var_dump($data);
                          $filas=file('./uploads/'.$data['upload_data']['file_name']);
              // var_dump($filas);
              // exit();

              foreach($filas as $value){
                  $v = explode(",", $value);

                  if(isset($v[1])){
                  // echo json_encode($v);
                  // exit();
                  // $newlote='';
                    // var_dump($newlote);
                    switch ($key) {

                      case 'AF':
                        # code...
                        
                        
                                          $lote = $this->Factura->radicarpk('',$v,$newlote);
                        break;
                        case 'AM':
                          
                          $tipo = $v[1];
                          $cups=$v[6];
                          $data = $this->Factura->busqueda_tercero($tipo,$cups);
                            
                          
                        
                        $radicado=$this->Factura->radinum($v[0]);
                        // var_dump($radicado);
                        // exit();
              $dataap["identificacion"]=$v[0];
                $valuequery=$this->Factura->buscariden($dataap,$v[3]);
                  // debug($valuequery);
                    if(!$valuequery){
                      if($arrayn['US']){
                     $this->valius($arrayn['US'],$v[3],$v[0]);
                      }
                    }
                      
                        
                        $this->Factura->registrarpk($v,$key,$radicado[0]->radicado_t96,$data);

                        break;
                        case 'AT':
                        // exit('aquii');
                        # code...
                        // var_dump($v);
                        // exit();
                        $radicado=$this->Factura->radinum($v[0]);
                        // var_dump($radicado);
                        // exit();
                    $dataap["identificacion"]=$v[0];
                $valuequery=$this->Factura->buscariden($dataap,$v[3]);
                  // debug($valuequery);
                    if(!$valuequery){
                      if($arrayn['US']){
                     $this->valius($arrayn['US'],$v[3],$v[0]);
                      }
                    }
                      
                        $this->Factura->registrarpk($v,$key,$radicado[0]->radicado_t96);

                        break;
                       case 'AP':
                        // exit('aquii');
                        # code...
                        // var_dump($v);
                        // exit();
                              $tipo = $v[1];
                           $cups=$v[6];
                          $data = $this->Factura->busqueda_tercero($tipo,$cups);
                          // debug($data);
                       
                          
               $dataap["identificacion"]=$v[0];
                $valuequery=$this->Factura->buscariden($dataap,$v[3]);
                  // debug($valuequery);
                    if(!$valuequery){
                      if($arrayn['US']){
                     $this->valius($arrayn['US'],$v[3],$v[0]);
                      }
                    }
                      
                      
                      
                        $radicado=$this->Factura->radinum($v[0]);
                        // var_dump($radicado);
                        // exit();
                        $this->Factura->registrarpk($v,$key,$radicado[0]->radicado_t96,$data);

                        break;
                                     case 'AC':
                        // exit('aquii');
                        # code...
                        // var_dump($v);
                        // exit();
                        $radicado=$this->Factura->radinum($v[0]);
                        // var_dump($radicado);
                        // exit();
                                 $dataap["identificacion"]=$v[0];
                  $dataap["identificacion"]=$v[0];
                $valuequery=$this->Factura->buscariden($dataap,$v[3]);
                  // debug($valuequery);
                    if(!$valuequery){
                      if($arrayn['US']){
                     $this->valius($arrayn['US'],$v[3],$v[0]);
                      }
                    }
                      
                        $this->Factura->registrarpk($v,$key,$radicado[0]->radicado_t96);

                        break;
                      default:
                        # code...

                        break;
                    }

                    }
                // exit();
                        // $this->load->view('upload_success', $data);
                }




              }
                else{
                  // $error = array('error' => $this->upload->display_errors());
                  // var_dump($error);
                  // exit();
                  }
                 }
                }

                $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$this->uri->segment(4);
            redirect(site_url()."/epsfact/radicacion/lote/".$lote);
          break;

      }
      $this->Planthtml->generar();
    }
	
}


  public function digitacion(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
    switch($accion){
      case "buscar":
        $arr_datos["buscado"]=$this->input->post("buscado");
      case "mensaje":
      case "guardar":
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
        //$arr_lista["datpaciente"]=$this->Factura->prefactura_listar($arr_lista["buscado"]);
        $this->Planthtml->cont["tit_seccion"]="Facturación/ Prefactura";
        $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_digitacion_nuevo',$arr_lista,true);
        break;

        case "factura":
          $this->Planthtml->cont["tit_seccion"]="Facturación/ Digitación Facturas / Carga Factura";
          if($this->uri->segment(4)=="guardar"){
            $radic = $this->Factura->registrar();
            redirect(site_url()."/epsfact/digitacion/factura/".$radic);
          }else{
            $idrad = $this->input->post('radicado');
            if(empty($idrad)){
              $idrad = $this->uri->segment(4);
              if(empty($idrad)){
                redirect(site_url("/epsfact/digitacion"));
              }
            }
            $arr_vfac["datfac"]=$this->Factura->obtener($idrad);
            $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_digitar',$arr_vfac,true);
            $this->Planthtml->cont["js"] = $this->load->view('EPSfacturacion/js_f_digitar','',true);
            $this->Planthtml->cont["js"] = $this->load->view('EPSfacturacion/js_buscar_mapis','',true);
          }
          break;
      }
      $this->Planthtml->generar();
    }
	}

  public function auditoria(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
    switch($accion){
      case "buscar":
        $arr_datos["buscado"]=$this->input->post("buscado");
      case "mensaje":
      case "guardar":
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
        //$arr_lista["datpaciente"]=$this->Factura->prefactura_listar($arr_lista["buscado"]);
        $this->Planthtml->cont["tit_seccion"]="Facturación/ Prefactura";
        $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_audit_nuevo',$arr_lista,true);
        break;

        case "factura":
          $this->Planthtml->cont["tit_seccion"]="Facturación / Digitación acturas / Carga Factura";
          if($this->uri->segment(4)=="guardar"){
            $radic = $this->uri->segment(5);
            $radic = $this->Glosa->registrar($radic);
            redirect(site_url()."/epsfact/auditoria/factura/".$radic);
          }else{
            $idrad = $this->input->post('radicado');
            if(empty($idrad)){
              $idrad = $this->uri->segment(4);
              if(empty($idrad)){
                redirect(site_url("/epsfact/auditoria"));
              }
            }
            $arr_vfac["datfac"]=$this->Factura->obtener($idrad);
            $arr_vfac["datglosaspk"]=$this->Glosa->obtenerpk($idrad);
            $arr_vfac["datglosas"]=$this->Glosa->obtener($idrad);
            $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_audit',$arr_vfac,true);
            $this->Planthtml->cont["js"] = $this->load->view('EPSfacturacion/js_f_audit',$arr_vfac,true);
          }
          break;

        case "facturagr":
          $this->Planthtml->cont["tit_seccion"]="Facturación / Digitación Facturas / Carga Factura";
          if($this->uri->segment(4)=="guardar"){
            $radic = $this->uri->segment(5);
            $radic = $this->Glosa->registrar($radic);
            redirect(site_url()."/epsfact/auditoria/facturagr/".$radic);
          }else{
            $idrad = $this->input->post('radicado');
            if(empty($idrad)){
              $idrad = $this->uri->segment(4);
              if(empty($idrad)){
                redirect(site_url("/epsfact/auditoria"));
              }
            }
            $arr_vfac["datfac"]=$this->Factura->obtener($idrad);
            $arr_vfac["datglosas"]=$this->Glosa->obtener($idrad);
            $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_audit_gr',$arr_vfac,true);
            $this->Planthtml->cont["js"] = $this->load->view('EPSfacturacion/js_f_audit_gr',$arr_vfac,true);
          }
          break;
      }
      $this->Planthtml->generar();
    }
	}

  public function auditoriacc(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
    switch($accion){
      case "buscar":
        $arr_datos["buscado"]=$this->input->post("buscado");
      case "mensaje":
      case "guardar":
      case "0":
        $this->Planthtml->cont["tit_seccion"]="Facturación / Prefactura";
        $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_audit_cc',$arr_vfac,true);
        $this->Planthtml->cont["js"] = $this->load->view('EPSfacturacion/js_f_audit_cc',$arr_vfac,true);
        break;

        case "factura":
          $this->Planthtml->cont["tit_seccion"]="Facturación / Digitacin Facturas / Carga Factura";
          if($this->uri->segment(4)=="guardar"){
            $radic = $this->uri->segment(5);
            $radic = $this->Glosa->registrar($radic);
            redirect(site_url()."/epsfact/auditoria/factura/".$radic);
          }else{
            $idrad = $this->input->post('radicado');
            if(empty($idrad)){
              $idrad = $this->uri->segment(4);
              if(empty($idrad)){
                redirect(site_url("/epsfact/auditoria"));
              }
            }
            $arr_vfac["datfac"]=$this->Factura->obtener($idrad);
            $arr_vfac["datglosas"]=$this->Glosa->obtener($idrad);
            $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_audit',$arr_vfac,true);
            $this->Planthtml->cont["js"] = $this->load->view('EPSfacturacion/js_f_audit',$arr_vfac,true);
          }
          break;

        case "facturagr":
          $this->Planthtml->cont["tit_seccion"]="Facturación / Digitación Facturas / Carga Factura";
          if($this->uri->segment(4)=="guardar"){
            $radic = $this->uri->segment(5);
            $radic = $this->Glosa->registrar($radic);
            redirect(site_url()."/epsfact/auditoria/facturagr/".$radic);
          }else{
            $idrad = $this->input->post('radicado');
            if(empty($idrad)){
              $idrad = $this->uri->segment(4);
              if(empty($idrad)){
                redirect(site_url("/epsfact/auditoria"));
              }
            }
            $arr_vfac["datfac"]=$this->Factura->obtener($idrad);
            $arr_vfac["datglosas"]=$this->Glosa->obtener($idrad);
            $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_audit_gr',$arr_vfac,true);
            $this->Planthtml->cont["js"] = $this->load->view('EPSfacturacion/js_f_audit_gr',$arr_vfac,true);
          }
          break;
      }
      $this->Planthtml->generar();
    }
	}

  public function conciliacion(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
    switch($accion){
      case "buscar":
        $arr_datos["buscado"]=$this->input->post("buscado");
      case "mensaje":
      case "guardar":
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
        //$arr_lista["datpaciente"]=$this->Factura->prefactura_listar($arr_lista["buscado"]);
        $this->Planthtml->cont["tit_seccion"]="Cuentas Mdicas / Conciliación";
        $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_concil_nuevo',$arr_lista,true);
        break;

        case "factura":
          $this->Planthtml->cont["tit_seccion"]="Facturación / Digitación factura";
          if($this->uri->segment(4)=="guardar"){
            $radic = $this->uri->segment(5);
            //$radic = $this->Glosa->registrar($radic);
            redirect(site_url()."/epsfact/conciliacion/factura/".$radic);
          }else{
            $idrad = $this->input->post('radicado');
            if(empty($idrad)){
              $idrad = $this->uri->segment(4);
              if(empty($idrad)){
                redirect(site_url("/epsfact/conciliacion"));
              }
            }
            $arr_vfac["datfac"]=$this->Factura->obtener($idrad);
            $arr_vfac["datglosaspk"]=$this->Glosa->obtenerpk($idrad);
            $arr_vfac["datglosas"]=$this->Glosa->obtener($idrad);
            $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_concil',$arr_vfac,true);
          }
          break;
      }
      $this->Planthtml->generar();
    }
	}

  public function indicadores(){
    if($this->Modulo->error == false){
      $this->Planthtml->cont["tit_seccion"]="Facturación / Prefactura";
      $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/v_indicadores','',true);
      $this->Planthtml->generar();
    }
	}
	
	public function asignarfact(){
	 
    $data = $this->input->post('radicado');
    $data2 = $this->input->post('usuario');
    
    $result = $this->Factura->usuario_por_factura($data,$data2);
    
    if($result == true){
        redirect(site_url()."/epsfact/?message='<div class='col-lg-2 alert-success'>Cuenta Asignada Exitosamente</div>'");
    }else{
       redirect(site_url()."/epsfact/?message='<div class='col-lg-2 alert-danger'>Hubo un Error con la Asignacion</div>'");
    }
    
    
	}
	
	
	public function concurrencia(){
	           $id = $this->uri->segment(3);
	           $arr_vfac = $this->Factura->obtener($id);
	           $comprobacion["datfac"]=$this->Factura->obtener($id);
             $comprobacion["datglosas"]=$this->Glosa->obtener($id); 
	           $comprobacion['registro'] = $this->Glosa->comparar($arr_vfac);
	           $comprobacion['usuario'] = $arr_vfac;

              
           if($comprobacion == true){
              $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_concurrencia',$comprobacion,true);
              $this->Planthtml->cont["js"] = $this->load->view('EPSfacturacion/js_f_audit',$arr_vfac,true);
              $this->Planthtml->generar();
            }else{
              redirect(site_url()."/epsfact/concurrencia_error");
             } 
	}
	
	public function concurrencia_error(){
	            $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_concurrencia_err','',true);
              $this->Planthtml->generar();
	}
	
	public function guardar_concurrencia(){
	    $data = $this->input->post('tipo');
	    $data1 = $this->input->post('caracter');
	    $data2 = $this->input->post('cant');
	    $data3 = $this->input->post('valorunit');
	    $data4 = $this->input->post('valortotal');
	    $data5 = $this->input->post('observacion');
	    $data6 = $this->input->post('idpaciente');
	    $data7 = $this->input->post('paciente');
	    $data8 = $this->input->post('num_fact');
	    $data9 = $this->input->post('tercid');
	      
	    $insert = $this->Glosa->guardar_concurrencia($data,
                                  	    $data1,$data2,$data3,
                                  	    $data4,$data5,$data6,
                                  	    $data7,$data8,$data9);
                                  	    
      if($insert == true){
        echo 'correcto';
      }else{
        echo 'error';
      }
	    
	}
	
	
	public function cambiar_asignar(){
  
    $data = $this->input->post('accion');
    if($data == "Cambiar"){
      $numfact = $this->input->post('numero');
      $est = $this->input->post('estado');
      $resultado = $this->Factura->lote($numfact,$est);
      if($resultado == true){
        redirect(site_url()."/epsfact/cuentas?message='<div class='col-lg-2 alert-success'>Cuenta Cambiada Correctamente</div>'");
      }else{
        redirect(site_url()."/epsfact/cuentas?message='<div class='col-lg-2 alert-success'>Hubo un error al intentar cambiar las cuentas</div>'");
      }
      
    }elseif($data == "Asignar"){
      $data2 = $this->input->post('usuario');
      $numfact = $this->input->post('numero');
      /*var_dump($data2,$numfact);
      exit();*/
    
    $result = $this->Factura->usuario_por_factura($numfact,$data2);
    
    if($result == true){
        redirect(site_url()."/epsfact/cuentas?message='<div class='col-lg-2 alert-success'>Cuenta Asignada Exitosamente</div>'");
    }else{
       redirect(site_url()."/epsfact/cuentas?message='<div class='col-lg-2 alert-success'>Hubo un error intentando asignar la cuenta</div>'");
     }
    }
}

	
	

}
