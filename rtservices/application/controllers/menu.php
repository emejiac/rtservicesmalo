<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$data['titulo'] = 'Menu principal';

		$this->load->view('msp/cabezera',$data);
		$this->load->view('menu/menu');
		$this->load->view('msp/piepagina');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */