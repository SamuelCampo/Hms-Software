<?
class Rips extends CI_Model {
  
  function __construct(){
    parent::__construct();
    $this->load->model('Cups');
    $this->load->model("Numerosaletras");
    ini_set('max_execution_time', 9000);
  }
  
  function sigremision(){
    $digrem = 6;
    $this->db->from("ps_rips_t92");
    $this->db->order_by("remision_t92","desc");
    $query = $this->db->get();
    $ultrem =  $query->row();
    if(!EMPTY($ultrem->remision_t92)){
      $numrem=$ultrem->remision_t92+1;
      $i=  strlen($numrem);
      for($i;$i<$digrem;$i++){
        $numrem='0'.$numrem;
      }
    }else{
      $numrem = '000001';
    }
    // var_dump($this->db->last_query());
    // exit();
    return $numrem;
  }
  
  function validarlistar(){
    $this->db->from("ps_ripsval_t107");
    $this->db->order_by("idvalid_t107","desc");
    $query = $this->db->get();
    $arr_dat = $query->result();
    if(is_array($arr_dat)){
      foreach($arr_dat as $reg){
        $this->db->from("ps_ripsvaldet_t108");
        $this->db->where("idvalid_t108",$reg->idvalid_t107);
        $query = $this->db->get();
        $reg->det = $query->result();
        $arr_res[] = $reg;
      }
    }
    return $arr_res;
  }
  
  function validarobtener($numval){
    $this->db->from("ps_ripsvaldet_t108");
    $this->db->where("idvalid_t108",$numval);
    $query = $this->db->get();
    return $query->result();
  }
  
  function validar(){
    $arr_cumps = $this->Modulo->objarrasoc($this->Cups->listar_tab(),"codplantarifa_t63");
    $arr_cumpscorr = $this->Modulo->objarrasoc($this->Cups->listar_tab(),"cod_res_46782015_t63");
    $arr_cupspriv = $this->Modulo->objarrasoc($this->Cups->listar_tab(),"codpriv_t63");
    $arr_cumsprivp = $this->Modulo->objarrasoc($this->Modulo->retdatos('','pv_ripscums_t900'," 	tipo_t900='P' ",''),"codint_t900");
    $arr_cumsprivm = $this->Modulo->objarrasoc($this->Modulo->retdatos('','pv_ripscums_t900'," 	tipo_t900='M' ",''),"codint_t900");
    $arr_archivos = $_FILES;
    $totarch = 0;
    $toterr = 0;
    foreach($arr_archivos as $tipo=>$archivo){
      if(!empty($archivo["name"]) && !empty($archivo["tmp_name"]) && $archivo["size"]>0){
        $totarch++;
        if(empty($numrem)){
          $numrem = substr($archivo["name"], 2,-4);
          $numremval = $numrem."_".time();
          $rutabase = "docs/RIPS/".$numremval;
          $rutarips = FCPATH.$rutabase;
          mkdir($rutarips,0777, TRUE);
        }
        $arr_arch = file($archivo["tmp_name"]);
        
        if(is_array($arr_arch)){
          $arr_corr = array();
          $lineadet=0;
          $arr_err = array();
          $arr_res[$tipo]["archcarg"]=$archivo["name"];
          $arr_res[$tipo]["archcor"]=$rutabase."/".$archivo["name"];
          $arr_res[$tipo]["archerr"]=$rutabase."/"."ERR_".$tipo."$numrem.txt";
          foreach($arr_arch as $lin){
            $lin = str_replace(chr(13),'', $lin);
            $lin = str_replace(chr(10),'', $lin);
            $lineadet++;
            $arr_res[$tipo]["lineas"]=$lineadet;
            $arr_lin=explode(",",$lin);
            $cupcorr='';
            switch ($tipo){
              case "AC":
                $arr_lin[15]=$arr_lin[15]*1;
                $arr_lin[16]=$arr_lin[16]*1;
              case "AP":
                $codcup = $arr_lin[6];
                //verificación contra tabla independiente pv_ripscums_t900
                if(!empty($arr_cumsprivp[$codcup])){
                  $cupcorr = $arr_cumsprivp[$codcup]->codent_t900;
                }
                //verificación contra tabla cups codigo interno 
                if(empty($cupcorr) && !empty($arr_cupspriv[$codcup])){
                  $cupcorr = $arr_cupspriv[$codcup]->codent_t900;
                }
                //verificación contra tabla cups 2000 
                if(empty($cupcorr) && !empty($arr_cumps[$codcup])){
                  $cupcorr = $arr_cumps[$arr_lin[6]]->cod_res_46782015_t63;
                }
                if(!empty($codcup) && !empty($cupcorr) && $codcup!=$cupcorr){
                  $deterr = "Linea $lineadet: Código corregido ".$codcup." por ".$cupcorr;
                  $arr_res[$tipo]["err"][]=$deterr;
                  $arr_err[]= "$tipo : $deterr ";
                  $arr_lin[6]=$cupcorr;
                  $toterr++;
                }
                
                //validación numero de autorización
                $arr_lin[5]='';
                $arr_lin[14]=$arr_lin[14]*1;
                break;
              case "AM":
                // verificacion contra tabla interna
                $codreg = $arr_cumsprivm[$arr_lin[5]];
                if(!empty($codreg)){
                  $deterr = "Linea $lineadet: Código corregido ".$codreg->codint_t900."[".$codreg->descint_t900."] por ".$codreg->codent_t900." [".$codreg->descent_t900."]";
                  $arr_res[$tipo]["err"][]=$deterr;
                  $arr_err[]= "$tipo : $deterr ";
                  $arr_lin[5]=$codreg->codent_t900;
                  $toterr++;
                }
                $arr_lin[4]='';
                break;
              case "AH":
                $arr_lin[7]='';
                break;
              case "AT":
                $arr_lin[4]='';
                break;
              case "AU":
                $arr_lin[6]='';
                break;
            }
            $arr_corr[] = implode($arr_lin,",");
          }
          file_put_contents($rutarips."/".$archivo["name"], implode(chr(13).chr(10), $arr_corr));
          file_put_contents($rutarips."/"."ERR_".$tipo."$numrem.txt", implode(chr(13).chr(10), $arr_err));
          $arr_valripsdet["idvalid_t108"]=$numremval;
          $arr_valripsdet["archivo_t108"]=$archivo["name"];
          $arr_valripsdet["archerr_t108"]="ERR_".$tipo."$numrem.txt";
          $arr_valripsdet["errores_t108"]=count($arr_err);
          $arr_valripsdet["lineas_t108"]=count($arr_corr);
          $arr_valripsdet["usrmod_t108"]=$this->Modulo->usr->idusr;
          $arr_valripsdet["fmod_t108"]=$this->Modulo->ahora();
          $this->db->insert("ps_ripsvaldet_t108",$arr_valripsdet);
        }
      }
    }
    
    $arr_valrips["idvalid_t107"]=$numremval;
    $arr_valrips["archivos_t107"]=$totarch;
    $arr_valrips["errores_t107"]=$toterr;
    $arr_valrips["usrmod_t107"]=$this->Modulo->usr->idusr;
    $arr_valrips["fmod_t107"]=$this->Modulo->ahora();
    $this->db->insert("ps_ripsval_t107",$arr_valrips);
    return $numremval;
  }
  
