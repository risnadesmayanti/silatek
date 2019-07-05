<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_instruktur extends CI_Model {

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
	    $res2 = $this->db->get('instruktur');
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