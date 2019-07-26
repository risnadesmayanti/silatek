<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function index()
	{
		// $this->load->view('welcome_message');
		$this->load->view('templates/header');
		$this->load->view('jadwal');
		$this->load->view('templates/footer');
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */