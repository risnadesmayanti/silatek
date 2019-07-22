<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
		$nama = $this->input->post('nama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$no_kontak = $this->input->post('no_kontak');
		$asal_instansi = $this->input->post('asal_instansi');
		$spesialisasi = $this->input->post('spesialisasi');
		$ket = $this->input->post('ket');
 		
 		//yyyy-mm-dd -> mysql
 		// dd-mm-yyyy -> html
 		// date("d-m-Y", strtotime($originalDate))
		$data = array(
			'id' => 'INS'.rand(),
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'asal_instansi' => $asal_instansi,
			'spesialisasi' => $spesialisasi,
			'alamat' => $alamat,
			'no_kontak' => $no_kontak,
			'deskripsi' => $ket
			);

		$this->M_instruktur->addInstruktur($data);
		redirect('/instruktur');
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
		$alamat = $this->input->post('alamat');
		$no_kontak = $this->input->post('no_kontak');
		$asal_instansi = $this->input->post('asal_instansi');
		$spesialisasi = $this->input->post('spesialisasi');
		$ket = $this->input->post('ket');

		$data = array(
			// 'id' => 'INS'.$i,
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'asal_instansi' => $asal_instansi,
			'spesialisasi' => $spesialisasi,
			'alamat' => $alamat,
			'no_kontak' => $no_kontak,
			'deskripsi' => $ket
			);

		// $where = array('id' => $id);
		$data2 = $this->M_instruktur->update_data($data,$id);

		// print_r($data2);
		redirect('/instruktur');
	}
	public function delete($id)
	{
		//$where = array('id' => $id);
		$this->M_instruktur->deleteInstrukturData($id);
		redirect('/instruktur');
		//redirect('crud/index');
	}
}

/* End of file  */
/* Location: ./application/controllers/ */