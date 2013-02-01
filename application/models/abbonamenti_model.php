<?php
class Abbonamenti_model extends CI_Model {


	public function __construct()
	{
		$this->load->database();
	}


	public function get_abbonamenti($id = FALSE) // restituisce abbonamenti non cancellati
	{
		if ($id === FALSE)
		{
			$this->db->where('delete', 0);
			$query = $this->db->get('abbonamenti');
			return $query->result_array();
		}
			$this->db->where('delete', 0);
		$query = $this->db->get_where('abbonamenti', array('id' => $id));
		return $query->row_array();
	}
	
	public function set_abbonamenti()
	{
		$this->load->helper('url');
		$nowhuman =  unix_to_human(time(), TRUE, 'us'); // U.S. time with seconds
		$data = array(
			'id_socio' => $this->input->post('id_socio'),
			'codice_abbonamento' => $this->input->post('tipo').$this->input->post('abbonamento').$this->input->post('tipologia').'-2013',
			'scadenza' => $this->input->post('data_scadenza_anno').'-'.$this->input->post('data_scadenza_mese').' 23:59:59',
			'note' => $this->input->post('note'),
			'data_acquisto' => $this->input->post('data_acquisto'),
			'data_modifica' => $nowhuman,
			'data_creazione' => $nowhuman,
			);
		return $this->db->insert('abbonamenti', $data);
	}
	
	public function update_abbonamenti($id)//($id)
	{
		//$tipologia_id_socio = $this->soci_model->get_tipologia_id($id)
		
		$this->load->helper('url');
		$nowhuman =  unix_to_human(time(), TRUE, 'us'); // U.S. time with seconds
		$up_data = array(
			'codice_abbonamento' => $this->input->post('tipo').$this->input->post('abbonamento').$this->input->post('tipologia').'-2013',
			'scadenza' => $this->input->post('data_scadenza_anno').'-'.$this->input->post('data_scadenza_mese').' 23:59:59',
			'note' => $this->input->post('note'),
			'data_modifica' => $nowhuman,
			'data_acquisto' => $this->input->post('data_acquisto'),
			);
		$this->db->where('id', $id);	
		$this->db->update('abbonamenti', $up_data);
	}

	public function delete_abbonamenti($id = FALSE)  // setta status delete su 1
	{
		if ($id === FALSE)
		{
			echo 'seleziona utente da cancellare';
		}
		
			$data = array(
			'delete' => 1 ,
			);
			$this->db->where('id', $id);
			$this->db->update('abbonamenti', $data);
		//	$this->db->delete('abbonamenti');	
		}	

}







