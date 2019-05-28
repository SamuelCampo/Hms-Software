<?
class Paciente extends CI_Model {
  
  var $arr_estados;
  var $arr_tiposident;
  var $arr_estadocivil;
  var $arr_generos;
  var $arr_rh;
  var $arr_admin;
  var $arr_convenio;
  var $arr_grupoetnico;
  var $arr_grupoespec;
  var $arr_discapac;

  function __construct(){
    parent::__construct();
    $this->arr_grupoespec = array(
      (object)array("grupo"=>"NO APLICA"),
      (object)array("grupo"=>"DIABETEA MELLITUS INSULINODEPENDIENTE"),
      (object)array("grupo"=>"DIABETES MELLITUS NO INSULINO DEPENDIENTE"),
      (object)array("grupo"=>"DISLIPIDEMIAS"),
      (object)array("grupo"=>"ENDOCRINO"),
      (object)array("grupo"=>"HIPERTENSION ARTERIAL"),
      (object)array("grupo"=>"HIPERTENCION + DIABETES"),
      (object)array("grupo"=>"HIPOTIROIDISMO"),
      (object)array("grupo"=>"INSUFICIENCIA RENAL AGUDA"),
      (object)array("grupo"=>"INSUFICIENCIA RENAL CRONICA"),
      (object)array("grupo"=>"OBESIDAD"),
      (object)array("grupo"=>"OSTEOPOROSICO"),
      (object)array("grupo"=>"TIROIDEO"),
      (object)array("grupo"=>"TRANSTORNO DE LA OBESIDAD"),
      
    );
    $this->arr_discapac = array(
      (object)array("disca"=>"NO APLICA"),
      (object)array("disca"=>"PERSONA CON DISCAPACIDAD"),
      (object)array("disca"=>"PERSONA CON DISCAPACIDAD AUDITIVA"),
      (object)array("disca"=>"PERSONA CON DISCAPACIDAD FÍSICA"),
      (object)array("disca"=>"PERSONA CON DISCAPACIDAD INTELECTUAL"),
      (object)array("disca"=>"PERSONA CON DISCAPACIDAD MENTAL")
    );
    $this->arr_rh = array(
      (object)array("rh"=>"O-","idrh"=>"O-"),
      (object)array("rh"=>"O+","idrh"=>"O+"),
      (object)array("rh"=>"A+","idrh"=>"A+"),
      (object)array("rh"=>"A-","idrh"=>"A-"),
      (object)array("rh"=>"B+","idrh"=>"B+"),
      (object)array("rh"=>"B-","idrh"=>"B-"),
      (object)array("rh"=>"AB+","idrh"=>"AB+"),
      (object)array("rh"=>"AB-","idrh"=>"AB-")
    );
    $this->arr_estados= array(
      (object)array("estado"=>"PROGRAMADO"),
      (object)array("estado"=>"ADMITIDO"),
      (object)array("estado"=>"ATENCIÓN MÉDICA"),
      (object)array("estado"=>"CIERRE ENFERMERÍA"),
      (object)array("estado"=>"CERRADA"),
      (object)array("estado"=>"DE ALTA"),
      (object)array("estado"=>"REMITIDO"),
      (object)array("estado"=>"CANCELADO"),
      (object)array("estado"=>"CONFIRMADO"),
      (object)array("estado"=>"AUDITADO"),
      (object)array("estado"=>"NO ASISTIE"),
      (object)array("estado"=>"FALLECIDO"),
      (object)array("estado"=>"BLOQUEADO"),
      (object)array("estado"=>"PRELIQUIDADO"),
      (object)array("estado"=>"FACTURADO")
    );
    $this->arr_tiposident = array(
      (object)array("tipo"=>"CÉDULA DE CIUDADANÍA","idtipo"=>"CC"),
      (object)array("tipo"=>"CÉDULA DE EXTRANJERÍA","idtipo"=>"CE"),
      (object)array("tipo"=>"PASAPORTE","idtipo"=>"PA"),
      (object)array("tipo"=>"REGISTRO CIVIL","idtipo"=>"RC"),
      (object)array("tipo"=>"TARJETA DE IDENTIDAD","idtipo"=>"TI"),
      (object)array("tipo"=>"ADULTO SIN IDENTIFICACIÓN","idtipo"=>"AS"),
      (object)array("tipo"=>"MENOR SIN IDENTIFICACIÓN","idtipo"=>"MS")
    );
    $this->arr_generos = array(
      (object)array("genero"=>"MASCULINO","idgenero"=>"MASCULINO"),
      (object)array("genero"=>"FEMENINO","idgenero"=>"FEMENINO")
    );
    $this->arr_estadocivil = array(
      (object)array("estadocivil"=>"SOLTERO(A)","idestadocivil"=>"SOLTERO(A)"),
      (object)array("estadocivil"=>"VIUDO(A) ","idestadocivil"=>"VIUDO(A)"),
      (object)array("estadocivil"=>"UNIÓN LIBRE","idestadocivil"=>"UNIÓN LIBRE"),
      (object)array("estadocivil"=>"CASADO(A)","idestadocivil"=>"CASADO(A)")
    );
    $this->arr_nivel = array(
      (object)array("nivel"=>"1","idnivel"=>"1"),
      (object)array("nivel"=>"2","idnivel"=>"2"),
      (object)array("nivel"=>"3","idnivel"=>"3")
    );
  }
  	public function autorizacion()
  	{
  		$this->db->where('autorizacion', $this->input->post('autorizacion'));
  		$query = $this->db->get('cm_cuentas_t96')->result();
  		if (count($query) > 0) {
  			return $query;
  		}
  	}

