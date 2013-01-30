<?php
class Dashboard_model extends CI_Model {


	public function __construct()
	{
		$this->load->database();
	}

	public function get_soci($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('soci');
			return $query->result_array();
		}
		$query = $this->db->get_where('soci', array('slug' => $slug));
		return $query->row_array();
	}
	
}







