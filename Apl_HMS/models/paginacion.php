<?
  class Paginacion extends CI_Model {
    
    var $regsporpag=20;
    var $pagsvisibles=6;
    var $paginacion;
   
    
    function __construct(){
      parent::__construct();
      $this->paginacion=(object)array(
        "pagactual"=>false,
        "pagsig"=>false,
        "pagant"=>false,
        "paginicial"=>false,
        "pagfinal"=>false,
        "pagfr"=>false,
        "pagmsj"=>false
      );
    }
    
    function paginar($arr_datos=false){
      $arr_res = false;
      $numregs = count($arr_datos);
      if($numregs>0){
        $pagina = $this->input->post('paginacion_pagactual');
        if(empty($pagina)){
          $this->paginacion->pagactual = 1;
          $regi = 0;
          $regf = $this->regsporpag;
        }else{
          $this->paginacion->pagactual = $pagina;
          $regf = $pagina*$this->regsporpag;
          $regi = $regf-$this->regsporpag; 
        }
        $numpags = ceil($numregs/$this->regsporpag);
        if($numpags<=$this->pagsvisibles){
          $this->paginacion->paginicial = 1;
          $this->paginacion->pagfinal = $numpags;
        }else{
          $this->paginacion->pagfr=$numpags;
          if($this->paginacion->pagactual<=floor($this->pagsvisibles/2)){
            $this->paginacion->paginicial = 1;
          }else{
            $this->paginacion->paginicial = $this->paginacion->pagactual-3;
          }
          $this->paginacion->pagfinal = $this->paginacion->paginicial+$this->pagsvisibles-1;
          if($this->paginacion->pagfinal>$numpags){
            $this->paginacion->pagfinal = $numpags;
            $this->paginacion->paginicial = $numpags-$this->pagsvisibles;
          }
        }
        if($this->paginacion->pagactual>1){
          $this->paginacion->pagant = $this->paginacion->pagactual-1;
        }
        if($this->paginacion->pagactual<$numpags){
          $this->paginacion->pagsig = $this->paginacion->pagactual+1;
        }
        if($regf>$numregs){
          $regf=$numregs;
        }
        $this->paginacion->pagmsj = 'Regs del '.$regi.' a '.$regf.' de '.$numregs;
        $arr_res=array_slice($arr_datos, $regi, $this->regsporpag,true);
      }else{
        $this->paginacion->pagmsj = 'No hay registros con el filtro indicado';
      }
      return $arr_res;
    }
    
    function vpaginacion($form=""){
      if($this->paginacion->pagactual!=false || $this->paginacion->pagmsj!=false){
        $this->paginacion->form = $form;
        return $this->load->view('Paginacion/v_paginacion','',true);
      }
    }
    
  }
    
