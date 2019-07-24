<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_instruktur extends CI_Model {
	/*public $ins_id;
    public $name;
    public $tempatlahir;
    public $tanggallahir;
    public $alamat;
    public $kontak;
    public $image = "default.jpg";
    public $instansi;
    public $spesialisasi;
    public $deskripsi;


    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'tempat_lahir',
            'label' => 'Tempat Lahir',
            'rules' => 'required'],

            ['field' => 'tgl_lahir',
            'label' => 'Tanggal Lahir',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required']

            ['field' => 'no_kontak',
            'label' => 'No. Kontak',
            'rules' => 'numeric'],
            
            ['field' => 'asal_instansi',
            'label' => 'Asal Instansi',
            'rules' => 'required'],

            ['field' => 'spesialisasi',
            'label' => 'Spesialisasi',
            'rules' => 'required']
        ];
    }
*/

	public function getInstrukturData()
	{
		$this->db->select('*');
        $this->db->from('tb_instruktur');
        
        $query = $this->db->get();
        return $query;	
	}

	public function getSelected($id)
	{
		$this->db->select('*');
	    $this->db->from('tb_instruktur');
	    $this->db->where('id',$id);
	    $res2 = $this->db->get();
  		return $res2;
	}		

	public function addInstruktur($data)
	{

		$this->db->insert('tb_instruktur',$data);
	}	

	public function edit_data($where)
	{
		return $this->db->get_where('tb_instruktur',$where);
	}

	public function update_data($data, $id = NULL)
	{
		$this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('tb_instruktur');
	}

	public function deleteInstrukturData($id)
	{

		$this->db->where('id', $id);
		$this->db->delete('tb_instruktur');
		// echo json_encode($data);
	}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */