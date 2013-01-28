<?php
class Abbonamenti_model extends CI_Model {


	public function __construct()
	{
		$this->load->database();
	}


	public function get_abbonamenti($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('abbonamenti');
			return $query->result_array();
		}
		$query = $this->db->get_where('abbonamenti', array('slug' => $slug));
		return $query->row_array();
	}
	
	
    public function get_soci_by_id($id)
	{
		$query = $this->db->get_where('soci', array('id' => $id));
		return $query->row_array();
	}
		
	public function set_abbonamenti()
	{
		$this->load->helper('url');
		$slug = url_title('id_'.time().'-'.rand(), 'dash', TRUE);
		$nowhuman =  unix_to_human(time(), TRUE, 'us'); // U.S. time with seconds
		$data = array(
			'id_socio' => $this->input->post('id_socio'),
			'id_abbonamento' => $this->input->post('tipo').$this->input->post('abbonamento').$this->input->post('tipologia'),
			'scadenza' => $this->input->post('data_scadenza_anno').'-'.$this->input->post('data_scadenza').' 00:00:00',
			'note' => $this->input->post('note'),
			'data_modifica' => $nowhuman,
			'data_creazione' => $nowhuman,
			'slug' => $slug
			);
		return $this->db->insert('abbonamenti', $data);
	}
	
	public function update_abbonamenti()
	{
		$this->load->helper('url');
		$nowhuman =  unix_to_human(time(), TRUE, 'us'); // U.S. time with seconds
		$up_data = array(
			'id_abbonamento' => $this->input->post('abbonamento').$this->input->post('tipologia').$this->input->post('tipo'),
			'scadenza' => $this->input->post('data_scadenza_anno').'-'.$this->input->post('data_scadenza').' 00:00:00',
			'note' => $this->input->post('note'),
			'data_modifica' => $nowhuman,
			'note' => $this->input->post('note'),
			'data_modifica' => $nowhuman,
			);
		$slug = $this->input->post('slug');
		$this->db->where('slug', $slug);	
		$this->db->update('abbonamenti', $up_data);
	}

}







