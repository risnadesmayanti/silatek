<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_silabus extends CI_Model {
    private $_table = "tb_silabus";

	public $id_silabus;
    public $id_instruktur;
    public $judul_silabus;
    public $ringkasan;
    public $dokumen_file;


    public function rules()
    {
        return [
            ['field' => 'judul_silabus',
            'label' => 'Judul Silabus',
            'rules' => 'required'],

            ['field' => 'ringkasan',
            'label' => 'Ringkasan',
            'rules' => 'required'],

            ['field' => 'dokumen_file',
            'label' => 'Tanggal Lahir',
            'rules' => 'required']
        ];
    }


	public function getAll()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        
        $query = $this->db->get();
        return $query;  
    }

    public function edit_data($where)
    {
        return $this->db->get_where($this->_table,$where);
    }

	public function getSelected($id)
	{
		 return $this->db->get_where($this->_table, ["id_silabus" => $id])->row();
    }		

	public function addSlbs($data)
	{

		$this->db->insert($this->_table,$data);
	}	

	// public function edit_data($where)
	// {
	// 	return $this->db->get_where('$_table',$where);
	// }

	// public function update_data($data, $id = NULL)
	// {
	// 	$this->db->set($data);
 //        $this->db->where('id', $id);
 //        $this->db->update('$_table');
	// }

	// public function deleteInstrukturData($id)
	// {

	// 	$this->db->where('id', $id);
	// 	$this->db->delete('$_table');
	// 	// echo json_encode($data);
	// }

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */