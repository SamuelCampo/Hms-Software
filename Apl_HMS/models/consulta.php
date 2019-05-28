<?
class Consulta extends CI_Model {

  function __construct(){
    parent::__construct();
    
  }
 
  function obtener($id){
    $resul = false;
    $this->db->from("ps_historia_t4");
    $this->db->join("ps_historiadet_t5","idps_historia_t4 = historia_t5","left");
    $this->db->join("ps_paciente_t3","paciente_t4 = identificacion_t3","inner");
    $this->db->where("idps_historia_t4",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $historia = $query->row();
    }
    return $historia;
  }
  
  function listar($buscado){
    $this->db->from("ps_historia_t4");
    $this->db->join("ps_paciente_t3","paciente_t4 = identificacion_t3","inner");
    if(!empty($buscado)){
      $this->db->like('idps_historia_t4',$buscado);
      $this->db->or_like('ubicacion_t4',$buscado);
      $this->db->or_like('identificacion_t3',$buscado);
      $this->db->or_like('nomcomp_t3',$buscado);
    }
    $this->db->order_by("paciente_t4",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
    return false;
  }
 
  
  function regevento($evento,$historia=""){
    if(empty($historia)){
      $dathistoria->paciente = $evento->paciente;
      $dathistoria->fingreso = date("Y-m-d H:i");
      $dathistoria->ubicacion = $evento->ubicacion;
      $dathistoria->motivoing = $evento->motivoing;
      $dathistoria->viaing = $evento->viaing;
      $dathistoria->causaext = $evento->causaext;
      $dathistoria->obs = $evento->obs;
      $historia = $this->registrar($dathistoria);
    }
    $arr_evento["historia_t5"]=$historia;
    $arr_evento["fecha_t5"]=$this->Modulo->ahora();
    $arr_evento["evento_t5"]=$evento->evento;
    $arr_evento["detalevento_t5"]=$evento->detalevento;
    $arr_evento["usrmod_t5"]=$this->Modulo->usr->idusr;
    $arr_evento["fmod_t5"]=$this->Modulo->ahora();
    $this->db->insert("ps_historiadet_t5",$arr_evento);
    return $historia;
  }
  
  function registrar($id="",$datosconsulta=""){
    if(!empty($datosconsulta)){
      $datosconsulta = $this->input->post();
    }
    $arr_nuevo["idpaciente_t64"]=$datosconsulta->idpaciente;
    $arr_nuevo["idhistoria_t64"]=$datosconsulta->idhistoria;
    $arr_nuevo["estado_t64"]=$datosconsulta->estado;
    $arr_nuevo["motconsulta_t64"]=$datosconsulta->motconsulta;
    $arr_nuevo["enfermactual_t64"]=$datosconsulta->enfermactual;
    $arr_nuevo["altura_64"]=$datosconsulta->altura;
    $arr_nuevo["peso_64"]=$datosconsulta->peso;
    $arr_nuevo["temp_64"]=$datosconsulta->temp;
    $arr_nuevo["fr_64"]=$datosconsulta->fr;
    $arr_nuevo["fc_64"]=$datosconsulta->fc;
    $arr_nuevo["ta_t64"]=$datosconsulta->ta;
    $arr_nuevo["pvc_t64"]=$datosconsulta->pvc;
    $arr_nuevo["sao2_t64"]=$datosconsulta->sao2;
    $arr_nuevo["glsgow_t64"]=$datosconsulta->glsgow;
    $arr_nuevo["tiss_t64"]=$datosconsulta->tiss;
    $arr_nuevo["apache_t64"]=$datosconsulta->apache;
    $arr_nuevo["neurologico_t64"]=$datosconsulta->neurologico;
    $arr_nuevo["respiratorio_t64"]=$datosconsulta->respiratorio;
    $arr_nuevo["cardiovascular_t64"]=$datosconsulta->cardiovascular;
    $arr_nuevo["abdomen_t64"]=$datosconsulta->abdomen;
    $arr_nuevo["urinario_t64"]=$datosconsulta->urinario;
    $arr_nuevo["extremidad_t64"]=$datosconsulta->extremidad;
    $arr_nuevo["otros_t64"]=$datosconsulta->otros;
    $arr_nuevo["conducta_t64"]=$datosconsulta->conducta;
    $arr_nuevo["justificacion_t64"]=$datosconsulta->justificacion;
    $arr_nuevo["dxprincipal_t64"]=$datosconsulta->dxprincipal;
    $arr_nuevo["dxprincipalcod_t64"]=$datosconsulta->dxprincipalcod;
    $arr_nuevo["dxsecundario_t64"]=$datosconsulta->dxsecundario;
    $arr_nuevo["dxsecundariocod_t64"]=$datosconsulta->dxsecundariocod;
    $arr_nuevo["dxegreso_t64"]=$datosconsulta->dxegreso;
    $arr_nuevo["dxegresocod_t64"]=$datosconsulta->dxegresocod;
    $arr_nuevo["dxrelprincipal_t64"]=$datosconsulta->dxrelprincipal;
    $arr_nuevo["dxrelprincipalcod_t64"]=$datosconsulta->dxrelprincipalcod;
    $arr_nuevo["dxrelsecundario_t64"]=$datosconsulta->dxrelsecundario;
    $arr_nuevo["dxrelsecundariocod_t64"]=$datosconsulta->dxrelsecundariocod;
    $arr_nuevo["dxfallecido_t64"]=$datosconsulta->dxfallecido;
    $arr_nuevo["dxfallecidocod_t64"]=$datosconsulta->dxfallecidocod;
    $arr_nuevo["impresiondx_t64"]=$datosconsulta->impresiondx;
    
    $arr_nuevo["id_consulta_t67"]=$datosconsulta->id_consulta;
    $arr_nuevo["idpaciente_t67"]=$datosconsulta->idpaciente;
    $arr_nuevo["idhistoria_t67"]=$datosconsulta->idhistoria;
    $arr_nuevo["laboratorio_t67"]=$datosconsulta->laboratorio;
    $arr_nuevo["imgdiag_t67"]=$datosconsulta->imgdiag;
    $arr_nuevo["resultadolab_t67"]=$datosconsulta->resultadolab;
    $arr_nuevo["resultadoimg_t67"]=$datosconsulta->resultadoimg;
    $arr_nuevo["procedimiento_t67"]=$datosconsulta->procedimiento;
    $arr_nuevo["examenes_t67"]=$datosconsulta->examenes;
    $arr_nuevo["resultproced_t67"]=$datosconsulta->resultproced;
    $arr_nuevo["resultexamen_t67"]=$datosconsulta->resultexamen;
    $arr_nuevo["plantratam_t67"]=$datosconsulta->plantratam;
    $arr_nuevo["medicamento_t67"]=$datosconsulta->medicamento;
    
    
    $arr_nuevo["usrmod_t64"]=$this->Modulo->usr->idusr;
    $arr_nuevo["fmod_t64"]=$this->Modulo->ahora();
    if(empty($id)){
      
      $this->db->insert("ps_hist_consulta_64",$arr_nuevo);
      
      $id = $this->db->insert_id();
    }else{
      $this->db->where("idhist_consulta_64",$id);
      $this->db->update("ps_hist_consulta_64",$arr_nuevo);
    }
    return $id;
  }
  
  function registrar_ingreso($id=""){
    $arr_nuevo["estadoingreso_t15"]=$this->input->post("estadoingreso");
    $arr_nuevo["idps_historia_t15"]=$this->input->post("idps_historia_t4");
    $arr_nuevo["motivoconsulta_t15"]=$this->input->post("motivoconsulta");
    $arr_nuevo["enfermedadactual_t15"]=$this->input->post("enfermedadactual");
    $arr_nuevo["revisionsistemas_t15"]=$this->input->post("revisionsistemas");
    $arr_nuevo["atcpersonal_t15"]=$this->input->post("atcpersonal");
    $arr_nuevo["otropersonal_t15"]=$this->input->post("otropersonal");
    $arr_nuevo["despersonales_t15"]=$this->input->post("despersonales");
    $arr_nuevo["atcfamiliar_t15"]=$this->input->post("atcfamiliar");
    $arr_nuevo["otrofamiliar_t15"]=$this->input->post("otrofamiliar");
    $arr_nuevo["desfamiliar_t15"]=$this->input->post("desfamiliar");
    $arr_nuevo["atcpatologico_t15"]=$this->input->post("atcpatologico");
    $arr_nuevo["despatologico_t15"]=$this->input->post("despatologico");
    $arr_nuevo["otropatologico_t15"]=$this->input->post("otropatologico");
    $arr_nuevo["habtpsicologico_t15"]=$this->input->post("habtpsicologico");
    $arr_nuevo["despsicologico_t15"]=$this->input->post("despsicologico");
    $arr_nuevo["otropsicologico_t15"]=$this->input->post("otropsicologico");
    $arr_nuevo["altura_t15"]=$this->input->post("altura");
    $arr_nuevo["peso_t15"]=$this->input->post("peso");
    $arr_nuevo["temp_t15"]=$this->input->post("temp");
    $arr_nuevo["ta_t15"]=$this->input->post("ta");
    $arr_nuevo["glasglow_t15"]=$this->input->post("glasglow");
    $arr_nuevo["fc_t15"]=$this->input->post("fc");
    $arr_nuevo["sao2_t15"]=$this->input->post("sao2");
    $arr_nuevo["apache_15"]=$this->input->post("apache");
    $arr_nuevo["tiss_t15"]=$this->input->post("tiss");
    $arr_nuevo["pvc_t15"]=$this->input->post("pvc");
    $arr_nuevo["fr_t15"]=$this->input->post("fr");
    $arr_nuevo["neurologico_t15"]=$this->input->post("neurologico");
    $arr_nuevo["respiratorio_t15"]=$this->input->post("respiratorio");
    $arr_nuevo["cardiovascular_t15"]=$this->input->post("cardiovascular");
    $arr_nuevo["abdomen_t15"]=$this->input->post("abdomen");
    $arr_nuevo["genito_urinario_t15"]=$this->input->post("genito_urinario");
    $arr_nuevo["extremidades_t15"]=$this->input->post("extremidades");
    $arr_nuevo["otros_t15"]=$this->input->post("otros");
    $arr_nuevo["descripcioncie_t15"]=$this->input->post("descripcioncie");
    $arr_nuevo["plantratamiento_t15"]=$this->input->post("plantratamiento");
    $arr_nuevo["usrmod_t15"]=$this->Modulo->usr->idusr;
    $arr_nuevo["fmod_t15"]=$this->Modulo->ahora();
    if(empty($id)){
      $this->db->insert("ps_ingresomedico_t15",$arr_nuevo);
      $id = $this->db->insert_id();
    }else{
      $this->db->where("idps_ingresomedico_t15",$id);
      $this->db->update("ps_ingresomedico_t15",$arr_nuevo);
    }
    return $id;
  }
  
} 
?>