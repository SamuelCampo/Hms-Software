<?
  class Asientocont extends CI_Model {
    var $arr_clasecta;
    var $arr_nivel;
 
    
    function __construct(){
      parent::__construct();
     $this->arr_tipodoc = array(
      (object)array("tipodoc"=>"COMPRA"),
      (object)array("tipodoc"=>"VENTA"),
      (object)array("tipodoc"=>"NOTA_CREDITO"),
      (object)array("tipodoc"=>"NOTA_DEBITO"),
      (object)array("tipodoc"=>"AJUSTE"),
      (object)array("tipodoc"=>"SALDOS_INICIALES"),
      (object)array("tipodoc"=>"ASIENTO")
      );
    }
    
    function verventa($docnum){
      $this->load->model('Gestexcel');
      $arr_datasiento = $this->obtener($docnum,'VENTA');
      $datexcel = $this->Gestexcel->prepdatos($arr_datasiento,false,array('cantidad_t401','concepto_t401','vunit_t401','credito_t401'));
      $objPHPExcel = $this->Gestexcel->cargarplantilla(FCPATH.'docs/Plantillas_Informes/plant_factura.xlsx');
      $this->Gestexcel->escribirdatos($objPHPExcel,0,"B2",$arr_datasiento[0]->docnum_t401);
      $this->Gestexcel->escribirdatos($objPHPExcel,0,"C2","Fecha: ".$arr_datasiento[0]->fdoc_t401);
      $this->Gestexcel->escribirdatos($objPHPExcel,0,"B4",$arr_datasiento[0]->tercerdesc_t401);
      $this->Gestexcel->escribirdatos($objPHPExcel,0,"A10",$datexcel["datos"]);
      /*
      $filafin = count($datexcel["datos"])+11;
      $filapie = count($datexcel["datos"])+13;
      $this->Gestexcel->escribirdatos($objPHPExcel,0,"B5",$arr_datliq->ter_t112);
      $this->Gestexcel->escribirdatos($objPHPExcel,0,"B6",$arr_datliq->direntrega_t112);
      $this->Gestexcel->escribirdatos($objPHPExcel,0,"B7",$arr_datliq->direccion_t16);
      $this->Gestexcel->escribirdatos($objPHPExcel,0,"B8",$arr_datliq->telefono1_t16);
      
      $style = array('font' => array('size' => 12,'bold' => true));
      $objPHPExcel->getActiveSheet()->getStyle("A".$filapie)->applyFromArray($style);
      $this->Gestexcel->escribirdatos($objPHPExcel,0,"A".$filapie,'Obervaciones:');
      $objPHPExcel->getActiveSheet()->mergeCells('B'.$filapie.':G'.$filapie);
      $this->Gestexcel->escribirdatos($objPHPExcel,0,"B".$filapie,$arr_datliq->obs_t112);
      
      $objPHPExcel->getActiveSheet()->getStyle("H".$filapie)->applyFromArray($style);
      $this->Gestexcel->escribirdatos($objPHPExcel,0,"H".$filapie,'Total:');
      $objPHPExcel->getActiveSheet()->mergeCells('I'.$filapie.':K'.$filapie);
      $objPHPExcel->getActiveSheet()->getStyle('I'.$filapie)->applyFromArray($style);
      $this->Gestexcel->escribirdatos($objPHPExcel,0,'I'.$filapie,$arr_datliq->vtotal_t112);
      $objPHPExcel->getActiveSheet()->getStyle('I'.$filapie)->getNumberFormat()->setFormatCode('#,##0.00');
      
      $BStyle = array(
        'borders' => array(
          'outline' => array(
            'style' => PHPExcel_Style_Border::BORDER_MEDIUM
          )
        )
      );
      $objPHPExcel->getActiveSheet()->getStyle('A12'.':K'.$filafin)->applyFromArray($BStyle);
      */
      $this->Gestexcel->exportar($objPHPExcel,'Fact_No._'.$arr_datasiento[0]->docnum_t401.'.xlsx');
      exit;
    }
     
    function listar($buscado,$paginar=true){
      $this->db->distinct('docnum_t401, doctip_t401, tercero_t401, tercerdesc_t401, fcont_t401');
      $this->db->select('docnum_t401, doctip_t401, tercero_t401, tercerdesc_t401, fcont_t401');
      $this->db->from("f_ascont_t401");
      if(!empty($buscado)){
        $this->db->like('id_ascont_t401',$buscado);
        $this->db->or_like('doctip_t401',$buscado);
        $this->db->or_like('docnum_t401',$buscado);
        $this->db->or_like('cuentadesc_t401',$buscado);
        $this->db->or_like('tercerdesc_t401',$buscado);
        $this->db->or_like('concepto_t401',$buscado);
      }
      $this->db->order_by("id_ascont_t401",'asc');
      $query = $this->db->get();
      $arr_datos = $query->result();
      if(count($arr_datos) > 0){
        if($paginar==true){
          return $this->Paginacion->paginar($arr_datos);
        }else{
          return $arr_datos;
        }
      }
      return false;
    }
    
      
    function obtener($docnum,$tipo){
      $this->db->from("f_ascont_t401");
      $this->db->where("docnum_t401",$docnum);
      $this->db->where("doctip_t401",$tipo);
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        return $query->result();
      }
      return false;
    }
    
    function sigdoc($tipdoc){
      $this->db->select("docnum_t401");
      $this->db->from("f_ascont_t401");
      $this->db->where("doctip_t401",$tipdoc);
      $this->db->order_by("docnum_t401","desc");
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        $actdoc = $query->row();
      }
      $sigdoc = $actdoc->docnum_t401+1;
      return $sigdoc;
    }
    
    function registrar($docnum="",$tipdoc="",$datast=""){
      if(empty($datast)){
        $datast = (object)$this->input->post();
      }
      $numregs = count($datast->regdet["cuenta"]);
      $oTerc = $this->Tercero->obtener("",$datast->tercero);
      if(empty($docnum)){
        $docnum = $this->sigdoc($datast->doctip);
      }else{
        $this->db->where("docnum_t401",$docnum);
        $this->db->where("doctip_t401",$tipdoc);
        $this->db->delete("f_ascont_t401");
      }
      //var_dump($datast);
      $arr_nuevoenc["doctip_t402"]=$datast->doctip;
      $arr_nuevoenc["docnum_t402"]=$docnum;
      $arr_nuevoenc["tercero_t402"]=$oTerc->cod_t16;
      $arr_nuevoenc["tercerdesc_t402"]=$oTerc->ident_t16." ".$oTerc->desc_t16;
      $arr_nuevoenc["fcont_t402"]=$datast->fdoc;
      $arr_nuevoenc["fdoc_t402"]=$this->Modulo->ahora();
      $arr_nuevoenc["vtotal_t402"]=$datast->regdet["vtotal"][$i];
      $arr_nuevoenc["obs_t402"]=$datast->obs;
      $arr_nuevoenc["usrmod_t402"]=$this->Modulo->usr->idusr;
      $arr_nuevoenc["fmod_t402"]=$this->Modulo->ahora();
      $this->db->insert("f_ascontenc_t402",$arr_nuevoenc);
      for($i=0;$i<$numregs;$i++){
        $oCta = $this->Puc->obtener("",$datast->regdet["cuenta"][$i]);
        //var_dump($oCta);
        if(!empty($oCta)){
          $oImp = $this->Impuesto->obtener("",$datast->regdet["impuesto"][$i]);
          $oCcosto = $this->Ccosto->obtener("",$datast->regdet["ccosto"][$i]);
          $arr_nuevo["doctip_t401"]=$datast->doctip;
          $arr_nuevo["docnum_t401"]=$docnum;
          $arr_nuevo["tercero_t401"]=$oTerc->cod_t16;
          $arr_nuevo["tercerdesc_t401"]=$oTerc->ident_t16." ".$oTerc->desc_t16;
          $arr_nuevo["fcont_t401"]=$datast->fdoc;
          $arr_nuevo["fdoc_t401"]=$this->Modulo->ahora();
          $arr_nuevo["cuenta_t401"]=$oCta->cod_t4;
          $arr_nuevo["cuentadesc_t401"]=$oCta->cod_t4.' '.$oCta->desc_t4;
          $arr_nuevo["debito_t401"]=$datast->regdet["debito"][$i];
          $arr_nuevo["credito_t401"]=$datast->regdet["credito"][$i];
          $arr_nuevo["concepto_t401"]=$datast->regdet["concepto"][$i];
          $arr_nuevo["cantidad_t401"]=$datast->regdet["cantidad"][$i];
          $arr_nuevo["vunit_t401"]=$datast->regdet["vunit"][$i];
          $arr_nuevo["vtotal_t401"]=$datast->regdet["vtotal"][$i];
          $arr_nuevo["impcod_t401"]=$oImp->codigo_t400;
          $arr_nuevo["impbase_t401"]=$oImp->base_t400;
          $arr_nuevo["impvalor_t401"]=$datast->regdet["impval"][$i];
          $arr_nuevo["ccosto_t401"]=$oCcosto->cod_t11;
          $arr_nuevo["ccostodesc_t401"]=$oCcosto->cod_t11.' '.$oCcosto->desc_t11;
          $arr_nuevo["obs_t401"]=$datast->obs;
          $arr_nuevo["usrmod_t401"]=$this->Modulo->usr->idusr;
          $arr_nuevo["fmod_t401"]=$this->Modulo->ahora();
          $this->db->insert("f_ascont_t401",$arr_nuevo);
        }
      }
      return $docnum;
    }
    
    function eliminar($docnum,$tipdoc){
      $this->db->where("docnum_t401",$docnum);
        $this->db->where("doctip_t401",$tipdoc);
        $this->db->delete("f_ascont_t401");
    }
  }
?>