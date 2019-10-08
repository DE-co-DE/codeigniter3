<?php 

class Add_model extends CI_Model{

	public function addbook($alldata)
	{
		$this->db->insert('books',$alldata);
	}

	public function fetch()
	{
		$query = $this->db->get('books');
		return $query->result_array();
	}

	public function getMains()
	{
		$this->db->select('*');
		$query = $this->db->get('books');
		return $query->result_array();
	}
}

 ?>