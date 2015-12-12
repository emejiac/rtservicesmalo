<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_login extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function validar($nombre,$clave)
	{
		$this->db->select('*');
		$this->db->from('rtslogin_deb');
		$this->db->join('rtsPersonaRol_det','rtslogin_deb.idrtsPersonaRol_det = rtsPersonaRol_det.idrtsPersonaRol_det','inner');
		$this->db->join('rtsRol','rtsPersonaRol_det.idrtsPersonaRol_det = rtsRol.idrtsRol','inner');
		$this->db->join('rtsPersona_deb','rtsPersonaRol_det.idrtsPersonaRol_det = rtsPersona_deb.idrtsPersona','inner');
		$this->db->where('Usuario',$nombre);
		$this->db->where('rtslogin_deb.Estado','1');
		$this->db->where('rtsPersonaRol_det.Estado','1');
		$this->db->where('rtsPersona_deb.Estado','1');

		$login = $this->db->get()->result();

		foreach ($login as $val){
			if(password_verify($clave, $val->Clave))
			{
				$this->session->set_userdata('rol',$val->nombreRol);
				$this->session->set_userdata('idPer',$val->idrtsPersona);
				$this->session->set_userdata('documento',$val->Documento);
				$this->session->set_userdata('nombreC',$val->Nombre." ".substr($val->Apellidos, 0,1).".");
				return true;
				break;
			}
		}
	}

	public function recuperar($email)
	{
		$this->db->select('*');
		$this->db->from('rtslogin_deb');
		$this->db->join('rtsPersonaRol_det','rtslogin_deb.idrtsPersonaRol_det = rtsPersonaRol_det.idrtsPersonaRol_det','inner');
		$this->db->join('rtsRol','rtsPersonaRol_det.idrtsPersonaRol_det = rtsRol.idrtsRol','inner');
		$this->db->join('rtsPersona_deb','rtsPersonaRol_det.idrtsPersonaRol_det = rtsPersona_deb.idrtsPersona','inner');
		$this->db->where('rtsPersona_deb.Correo',$email);

		$login = $this->db->get()->result();

		return $login;

	}

	public function generarToken($login)
	{
		$idLogin = 0;
		$fechaGenerado = date("Y")."/".date("m")."/".date("d");
		$length = 20;
		$uc = TRUE;
		$n = TRUE;
		$sc = FALSE;
		$source = 'abcdefghijklmnopqrstuvwxyz';
		$token = "";

		foreach ($login as $value) {
			$idLogin = $value->idrtsLogin;
		}

		if($uc==1) $source .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		if($n==1) $source .= '1234567890';
		if($sc==1) $source .= '|@#~$%()=^*+[]{}-_';
		if($length>0){
			$source = str_split($source,1);
			for($i=1; $i<=$length; $i++){
				mt_srand((double)microtime() * 1000000);
				$num = mt_rand(1,count($source));
				$token .= $source[$num-1];
			}
		}
		
		$DATOS = array(
			'idrtsLogin' => $idLogin ,
			'Token' => $token ,
			'fechaGenerado' => $fechaGenerado,
			'Estado' => '1'
			);

		$this->db->insert('rtsreset_deb', $DATOS); 
		return $token;

	}

}

/* End of file model_user.php */
/* Location: ./application/models/model_user.php */