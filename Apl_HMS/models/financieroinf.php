<?
  class Financieroinf extends CI_Model {
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
    
    function libroauxiliar(){
      $this->load->model('Gestexcel');
      $fechaini = $this->Util->prepfecha($this->input->post("fechad"));
      $fechafin = $this->Util->prepfecha($this->input->post("fechah"));     
      $cuenta = $this->input->post("cuenta");
      $this->db->from("f_ascont_t401");
      $this->db->where("cuenta_t401",$cuenta);
      $this->db->where("fcont_t401 between '$fechaini' AND '$fechafin' ");
      $this->db->order_by("fcont_t401","ASC");
      $this->db->order_by("docnum_t401","ASC");

      $query = $this->db->get();
      $arr_datainf = $query->result();
      //var_dump($arr_datainf);
      if(is_array($arr_datainf) && count($arr_datainf)>0){
          $saldo=0;
        foreach($arr_datainf as $campo){
            $arr_reg["fecha"]=$campo->fcont_t401;
            $arr_reg["comprobante"]=$campo->cuenta_t401;
            $arr_reg["descripcion"]=$campo->cuentadesc_t401;
            $arr_reg["debito"]=$campo->debito_t401;
            $arr_reg["credito"]=$campo->credito_t401;
            $arr_reg["valor"]=abs($campo->debito_t401-$campo->credito_t401);
            $arr_reg["saldo"]=$saldo+$arr_reg["debito"]-$arr_reg["credito"];
            $saldo = $arr_reg["saldo"];
            $arr_informe[]=$arr_reg;
        }
        //var_dump($arr_informe);
        $datexcel = $this->Gestexcel->prepdatos($arr_informe);

        $objPHPExcel = $this->Gestexcel->cargarplantilla(FCPATH.'docs/Plantillas_Informes/plant_libroauxiliar.xlsx');
         $this->Gestexcel->escribirdatos($objPHPExcel,0,"C9",$fechaini);
        $this->Gestexcel->escribirdatos($objPHPExcel,0,"E9",$fechafin);
       // $this->Gestexcel->escribirdatos($objPHPExcel,0,"D4",$cuenta);
        $this->Gestexcel->escribirdatos($objPHPExcel,0,"B11",$datexcel["datos"]);
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
        $this->Gestexcel->exportar($objPHPExcel,'Auxiliar Cuenta '.$cuenta.'.xlsx');
        exit;
      }else{
          $mensaje = urlencode(base64_encode("No hay registros"));
          redirect('financieroinforme/libroauxiliar/mensaje/'.$mensaje);
      }

    }


    function libromayor(){
      $this->load->model('Gestexcel');
      $fechaini = $this->Util->prepfecha($this->input->post("fechad"));
      $fechafin = $this->Util->prepfecha($this->input->post("fechah"));
      $cuenta = $this->input->post("cuenta");
      $this->db->from("f_ascont_t401");
      $this->db->where("cuenta_t401 like '$cuenta%' ");
      $this->db->where("fcont_t401 between '$fechaini' AND '$fechafin' ");
      $this->db->order_by("fcont_t401","ASC");
      $this->db->order_by("docnum_t401","ASC");

      $query = $this->db->get();
      $arr_datainf = $query->result();
      //var_dump($arr_datainf);
      if(is_array($arr_datainf) && count($arr_datainf)>0){
          $saldo=0;
        foreach($arr_datainf as $campo){
            $arr_reg[$campo->cuenta_t401][$campo->fcont_t401]["det"][]=$campo;
            $arr_reg[$campo->cuenta_t401][$campo->fcont_t401]["cons"]["deb"]+=$campo->debito_t401;
            $arr_reg[$campo->cuenta_t401][$campo->fcont_t401]["cons"]["cred"]+=$campo->credito_t401;
            /*
            $arr_reg["comprobante"]=$campo->cuenta_t401;
            $arr_reg["descripcion"]=$campo->cuentadesc_t401;
            $arr_reg["debito"]=$campo->debito_t401;
            $arr_reg["credito"]=$campo->credito_t401;
            $arr_reg["valor"]=abs($campo->debito_t401-$campo->credito_t401);
            $arr_reg["saldo"]=$saldo+$arr_reg["debito"]-$arr_reg["credito"];
            $saldo = $arr_reg["saldo"];
            $arr_informe[]=$arr_reg;
             * 
             */

        }
        foreach($arr_reg as $cuenta=>$arr_cta){
            foreach ($arr_cta as $dia=>$arr_dia){                
                $arr_ctamayor["cuenta"]=$cuenta;
                $arr_ctamayor["descripcion"]=$arr_dia["det"][0]->cuentadesc_t401;
                $arr_ctamayor["fechamov"]=$dia;
                $arr_ctamayor["mesantd"]="";
                $arr_ctamayor["mesantc"]="";
                $arr_ctamayor["debito"]=$arr_dia["cons"]["deb"];
                $arr_ctamayor["credito"]=$arr_dia["cons"]["cred"];
               

                //$arr_ctamayor["valor"]=abs($arr_dia["cons"]["deb"]-$arr_dia["cons"]["cred"]);
                $arr_reg[$cuenta][$dia]["saldo"]["deb"]+=$arr_dia["cons"]["deb"];
                $arr_reg[$cuenta][$dia]["saldo"]["cred"]+=$arr_dia["cons"]["cred"];

                $arr_ctamayor["sdebito"]=$arr_reg[$cuenta][$dia]["saldo"]["deb"];
                $arr_ctamayor["scredito"]=$arr_reg[$cuenta][$dia]["saldo"]["cred"];

                $arr_informemayor[]=$arr_ctamayor;
            }

        }
       
        

        $datexcelmayor = $this->Gestexcel->prepdatos($arr_informemayor);

        $objPHPExcel = $this->Gestexcel->cargarplantilla(FCPATH.'docs/Plantillas_Informes/plant_libromayor.xlsx');
        //$this->Gestexcel->escribirdatos($objPHPExcel,0,"C9",$fechaini);
        //$this->Gestexcel->escribirdatos($objPHPExcel,0,"E9",$fechafin);
       // $this->Gestexcel->escribirdatos($objPHPExcel,0,"D4",$cuenta);
        $this->Gestexcel->escribirdatos($objPHPExcel,0,"C11",$datexcelmayor["datos"]);
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
        $this->Gestexcel->exportar($objPHPExcel,'Libro Mayor '.$cuenta.'.xlsx');
        exit;
      }else{
          $mensaje = urlencode(base64_encode("No hay registros"));
          redirect('financieroinforme/libromayor/mensaje/'.$mensaje);
      }

    }
    function balancep(){
      $this->load->model('Gestexcel');
      $fechaini = $this->Util->prepfecha($this->input->post("fechad"));
      $fechafin = $this->Util->prepfecha($this->input->post("fechah"));
      $this->db->from("f_ascont_t401");
      $this->db->where("( (cuenta_t401 like '1%') or  (cuenta_t401 like '2%') or (cuenta_t401 like '3%')  )");
      $this->db->where("fcont_t401 between '$fechaini' AND '$fechafin' ");
      $this->db->order_by("cuenta_t401","ASC");
      $this->db->order_by("fcont_t401","ASC");
      $query = $this->db->get();
      $arr_datainf = $query->result();

      $this->db->from("param_puc_t4");
      $this->db->where("( (cod_t4 like '1%') or  (cod_t4 like '2%') or (cod_t4 like '3%')  )");
      $this->db->order_by("cod_t4","ASC");
      $query = $this->db->get();
      $arr_datapuc = $query->result();

      if(is_array($arr_datainf) && count($arr_datainf)>0){
        foreach($arr_datainf as $campo){
            $arr_reg[$campo->cuenta_t401]["det"][]=$campo;
            switch(strlen($campo->cuenta_t401)){
              case strlen($campo->cuenta_t401)>=4:
                $arr_reg[substr($campo->cuenta_t401, 0,4)]["cons"]["deb"]+=$campo->debito_t401;
                $arr_reg[substr($campo->cuenta_t401, 0,4)]["cons"]["cred"]+=$campo->credito_t401;
              case 3:
              case 2:
                $arr_reg[substr($campo->cuenta_t401, 0,2)]["cons"]["deb"]+=$campo->debito_t401;
                $arr_reg[substr($campo->cuenta_t401, 0,2)]["cons"]["cred"]+=$campo->credito_t401;
              case 1:
                $arr_reg[substr($campo->cuenta_t401, 0,1)]["cons"]["deb"]+=$campo->debito_t401;
                $arr_reg[substr($campo->cuenta_t401, 0,1)]["cons"]["cred"]+=$campo->credito_t401;
                break;
            }
        }
        if(is_array($arr_datapuc)){
          foreach($arr_datapuc as $datcta){
            if(!empty($arr_reg[$datcta->cod_t4]["cons"]["deb"]) || !empty($arr_reg[$datcta->cod_t4]["cons"]["cred"])){
              $arr_ctamayor["cuenta"]=$datcta->cod_t4;
              $arr_ctamayor["descripcion"]=$datcta->desc_t4;
              $arr_ctamayor["ultmov"]="";
              $arr_ctamayor["saldmesant"]="";
              $arr_ctamayor["mesantd"]="";
              $arr_ctamayor["mesantc"]="";
              $arr_ctamayor["debito"]=$arr_reg[$datcta->cod_t4]["cons"]["deb"];
              $arr_ctamayor["credito"]=$arr_reg[$datcta->cod_t4]["cons"]["cred"];
              $arr_informemayor[]=$arr_ctamayor;
              unset($arr_ctamayor);
            }
          }
        }

        $datexcelmayor = $this->Gestexcel->prepdatos($arr_informemayor);

        $objPHPExcel = $this->Gestexcel->cargarplantilla(FCPATH.'docs/Plantillas_Informes/plant_balanceprueba.xlsx');
        //$this->Gestexcel->escribirdatos($objPHPExcel,0,"C9",$fechaini);
        //$this->Gestexcel->escribirdatos($objPHPExcel,0,"E9",$fechafin);
       // $this->Gestexcel->escribirdatos($objPHPExcel,0,"D4",$cuenta);
        $this->Gestexcel->escribirdatos($objPHPExcel,0,"C11",$datexcelmayor["datos"]);
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
        $this->Gestexcel->exportar($objPHPExcel,'Balance Prueba.xlsx');
        exit;
      }else{
          $mensaje = urlencode(base64_encode("No hay registros"));
          redirect('financieroinforme/libromayor/mensaje/'.$mensaje);
      }

    }

    
   
  }
?>