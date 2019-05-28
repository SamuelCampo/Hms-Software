<?
class Informe extends CI_Model {
  
  function __construct(){
    parent::__construct();
  }

    function planificacion_familiar()
  {
    $datform = (object)$this->input->post();
    $this->db->select('*');
    $this->db->where('identificacion_t3 = paciente_t4');
    $this->db->where("fingreso_t4 >=",$datform->fechad."");
    $this->db->where("fingreso_t4 <=",$datform->fechah." 23:59");
    $this->db->where('genero_t3 != "MASCULINO "');
    $this->db->where('estado_t4 != "BLOQUEADO"');
    $this->db->where('estado_t4 != "PROGRAMADO"');
    $this->db->where('idhistoria_t64 = idps_historia_t4');
    $query = $this->db->get('ps_paciente_t3,ps_historia_t4,ps_hist_consulta_t64');
    return $query->result();

  }

   function Ocupacional(){
    $datform = (object)$this->input->post();
   //para llamr las tablas se utiliza la siguiente funcion
   $this->db->from('ps_hist_consulta_so_t99,ps_paciente_t3,ps_historia_t4,ps_hist_consulta_t64');
   //para relacionar las tablas entre si buscamos un campo en comun
   if (!empty($datform->administradoracod)) {
     $this->db->where('emact_emplea_t99',$datform->administradoracod);
   }
   $this->db->where('identificacion_t3 = idpaciente_t99');
   $this->db->where('idhistoria_t99 = idhistoria_t64');
   $this->db->where('idps_historia_t4 = idhistoria_t64');
   //para ejecutar la consulta debemos indicar la funcion de get
  $this->db->where("fingreso_t4 >=",$datform->fechad."");
    $this->db->where("fingreso_t4 <=",$datform->fechah." 23:59");
   $consulta = $this->db->get();
   //retomamos la variable a nuestra funcion de controlador ocupacional
   return $consulta->result();
 }

 function json_Ocupacional(){
    $datform = (object)$this->input->post();
   //para llamr las tablas se utiliza la siguiente funcion
  if (!empty($datform->ocupacional)) {
    $this->db->select($datform->ocupacional[0]);
  }
   $this->db->from('ps_hist_consulta_so_t99,ps_paciente_t3,ps_historia_t4,ps_hist_consulta_t64');
   //para relacionar las tablas entre si buscamos un campo en comun
   if (!empty($datform->administradoracod)) {
     $this->db->where('emact_emplea_t99',$datform->administradoracod);
   }
   $this->db->where('identificacion_t3 = idpaciente_t99');
   $this->db->where('idhistoria_t99 = idhistoria_t64');
   $this->db->where('idps_historia_t4 = idhistoria_t64');
   //para ejecutar la consulta debemos indicar la funcion de get
  $this->db->where("fingreso_t4 >=",$datform->fechad."");
    $this->db->where("fingreso_t4 <=",$datform->fechah." 23:59");
   $consulta = $this->db->get();
   //retomamos la variable a nuestra funcion de controlador ocupacional
   return $consulta->result();
 }





