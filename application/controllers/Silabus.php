<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Silabus extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// $this->load->view('welcome_message');
		$this->load->view('templates/header');
		$this->load->view('silabus/silabus');
		$this->load->view('templates/footer');
	}
}

/* End of file  */
/* Location: ./application/controllers/ */