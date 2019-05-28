<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Radicacion extends CI_Controller{
    
    
     function __construct(){
		parent::__construct();
    $this->load->model('Tarifa');
    $this->load->model('Factura');
    $this->load->model('Agenda');
    // $this->load->model('usuario');
    $this->load->model('modelo_universal');
    $this->load->model('rips');
    $this->load->helper( 'file' );
    

  }
 /*$this->session->set_flashdata( 'item' ,  'valor' );*/
 
 public function mostrar(){
     
 }
 
 
 public function current_lote(){
     $lote = $this->rips->current_lote();
 }

    
public function radicacionbd(){
    $this->Planthtml->cont["tit_seccion"]="Cuentas Médicas / Radicación";
    if($this->input->post('lote')!=""){
              $newlote=$this->input->post('lote');
        }else{
              $newlote=$this->Factura->newlote();
        }
    
                $config['upload_path']='./uploads/';
                $config['allowed_types']='txt|text';
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
        
        $lotesum = $this->rips->select_lote();
        $insertdata = $this->rips->insertar_archivos($lotesum,$arrayn);
        $insertlote = $this->rips->insertar_lote($lotesum);
 //////comprobar filas
        $val=false;
       foreach($arrayn as $key=> $value){

           if($key=='CT'){

            $filas=file('./uploads/'. $value);

           /*   foreach($filas as $value){
               // $nom=explode(",", $value);
              //var_dump($nom[0]);
                   $v = explode(",", $value);
                   var_dump($v);
                   echo"<br>";
                    $var=count($v);
                    var_dump($var);
                    echo"<br>";
                    // $tipo=substr($nom[2], 0,2);
                    
                 /*    if($var==4){
                    $pasar=true;
                }else{
                      redirect(site_url()."/epsfact/radicacionbd?errorMssg=".urlencode("<div class='col-lg-12 alert alert-warning' >El Archivo CT no cuenta con la cantidad de campos correspondientes <div>"));
                  }
              }*/
              
           }
             
                //if($pasar==true){
              foreach($filas as $value){ 
                $nom=explode(",", $value);
              //var_dump($nom[0]);
                   // $v = explode(",", $value);
                    //$var=count($v);
                    $tipo=substr($nom[2], 0,2);
                   switch($tipo){
                       case 'AF':
                         if(array_key_exists('AF', $arrayn)){
                         $value = $arrayn['AF'];
                         $filasnotas= file('./uploads/'. $value);
                          $_SESSION['array']=$this->data['filasnotas'] = file('./uploads/'. $value);
                        $_SESSION['lote'] = $this->rips->current_lote();
                        
                        if($nom[3]!=(count($filasnotas))){
                             $val=true;
                             redirect(site_url()."/epsfact/radicacionbd?errorMssg=".urlencode("<div class='col-lg-12 alert alert-warning' >El numero del AF no concuerda con el CT<div>"));
                           } else{
                            redirect(site_url()."/epsfact/radicacionbd");
                           }
                            break;
                       }
                   break;
                   
                      case 'AM':
                     if(array_key_exists("AM", $arrayn)){
                           $value=$arrayn['AM'];
                           $filasnotas=file('./uploads/'. $value);
                         if($nom[3]!=(count($filasnotas))){
                              $val=true;
                               redirect(site_url()."/epsfact/radicacionbd?errorMssg=".urlencode("<div class='col-lg-12 alert alert-warning' >El numero del AM no concuerda con el CT<div>"));
                            }
                         }
                   break;
                       case 'AT':
                         if(array_key_exists("AT", $arrayn)){
                             $value=$arrayn['AT'];
                             $filasnotas=file('./uploads/'. $value);
                               if($nom[3]!=(count($filasnotas))){
                                   $val=true; 
                                 redirect(site_url()."/epsfact/radicacionbd?errorMssg=".urlencode("<div class='col-lg-12 alert alert-warning' >El numero del AT no concuerda con el CT<div>"));
                               }
                         }
                       break;
                       case 'AP':
                         if(array_key_exists("AP", $arrayn)){
                           echo $tipo;
                           $value=$arrayn['AP'];
                           $filasnotas=file('./uploads/'. $value);
                             if($nom[3]!=(count($filasnotas))){
                                 $val=true; 
                             redirect(site_url()."/epsfact/radicacionbd?errorMssg=".urlencode("<div class='col-lg-12 alert alert-warning' >El numero del AP no concuerda con el CT<div>"));
                             }
                         }
                       break;

                       case 'AC':
                         if(array_key_exists("AC", $arrayn)){
                           echo "<script>alert('entra');</script>";
                             $value=$arrayn['AC'];
                             echo $value;
                             $filasnotas=file('./uploads/'. $value);
                               if($nom[3]!=(count($filasnotas))){
                                   $val=true; 
                                 redirect(site_url()."/epsfact/radicacionbd?errorMssg=".urlencode("<div class='col-lg-12 alert alert-warning' >El numero del AC no concuerda con el CT<div>"));
                               }
                         }
                       break;
                       }
                  }
                
              //} id arriba
       }
       
            
           
            
}
       
        /* 
      }
      /*$this->Planthtml->generar(); */
      
      
      
      
      public function addcheck(){
          
        $check = $this->rips->checkconsulta();
        return $check;
        if($check == true){
            return 1;
        }else{
            return 0;
        }
      }
      
      
      public function cambiar_estatus(){
        
          $lote = $this->input->post('datos');
          $estatus = $this->rips->cambiar_estatus($lote);
         -/* if($estatus >= 1){
              return $estatus;
          }else{
              return false;
          }*/
            /*unset($_SESSION['array']);
            unset($_filasnotas);
            unset($_SESSION['lote']);*/
            $_SESSION['array']="";
            $_filasnotas="";
            $_SESSION['lote']="";
            redirect(site_url()."/epsfact/radicacionbd?errorMssg=".urlencode("<div class='col-lg-12 alert alert-info' >Se le notificara al correo cuando haya finalizado el proceso<div>"));
      }

      public function tarea_programada(){
          // buscar rips cuando el status sea 1
          $rips=$this->modelo_universal->select('archivos_rips',"*",array('estatus'=>1));
        //   debug($rips);
            $this->modelo_universal->update('archivos_rips',array('estatus'=>2),array('estatus'=>1));
          if($rips){
              $lote=$rips[0]['lote'];
              
                  // code...
              
        //   $query = $this->rips->activar_tarea();
            
            foreach ($rips as $key ) {
                //   debug($key);
       
           
            
 
                $filas=file('./uploads/'.$key['nombre']);
                foreach($filas as $value){
                  $v = explode(",", $value);
                  if(isset($v[1])){
                    switch ($key['tipo']) {
                      case 'AF':
                        # code...
                        //CASO AF
                            $newlote=$this->Factura->newlote();
                            $valor = $value[4];
                            // $nocheck = $this->rips->nocheck($valor);
                            //  $consulta = $this->db->query("SELECT * FROM rips_no_check WHERE num_factura = $valor");
                             $nocheck=$this->modelo_universal->select('rips_no_check','*',array('num_factura'=>$valor,'lote'=>$lote));
                            if($nocheck){
                                break;
                            }else{
                             $lote = $this->Factura->radicarpk('',$v,$newlote,$key); 
                            }
                        
                        break;
                        //CASO AM
                        case 'AM':
                            $valor = $value[0];
                            $nocheck=$this->modelo_universal->select('rips_no_check','*',array('num_factura'=>$valor,'lote'=>$lote));
                            if(!$nocheck){
                                  $tipo = $v[1];
                                  $cups=$v[6];
                                  $data = $this->Factura->busqueda_tercero($tipo,$cups);
                                  $radicado=$this->Factura->radinum($v[0]);
                                  $dataap["identificacion"]=$v[0];
                                  $valuequery=$this->Factura->buscariden($dataap,$v[3]);
                                     if(!$valuequery){
                                          if($arrayn['US']){
                                         $this->valius($arrayn['US'],$v[3],$v[0]);
                                          }
                                        }
                              $this->Factura->registrarpk($v,$key,$radicado[0]->radicado_t96,$data);
                            
                            }
                        break;
                        case 'AT':
                            
                        $valor = $value[0];
                        $nocheck=$this->modelo_universal->select('rips_no_check','*',array('num_factura'=>$valor,'lote'=>$lote));
                        if(!$nocheck){
                                    $radicado=$this->Factura->radinum($v[0]);
                                    $dataap["identificacion"]=$v[0];
                                    $valuequery=$this->Factura->buscariden($dataap,$v[3]);
                                    if(!$valuequery){
                                        if($arrayn['US']){
                                            $this->valius($arrayn['US'],$v[3],$v[0]);
                                            }
                                        }
                                     }
                              $this->Factura->registrarpk($v,$key,$radicado[0]->radicado_t96);
                        break;
                        //CASO AP
                        case 'AP':
                        $valor = $value[0];
                        $nocheck=$this->modelo_universal->select('rips_no_check','*',array('num_factura'=>$valor,'lote'=>$lote));
                        if(!$nocheck){
                            $tipo = $v[1];
                            $cups=$v[6];
                               $data = $this->Factura->busqueda_tercero($tipo,$cups);
                               $dataap["identificacion"]=$v[0];
                               $valuequery=$this->Factura->buscariden($dataap,$v[3]);
                           // debug($valuequery);
                                if(!$valuequery){
                              if($arrayn['US']){
                                 $this->valius($arrayn['US'],$v[3],$v[0]);
                               }
                             }
                             $radicado=$this->Factura->radinum($v[0]);
                            }else{
                              $this->Factura->registrarpk($v,$key,$radicado[0]->radicado_t96,$data);
                            }
                        break;
                        //CASO AC
                        case 'AC':
                        $valor = $value[0];
                        $nocheck=$this->modelo_universal->select('rips_no_check','*',array('num_factura'=>$valor,'lote'=>$lote));
                        if(!$nocheck){
                            $radicado=$this->Factura->radinum($v[0]);
                            $dataap["identificacion"]=$v[0];
                            $dataap["identificacion"]=$v[0];
                            $valuequery=$this->Factura->buscariden($dataap,$v[3]);
                            if(!$valuequery){
                            if($arrayn['US']){
                            $this->valius($arrayn['US'],$v[3],$v[0]);
                            }
                           }  
                        }else{
                            $this->Factura->registrarpk($v,$key,$radicado[0]->radicado_t96);
                        }
                        break;
                      //CASO DEFAULT // 
                      default:
                        break;
                        }
                    }
                }
        
                     
                }
            // $correo = $this->send_email->enviar();
            echo "ready";
          
          }

      }
      
    }
