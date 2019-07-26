<?php 
ini_set("display_errors",1);
error_reporting(E_ALL);

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instruktur extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['ins'] = $this->M_instruktur->getInstrukturData()->result();
		$this->load->view('templates/header');
		$this->load->view('instruktur/instruktur', $data);
		$this->load->view('templates/footer');

		
	}

	public function detailIns($id){
		$data = $this->M_instruktur->getSelected($id);
        echo json_encode($data);
	}

	public function AddIns()
	{
		$this->load->view('templates/header');
		$this->load->view('instruktur/add_ins');
		// $this->load->view('templates/footer');
	}

	public function AddingIns()
	{

		$i=0;
		$id = 'INS'.rand();
		$nama = $this->input->post('nama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$image = $_FILES['image']['name'];
		$alamat = $this->input->post('alamat');
		$no_kontak = $this->input->post('no_kontak');
		$asal_instansi = $this->input->post('asal_instansi');
		$spesialisasi = $this->input->post('spesialisasi');
		$ket = $this->input->post('ket');
 		
 		 // setting konfigurasi upload
       	$config['upload_path'] = './upload/instruktur';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = true;
        $config['file_name'] = $id; 
        $config['max_size']  = 1024; // 1MB
        //$config['file_name'] = $id; 	 
        // load library upload
        $this->load->library('upload', $config);
		// if(!$image){
		// 	$image = "default.jpg";
		// }
		$this->upload->do_upload('image');
		$result = $this->upload->data();
             if(!$image){
             	$image= 'default.jpg';
             }else{
             	$image = $this->upload->data('file_name');
             }
         $data = array(
			'id' => $id,
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'image' => $image,
			'asal_instansi' => $asal_instansi,
			'spesialisasi' => $spesialisasi,
			'alamat' => $alamat,
			'no_kontak' => $no_kontak,
			'deskripsi' => $ket
			);
            echo "<pre>";
            print_r($data);

            echo "</pre>";

            echo "<pre>";
            print_r($result);

            echo "</pre>";
             // echo "lalala".$this->input->post('images');
            

         $this->M_instruktur->addInstruktur($data);
		redirect('/instruktur');

	}

	public function updateIns($id)
	{
		$where = array('id' => $id);
		$data['instruktur'] = $this->M_instruktur->edit_data($where,'user')->result();
		$this->load->view('templates/header');
		$this->load->view('instruktur/upd_ins',$data);
		// print_r($data);
	}


	public function updatingIns($id)
	{
		$nama = $this->input->post('nama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$image = $_FILES['userfile']['name'];
		$old_image = $this->input->post('old_image');
		$alamat = $this->input->post('alamat');
		$no_kontak = $this->input->post('no_kontak');
		$asal_instansi = $this->input->post('asal_instansi');
		$spesialisasi = $this->input->post('spesialisasi');
		$ket = $this->input->post('ket');

		// $where = array('id' => $id);
		$config['upload_path'] = './upload/instruktur';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = true;
        $config['file_name'] = $id; 
        $config['max_size']  = 1024; // 1MB

        // load library upload
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');

        // if (!$this->upload->do_upload('userfile')) {
        //     $error = $this->upload->display_errors();
        //     // menampilkan pesan error
        //     print_r($error);
        //     echo base_url().'upload/instruktur';
        //     echo $image;
        // } else {
            
            $result = $this->upload->data();
            if(!$image){
            	$data2 = $this->M_instruktur->getSelected($id)->result_array();
	            foreach ($data2 as $key => $value) {
	            	$databerkas = $value['image'];
	            }

	            $data = array(
					// 'id' => $id,
					'nama' => $nama,
					'tempat_lahir' => $tempat_lahir,
					'tgl_lahir' => $tgl_lahir,
					'image' => $databerkas,
					'asal_instansi' => $asal_instansi,
					'spesialisasi' => $spesialisasi,
					'alamat' => $alamat,
					'no_kontak' => $no_kontak,
					'deskripsi' => $ket
					);
            }else{
            	$image2 = $this->upload->data('file_name');
				$data = array(
					// 'id' => $id,
					'nama' => $nama,
					'tempat_lahir' => $tempat_lahir,
					'tgl_lahir' => $tgl_lahir,
					'image' => $image2,
					'asal_instansi' => $asal_instansi,
					'spesialisasi' => $spesialisasi,
					'alamat' => $alamat,
					'no_kontak' => $no_kontak,
					'deskripsi' => $ket
					);
            }
        // }


            echo "<pre>";
            print_r($result);
            echo "</pre>";

            echo "<pre>";
            print_r($data);
            echo "</pre>";
		

			$this->M_instruktur->update_data($data,$id);
			redirect('/instruktur');
	}


	public function delete($id)
	{
		//$where = array('id' => $id);
		$this->M_instruktur->deleteInstrukturData($id);
		redirect('/instruktur');
		//redirect('crud/index');
	}

	public function _uploadImage() {
        // setting konfigurasi upload
        $config['upload_path'] = './upload/instruktur';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = true;
        $config['file_name'] = $id; 
        $config['max_size']  = 1024; // 1MB

        // load library upload
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
        	return $this->upload->data("file_name");
    	}

    	 return "default.jpg";
    }
}

/* End of file  */
/* Location: ./application/controllers/ */