  function confirmar(){
    $datform= (object)$this->input->post();
    if($datform->tipocta!='CAPITA'){
      $this->db->from("cm_cuentas_t96,ps_paciente_t3,ps_historia_t4,cm_cuentaseries_t97");
      $this->db->where("pacid_t96 = identificacion_t3");
      $this->db->where("idps_historia_t4 = historia_t96");
      $this->db->where("idserie_t96 = idcm_cuentaseries_t97");
        $this->db->where('estado_t96 != "ANULADO"');
        $this->db->where('valor_t96 > 0');
      //$this->db->where("radicado_t96 <>","SI","INNER");
      $this->db->order_by("factnum_t96",'asc');
      //$this->db->order_by("fingreso_t4",'desc');
      if(!empty($datform->fechad) && !empty($datform->fechah)){
        $this->db->where("ffact_t96 >=",$datform->fechad);
        $this->db->where("ffact_t96 <=",$datform->fechah);
      }
      if (!empty($datform->factnum)) {
        $this->db->where('factnum_t96', $datform->factnum);
      }
      if(!empty($datform->tercid)){
        $this->db->where("tercid_t96",$datform->tercid);
      }
      if(!empty($datform->tipocta)){
        $this->db->where("tipo_t96",$datform->tipocta);
      }
      /*if(!empty($datform->convenio)){
        $this->db->where("convenio_t96",$datform->tercid);
      }*/
      $query = $this->db->get();
      /*var_dump($this->db->last_query());
      exit();*/
      // var_dump($this->db->last_query());
      // var_dump($query->result());
      // exit();
      return $query->result();
    }else{
      $this->generar_cap();
    }
  }
  
  function generar_cap(){
    $datform = (object)$this->input->post();
    $numrem = $this->sigremision();
    $rutarips = FCPATH."docs/RIPS/".$numrem;
    mkdir($rutarips,0777, TRUE);
    
    $arr_tipoaf = $this->Modulo->objarrasoc($this->Constante->tipoafiliacion,'tipo');
    $codprest=$this->Modulo->infoentidad->codigo_t75;
    
    $this->db->from("ps_historia_t4");
    $this->db->join("ps_paciente_t3","paciente_t4 = identificacion_t3","INNER");
    // $this->db->join("ps_hist_ordenes_t67","idps_historia_t4=idhistoria_t67","INNER");
    $this->db->join("ps_hist_consulta_t64","idps_historia_t4 = idhistoria_t64","INNER");
    //$this->db->join("ps_agenda_t12","identificacion_t12 = paciente_t4","INNER");
    //$this->db->where("grupoprod_t12",'CONS');
    // $this->db->join("cm_cuentas_t96","historia_t96 = idps_historia_t4","INNER");
    // $this->db->where("tipoplan_t67",'ISS');
    // $this->db->where("cantidad_t67 >=",'0');
    // $this->db->where("archrips_t67",'AC');
    $this->db->where_not_in("tipocta_t4",array('EVENTO','PARTICULAR'));
    // $this->db->where("ffact_t96 >=",$datform->fechad);
    // $this->db->where("ffact_t96 <=",$datform->fechah);
        $this->db->where("fingreso_t4 >=",$datform->fechad." 00:00:00");
    $this->db->where("fingreso_t4 <=",$datform->fechah." 23:59:59");
    
    $query = $this->db->get();
    // debug($this->db->last_query());
    $arr_datips =  $query->result();
    if(is_array($arr_datips)){
      $archcons="";
      foreach($arr_datips as $reg){
        $reg = $this->Util->array_strreplace($reg,","," ");
        $regarchcons='';
        $arr_usr[]=$reg->identificacion_t3;
        $codent = 'CODIGOENTIDAD';
        $regarchcons.='NUMEROFACTURA';
        $regarchcons.=",".'CODIGOENTIDAD';
        $regarchcons.=",".$reg->identiftipo_t3;
        $regarchcons.=",".$reg->identificacion_t3;
        $regarchcons.=",".date("d/m/Y",strtotime($reg->fingreso_t4));
        $regarchcons.=",";
        $regarchcons.=",".$reg->codproc_t12;
        $regarchcons.=",7";
        $regarchcons.=",13";
        $regarchcons.=",".$reg->dxprincipalcod_t64;
        $regarchcons.=",".$reg->dxprincipal_t64;
        $regarchcons.=",".$reg->dxsecundariocod_t64;
        $regarchcons.=",".$reg->dxrelprincipalcod_t64;
        $regarchcons.=",1";
        $regarchcons.=",".$reg->valor_t67;
        $regarchcons.=",";
        $regarchcons.=",".$reg->valor_t67;
        if(!empty($archcons)){
          $archcons.="\r\n";
        }
        $archcons.= $this->Planthtml->mayusc($regarchcons);
      }
      
      file_put_contents($rutarips."/AC".$numrem.".TXT",$archcons);
      $arr_contr[]=$codprest.','.date("d/m/Y").",AC".$numrem.",".count($arr_datips);
      unset($arr_datips);
    }
    
    $this->db->from("ps_historia_t4");
    $this->db->join("ps_paciente_t3","paciente_t4 = identificacion_t3","INNER");
    $this->db->join("ps_hist_ordenes_t67","idps_historia_t4=idhistoria_t67","INNER");
    $this->db->join("ps_hist_consulta_t64","idps_historia_t4 = idhistoria_t64","INNER");
        $this->db->join("ps_agenda_t12","identificacion_t12 = paciente_t4","INNER");
    $this->db->where("grupoprod_t12",'LABO');
    $this->db->where("tipoplan_t67",'ISS');
    $this->db->where("cantidad_t67 >=",'0');
    $this->db->where("archrips_t67",'AP');
    $this->db->where_not_in("tipocta_t4",array('EVENTO','PARTICULAR'));
       $this->db->where("fingreso_t4 >=",$datform->fechad." 00:00:00");
    $this->db->where("fingreso_t4 <=",$datform->fechah." 23:59:59");
    
    $query = $this->db->get();
    $arr_datips =  $query->result();
    if(is_array($arr_datips)){
      $archproc="";
      foreach($arr_datips as $reg){
        $reg = $this->Util->array_strreplace($reg,","," ");
        $regarchproc='';
        $arr_usr[]=$reg->identificacion_t3;
        $codent = 'CODIGOENTIDAD';
        $regarchproc.='NUMEROFACTURA';
        $regarchproc.=",".'CODIGOENTIDAD';
        $regarchproc.=",".$reg->identiftipo_t3;
        $regarchproc.=",".$reg->identificacion_t3;
        $regarchproc.=",".date("d/m/Y",strtotime($reg->fingreso_t4));
        $regarchproc.=",";
        $regarchproc.=",".$reg->codigo_t67;
        $regarchproc.=",1,7,1";
        $regarchproc.=",".$reg->dxprincipalcod_t64;
        $regarchproc.=",".$reg->dxprincipal_t64;
        $regarchproc.=",";
        $regarchproc.=",";
        $regarchproc.=",".$reg->valor_t67;
        if(!empty($archproc)){
          $archproc.="\r\n";
        }
        $archproc.= $this->Planthtml->mayusc($regarchproc);
      }
      file_put_contents($rutarips."/AP".$numrem.".TXT",$archproc);
      $arr_contr[]="\r\n".$codprest.','.date("d/m/Y").",AP".$numrem.",".count($arr_datips);
      unset($arr_datips);
    }
    
    $archat="";
    $this->db->from("ps_historia_t4");
    $this->db->join("ps_paciente_t3","paciente_t4 = identificacion_t3","INNER");
    $this->db->join("ps_hist_ordenes_t67","idps_historia_t4=idhistoria_t67","INNER");
    $this->db->where("tipoplan_t67",'ISS');
    $this->db->where("cantidad_t67 >=",'0');
    $this->db->where("archrips_t67",'AT');
    $this->db->where_not_in("tipocta_t4",array('EVENTO','PARTICULAR'));
       $this->db->where("fingreso_t4 >=",$datform->fechad." 00:00:00");
    $this->db->where("fingreso_t4 <=",$datform->fechah." 23:59:59");
    $query = $this->db->get();
    $arr_datips =  $query->result();
    if(is_array($arr_datips)){
      foreach($arr_datips as $reg){
        $reg = $this->Util->array_strreplace($reg,","," ");
        $regarchat='';
        $arr_usr[]=$reg->identificacion_t3;
        $codent = 'CODIGOENTIDAD';
        $regarchat.='NUMEROFACTURA';
        $regarchat.=",".'CODIGOENTIDAD';
        $regarchat.=",".$reg->identiftipo_t3;
        $regarchat.=",".$reg->identificacion_t3;
        $regarchat.=",";
        $regarchat.=",4";
        $regarchat.=",".$reg->codigo_t67;
        $regarchat.=",".$reg->descripcion_t67;
        $regarchat.=",".$reg->cantidad_t67;
        $regarchat.=",".$reg->valunit_t67;
        $regarchat.=",".$reg->valor_t67;
        if(!empty($archat)){
          $archat.="\r\n";
        }
        $archat.= $this->Planthtml->mayusc($regarchat);
      }
      $regat = count($arr_datips);
      unset($arr_datips);
    }
    
    $this->db->from("ps_historia_t4");
    $this->db->join("ps_paciente_t3","paciente_t4 = identificacion_t3","INNER");
    $this->db->join("ps_hist_ordenes_t67","idps_historia_t4=idhistoria_t67","INNER");
    $this->db->where("cantidad_t67 >=",'0');
    $this->db->where("tipo_t67",'SUM');
    $this->db->where_not_in("tipocta_t4",array('EVENTO','PARTICULAR'));
       $this->db->where("fingreso_t4 >=",$datform->fechad." 00:00:00");
    $this->db->where("fingreso_t4 <=",$datform->fechah." 23:59:59");
    $query = $this->db->get();
    $arr_datips =  $query->result();
    if(is_array($arr_datips)){
      foreach($arr_datips as $reg){
        $reg = $this->Util->array_strreplace($reg,","," ");
        $regarchat='';
        $arr_usr[]=$reg->identificacion_t3;
        $codent = 'CODIGOENTIDAD';
        $regarchat.='NUMEROFACTURA';
        $regarchat.=",".'CODIGOENTIDAD';
        $regarchat.=",".$reg->identiftipo_t3;
        $regarchat.=",".$reg->identificacion_t3;
        $regarchat.=",";
        $regarchat.=",1";
        $regarchat.=",".$reg->codigo_t67;
        $regarchat.=",".$reg->descripcion_t67;
        $regarchat.=",".$reg->cantidad_t67;
        $regarchat.=",".$reg->valunit_t67;
        $regarchat.=",".$reg->valor_t67;
        if(!empty($archat)){
          $archat.="\r\n";
        }
        $archat.= $this->Planthtml->mayusc($regarchat);
      }
      $regat+=count($arr_datips);
      unset($arr_datips);
    }
    if($regat>0){
      file_put_contents($rutarips."/AT".$numrem.".TXT",$archat);
      $arr_contr[]="\r\n".$codprest.','.date("d/m/Y").",AT".$numrem.",".$regat;
    }
    
    if(is_array($arr_usr)){
      $arr_usr = array_unique($arr_usr);
      $archusr="";
      $this->db->from("ps_paciente_t3");
      $this->db->where_in("identificacion_t3",$arr_usr);
      $query = $this->db->get();
      $arr_datus =  $query->result();
      if(is_array($arr_datus)){
        foreach($arr_datus as $reg){
          $reg = $this->Util->array_strreplace($reg,","," ");
          $regarchusr='';
          $fecha = explode("-",$reg->fnacim_t3);
          $edad = date("Y")-$fecha[0];
          $entadmincod = $reg->administradoracod_t3;
          $entadmin = $reg->administradora_t3;
          $regarchusr.=$reg->identiftipo_t3;
          $regarchusr.=",".$reg->identificacion_t3;
          $regarchusr.=",".$codent;
          $regarchusr.=",".$arr_tipoaf[$reg->tipoaf_t3]->idtipo;
          $regarchusr.=",".$reg->apellido1_t3;
          $regarchusr.=",".$reg->apellido2_t3;
          $regarchusr.=",".$reg->nombre1_t3;
          $regarchusr.=",".$reg->nombre2_t3;
          $regarchusr.=",1";
          $regarchusr.=",".$edad;
          $regarchusr.=",".substr($reg->genero_t3, 0,1);
          $regarchusr.=",".substr($reg->municipiocod_t3,0,2);
          $regarchusr.=",".substr($reg->municipiocod_t3,2,3);
          $regarchusr.=",".$reg->zonares_t3;
          if(!empty($archusr)){
            $archusr.="\r\n";
          }
          $archusr.= $this->Planthtml->mayusc($regarchusr);
        }
        file_put_contents($rutarips."/US".$numrem.".TXT",$archusr);
        $arr_contr[]="\r\n".$codprest.','.date("d/m/Y").",US".$numrem.",".count($arr_datus);
      }
      
      
      $this->db->from("ps_historia_t4");
      $this->db->join("ps_paciente_t3","paciente_t4 = identificacion_t3","INNER");
      $this->db->join("ps_hist_ordenes_t67","idps_historia_t4=idhistoria_t67","INNER");
      $this->db->where("cantidad_t67 >=",'0');
      $this->db->where("tipo_t67",'MED');
      $this->db->where_not_in("tipocta_t4",array('EVENTO','PARTICULAR'));
       $this->db->where("fingreso_t4 >=",$datform->fechad." 00:00:00");
    $this->db->where("fingreso_t4 <=",$datform->fechah." 23:59:59");
      $query = $this->db->get();
      $arr_datmeds =  $query->result();
      if(is_array($arr_datmeds)){
        $archmeds="";
        foreach($arr_datmeds as $reg){
          $reg = $this->Util->array_strreplace($reg,","," ");
          $regarchcons='';
          $regarchcons.='NUMEROFACTURA';
          $regarchcons.=",".'CODIGOENTIDAD';
          $regarchcons.=",".$reg->identiftipo_t3;
          $regarchcons.=",".$reg->identificacion_t3;
          $regarchcons.=",";
          $regarchcons.=",".$reg->codigo_t67;
          $regarchcons.=",1";
          $regarchcons.=",".$reg->descripcion_t67;
          $regarchcons.=",";
          $regarchcons.=",";
          $regarchcons.=",";
          $regarchcons.=",".$reg->cantfac_t67;
          $regarchcons.=",".$reg->vunit_t67;
          $regarchcons.=",".$reg->valor_t67;
          if(!empty($archmeds)){
            $archmeds.="\r\n";
          }
          $archmeds.= $this->Planthtml->mayusc($regarchcons);
        }
        file_put_contents($rutarips."/AM".$numrem.".TXT",$archmeds);
        $arr_contr[]="\r\n".$codprest.','.date("d/m/Y").",AM".$numrem.",".count($arr_datmeds);
      }
      $this->db->from("cm_cuentas_t96");
      $this->db->join("param_terceros_t16","tercid_t96=ident_t16","INNER");
      $this->db->join("cm_cuentaseries_t97","idserie_t96 = idcm_cuentaseries_t97","INNER");
      $this->db->where('tercid_t96', $datform->tercid);
      $this->db->where('convenio_t96',$datform->convenio);
      $this->db->where("ffact_t96 >=",$datform->fechad." 00:00:00");
      $this->db->where("ffact_t96 <=",$datform->fechah." 23:59:59");
      $query = $this->db->get();
      $arr_dattrans =  $query->result();
      $archtrans="";
      //var_dump($arr_dattrans);
      //exit;
      foreach($arr_dattrans as $regfac){
        $reg = $this->Util->array_strreplace($regfac,","," ");
        $transacc=$codprest;
        $transacc.=",".$this->Modulo->infoentidad->nombre_t75;
        $transacc.=",NI";
        $transacc.=",".$this->Modulo->infoentidad->nit_t75;
        $transacc.=",".$regfac->prefijo_t97.$regfac->factnum_t96;
        $transacc.=",".date("d/m/Y",strtotime($regfac->ffact_t96));
        $transacc.=",".date("d/m/Y",strtotime($regfac->ffact_t96));
        $transacc.=",".date("d/m/Y",strtotime($regfac->ffact_t96));
        $transacc.=",".$regfac->cod_t16;
        $transacc.=",".$regfac->desc_t16;
        $transacc.=",";
        $transacc.=",";
        $transacc.=",";
        $transacc.=",".round($regfac->copago_t96);
        $transacc.=",";
        $transacc.=",";
        $total = $regfac->valor_t96 - $regfac->copago_t96;
        $transacc.=",".round($total);
        if(!empty($archtrans)){
            $archtrans.="\r\n";
        }
        $archtrans.= $this->Planthtml->mayusc($transacc);
      }
      //echo "<h1>RIPS AF</h1>";
      //var_dump($archtrans);
      //$arr_contr[]="\r\n".$codprest.','.date("d/m/Y").",AF".$numrem.",".count($arr_dattrans);
      //echo "<H1>RIPS CT</h1>";
      /*foreach ($arr_contr as $fila) {
        echo $fila."<br>";
      }*/
      file_put_contents($rutarips."/AF".$numrem.".TXT",$archtrans);
      $arr_contr[]="\r\n".$codprest.','.date("d/m/Y").",AF".$numrem.",".count($arr_dattrans);
      
      unset($arr_dattrans);
      
      file_put_contents($rutarips."/CT".$numrem.".TXT",$arr_contr);
      $arr_nuevo["prestadorcod_t92"]=$codprest;
      $arr_nuevo["prestador_t92"]=$this->Modulo->infoentidad->nombre_t75;
      $arr_nuevo["tipoidentif_t92"]='NI';
      $arr_nuevo["identif_t92"]=substr($this->Modulo->infoentidad->nit_t75,0,9);
      $arr_nuevo["factnum_t92"]=$datform->factnum;
      $arr_nuevo["factfecha_t92"]=$datform->factfec;
      $arr_nuevo["finicio_t92"]=$datform->fechad;
      $arr_nuevo["ffinal_t92"]=$datform->fechah;
      $arr_nuevo["admincod_t92"]=$entadmincod;
      $arr_nuevo["admin_t92"]=$entadmin;
      $arr_nuevo["remision_t92"]=$numrem;
      $arr_nuevo["usrmod_t92"]=$this->Modulo->usr->idusr;
      $arr_nuevo["fmod_t92"]=$this->Modulo->ahora();
      $arr_nuevo['tipo_cuenta_t92'] = $this->input->post('tipocta');
      $this->db->insert("ps_rips_t92",$arr_nuevo);
      
      $arr_actfacts["radicado_t96"]=$numrem;
      $this->db->where('tercid_t96', $datform->tercid);
      $this->db->where('convenio_t96',$datform->convenio);
      $this->db->where("ffact_t96 >=",$datform->fechad." 00:00:00");
      $this->db->where("ffact_t96 <=",$datform->fechah." 23:59:59");
      $this->db->where('radicado_t96 IS NULL');
      $this->db->update("cm_cuentas_t96",$arr_actfacts);
    }
    $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$numrem;
    redirect(site_url()."/facturacion/rips/mensaje/".$mensaje);
  }
  

    function generar(){
    $datform = (object)$this->input->post();
    if(is_array($datform->rpsconf)){
      foreach($datform->rpsconf as $idcta=>$res){
        if($res=='S'){
          $arr_idcta[]=$idcta;
        }
      }
    }

    // Creación del archivo Rip dando los permisos necesarios
    $numrem = $this->sigremision();
    $rutarips = FCPATH."docs/RIPS/".$numrem;
    mkdir($rutarips,0777, TRUE);
    
    $arr_tipoaf = $this->Modulo->objarrasoc($this->Constante->tipoafiliacion,'tipo');
    $codprest=$this->Modulo->infoentidad->codigo_t75;
    // Creacion del primer Rips AC
    $this->db->from("cm_cuentas_t96");
    $this->db->join("ps_paciente_t3","pacid_t96 = identificacion_t3","INNER");
    $this->db->join("ps_hist_ordenes_t67","factnum_t96= idfactura_t67 and historia_t96=idhistoria_t67","INNER");
    //$this->db->join("ps_plan_tarifario_t63","codigo_t67=codplantarifa_t63","INNER");
    //$this->db->join("param_terceros_t16","tercid_t96=ident_t16","INNER");
    $this->db->join("cm_cuentaseries_t97","idserie_t96 = idcm_cuentaseries_t97","INNER");
    //$this->db->where("tipoplan_t63",'ISS');
    //$this->db->where("cantfac_t67 >=",'0');
    $this->db->where("archrips_t67",'AC');
    $this->db->where('estado_t96 !=', 'ANULADO');
    $this->db->where_in("idcm_cuentas_t96",$arr_idcta);
    $query = $this->db->get();
    $arr_datips = $query->result();
    if(is_array($arr_datips)){
      $archcons="";
      foreach($arr_datips as $reg){
        $reg = $this->Util->array_strreplace($reg,","," ");
        $regarchcons='';
        $arr_usr[]=$reg->pacid_t96;
        $codent = $reg->codprest_t97;
        $regarchcons.=$reg->prefijo_t97.$reg->factnum_t96;
        $regarchcons.=",".$reg->codprest_t97;
        $regarchcons.=",".$reg->identiftipo_t3;
        $regarchcons.=",".$reg->identificacion_t3;
        $regarchcons.=",".date('d/m/Y',strtotime($reg->ffact_t96));
        $regarchcons.=",".$reg->autorizacion;
        $regarchcons.=",".$reg->codigo_t67;
        $regarchcons.=",7";
        $regarchcons.=",13";
        $regarchcons.=",".substr($reg->dx_t96,0,4);
        $regarchcons.=",";
        $regarchcons.=",".$reg->dxsecundariocod_t64;
        $regarchcons.=",".$reg->dxrelsecundariocod_t64;
        $regarchcons.=",1";
        $regarchcons.=",".$reg->valor_t67;
        $regarchcons.=",0";
        $regarchcons.=",".$reg->valor_t67;
        if(!empty($archcons)){
          $archcons.="\r\n";
        }
        $archcons.= $this->Planthtml->mayusc($regarchcons);
      }
      //$arr_contr[]=$codprest.','.date("d/m/Y").",AC".$numrem.",".count($arr_datips);
      //echo "<H1>RIPS AC</H1>";
      //var_dump($archcons);
      
      file_put_contents($rutarips."/AC".$numrem.".TXT",$archcons);
      $arr_contr[]=$codprest.','.date("d/m/Y").",AC".$numrem.",".count($arr_datips);
      unset($arr_datips);
    }
    $this->db->from("cm_cuentas_t96");
    $this->db->join("ps_paciente_t3","pacid_t96 = identificacion_t3","INNER");
    $this->db->join("ps_hist_ordenes_t67","factnum_t96= idfactura_t67 and historia_t96=idhistoria_t67","INNER");
    //$this->db->join("param_terceros_t16","tercid_t96=ident_t16","INNER");
    $this->db->join("cm_cuentaseries_t97","idserie_t96 = idcm_cuentaseries_t97","INNER");
    //$this->db->where("tipoplan_t67",'ISS');
    //$this->db->where("cantfac_t67 >=",'0');
    $this->db->where("archrips_t67",'AP');
    $this->db->where_in("idcm_cuentas_t96",$arr_idcta);
    $query = $this->db->get();
    $arr_datips =  $query->result();
    if(is_array($arr_datips)){
      $archproc="";
      foreach($arr_datips as $reg){
        $reg = $this->Util->array_strreplace($reg,","," ");
        $regarchproc='';
        $arr_usr[]=$reg->identificacion_t3;
        $codent = $reg->codprest_t97;
        $regarchproc.=$reg->prefijo_t97.$reg->factnum_t96;
        $regarchproc.=",".$reg->codprest_t97;
        $regarchproc.=",".$reg->identiftipo_t3;
        $regarchproc.=",".$reg->identificacion_t3;
        $regarchproc.=",".date('d/m/Y',strtotime($reg->fingreso_t96));
        $regarchproc.=",".$reg->autorizacion;
        $regarchproc.=",".$reg->codigo_t67;
        $regarchproc.=",1,".$reg->finalproc_t64.",1";
        $regarchproc.=",".substr($reg->dx_t96,0,5);
        $regarchproc.=",".substr($reg->dx_t96,0,5);;
        $regarchproc.=",";
        $regarchproc.=",";
        $regarchproc.=",".$reg->valor_t67;
        if(!empty($archproc)){
          $archproc.="\r\n";
        }
        $archproc.= $this->Planthtml->mayusc($regarchproc);
      }
      file_put_contents($rutarips."/AP".$numrem.".TXT",$archproc);
      $arr_contr[]="\r\n".$codprest.','.date("d/m/Y").",AP".$numrem.",".count($arr_datips);
      unset($arr_datips);
    }
    /*echo "<h1>RIPS AP</h1>";
    var_dump($archproc);
    //var_dump($arr_datips);*/

    // Crear el Rips AT
    //echo "<H1>RIPS AT</H1>";
    $archat="";
    $this->db->from("cm_cuentas_t96");
    $this->db->join("ps_paciente_t3","pacid_t96 = identificacion_t3","INNER");
    $this->db->join("ps_hist_ordenes_t67","factnum_t96= idfactura_t67 and historia_t96=idhistoria_t67","INNER");
    //$this->db->join("param_terceros_t16","tercid_t96=ident_t16","INNER");
    $this->db->join("cm_cuentaseries_t97","idserie_t96 = idcm_cuentaseries_t97","INNER");
    //$this->db->where("tipoplan_t67",'ISS');
    //$this->db->where("cantfac_t67 >=",'0');
    $this->db->where("archrips_t67",'AT');
    $this->db->where_in("idcm_cuentas_t96",$arr_idcta);
    $query = $this->db->get();
    $arr_datips =  $query->result();
    //var_dump($arr_datips);
    if(is_array($arr_datips)){
      foreach($arr_datips as $reg){
        $reg = $this->Util->array_strreplace($reg,","," ");
        $regarchat='';
        $arr_usr[]=$reg->identificacion_t3;
        $codent = $reg->codprest_t97;
        $regarchat.=$reg->prefijo_t97.$reg->factnum_t96;
        $regarchat.=",".$reg->codprest_t97;
        $regarchat.=",".$reg->identiftipo_t3;
        $regarchat.=",".$reg->identificacion_t3;
        $regarchat.=",".$reg->autorizacion;
        $regarchat.=",1";
        $regarchat.=",".$reg->codigo_t67;
        $regarchat.=",".$reg->descripcion_t67;
        $regarchat.=",".$reg->cantidad_t67;
        $regarchat.=",".$reg->valunit_t67;
        $regarchat.=",".$reg->valor_t67;
        if(!empty($archat)){
          $archat.="\r\n";
        }
        $archat.= $this->Planthtml->mayusc($regarchat);
      }
      $regat = count($arr_datips);
      unset($arr_datips);
    }
    
    $this->db->from("cm_cuentas_t96");
    $this->db->join("ps_paciente_t3","pacid_t96 = identificacion_t3","INNER");
    $this->db->join("ps_hist_ordenes_t67","factnum_t96= idfactura_t67 and historia_t96=idhistoria_t67","INNER");
    $this->db->join("cm_cuentaseries_t97","idserie_t96 = idcm_cuentaseries_t97","INNER");
    //$this->db->where("cantfac_t67 >=",'0');
    $this->db->where("tipo_t67",'SUM');
    $this->db->where_in("idcm_cuentas_t96",$arr_idcta);
    $query = $this->db->get();
    $arr_datips =  $query->result();
    if(is_array($arr_datips)){
      foreach($arr_datips as $reg){
        $reg = $this->Util->array_strreplace($reg,","," ");
        $regarchat='';
        $arr_usr[]=$reg->identificacion_t3;
        $codent = $reg->codprest_t97;
        $regarchat.=$reg->prefijo_t97.$reg->factnum_t96;
        $regarchat.=",".$reg->codprest_t97;
        $regarchat.=",".$reg->identiftipo_t3;
        $regarchat.=",".$reg->identificacion_t3;
        $regarchat.=",".$reg->autorizacion;
        $regarchat.=",1";
        $regarchat.=",".$reg->codigo_t67;
        $regarchat.=",".$reg->descripcion_t67;
        $regarchat.=",".$reg->cantidad_t67;
        $regarchat.=",".$reg->valunit_t67;
        $regarchat.=",".$reg->valor_t67;
        if(!empty($archat)){
          $archat.="\r\n";
        }
        $archat.= $this->Planthtml->mayusc($regarchat);
      }
      $regat+=count($arr_datips);
      unset($arr_datips);
    }
    //$arr_contr[]="\r\n".$codprest.','.date("d/m/Y").",AT".$numrem.",".$regat;
    if($regat>0){
      file_put_contents($rutarips."/AT".$numrem.".TXT",$archat);
      $arr_contr[]="\r\n".$codprest.','.date("d/m/Y").",AT".$numrem.",".$regat;
    }
    //echo "<H1>RIPS AT</H1>";
    //var_dump($archat);


  $this->db->from("cm_cuentas_t96");
      $this->db->join("ps_paciente_t3","pacid_t96 = identificacion_t3","INNER");
      $this->db->join("ps_hist_ordenes_t67","factnum_t96= idfactura_t67 and historia_t96=idhistoria_t67","INNER");
      //$this->db->join("param_terceros_t16","tercid_t96=ident_t16","INNER");
      $this->db->join("cm_cuentaseries_t97","idserie_t96 = idcm_cuentaseries_t97","INNER");
      //$this->db->where("cantfac_t67 >=",'0');
      $this->db->where("tipo_t67",'MED');
      $this->db->where_in("idcm_cuentas_t96",$arr_idcta);
      $query = $this->db->get();
      $arr_datmeds =  $query->result();
      if(is_array($arr_datmeds)){
        $archmeds="";
        foreach($arr_datmeds as $reg){
          $reg = $this->Util->array_strreplace($reg,","," ");
          $arr_usr[]=$reg->identificacion_t3;
          $regarchcons.=$reg->prefijo_t97.$reg->factnum_t96;
          $regarchcons.=",".$reg->codprest_t97;
          $regarchcons.=",".$reg->identiftipo_t3;
          $regarchcons.=",".$reg->identificacion_t3;
          $regarchcons.=",";
          $regarchcons.=",".$reg->codigo_t67;
          $regarchcons.=",1";
          $regarchcons.=",".$reg->descripcion_t67;
          $regarchcons.=",";
          $regarchcons.=",";
          $regarchcons.=",";
          $regarchcons.=",".$reg->cantidad_t67;
          $regarchcons.=",".$reg->valunit_t67;
          $regarchcons.=",".$reg->valunit_t67*$reg->cantidad_t67;
          if(!empty($archmeds)){
            $archmeds.="\r\n";
          }
          $archmeds.= $this->Planthtml->mayusc($regarchcons);
        }
        file_put_contents($rutarips."/AM".$numrem.".TXT",$archmeds);
        $arr_contr[]="\r\n".$codprest.','.date("d/m/Y").",AM".$numrem.",".count($arr_datmeds);
        //$arr_contr[]="\r\n".$codprest.','.date("d/m/Y").",AM".$numrem.",".count($arr_datmeds);
      }
      //echo "<h1>RIPS AM</h1>";
      //var_dump($archmeds);
          if(is_array($arr_usr)){
      $arr_usr = array_unique($arr_usr);
      $archusr="";
      $this->db->from("ps_paciente_t3");
      $this->db->where_in("identificacion_t3",$arr_usr);
      $query = $this->db->get();
      $arr_datus =  $query->result();
      if(is_array($arr_datus)){
        foreach($arr_datus as $reg){
          $reg = $this->Util->array_strreplace($reg,","," ");
          $regarchusr='';
          $fecha = explode("-",$reg->fnacim_t3);
          $edad = date("Y")-$fecha[0];
          $entadmincod = $reg->administradoracod_t3;
          $entadmin =   $reg->administradora_t3;
          $regarchusr.=$reg->identiftipo_t3;
          $regarchusr.=",".$reg->identificacion_t3;
          $regarchusr.=",".$entadmincod;
          $regarchusr.=",".$arr_tipoaf[$reg->tipoaf_t3]->idtipo;
          $regarchusr.=",".$reg->apellido1_t3;
          $regarchusr.=",".$reg->apellido2_t3;
          $regarchusr.=",".$reg->nombre1_t3;
          $regarchusr.=",".$reg->nombre2_t3;
          $regarchusr.=",".$edad;
          $regarchusr.=",1";
          $regarchusr.=",".substr($reg->genero_t3, 0,1);
          $regarchusr.=",".substr($reg->municipiocod_t3,0,2);
          $regarchusr.=",".substr($reg->municipiocod_t3,2,3);
          $regarchusr.=",".$reg->zonares_t3;
          if(!empty($archusr)){
            $archusr.="\r\n";
          }
          $archusr.= $this->Planthtml->mayusc($regarchusr);
        }
         file_put_contents($rutarips."/US".$numrem.".TXT",$archusr);
        $arr_contr[]="\r\n".$codprest.','.date("d/m/Y").",US".$numrem.",".count($arr_datus);
        //echo "<h1>RIPS US</h1>";
          //var_dump($archusr);
    }
  }
      $this->db->from("cm_cuentas_t96");
      $this->db->join("param_terceros_t16","tercid_t96=ident_t16","INNER");
      $this->db->join("cm_cuentaseries_t97","idserie_t96 = idcm_cuentaseries_t97","INNER");
      $this->db->where_in("idcm_cuentas_t96",$arr_idcta);
      $query = $this->db->get();
      $arr_dattrans =  $query->result();
      $archtrans="";
      //var_dump($arr_dattrans);
      //exit;
      foreach($arr_dattrans as $regfac){
        $reg = $this->Util->array_strreplace($regfac,","," ");
        $transacc=$codprest;
        $transacc.=",".$this->Modulo->infoentidad->nombre_t75;
        $transacc.=",NI";
        $nit = str_replace(".","",$this->Modulo->infoentidad->nit_t75);
        $nit = explode("-",$nit);
        $transacc.=",".$nit[0];
        $transacc.=",".$regfac->prefijo_t97.$regfac->factnum_t96;
        $transacc.=",".date("d/m/Y",strtotime($regfac->ffact_t96));
        $transacc.=",".date("d/m/Y",strtotime($regfac->fingreso_t96));
        $transacc.=",".date("d/m/Y",strtotime($regfac->fegreso_t96));
        $transacc.=",".$regfac->cod_t16;
        $transacc.=",".$regfac->desc_t16;
        $transacc.=",";
        $transacc.=",";
        $transacc.=",";
        $transacc.=",".round($regfac->copago_t96);
        $transacc.=",";
        $transacc.=",";
        $total = $regfac->valor_t96 - $regfac->copago_t96;
        $transacc.=",".round($total);
        if(!empty($archtrans)){
            $archtrans.="\r\n";
        }
        $archtrans.= $this->Planthtml->mayusc($transacc);
      }
      //echo "<h1>RIPS AF</h1>";
      //var_dump($archtrans);
      //$arr_contr[]="\r\n".$codprest.','.date("d/m/Y").",AF".$numrem.",".count($arr_dattrans);
      //echo "<H1>RIPS CT</h1>";
      /*foreach ($arr_contr as $fila) {
        echo $fila."<br>";
      }*/
      file_put_contents($rutarips."/AF".$numrem.".TXT",$archtrans);
      $arr_contr[]="\r\n".$codprest.','.date("d/m/Y").",AF".$numrem.",".count($arr_dattrans);
      
      unset($arr_dattrans);
      
      file_put_contents($rutarips."/CT".$numrem.".TXT",$arr_contr);
      $arr_nuevo["prestadorcod_t92"]=$codprest;
      $arr_nuevo["prestador_t92"]=$this->Modulo->infoentidad->nombre_t75;
      $arr_nuevo["tipoidentif_t92"]='NI';
      $arr_nuevo["identif_t92"]=substr($this->Modulo->infoentidad->nit_t75,0,9);
      $arr_nuevo["factnum_t92"]=$datform->factnum;
      $arr_nuevo["factfecha_t92"]=$datform->factfec;
      $arr_nuevo["finicio_t92"]=$datform->fechad;
      $arr_nuevo["ffinal_t92"]=$datform->fechah;
      $arr_nuevo["admincod_t92"]=$entadmincod;
      $arr_nuevo["admin_t92"]=$entadmin;
      $arr_nuevo["remision_t92"]=$numrem;
      $arr_nuevo["usrmod_t92"]=$this->Modulo->usr->idusr;
      $arr_nuevo["fmod_t92"]=$this->Modulo->ahora();
      $this->db->insert("ps_rips_t92",$arr_nuevo);
      
      $arr_actfacts["radicado_t96"]=$numrem;
      $this->db->where_in("idcm_cuentas_t96",$arr_idcta);
      $this->db->update("cm_cuentas_t96",$arr_actfacts);
      return $numrem;
    exit();
  }
  
  function listar($buscado=""){
    $this->db->from("ps_rips_t92");
    if(!empty($buscado)){
      $this->db->like("remision_t92",$buscado);
      $this->db->or_like("prestador_t92",$buscado);
    }
    $this->db->order_by("remision_t92",'desc');
    $query = $this->db->get();
    return $query->result();
  }
  
  function obtener($remision){
    $this->db->from("ps_rips_t92");
    $this->db->where("remision_t92",$remision);
    $query = $this->db->get();
    $rips =  $query->row();
    $this->db->from("cm_cuentas_t96");
    $this->db->join("param_terceros_t16","tercid_t96=ident_t16","left");
    $this->db->join("cm_cuentaseries_t97","idserie_t96=idcm_cuentaseries_t97","left");
    $this->db->where("radicado_t96",$remision);
    $query = $this->db->get();
    $rips->detalle =  $query->result();
    return $rips;
  }
  
} 
?>