    // Funcion para eleiminar evoluciones
    public function eliminarEvolucion($id)
    {
      $this->db->where('idhist_evolucion_t68',$id);
      $this->db->delete('ps_hist_evolucion_t68');
    }

    function Guardartercero(){
    var_dump($this->input->post());
    $datos = (object)$this->input->post();
    $data = array(
      'administradora_t3' => $datos->nombre,
      'administradoracod_t3' => $datos->codigo
    );
    $this->db->where('identificacion_t3',$datos->identificacion)->update('ps_paciente_t3', $data);
  }

  function verCamas()
  {
    $this->db->from('ps_camas_t2000,ps_historia_t4');
    $this->db->where('historia_t200 = idps_historia_t4');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0) {
      return $arr_datos;
    }
  }
  
  function ocupaciones($id=""){
    if(!empty($id)){
      $this->db->where("codigo_t103",$id);
    }
    $this->db->from("param_ocupac_t103");
    $query = $this->db->get('');
    if(!empty($id)){
      return $query->row();
    }
    return $query->result();
  }
    function eliminarOrdenes($id_historia,$orden)
  {
    $data = array('orden_t67' => $orden,
                  'idhistoria_t67' => $id_historia
                );
    return $this->db->delete('ps_hist_ordenes_t67',$data);
  }

    //Funcion para mostrar las ultimas citas

  function ultimasCitas(){
    $arr_agenda = (object)$this->input->post();
    //var_dump($arr_agenda);
    $this->db->where('identificacion_t12', $arr_agenda->documento);
    $this->db->where('numero_identificacion_t12', $arr_agenda->medico);
    $this->db->where('idps_especialidades_t12', $arr_agenda->especialidad);
    $this->db->where('fecha_programacion_t12 <= "'.$arr_agenda->fechas.'"');
    $this->db->order_by('fecha_programacion_t12', 'desc');
    $this->db->limit(3);
    $query = $this->db->get('ps_agenda_t12');
    return $query->result();
  }

  function ultimasadmisiones(){
    //var_dump($arr_agenda);
    $this->db->where('identificacion_t12', $this->uri->segment(5));
    $this->db->where('fecha_programacion_t12 <= "'.date('Y-m-d').'"');
    $this->db->order_by('fecha_programacion_t12', 'desc');
    $this->db->limit(3);
    $query = $this->db->get('ps_agenda_t12');
    return $query->result();
  }
  
  function tipopoblacesp($id=""){
    if(!empty($id)){
      $this->db->where("codigo_t102",$id);
    }
    $this->db->from("param_poblacespec_t102");
    $query = $this->db->get('');
    if(!empty($id)){
      return $query->row();
    }
    return $query->result();
  }
  
  function cuotamodcopago($condicion){
    $this->db->from("ps_def_copagos_t69");
    if(!empty($condicion->tipoaf)){
      $this->db->where("tipoafiliacion_t69",$condicion->tipoaf);
    }
    if(!empty($condicion->nivel)){
      $this->db->where("nivel_t69",$condicion->nivel);
    }
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
    return false;
  }
  
  function censo(){
    /*
    $this->db->select("*",true);
    $this->db->from("ps_paciente_t3");
    $this->db->join("ps_historia_t4","identificacion_t3 = paciente_t4","inner");
    $this->db->where("estado_t4 <>","CERRADA");
    $this->db->order_by("ubicacion_t4");
    $this->db->order_by(" (triage_t4,9) ");
    $this->db->order_by("fingreso_t4");
     * 
     */
    //$query = $this->db->get();
    $query = $this->db->query("SELECT * FROM ps_paciente_t3 inner join ps_historia_t4 on identificacion_t3 = paciente_t4 where estado_t4 <>'CERRADA' order by ubicacion_t4 ASC, IFNULL(triage_t4,9) ASC, fingreso_t4 ASC");
    
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      foreach($arr_datos as $reg){
        if($reg->ubicacion_t4=="URGENCIAS"){
          $censo->urg[] = $reg;
        }
        if(strpos($reg->ubicacion_t4,"OBSERVACIÓN")!==false){
          $censo->obs[] = $reg;
        }
        if(strpos($reg->ubicacion_t4,"HOSPITALIZACIÓN")!==false){
          $censo->hos[] = $reg;
        }
        if($reg->ubicacion_t4=="SALA DE CIRUGIA" || $reg->ubicacion_t4=="SALA DE PROCEDIMIENTOS"){
          $censo->sal[] = $reg;
        }
        if(strpos($reg->ubicacion_t4,"UCI")!==false){
          $censo->uci[] = $reg;
        }
        if(strpos($reg->ubicacion_t4,"CONSULTA EXTERNA")!==false){
          $censo->conexterna[] = $reg;
        }
        if (strpos($reg->ubicacion_t4,"UNIDAD CUIDADOS INTENSIVOS")!==false) {
          $censo->uci[] = $reg;
        }
        if (strpos($reg->ubicacion_t4,"FACTURACION Y GLOSAS")!==false) {
          $censo->fac[] = $reg;
        }
        /*
        switch ($reg->ubicacion_t4){
          case "URGENCIAS":
            $censo->urg[] = $reg;
            break;
          case strpos($reg->ubicacion_t4,"OBSERVACIÓN")!==false:
            $censo->obs[] = $reg;
            break;
          case strpos($reg->ubicacion_t4,"HOSPITALIZACIÓN")!==false:
            $censo->hos[] = $reg;
            break;
          case "SALA DE CIRUGIA":
            $censo->sal[] = $reg;
            break;
          case strpos($reg->ubicacion_t4,"UNIDAD CUIDADOS INTENSIVOS")!==false:
            $censo->uci[] = $reg;
            break;
        }*/
        //var_dump($reg);
        //var_dump($censo);
        //exit;
      }
      //var_dump($censo);
      //exit;
      return $censo;
    }
    return false;
  }
  
 /*
Autor: Ing Mauricio Garibello R
Fecha: 10/12/2017
Nota: Se optimiza consulta de pacientes quitando en el where el id de la tabla
*/


