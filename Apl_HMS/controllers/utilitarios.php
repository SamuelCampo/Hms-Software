<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utilitarios extends CI_Controller {
  
	function __construct(){
		parent::__construct();  
		$this->output->cache(0);
	}
  
  public function firmamed(){
    if($this->Modulo->error == false){
      $med = $this->uri->segment(3, "");
      $arr_img["mimeimagen"]='image/png';
      $arr_img["rutaimagen"]=FCPATH."/img/frm/".md5($med);
      $this->load->view('Genericas/exportar_img',$arr_img,'refresh');
    }
  }
  
  public function unifterap(){
    if($this->Modulo->error == false){
      
      $this->db->from("ps_historia_t4");
      $this->db->join("ps_hist_consulta_t64","idps_historia_t4 = idhistoria_t64","left");
      $this->db->join("ps_hist_evolucion_t68","idps_historia_t4 = idhistoria_t68","left");
      $this->db->order_by("fmod_t68","asc");
      $this->db->order_by("fmod_t64","asc");
      $query = $this->db->get();
      $arr_ev = $query->result();
      foreach($arr_ev as $regev){
        $arr_evpac[$regev->paciente_t4]["objetivos_t68"]=$regev->objetivos_t68?:$regev->objetivos_t64;
        $arr_evpac[$regev->paciente_t4]["conducta_t68"]=$regev->conducta_t68?:$regev->conducta_t64;
        $arr_evpac[$regev->paciente_t4]["planmanejo_t68"]=$regev->planmanejo_t68?:$regev->planmanejo_t64;
        $arr_evpac[$regev->paciente_t4]["mednomcomp_t68"]=$regev->mednomcomp_t68?:$regev->mednomcomp_t64;
        $arr_evpac[$regev->paciente_t4]["medreg_t68"]=$regev->medreg_t68?:$regev->medreg_t64;
        $arr_evpac[$regev->paciente_t4]["medidentif_t68"]=$regev->medidentif_t68?:$regev->medidentif_t64;
        $arr_evpac[$regev->paciente_t4]["medcargo_t68"]=$regev->medcargo_t68?:$regev->medcargo_t64;
        $arr_evpac[$regev->paciente_t4]["medespec_t68"]=$regev->medespec_t68?:$regev->medespec_t64;
        if(!is_null($regev->idhist_evolucion_t68) && $regev->tipoevol_t68=='TERAPIAS'){
          $arr_evhist[$regev->idps_historia_t4]++;
        }
      }
      
      $this->db->from("ps_hist_ordenes_t67");
      $this->db->join("ps_historia_t4","idhistoria_t67=idps_historia_t4","inner");
      $this->db->join("ps_hist_consulta_t64","idps_historia_t4 = idhistoria_t64","left");
      $this->db->where("estado_t4 <>",'ANULADA');
      $this->db->where_in("idhist_ordenes_t67",array('3196','3450','3528','128','2999','3125','81','61','544','3305','3756','3650','79','3324','3470','3146','3497','3205','237','3363','223','3147','3590','3167','3583','3204','202','3490','625','3555','3535','3315','3601','10','257','3203','195','3271','3311','3643','245','3646','21','3178','3533','3281','3223','3005','3625','3155','3090','3746','3529','3507','3463','3084','39','3','3381','3123','3113','3611','172','3232','3591','3486','3251','3565','259','3292','3045','3635','3188','3151','3483','258','3488','491','590','3268','710','3629','117','542','3329','3331','quitar','3158','3160','3609','3579','3213','3563','3748','3568','3558','3002','3597','3162','3566','178','3561','109','3467','3504','24','3465','74','251','227','3264','3190','220','186','3525','3145','3254','27','82','3456','3556','250','3459','3759','3745','185','3263','3004','3655','3462','3658','3319','153','3301','3296','3448','3392','3599','3280','3654','3228','3538','714','26','18'));
      $this->db->order_by("orden_t67","desc");
      $this->db->order_by("descripcion_t67","asc");
      $query = $this->db->get();
      $arr_ord = $query->result();
      foreach($arr_ord as $regord){
        $cantev = $regord->cantidad_t67-$regord->cantidadpen_t67;
        $cantpendev = $cantev-$arr_evhist[$regord->idps_historia_t4];
        for($i=0;$i<$cantpendev;$i++){
          $fevol = strtotime($regord->fmod_t67)+(($i+1)*24*3600)+rand(-3600,3600);
          $arr_evolreg = $arr_evpac[$regord->paciente_t4];
          $arr_evolreg["fmod_t68"] = date("Y-m-d H:i:s",$fevol);
          $arr_evolreg["id_consulta_t68"]=$regord->idhist_consulta_t64;
          $arr_evolreg["idpaciente_t68"]=$regord->idpaciente_t67;
          $arr_evolreg["idhistoria_t68"]=$regord->idhistoria_t67;
          $arr_evolreg["tipoevol_t68"]="TERAPIAS";
          $this->db->insert("ps_hist_evolucion_t68",$arr_evolreg);
          unset($arr_evolreg);
        }
      }
    }
  }

}
?>