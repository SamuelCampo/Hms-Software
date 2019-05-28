<?
class Constante extends CI_Model {
  
  var $fecha;
  var $arr_servicios;
  var $tipoaseguradora;
  var $tipoafiliacion;
  var $tiposervicio;
  var $tiposerviciootros;
  var $arr_defservcios;
  var $arr_terimxaliad;
  var $arr_metpreserv;
  var $arr_sino;
  var $arr_estado;

  function __construct(){
    parent::__construct();
    $this->fecha->dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
    $this->fecha->meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    $this->arr_sino = array(
      (object)array("sino"=>"SI","vaccod"=>"99998","res4505"=>"1"),
      (object)array("sino"=>"NO","vaccod"=>"99999","res4505"=>"2")
    );
    $this->arr_nosi = array(
      (object)array("sino"=>"NO","vaccod"=>"99999","res4505"=>"2"),
      (object)array("sino"=>"SI","vaccod"=>"99998","res4505"=>"1")
    );
    $this->arr_metpreserv = array(
      (object)array("metodo"=>"ANILLO MENSUAL"),
      (object)array("metodo"=>"ANTICONCEPTIVOS ORALES"),
      (object)array("metodo"=>"CONDON"),
      (object)array("metodo"=>"DIAFRAGMA"),
      (object)array("metodo"=>"DISPOSITIVO INTRAUTERINO (DIU)"),
      (object)array("metodo"=>"IMPLANTE"),
      (object)array("metodo"=>"INYECCIONES HORMONALES"),
      (object)array("metodo"=>"PARCHE SEMANAL"),
      (object)array("metodo"=>"PRESERVATIVO FEMENINO")
    );
    $this->tipoaseguradora = array(
      (object)array("tipo"=>"EPS"),
      (object)array("tipo"=>"ARL"),
      (object)array("tipo"=>"SOAT"),
      (object)array("tipo"=>"ARS"),
      (object)array("tipo"=>"PARTICULAR")
    );
    $this->tipoafiliacion = array(
      (object)array("tipo"=>"COTIZANTE","idtipo"=>"1"),
      (object)array("tipo"=>"BENEFICIARIO","idtipo"=>"1"),
      (object)array("tipo"=>"SUBSIDIADO","idtipo"=>"2"),
      (object)array("tipo"=>"VINCULADO","idtipo"=>"3"),
      (object)array("tipo"=>"PARTICULAR","idtipo"=>"4"),
      (object)array("tipo"=>"OTRO","idtipo"=>"5"),
      (object)array("tipo"=>"DESPLAZADO CONTRIBUTIVO","idtipo"=>"7"),
      (object)array("tipo"=>"DESPLAZADO SUBSIDIADO","idtipo"=>"8"),
      (object)array("tipo"=>"DESPLAZADO VINCULADO","idtipo"=>"9")
    );
    $this->zonarural = array(
      (object)array("idzona"=>"U","zona"=>"URBANA"),
      (object)array("idzona"=>"R","zona"=>"RURAL")
    );
    
    $this->tiposervicio = array(
      (object)array("idservicio"=>"QUIR","tipo_servicio"=>"QUIRURGICO"),
      (object)array("idservicio"=>"PROC","tipo_servicio"=>"PROCEDIMIENTO "),
      (object)array("idservicio"=>"AYDX","tipo_servicio"=>"AYUDA DIAGNÓSTICA"),
      (object)array("idservicio"=>"LABO","tipo_servicio"=>"LABORATORIO"),
      (object)array("idservicio"=>"BASA","tipo_servicio"=>"BANCO DE SANGRE"),
      (object)array("idservicio"=>"ODONT","tipo_servicio"=>"ODONTOLOGÍA"),
      (object)array("idservicio"=>"CONSULT","tipo_servicio"=>"CONSULTORIA"),
      (object)array("idservicio"=>"HOSP","tipo_servicio"=>"HOSPITALZACIÓN")
    );
    $this->tiposervicio = array(
      (object)array("idservicio"=>"AYDX","tipo_servicio"=>"AYUDA DIAGNÓSTICA"),
      (object)array("idservicio"=>"BASA","tipo_servicio"=>"BANCO DE SANGRE"),
      (object)array("idservicio"=>"CONSULTEXT","tipo_servicio"=>"CONSULT EXTERNA"),
      (object)array("idservicio"=>"INTERC","tipo_servicio"=>"INTERCONSULTA"),
      (object)array("idservicio"=>"LABO","tipo_servicio"=>"LABORATORIO"),
      (object)array("idservicio"=>"PROC","tipo_servicio"=>"PROCEDIMIENTO"),
      (object)array("idservicio"=>"QUIR","tipo_servicio"=>"QUIRURGICO")
    );
    $this->tiposerviciootros = array(
      (object)array("idservicio"=>"ICONS","tipo_servicio"=>"INTERCONSULTA"),
      (object)array("idservicio"=>"ICONS","tipo_servicio"=>"CITA DE CONTROL"),
      (object)array("idservicio"=>"CONS","tipo_servicio"=>"CONSULT EXTERNA"),
      (object)array("idservicio"=>"BASA","tipo_servicio"=>"BANCO DE SANGRE"),
      
    );
    $this->arr_terimxaliad = array(
      (object)array("idtercer"=>"34556338","nit"=>"34556338-4","tercero"=>"LABORATORIO CLÍNICO DIAGNOSTICAR DE DIANA PATRICIA QUEVEDO CASTRO","direccion"=>"CALLE 11 NO. 9N-120 BARRIO SANTA CLARA","espec"=>"LABO"),
      (object)array("idtercer"=>"900435146","nit"=>"900435146-9","tercero"=>"LABORATORIO LORENA VEJARANO S.A.S.","direccion"=>"CRA 11 # 13 - 51 STA CLARA","espec"=>"LABO"),
      (object)array("idtercer"=>"900458954","nit"=>"900458954-2","tercero"=>"TELE IMÁGENES MEDICAS EXPRESS SAS","direccion"=>"CRA 8 # 11N - 09 LOCAL 6 EDIFICIO SANTORINI","espec"=>"AYDX"),
      (object)array("idtercer"=>"900985476","nit"=>"900985476-3","tercero"=>"CONSORCIO IPS CAUCA","direccion"=>"CLLE 5 No. 3 - 31","espec"=>"OTROSPROC")
    );
    $this->arr_estado=array(
      (object)array("estado"=>'ACTIVO'),
      (object)array("estado"=>'INACTIVO')
    );
  }
  
