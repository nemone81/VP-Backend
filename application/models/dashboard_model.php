<?php
class Dashboard_model extends CI_Model {


	public function __construct()
	{
		$this->load->database();
	}

	public function dump_soci(){
	   return $query = $this->db->get('soci');//restituisce l'intera tabella soci
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
	
	
    public function get_soci_by_id($id)
	{
		$query = $this->db->get_where('soci', array('id' => $id));
		return $query->row_array();
	}
	
	
	public function get_maxtessera()
	{
		$query = $this->db->query('SELECT MAX(tessera) AS tessera FROM soci');
		return $query->row_array();
		}

		
	public function set_soci()
	{
		$this->load->helper('url');
		$slug = url_title('id_'.time().'-'.rand(), 'dash', TRUE);
		$nowhuman =  unix_to_human(time(), TRUE, 'us'); // U.S. time with seconds
		$data = array(
			'nome' => ucfirst($this->input->post('nome')),
			'cognome' => ucfirst($this->input->post('cognome')),
			'tipo' => $this->input->post('tipo'),
			'data_nascita' => $this->input->post('data_nascita'),
			'luogo_nascita' => ucfirst($this->input->post('luogo_nascita')),
			'sesso' => $this->input->post('sesso'),
			'tessera' => $this->input->post('tessera'),
			'email' => $this->input->post('email'),
			'telefono' => $this->input->post('telefono'),
			'comune_residenza' => ucfirst($this->input->post('comune_residenza')),
			'indirizzo_residenza' => ucfirst($this->input->post('indirizzo_residenza')),
			'note' => $this->input->post('note'),
			'certificato_medico' => $this->input->post('certificato_medico'),
			'data_modifica' => $nowhuman,
			'data_creazione' => $nowhuman,
			'slug' => $slug
			);
		return $this->db->insert('soci', $data);
	}
	
	public function update_soci()
	{
		$this->load->helper('url');
		$nowhuman =  unix_to_human(time(), TRUE, 'us'); // U.S. time with seconds
		$up_data = array(
			'nome' => ucfirst($this->input->post('nome')),
			'cognome' => ucfirst($this->input->post('cognome')),
			'tipo' => $this->input->post('tipo'),
			'data_nascita' => $this->input->post('data_nascita'),
			'luogo_nascita' => ucfirst($this->input->post('luogo_nascita')),
			'sesso' => $this->input->post('sesso'),
			'tessera' => $this->input->post('tessera'),
			'email' => $this->input->post('email'),
			'telefono' => $this->input->post('telefono'),
			'comune_residenza' => ucfirst($this->input->post('comune_residenza')),
			'indirizzo_residenza' => ucfirst($this->input->post('indirizzo_residenza')),
			'certificato_medico' => $this->input->post('certificato_medico'),
			'note' => $this->input->post('note'),
			'data_modifica' => $nowhuman,
			);
		$slug = $this->input->post('slug');
		$this->db->where('slug', $slug);	
		$this->db->update('soci', $up_data);
	}

	public function delete_soci()
	{
		$this->db->where('id',$id);
		$this->db->delete('soci');
	}	
	
}