function listar($buscado,$id=false){
    $resul = false;
    $this->db->from("ps_paciente_t3 u");
    if($id==true){
      $this->db->where("u.identificacion_t3",$buscado);
    }elseif(!empty($buscado)){
      $this->db->like('u.identificacion_t3',$buscado);
      $this->db->or_like('u.nomcomp_t3',$buscado);
    }
    $this->db->order_by("nomcomp_t3",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      //var_dump($query); exit;
      if($id==true){
        $resul =  $query->row();
      }else{
        $resul = $query->result();
      }
    }
    return $resul;
  }


  
  function obtener($id){
    $paciente = false;
    $this->db->from("ps_paciente_t3");
    $this->db->join("ps_historia_t4","identificacion_t3=paciente_t4","LEFT");
    $this->db->where("identificacion_t3",$id);
    $this->db->order_by("idps_historia_t4","desc");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $paciente = $query->row();
      if(strtotime($paciente->fnacim_t3)!=false){
        $años = (time()-strtotime($paciente->fnacim_t3))/31536000;
        $paciente->edad["a"] = intval($años);
        $meses = ($años-$paciente->edad["a"])*12;
        $paciente->edad["m"] = intval($meses);
        //$dias = (time()-strtotime((date("Y")-1)."-".date("m",strtotime($paciente->fnacim_t3))."-".date("d",strtotime($paciente->fnacim_t3))))/86400;
        $dias = ($meses-$paciente->edad["m"])*30;
        $paciente->edad["d"] = intval($dias);
        if($paciente->edad["a"]>2){
          $paciente->edad["desc"]=$paciente->edad["a"]." años ".$paciente->edad["m"]." meses";
        }elseif($paciente->edad["a"]>1){
          $paciente->edad["desc"]=$paciente->edad["a"]." años ".$paciente->edad["m"]." meses ".$paciente->edad["d"]." días";
        }else{
          $paciente->edad["desc"]=$paciente->edad["m"]." meses ".$paciente->edad["d"]." días";
        }
      }
    }
    /*
    if($this->Modulo->usr->idusr=='jebuitrago'){
      var_dump($meses);
      var_dump($paciente->edad);
      exit;
    }
    */
    return $paciente;
  }
  
  function autorizacion_registrar($historia, $id="",$datautorizacion=""){
    if(empty($datautorizacion)){
      $datautorizacion = (object)$this->input->post();
    }
    //var_dump($datpaciente);
    //var_dump($datautorizacion); exit;
    $arr_nuevo["idpaciente_t71"]=$historia->identificacion_t3;
    $arr_nuevo["idhistoria_t71"]=$historia->idps_historia_t4;
    $arr_nuevo["numero_t71"]=$datautorizacion->numero;
    $arr_nuevo["cantidad_t71"]=$datautorizacion->cantidad;
    $arr_nuevo["valor_t71"]=$datautorizacion->valor;
    $arr_nuevo["fecha_t71"]=$datautorizacion->fecha;
    $arr_nuevo["servicio_t71"]=$datautorizacion->servicio;
    $arr_nuevo["usrmod_t71"]=$this->Modulo->usr->idusr;
    $arr_nuevo["fmod_t71"]=$this->Modulo->ahora();
    if(empty($id)){
      $this->db->insert("ps_autorizaciones_t71",$arr_nuevo);
    }else{
      $this->db->where("idps_autorizaciones_t71",$id);
      $this->db->update("ps_autorizaciones_t71",$arr_nuevo);
    }
    return true;
  }
  
  function autorizacion_listar($idhistoria){
    $resul = false;
    $this->db->from("ps_autorizaciones_t71 u");
    if($id==true){
      $this->db->where("u.idhistoria_t71",$buscado);
    }
    $this->db->order_by("fecha_t71",'desc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $resul = $query->result();
    }
    return $resul;
  }
     
  function registrar($id="",$infopaciente=""){
    if(empty($infopaciente)){
      $infopaciente=(object)$this->input->post();
    }
    $infoactualpac = $this->obtener($infopaciente->identificacion);
    $admin = $this->Constante->administradoras_obtener($infopaciente->administradoracod);
     $arr_nuevo["identificacion_t3"]=$infopaciente->identificacion;
     if(is_null($infopaciente->identiftipo)==false)$arr_nuevo["identiftipo_t3"]=$infopaciente->identiftipo;
     if(is_null($infopaciente->apellido1)==false)$arr_nuevo["apellido1_t3"]=$infopaciente->apellido1;
     if(is_null($infopaciente->apellido2)==false)$arr_nuevo["apellido2_t3"]=$infopaciente->apellido2;
     if(is_null($infopaciente->nombre1)==false)$arr_nuevo["nombre1_t3"]=$infopaciente->nombre1;
     if(is_null($infopaciente->nombre2)==false)$arr_nuevo["nombre2_t3"]=$infopaciente->nombre2;
     $nomcomp = str_replace("  "," ",$arr_nuevo["apellido1_t3"]." ".$arr_nuevo["apellido2_t3"]." ".$arr_nuevo["nombre1_t3"]." ".$arr_nuevo["nombre2_t3"]);
     if(!empty($nomcomp))$arr_nuevo["nomcomp_t3"]=$nomcomp;
     if(is_null($infopaciente->genero)==false)$arr_nuevo["genero_t3"]=$infopaciente->genero;
     if(is_null($infopaciente->fnacim)==false)$arr_nuevo["fnacim_t3"]=$infopaciente->fnacim["ano"]."-".$infopaciente->fnacim["mes"]."-".$infopaciente->fnacim["dia"];
     if(is_null($infopaciente->estadocivil)==false)$arr_nuevo["estadocivil_t3"]=$infopaciente->estadocivil;
     if(is_null($infopaciente->tipoblacesp)==false){
       $ogrupobl = $this->tipopoblacesp($infopaciente->tipoblacesp);
       $arr_nuevo["tipoblacesp_t3"]=$ogrupobl->tipoblac_t102;
       $arr_nuevo["tipoblacespcod_t3"]=$ogrupobl->codigo_t102;
     }
     if($this->input->post('direccion') != ""){
       $arr_nuevo["direccion_t3"]=$this->input->post('direccion');
     }
     if(is_null($infopaciente->zonares)==false)$arr_nuevo["zonares_t3"]=$infopaciente->zonares;
     if(is_null($infopaciente->telacom)==false)$arr_nuevo["telefono_t3"]=$infopaciente->telacom;
     if(is_null($infopaciente->correo)==false)$arr_nuevo["correo_t3"]=$infopaciente->correo;
     if(is_null($infopaciente->municipio)==false)$arr_nuevo["municipio_t3"]=$infopaciente->municipio;
     if(is_null($infopaciente->municipiocod)==false)$arr_nuevo["municipiocod_t3"]=$infopaciente->municipiocod;
     if(is_null($infopaciente->trabajo)==false)$arr_nuevo["trabajo_t3"]=$infopaciente->trabajo;
     if(is_null($infopaciente->ocupacion)==false)$arr_nuevo["ocupacion_t3"]=$infopaciente->ocupacion;
     if(is_null($infopaciente->ocupacioncod)==false)$arr_nuevo["ocupacioncod_t3"]=$infopaciente->ocupacioncod;
     if(is_null($infopaciente->emerg1)==false)$arr_nuevo["emerg1_t3"]=$infopaciente->emerg1;
     if(is_null($infopaciente->emerg1tel)==false)$arr_nuevo["emerg1tel_t3"]=$infopaciente->emerg1tel;
     if(is_null($infopaciente->emerg2)==false)$arr_nuevo["emerg2_t3"]=$infopaciente->emerg2;
     if(is_null($infopaciente->emerg2tel)==false)$arr_nuevo["emerg2tel_t3"]=$infopaciente->emerg2tel;
     if(is_null($infopaciente->rh)==false)$arr_nuevo["rh_t3"]=$infopaciente->rh;
     if(is_null($infopaciente->nombre_t70)==false)$arr_nuevo["administradora_t3"]=$admin->nombre_t70;
     if(is_null($infopaciente->administradoracod)==false){
       $arr_nuevo["administradoracod_t3"]=$infopaciente->administradoracod;
       $administradora = $this->Constante->administradoras_obtiene($infopaciente->administradoracod);
       $arr_nuevo["administradora_t3"]=$administradora->desc_t16;
     }
     if(is_null($infopaciente->niveduccod)==false){
       $niveduc = $this->Constante->niveduc($infopaciente->niveduccod);
       $arr_nuevo["niveduccod_t3"]=$niveduc->codniveduc_t104;
       $arr_nuevo["niveduc_t3"]=$niveduc->niveduc_t104;
     }
     if(is_null($infopaciente->grupoetcod)==false){
       $getnic = $this->Constante->grupoetnic($infopaciente->grupoetcod);
       $arr_nuevo["grupoetcod_t3"]=$getnic->codgrupoetnic_t105;
       $arr_nuevo["grupoet_t3"]=$getnic->grupoetnic_t105;
     }
     if(is_null($infopaciente->tipoaseg)==false)$arr_nuevo["tipoadmin_t3"]=$infopaciente->tipoaseg;
     if(is_null($infopaciente->tipoafiliacion)==false)$arr_nuevo["tipoaf_t3"]=$infopaciente->tipoafiliacion;
     if(is_null($infopaciente->nivel)==false)$arr_nuevo["nivel_t3"]=$infopaciente->nivel;
     if(is_null($infopaciente->copago)==false)$arr_nuevo["copago_t3"]=$infopaciente->copago;
     if(is_null($infopaciente->cuotamod)==false)$arr_nuevo["cuotamoderadora_t3"]=$infopaciente->cuotamod;
     $arr_nuevo["estado_t3"]=$infopaciente->estado;
     $arr_nuevo["sede_t3"]=$infopaciente->sede;
     $arr_nuevo["usrmod_t3"]=$this->Modulo->usr->idusr;
     $arr_nuevo["fmod_t3"]=$this->Modulo->ahora();
    if(is_null($infoactualpac->identificacion_t3)){
      $this->db->insert("ps_paciente_t3",$arr_nuevo);
    }else{
      $this->db->where("identificacion_t3",$infopaciente->identificacion);
      $this->db->update("ps_paciente_t3",$arr_nuevo);
    }
    return $infopaciente->identificacion;
  }
  
}
?>