  function teraliadxespec($espec){
    foreach($this->arr_terimxaliad as $tercer){
      if($espec == $tercer->espec){
        $arr_res[]=$tercer;
      }
    }
    return $arr_res;
  }
  
  function sumins_listar($buscado=""){
    $this->db->from("ps_sumins_t91");
    if(!empty($buscado)){
      $this->db->like("codigoatc_t91",$buscado);
      $this->db->or_like("nombreatc_t91",$buscado);
      $this->db->or_like("principioact_t91",$buscado);
    }
    $this->db->order_by("nombreatc_t91",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
  }
  
  
  function cums_listar($buscado="",$posnopos=""){
    if(!empty($posnopos)){
      if($posnopos=='NOPOS'){
        $this->db->from("v_ps_cums_t73_nopos");
      }else{
        $this->db->from("v_ps_cums_t73_pos");
      }
    }else{
      $this->db->from("ps_cums_t73");
    }
    if(!empty($buscado)){
      $this->db->like("codigoatc_t73",$buscado);
      $this->db->or_like("nombreatc_t73",$buscado);
      $this->db->or_like("principioact_t73",$buscado);
    }
    $this->db->order_by("pos_t73",'desc');
    $this->db->order_by("principioact_t73",'asc');
    $this->db->order_by("nombreatc_t73",'asc');
    $this->db->order_by("farmaceutica_t73",'asc');
    $this->db->order_by("concentracion_t73",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
  }
  
  function cums_obtener($id,$codigo=""){
    $this->db->from("ps_cums_t73");
    if(!empty($codigo)){
      $this->db->where("codigoatc_t73",$codigo);
    }else{
      $this->db->where("idps_medicamentos_t73",$id);
    }
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $query->row();
    }
  }
  
  function administradoras_listar($buscado=""){
    $this->db->from("ps_administradoras_t70");
    if(!empty($buscado)){
      $this->db->like("codministerio_t70",$buscado);
      $this->db->or_like("nombre_t70",$buscado);
    }
    $this->db->order_by("nombre_t70",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
  }
  
  function administradoras_obtener($id){
    $this->db->from("ps_administradoras_t70");
    $this->db->where("codministerio_t70",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $query->row();
    }
  }

  function administradoras_obtiene($id){
    $this->db->from("param_terceros_t16");
    $this->db->where("cod_t16",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $query->row();
    }
  }
  
  function grupoetnic($id=""){
    $this->db->from("param_grupoetnic_t105");
    if(!empty($id)){
      $this->db->where("codgrupoetnic_t105",$id);
    }
    $this->db->order_by("grupoetnic_t105",'asc');
    $query = $this->db->get();
    if(!empty($id)){
      return $query->row();
    }
    return $query->result();
  }
  
  function niveduc($id=""){
    $this->db->from("param_niveduc_t104");
    if(!empty($id)){
      $this->db->where("codniveduc_t104",$id);
    }
    $this->db->order_by("niveduc_t104",'asc');
    $query = $this->db->get();
    if(!empty($id)){
      return $query->row();
    }
    return $query->result();
  }
  
  function ocupaciones_listar($buscado=""){
    $this->db->from("ps_ocupaciones_t72");
    if(!empty($buscado)){
      $this->db->like("codigo_t72",$buscado);
      $this->db->or_like("ocupacion_t72",$buscado);
    }
    $this->db->order_by("ocupacion_t72",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
  }
  
  function ocupaciones_obtener($id){
    $this->db->from("ps_ocupaciones_t72");
    $this->db->where("codigo_t72",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $query->row();
    }
  }
  
  function listar_ciudades($buscado=""){
    $this->db->from("ps_ciudades_t13");
    if(!empty($buscado)){
      $this->db->like("codigo_dane_t13",$buscado);
      $this->db->or_like("departamento_t13",$buscado);
      $this->db->or_like("ciudad_t13",$buscado);
      $this->db->or_like("municipio_t13",$buscado);
    }
    $this->db->order_by("ciudad_t13",'asc');
    $this->db->order_by("departamento_t13",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
  }
  
   function listar_cie10($buscado){
    $this->db->from("ps_cie10_14");
    $this->db->order_by("descripcion_t14",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
  }
  
  
} 
?>