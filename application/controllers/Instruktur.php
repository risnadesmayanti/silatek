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
		$data = $this->M_instruktur->getSelected(array('EmployeeId' => $id));
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
		$alamat = $this->input->post('alamat');
		$no_kontak = $this->input->post('no_kontak');
		$asal_instansi = $this->input->post('asal_instansi');
		$spesialisasi = $this->input->post('spesialisasi');
		$ket = $this->input->post('ket');
 		
 		 // setting konfigurasi upload
        $config['upload_path'] = './upload/instruktur';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['file_name'] = $id; 	 
        // load library upload
        $this->load->library('upload', $config);
    	$image = $this->input->post('image');
		if(!$image){
			$image = "default.jpg";
		}
		$this->upload->do_upload('image');

            // $result = $this->upload->data();
            // echo "<pre>";
            // print_r($result);

            // echo "</pre>";
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
            

         $this->M_instruktur->addInstruktur($data);



		$i++;
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
		$image = $this->input->post('image');
		$alamat = $this->input->post('alamat');
		$no_kontak = $this->input->post('no_kontak');
		$asal_instansi = $this->input->post('asal_instansi');
		$spesialisasi = $this->input->post('spesialisasi');
		$ket = $this->input->post('ket');

		// $data = array(
		// 	// 'id' => 'INS'.$i,
		// 	'nama' => $nama,
		// 	'tempat_lahir' => $tempat_lahir,
		// 	'tgl_lahir' => $tgl_lahir,
		// 	'asal_instansi' => $asal_instansi,
		// 	'spesialisasi' => $spesialisasi,
		// 	'alamat' => $alamat,
		// 	'no_kontak' => $no_kontak,
		// 	'deskripsi' => $ket
		// 	);

		// $where = array('id' => $id);
		$config['upload_path'] = './upload/instruktur';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['file_name'] = $id; 	 
        // load library upload
        $this->load->library('upload', $config);
        // $this->upload->do_upload();
        if (!$this->upload->do_upload('userfile')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
            echo base_url().'upload/instruktur';
            echo $image;
        } else {
            $result = $this->upload->data();

            $image2 = $this->upload->data('file_name');

            echo "<pre>";
            print_r($result);

            echo "</pre>";
            //echo $data['image'];
        }

		// print_r($data2);
		// redirect('/instruktur');
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

	public function do_upload() {
        // setting konfigurasi upload
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $result = $this->upload->data();
            echo "<pre>";
            print_r($result);
            echo "</pre>";
        }
    }
}

/* End of file  */
/* Location: ./application/controllers/ */