   function generalHospi($retarray=true,$expexcel=true){
    $datform = (object)$this->input->post();
    /*$this->db->select("* ",FALSE);
    $this->db->from("ps_hist_consulta_t64,ps_historia_t4,ps_paciente_t3");
    $this->db->where(" identificacion_t12 = paciente_t4 and idhistoria_t64 = idps_historia_t4");
    $this->db->where("fingreso_t4 >=".$datform->fechad);
    $this->db->where("fingreso_t4 <=".$datform->fechah." 23:59");
    $this->db->where(" identificacion_t12 = idpaciente_t64 and historia_t12 = idhistoria_t64");
    //$this->db->where("grupoprod_t12 IN ('CONS','ICONS')");
    //$this->db->where("(ref1_t12 is null or ref1_t12<>'')");
    $this->db->order_by("especialidades_t12",'asc');
    $this->db->order_by("nomcompp_t12", 'asc'); */
    
    //$this->db->or_where("identificacion_t12 = id_paciente_odon and historia_t12 = idhistoria_odo");///HISTORIAL
    //$this->db->join("ps_hist_ordenes_t67"," identificacion_t12 = idpaciente_t67 and historia_t12 = idhistoria_t67","inner"); ///ORDENES MEDICAS
    //$this->db->where(" identificacion_t12 = identificacion_t3","inner"); ///DATOS DEL PACIENTE
    //$this->db->order_by("fingreso_t4",'asc');
  //$this->db->where('historia_t12 = idhistoria_t64');
  $this->db->where('paciente_t4 = identificacion_t3');
  $this->db->where('idps_historia_t4 = idhistoria_t64');
  $this->db->where('identificacion_t3 = idpaciente_t64');
  $this->db->where('ubicacion_t4 != "CONSULTA EXTERNA"');
  $this->db->where('fingreso_t4 >= "'.$datform->fechad.'"');
  $this->db->where('fingreso_t4 <= "'.$datform->fechah.' 23:59"');
  $query = $this->db->get('ps_historia_t4,ps_paciente_t3,ps_hist_consulta_t64');
  return $query->result();
    /*var_dump($this->db->last_query());
    exit();*/
   //DATE_FORMAT(fingreso_t4,'%Y/%m/%d %T') fecha , identificacion_t12 identificacion, nomcomp_t12 paciente, numero_identificacion_t12 medident, nomcompp_t12 med, especialidades_t12 medespec, estado_t4 estado, codproc_t12 codigo, procedimiento_t12 proc , procvalor_t12 valor,
    //return  $query->result();
    /*$datform = (object)$this->input->post();

    $sql = 'SELECT * FROM ps_hist_consulta_t64,ps_paciente_t3,ps_agenda_t12,ps_historia_t4 WHERE idpaciente_t64 = identificacion_t3 and identificacion_t12 = identificacion_t3 and identificacion_t12 = paciente_t4 and historia_t12 = idps_historia_t4  and fingreso_t4 >= "'.$datform->fechad.'" and fingreso_t4 <= "'.$datform->fechah.' 23:59" ORDER BY fingreso_t4 asc';
    return $this->db->query($sql)->result();*/
    

  }

