<?php

class tarea_programada extends CI_Controller{
    
    
    
     function __construct(){
		parent::__construct();
    $this->load->model('Tarifa');
    $this->load->model('Factura');
    $this->load->model('Agenda');
    $this->load->model('modelo_universal');
    $this->load->model('rips');
    $this->load->helper('file');

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
                if($new['name']){
            
 
                $filas=file('./uploads/'.$key['nombre']);
                foreach($filas as $value){
                  $v = explode(",", $value);
                  if(isset($v[1])){
                    switch ($key['tipo']) {
                      case 'AF':
                        # code...
                        //CASO AF
                            $valor = $value[4];
                            // $nocheck = $this->rips->nocheck($valor);
                            //  $consulta = $this->db->query("SELECT * FROM rips_no_check WHERE num_factura = $valor");
                             $nocheck=$this->modelo_universal->select('rips_no_check','*',array('num_factura'=>$valor,'lote'=>$lote));
                            if($nocheck){
                                break;
                            }else{
                             $lote = $this->Factura->radicarpk('',$v,$newlote); 
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
                }
            // $correo = $this->send_email->enviar();
          break;
          }

      }
      
                    
                    
   
}