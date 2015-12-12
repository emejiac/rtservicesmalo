<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mdl_login');
	}

	public function index()
	{

		if($this->session->userdata('username'))
		{
			redirect('menu');
		}

		if (isset($_POST['btnIngreso'])) 
		{
			if ($this->mdl_login->validar($_POST['txtUser'],$_POST['txtPass'])) {
				$this->session->set_userdata('username',$_POST['txtUser']);
				$this->session->set_userdata('user',ucwords($_POST['txtUser']));
				redirect('menu');
			}
			else
			{
				$this->session->set_userdata('error', 'error');
				redirect('login');
			}
		} 

		if (isset($_POST['btnRecuperar']))
		{
			$resultadoRecuperar = $this->mdl_login->recuperar($_POST['txtEmail']);
			$token = $this->mdl_login->generarToken($resultadoRecuperar);
			if ($token != "") {

				$to = $_POST['txtEmail'];
				$subject = "Cambio de contraseña | RacketTennisServices";
				$headers = "From: gestiones@rtennis.tk\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

				$message = 
				'
				<html>
				<head>
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
				</head>
				<body style="font-family: Agency FB; font-size: 18pt; width: 600px;text-align: center">
					<center><h3>Solicitud cambio de contraseña | RacketTennisServices</h3></center>
					<hr style="width: 40%; border: solid 1px black">
					<p>Hemos recibido y procesado tu solicitud, para cambiar tu contraseña accede en el boton que dice ¨NUEVA CONTRASEÑA¨</p>
					<table rules="all" cellpadding="10" width="500px" align="center">
						<tr>
							<td>
								<center>
									<a href="'.site_url("resset?tok=".$token."").'" target="_blank">
										<button type="button" class="btn btn-success" style="padding: 18px; font-family: BigNoodleTitling">NUEVA CONTRASEÑA</button>
									</a>
								</center>
							</td>
						</tr>
					</table>
				</body>
				</html>
				';
				$this->session->set_userdata('correo','correo');
				if(mail($to, $subject, $message, $headers))
				{
					redirect('login');
				}

				
			}
		}

		$this->load->view('login/login');
	}

	public function cerrarSesion()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}

/* End of file con_login.php */
/* Location: ./application/controllers/con_login.php */