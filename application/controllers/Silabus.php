<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Silabus extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// $this->load->view('welcome_message');
		$data['slbs'] = $this->M_silabus->getAll()->result();
		$this->load->view('templates/header');
		$this->load->view('silabus/silabus', $data);
		$this->load->view('templates/footer');
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
	}

	public function AddSlbs()
	{
		$this->load->view('templates/header');
		$this->load->view('silabus/add_slbs');
		$this->load->view('templates/footer');
	}

	public function load_file()
	{
	  // you need to load the url helper to call base_url()
	  $this->load->helper("url");
	  // you can change the location of your file wherever you want
	  // $MyFile = file_get_contents(base_url()."application/controllers/readme.txt");
	  // var_dump($MyFile);
	  //etc...
	}

	public function AddingSlbs()
	{
		$id = 'SLBS'.rand();
		$judul_silabus = $this->input->post('judul_silabus');
		$ringkasan = $this->input->post('ringkasan');
		$dokumen_file = $_FILES['userfile']['name'];
		$kategori_file = $this->input->post('kategori_file');
 		
 		 // setting konfigurasi upload
       	$config['upload_path'] = './upload/silabus';
        $config['allowed_types'] = 'doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt';
        $config['overwrite'] = true;
        // $config['file_name'] = $id; 
        $config['max_size']  = 10024; // 1MB
        //$config['file_name'] = $id; 	 
        // load library upload
        $this->load->library('upload', $config);
		$this->upload->do_upload('userfile');

		$result = $this->upload->data();
		/* TRACE DATA */
        if (!$this->upload->do_upload('userfile')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
            echo base_url().'upload/instruktur';
            // echo $image;
        } else {
			echo "<pre>";
			echo print_r($result);
			echo "</pre>";
		}

		$data = array(
			'id' => $id,
			'judul' => $judul_silabus,
			'kategori' => $kategori_file,
			'ringkasan' => $ringkasan,
			'dokumen_file' => $dokumen_file
			);

		echo "<pre>";
			echo print_r($data);
			echo "</pre>";
		$this->M_silabus->addSlbs($data);
		redirect('/silabus');
	}


	public function updateSlbs($id)
	{
		$where = array('id' => $id);
		$data['slbs'] = $this->M_silabus->edit_data($where)->result();
		
		// echo base_url()."upload/silabus/4e-MANAJEMEN KONFLIK(revJan'03) (1).doc";
		$this->load->view('templates/header');
		$this->load->view('silabus/upd_slbs',$data);
		// print_r($data);
	}

}

/* End of file  */
/* Location: ./application/controllers/ */