  function porconsulta($retarray=true,$expexcel=true){
    $datform = (object)$this->input->post();
    $this->db->select("DATE_FORMAT(fingreso_t4,'%Y/%m/%d %T') fecha , identificacion_t12 identificacion, nomcomp_t12 paciente, numero_identificacion_t12 medident, nomcompp_t12 med, especialidades_t12 medespec, estado_t4 estado, servicio_t12, codproc_t12 codigo, procedimiento_t12 proc , procvalor_t12 valor,fecha_atencion,administradora_t3 ",FALSE);
    $this->db->from("ps_agenda_t12,ps_paciente_t3");
    $this->db->join("ps_historia_t4"," identificacion_t12 = paciente_t4 and historia_t12 = idps_historia_t4","inner");
    $this->db->where("fingreso_t4 >=",$datform->fechad);
    $this->db->where("fingreso_t4 <=",$datform->fechah." 23:59");
    $this->db->where("(ref1_t12 is null or ref1_t12<>'')");
    $this->db->where('identificacion_t12 = identificacion_t3');
    $this->db->order_by("especialidades_t12",'asc');
    $this->db->order_by("nomcompp_t12", 'asc'); 
    $this->db->order_by("fingreso_t4",'asc');
    $query = $this->db->get();
    /*var_dump($this->db->last_query());
    exit();*/
    if($retarray==true){
      $arr_datos = $query->result_array();
    }else{
      $arr_datos = $query->result();
    }
    if($expexcel==true){
      $this->load->model('Gestexcel');
      $arr_excel = array(
        "desc"=>"Lista de Precios",
        "tipo"=>"xls",
        "archivo"=>"Informe_Consultas.xlsx",
        "celdainidatos"=>'A2',
        "plantilla"=>FCPATH.'docs/Plantillas_Informes/Indicadores_Consulta.xlsx',
        "fmtoencab"=>array(
          "celdas"=>'A1:J1'
          )
        );
      $arr_consol = array(
        array("desc"=>"numconsmed","campo"=>"med","consol"=>'conteo'),
        array("desc"=>"valconsmed","campo"=>"med","consol"=>'suma',"camposuma"=>'valor'),
        array("desc"=>"numconsesp","campo"=>"medespec","consol"=>'conteo')
      );
      $datexcel = $this->Gestexcel->prepdatos($arr_datos,$arr_consol);
      $objPHPExcel = $this->Gestexcel->cargarplantilla(FCPATH.'docs/Plantillas_Informes/Indicadores_Consulta.xlsx');
      $this->Gestexcel->escribirdatos($objPHPExcel,0,"A2",$datexcel["datos"]);
      $this->Gestexcel->escribirdatos($objPHPExcel,1,"B4",$datexcel["datoscons"]["numconsmed"]["tabla"]);
      $this->Gestexcel->escribirdatos($objPHPExcel,2,"B4",$datexcel["datoscons"]["numconsesp"]["tabla"]);
      
      $arr_defgraf=(object)array(
        "datos"=>$datexcel["datoscons"]["numconsmed"]["tabla"],
        "hoja"=>'MEDICO',
        "idhoja"=>1,
        'gtitulo'=>'CONSULTAS POR MEDICO',
        "etiqcol"=>'$C$3',
        "etiqfil"=>'$B$4:$B$'.(3+count($datexcel["datoscons"]["numconsmed"]["tabla"])),
        "numfil"=>count($datexcel["datoscons"]["numconsmed"]["tabla"]),
        "datfil"=>'$C$4:$C$'.(3+count($datexcel["datoscons"]["numconsmed"]["tabla"])),
        "gnom"=>'grconsme',
        "posizq"=>'E3',
        "posder"=>'P25');
      $this->Gestexcel->graftorta3d($objPHPExcel,$arr_defgraf);
      
      $arr_defgraf=(object)array(
        "datos"=>$datexcel["datoscons"]["numconsesp"]["tabla"],
        "hoja"=>'ESPECIALIDAD',
        "idhoja"=>2,
        'gtitulo'=>'CONSULTAS POR ESPECIALIDAD',
        "etiqcol"=>'$C$3',
        "etiqfil"=>'$B$4:$B$'.(3+count($datexcel["datoscons"]["numconsesp"]["tabla"])),
        "numfil"=>count($datexcel["datoscons"]["numconsesp"]["tabla"]),
        "datfil"=>'$C$4:$C$'.(3+count($datexcel["datoscons"]["numconsesp"]["tabla"])),
        "gnom"=>'grconses',
        "posizq"=>'E3',
        "posder"=>'P25');
      $this->Gestexcel->graftorta3d($objPHPExcel,$arr_defgraf);
      $this->Gestexcel->exportar($objPHPExcel,'Informe_Consultas_'.HMSConfEntidad.'.xlsx');
    }
    
   


  }

  function Cyd(){
    $datform = (object)$this->input->post();
    
    $this->db->select("*",FALSE);
    $this->db->from("ps_paciente_t3");
    $this->db->where("fmod_t3 >=",$datform->fechad);
    $this->db->where("fmod_t3 <=",$datform->fechah." 23:59");
    $query = $this->db->get();
    return $query->result();


  }

  function consultaAgenda(){
    $datform = (object)$this->input->post();
    $this->db->select('*');
    $this->db->where('identificacion_t12 = identificacion_t3');
    $this->db->where("fecha_programacion_t12 >=",$datform->fechad."");
    $this->db->where("fecha_programacion_t12 <=",$datform->fechah." 23:59");
    $this->db->where('historia_t12 = idps_historia_t4');
    $this->db->where('estado_t12 != "BLOQUEADO"');
    $query = $this->db->get('ps_agenda_t12,ps_paciente_t3,ps_historia_t4');
    return $query->result();
  }

function general($retarray=true,$expexcel=true){
    $datform = (object)$this->input->post();
    /*$this->db->select("* ",FALSE);
    $this->db->from("ps_hist_consulta_t64,ps_historia_t4,ps_paciente_t3");
    $this->db->where(" identificacion_t12 = paciente_t4 and idhistoria_t64 = idps_historia_t4");
    $this->db->where("fingreso_t4 >=".$datform->fechad);
    $this->db->where("fingreso_t4 <=".$datform->fechah." 23:59");
    $this->db->where(" identificacion_t12 = idpaciente_t64 and historia_t12 = idhistoria_t64");
    //$this->db->where("grupoprod_t12 IN ('CONS','ICONS')");
    //$this->db->where("(ref1_t12 is null or ref1_t12<>'')");
    $this->db->order_by("especialidades_t12",'asc');
    $this->db->order_by("nomcompp_t12", 'asc'); */
    
    //$this->db->or_where("identificacion_t12 = id_paciente_odon and historia_t12 = idhistoria_odo");///HISTORIAL
    //$this->db->join("ps_hist_ordenes_t67"," identificacion_t12 = idpaciente_t67 and historia_t12 = idhistoria_t67","inner"); ///ORDENES MEDICAS
    //$this->db->where(" identificacion_t12 = identificacion_t3","inner"); ///DATOS DEL PACIENTE
    //$this->db->order_by("fingreso_t4",'asc');
  //$this->db->where('historia_t12 = idhistoria_t64');
  $this->db->where('paciente_t4 = identificacion_t3');
  $this->db->where('idps_historia_t4 = idhistoria_t64');
  $this->db->where('identificacion_t3 = idpaciente_t64');
  $this->db->where('fingreso_t4 >= "'.$datform->fechad.'"');
  $this->db->where('fingreso_t4 <= "'.$datform->fechah.' 23:59"');
  //$this->db->where('historia_t12 = idps_historia_t4');
  $query = $this->db->get('ps_historia_t4,ps_paciente_t3,ps_hist_consulta_t64');
  return $query->result();
    /*var_dump($this->db->last_query());
    exit();*/
   //DATE_FORMAT(fingreso_t4,'%Y/%m/%d %T') fecha , identificacion_t12 identificacion, nomcomp_t12 paciente, numero_identificacion_t12 medident, nomcompp_t12 med, especialidades_t12 medespec, estado_t4 estado, codproc_t12 codigo, procedimiento_t12 proc , procvalor_t12 valor,
    //return  $query->result();
    /*$datform = (object)$this->input->post();

    $sql = 'SELECT * FROM ps_hist_consulta_t64,ps_paciente_t3,ps_agenda_t12,ps_historia_t4 WHERE idpaciente_t64 = identificacion_t3 and identificacion_t12 = identificacion_t3 and identificacion_t12 = paciente_t4 and historia_t12 = idps_historia_t4  and fingreso_t4 >= "'.$datform->fechad.'" and fingreso_t4 <= "'.$datform->fechah.' 23:59" ORDER BY fingreso_t4 asc';
    return $this->db->query($sql)->result();*/
    

  }



   function Informe_256($retarray=true,$expexcel=true){

    $datform = (object)$this->input->post();

    $this->db->select("",FALSE);
    $this->db->from("ps_agenda_t12,ps_paciente_t3");
    $this->db->join("ps_historia_t4"," identificacion_t12 = paciente_t4 and historia_t12 = idps_historia_t4","inner");
    $this->db->where('identificacion_t3 = ps_agenda_t12.identificacion_t12');
    $this->db->where("fingreso_t4 >=",$datform->fechad);
    $this->db->where("fingreso_t4 <=",$datform->fechah." 23:59");
    //$this->db->where("");
    $query = $this->db->get();

    if($retarray==true){
      $arr_datos = $query->result_array();
    }else{
      $arr_datos = $query->result();
    }
    if($expexcel==true){

      $this->load->model('Gestexcel');

      $arr_excel = array(
        "desc"=>"Lista de Datos",
        "tipo"=>"xls",
        "archivo"=>"informe_Consultas.xlsx",
        "celdainidatos"=>'A2',
        "plantilla"=>FCPATH.'docs/Plantillas_Informes/Indicadores_Consulta.xlsx', 
        "fmtoencab"=>array(
          "celdas"=>'A1:J1'
          ) 
        );

      $arr_consol = array(
        array("desc"=>"numconsmed", "campo"=>"terdesc", "consol"=>'conteo'),
        array("desc"=>"valconsmed", "campo"=>"terdesc","consol"=>'suma', "camposuma"=>'valor'),
        array("desc"=>"numconsesp", "campo"=>"tipo", "consol"=>'conteo')
      ); 

      $datexcel = $this->Gestexcel->prepdatos($arr_datos, $arr_consol); 
      /* <-- $arr_consol */
      $objPHPExcel  = $this->Gestexcel->cargarplantilla(FCPATH.'docs/Plantillas_Informes/Indicadores_Consulta_porfactura.xlsx'); 

     
      $this->Gestexcel->escribirdatos( $objPHPExcel ,0,"A2",$datexcel["datos"]);
      $this->Gestexcel->escribirdatos($objPHPExcel,1,"B4",$datexcel["datoscons"]["numconsmed"]["tabla"]);
      $this->Gestexcel->escribirdatos($objPHPExcel,2,"B4",$datexcel["datoscons"]["numconsesp"]["tabla"]);

      
      
      $arr_defgraf=(object)array(

        "datos"=>$dataexcel["datoscons"]["numconsmed"]["tabla"],
        "hoja"=>'TERDESC',
        "idhoja"=>1,
        'gtitulo'=>'CONSULTAS POR TERDESC',
        "etiqcol"=>'$C$3',
        "etiqfil"=>'$B$4:$B$'.(3+count($datexcel["datoscons"]["numconsmed"]["tabla"])),
        "numfil"=>count($datexcel["datoscons"]["numconsmed"]["tabla"]),
        "datfil"=>'$C$4:$C$'.(3+count($datexcel["datoscons"]["numconsmed"]["tabla"])),
        "gnom"=>'grconsme',
        "posizq"=>'E3',
        "posder"=>'P25');
        
      
      $this->Gestexcel->graftorta3d($objPHPExcel,$arr_defgraf);
      
      
      $arr_defgraf=(object)array(
        "datos"=>$datexcel["datoscons"]["numconsesp"]["tabla"],
        "hoja"=>'TIPO',
        "idhoja"=>2,
        'gtitulo'=>'CONSULTAS POR TIPO',
        "etiqcol"=>'$C$3',
        "etiqfil"=>'$B$4:$B$'.(3+count($datexcel["datoscons"]["numconsesp"]["tabla"])),
        "numfil"=>count($datexcel["datoscons"]["numconsesp"]["tabla"]),
        "datfil"=>'$C$4:$C$'.(3+count($datexcel["datoscons"]["numconsesp"]["tabla"])),
        "gnom"=>'grconses',
        "posizq"=>'E3',
        "posder"=>'P25'); 
      $this->Gestexcel->graftorta3d($objPHPExcel,$arr_defgraf);


      $this->Gestexcel->exportar($objPHPExcel, 'Informe_consultas_factura'.HMSConfEntidad.'.xlsx');
      
    } 
    
    
  }

function ginecologia_m($retarray=true,$expexcel=true){
      $datform = (object)$this->input->post();
      $this->db->select('idps_historia_t4,identificacion_t3,identiftipo_t3,apellido1_t3,apellido2_t3,nombre1_t3,nombre2_t3,nomcomp_t3,genero_t3,fnacim_t3
, zonares_t3,direccion_t3, telefono_t3, municipio_t3, administradoracod_t3,estado_t3, grupoespec_t3, ps_paciente_t3.administradora_t3, ps_historia_t4.fingreso_t4, ps_historia_t4.fsalida_t4, ps_historia_t4.motivoing_t4, ps_historia_t4.tipocta_t4, ps_historia_t4.estado_t4, ps_hist_consulta_gineco.menarca_gineco, ps_hist_consulta_gineco.inicvs_gineco, ps_hist_consulta_gineco.fum_gineco, ps_hist_consulta_gineco.ets_gineco, ps_hist_consulta_gineco.sus_gineco, ps_hist_consulta_gineco.result_gineco, ps_hist_consulta_gineco.anti_gineco, ps_hist_consulta_gineco.tipooption_gienco, ps_hist_consulta_gineco.inicio_gineco, ps_hist_consulta_gineco.fu_citologia_gineco, ps_hist_consulta_gineco.fecha_su_gineco, ps_hist_consulta_gineco.concep_gineco, ps_hist_consulta_gineco.cuello_u_gineco, ps_hist_consulta_gineco.gestas_gineco, ps_hist_consulta_gineco.partos_gineco, ps_hist_consulta_gineco.vivos_gineco, ps_hist_consulta_gineco.abortos_gineco, ps_hist_consulta_gineco.mortinatos_gineco, ps_hist_consulta_gineco.especiales_gineco, ps_hist_consulta_gineco.tipoem_gineco, ps_hist_consulta_gineco.hta_gineco, ps_hist_consulta_gineco.infecc_gineco, ps_hist_consulta_gineco.iso_gineco, ps_hist_consulta_gineco.descrip_gineco, ps_hist_consulta_gineco.aten_pre_gineco, ps_hist_consulta_gineco.n_consult_gineco, ps_hist_consulta_gineco.ex_com_gineco, ps_hist_consulta_gineco.alte_gineco, ps_hist_consulta_gineco.vacuna_gineco, ps_hist_consulta_gineco.influe_gineco, ps_hist_consulta_gineco.hayb_gineco, ps_hist_consulta_gineco.f_ama_gineco, ps_hist_consulta_gineco.varicela_gineco, ps_hist_consulta_gineco.rabia_gineco, ps_hist_consulta_gineco.fpp_gineco, ps_hist_consulta_gineco.ultimo_parto_gineco, ps_hist_consulta_gineco.ultima_cesarea_gineco, ps_hist_consulta_gineco.malformaciones_gineco, ps_hist_consulta_gineco.prematuros_gineco, ps_hist_consulta_gineco.edadgest_gineco,ps_hist_consulta_gineco.num_cs_gineco,ps_hist_consulta_gineco.proc_cuello_gineco, ps_hist_consulta_gineco.descrip_proc_gineco, ps_hist_consulta_gineco.asp_cuello_gineco, ps_hist_consulta_gineco.des_asp_gineco, ps_hist_consulta_gineco.obser_gineco');
       $this->db->from('ps_paciente_t3');
       $this->db->join('ps_historia_t4', 'identificacion_t3 = paciente_t4', 'inner');
       $this->db->join('ps_hist_consulta_gineco','id_paciente_gineco = identificacion_t3', 'inner');
       $this->db->where('idps_historia_t4 = idhistoria_gineco');
       $this->db->where("fingreso_t4 >=",$datform->fechad);
       $this->db->where("fingreso_t4 <=",$datform->fechah." 23:59");
       $this->db->order_by("fingreso_t4",'asc');
       $query = $this->db->get();
    /*var_dump($this->db->last_query());
    exit();*/
    if($retarray==true){
      $arr_datos = $query->result_array();
    }else{
      $arr_datos = $query->result();
    }
    if($expexcel==true){
      $this->load->model('Gestexcel');
      $arr_excel = array(
        "desc"=>"Lista de Precios",
        "tipo"=>"xls",
        "archivo"=>"Informe_Consultas.xlsx",
        "celdainidatos"=>'A2',
        "plantilla"=>FCPATH.'docs/Plantillas_Informes/Indicadores_Consulta_ginecologia.xlsx',
        "fmtoencab"=>array(
          "celdas"=>'A1:J1'
          )
        );
      $arr_consol = array(
        array("desc"=>"numconsmed","campo"=>"med","consol"=>'conteo'),
        array("desc"=>"valconsmed","campo"=>"med","consol"=>'suma',"camposuma"=>'valor'),
        array("desc"=>"numconsesp","campo"=>"medespec","consol"=>'conteo')
      );
      $datexcel = $this->Gestexcel->prepdatos($arr_datos,$arr_consol);
      $objPHPExcel = $this->Gestexcel->cargarplantilla(FCPATH.'docs/Plantillas_Informes/Indicadores_Consulta_porginecologia.xlsx');
      $this->Gestexcel->escribirdatos($objPHPExcel,0,"A2",$datexcel["datos"]);
      $this->Gestexcel->escribirdatos($objPHPExcel,1,"B4",$datexcel["datoscons"]["numconsmed"]["tabla"]);
      $this->Gestexcel->escribirdatos($objPHPExcel,2,"B4",$datexcel["datoscons"]["numconsesp"]["tabla"]);
      
      $arr_defgraf=(object)array(
        "datos"=>$datexcel["datoscons"]["numconsmed"]["tabla"],
        "hoja"=>'MEDICO',
        "idhoja"=>1,
        'gtitulo'=>'CONSULTAS POR MEDICO',
        "etiqcol"=>'$C$3',
        "etiqfil"=>'$B$4:$B$'.(3+count($datexcel["datoscons"]["numconsmed"]["tabla"])),
        "numfil"=>count($datexcel["datoscons"]["numconsmed"]["tabla"]),
        "datfil"=>'$C$4:$C$'.(3+count($datexcel["datoscons"]["numconsmed"]["tabla"])),
        "gnom"=>'grconsme',
        "posizq"=>'E3',
        "posder"=>'P25');
      $this->Gestexcel->graftorta3d($objPHPExcel,$arr_defgraf);
      
      $arr_defgraf=(object)array(
        "datos"=>$datexcel["datoscons"]["numconsesp"]["tabla"],
        "hoja"=>'ESPECIALIDAD',
        "idhoja"=>2,
        'gtitulo'=>'CONSULTAS POR ESPECIALIDAD',
        "etiqcol"=>'$C$3',
        "etiqfil"=>'$B$4:$B$'.(3+count($datexcel["datoscons"]["numconsesp"]["tabla"])),
        "numfil"=>count($datexcel["datoscons"]["numconsesp"]["tabla"]),
        "datfil"=>'$C$4:$C$'.(3+count($datexcel["datoscons"]["numconsesp"]["tabla"])),
        "gnom"=>'grconses',
        "posizq"=>'E3',
        "posder"=>'P25');
      $this->Gestexcel->graftorta3d($objPHPExcel,$arr_defgraf);
      $this->Gestexcel->exportar($objPHPExcel,'Informe_Consultas_'.HMSConfEntidad.'.xlsx');
    }
  }

  function porfactura($retarray=true,$expexcel=true){

    $datform = (object)$this->input->post();

    $this->db->select("tercid_t96 as tercid , tercdesc_t96 as tercero , pacnom_t96 as pacnom,pacid_t96 as cedula, tipo_t96 as tipo, DATE_FORMAT(ffact_t96,'%Y/%m/%d %T') fecha , factnum_t96 as facturanum , valor_t67 as valor, radicado_t96 as radicado, copago_t96 as copago ,autorizacion as autorizacion",FALSE);
    $this->db->from("cm_cuentas_t96,ps_hist_ordenes_t67");
    $this->db->where("factnum_t96 = idfactura_t67");
    $this->db->where("ffact_t96 >=",$datform->fechad);
    $this->db->where("ffact_t96 <=",$datform->fechah." 23:59");
    $this->db->order_by("ffact_t96","ASC");
    $this->db->order_by("tipo", "ASC");
    $this->db->order_by("tercero", "ASC");
    $query = $this->db->get();

    if($retarray==true){
      $arr_datos = $query->result_array();
    }else{
      $arr_datos = $query->result();
    }
    if($expexcel==true){

      $this->load->model('Gestexcel');

      $arr_excel = array(
        "desc"=>"Lista de Datos",
        "tipo"=>"xls",
        "archivo"=>"informe_Consultas.xlsx",
        "celdainidatos"=>'A2',
        "plantilla"=>FCPATH.'docs/Plantillas_Informes/Indicadores_Consulta.xlsx', 
        "fmtoencab"=>array(
          "celdas"=>'A1:K1'
          ) 
        );

      $arr_consol = array(
        array("desc"=>"numconsmed", "campo"=>"terdesc", "consol"=>'conteo'),
        array("desc"=>"valconsmed", "campo"=>"terdesc","consol"=>'suma', "camposuma"=>'valor'),
        array("desc"=>"numconsesp", "campo"=>"tipo", "consol"=>'conteo')
      ); 

      $datexcel = $this->Gestexcel->prepdatos($arr_datos, $arr_consol); 
      /* <-- $arr_consol */
      $objPHPExcel  = $this->Gestexcel->cargarplantilla(FCPATH.'docs/Plantillas_Informes/Indicadores_Consulta_porfactura.xlsx'); 

     
      $this->Gestexcel->escribirdatos( $objPHPExcel ,0,"A2",$datexcel["datos"]);
      $this->Gestexcel->escribirdatos($objPHPExcel,1,"B4",$datexcel["datoscons"]["numconsmed"]["tabla"]);
      $this->Gestexcel->escribirdatos($objPHPExcel,2,"B4",$datexcel["datoscons"]["numconsesp"]["tabla"]);

      
      
      $arr_defgraf=(object)array(

        "datos"=>$dataexcel["datoscons"]["numconsmed"]["tabla"],
        "hoja"=>'TERDESC',
        "idhoja"=>1,
        'gtitulo'=>'CONSULTAS POR TERDESC',
        "etiqcol"=>'$C$3',
        "etiqfil"=>'$B$4:$B$'.(3+count($datexcel["datoscons"]["numconsmed"]["tabla"])),
        "numfil"=>count($datexcel["datoscons"]["numconsmed"]["tabla"]),
        "datfil"=>'$C$4:$C$'.(3+count($datexcel["datoscons"]["numconsmed"]["tabla"])),
        "gnom"=>'grconsme',
        "posizq"=>'E3',
        "posder"=>'P25');
        
      
      $this->Gestexcel->graftorta3d($objPHPExcel,$arr_defgraf);
      
      
      $arr_defgraf=(object)array(
        "datos"=>$datexcel["datoscons"]["numconsesp"]["tabla"],
        "hoja"=>'TIPO',
        "idhoja"=>2,
        'gtitulo'=>'CONSULTAS POR TIPO',
        "etiqcol"=>'$C$3',
        "etiqfil"=>'$B$4:$B$'.(3+count($datexcel["datoscons"]["numconsesp"]["tabla"])),
        "numfil"=>count($datexcel["datoscons"]["numconsesp"]["tabla"]),
        "datfil"=>'$C$4:$C$'.(3+count($datexcel["datoscons"]["numconsesp"]["tabla"])),
        "gnom"=>'grconses',
        "posizq"=>'E3',
        "posder"=>'P25'); 
      $this->Gestexcel->graftorta3d($objPHPExcel,$arr_defgraf);


      $this->Gestexcel->exportar($objPHPExcel, 'Informe_consultas_factura'.HMSConfEntidad.'.xlsx');
      
    } 
    
    
  }
} 
?>