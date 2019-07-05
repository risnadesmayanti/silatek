<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');

	}

	public function jadwal()
	{
		// $this->load->view('welcome_message');
		$this->load->view('templates/header');
		$this->load->view('jadwal');
		$this->load->view('templates/footer');
	}	

	

	public function AllPelatihan()
	{
		// $this->load->view('welcome_message');
		$this->load->view('templates/header');
		$this->load->view('AllPelatihan');
		$this->load->view('templates/footer');
	}

	
	public function detail($id){
		$data = $this->M_instruktur->getSelected(array('id' => $id));
        echo json_encode($data);
	}

	// public function details(){
	// 	$phoneData = $this->input->post('phoneData');
	// 	if(isset($phoneData) and !empty($phoneData)){
	// 		$records = $this->M_instruktur->getSelected($phoneData);
	// 		$output = '';
 //            foreach($records->result_array() as $row){
 //             $output .='<div class="todo">
 //              <ul>
 //                <li class="clearfix">
 //                  <div class="txt"> ID Instruktur </div>
 //                  <div class="pull-right">'.$row["id"].'</div></li></ul></div>';


 //         	}
 //         	 echo $output;
	// 	// print_r($records);
	// 	}
	// }

	
	private function uploadImage()
	{
	    $config['upload_path']          = './upload/instruktur/';
	    $config['allowed_types']        = 'gif|jpg|png';
	    // $config['file_name']            = $this->product_id;
	    $config['overwrite']			= true;
	    $config['max_size']             = 1024; // 1MB
	    $config['max_width']            = 1024;
	    $config['max_height']           = 768;

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('image')) {
	        return $this->upload->data("file_name");
	    }
	    
	    return "default.jpg";
	}

}

/* End of file Dashboard */
/* Location: ./application/controllers/Dashboard */