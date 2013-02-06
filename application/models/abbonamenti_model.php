<?php
class Abbonamenti_model extends CI_Model {


	public function __construct()
	{
		$this->load->database();
	}


	public function get_numero_abbonamenti($id) // 
		{
			$ora = unix_to_human(now());
			$this->db->like('codice_abbonamento', $id ); // tipologia
			$this->db->where('scadenza >', $ora); 
			$query = $this->db->count_all_results('abbonamenti');
			return $query;
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
	
	public function get_abbonamenti_id_socio($id_socio = FALSE) // restituisce Lista Abbonamenti opzionalmente per id_socio
		{
			if ($id_socio === FALSE)
			{
				$this->db->where('delete', 0);
				$query = $this->db->get('abbonamenti');
				return $query->result_array();
			}
				$this->db->where('delete', 0);
				$query = $this->db->get_where('abbonamenti', array('id_socio' => $id_socio));
				return $query->result_array();		
			}
			
			
	public function get_ultima_iscrizione($id) // 
		{
			$this->db->like('codice_abbonamento', 'I' ); // tipologia Iscrizione
			$this->db->where('id_socio', $id);
			$this->db->where('delete', 0);
			$this->db->select('abbonamenti.*', FALSE); // seleziona tutte le colonne
			$this->db->select_max('scadenza'); 
			$query = $this->db->get('abbonamenti');
			return $query->result_array();
			}		
			
	public function get_abbonamenti_scaduti() // restituisce Iscrizione, Trimestrali o Annuali scaduti negli ultim 60 giorni
		{
			$now = unix_to_human(time());
			$mesidue = unix_to_human((time()-5184000)); // la data di oggi -60 giorni
			$this->db->where('delete', 0);
			$this->db->where('scadenza <', $now); 
			$this->db->where('scadenza >', $mesidue); // 
			$this->db->not_like('codice_abbonamento', 'M' ); // tipologia Mensile
			$this->db->not_like('codice_abbonamento', 'K' ); // tipologia Carnet
			$query = $this->db->get('abbonamenti');
			return $query->result_array();
			}

	public function set_abbonamenti() // insert sul db
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
	
	public function update_abbonamenti($id)// update sul db
	{		
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
		
	public function get_storico_abbonamenti($id,$year) 
	{
		$this->db->like('codice_abbonamento', $id ); // tipologia
		$this->db->where('delete', 0);
		$this->db->like('data_acquisto', $year);
		$this->db->select('YEAR(data_acquisto) AS year_val');
		$this->db->select('MONTH(data_acquisto) AS month_val');
		$this->db->select('COUNT( * ) AS total');
		$this->db->group_by('YEAR(data_acquisto), MONTH(data_acquisto)');
		$query = $this->db->get('abbonamenti');
		return $query->result_array();
		
		/*
		SELECT YEAR( data_acquisto ) AS year_val, MONTH( data_acquisto ) AS month_val, COUNT( * ) AS total
		FROM abbonamenti
		WHERE codice_abbonamento LIKE  '%M%' 
		GROUP BY YEAR( data_acquisto ) , MONTH( data_acquisto ) 
		LIMIT 0 , 30
		*/
	}		
			
		
		
	public function update_abbonamenti_storico($id,$year)// storico sul db
	{		
		$this->load->helper('url');
		$nowhuman =  unix_to_human(time(), TRUE, 'us'); // U.S. time with seconds
		$up_data = array(
			'tipologia' => $this->input->post('tipo').$this->input->post('abbonamento').$this->input->post('tipologia').'-2013',
			'mese' => $this->input->post('data_scadenza_anno').'-'.$this->input->post('data_scadenza_mese').' 23:59:59',
			'totali' => $this->input->post('note'),
			'data_modifica' => $nowhuman,
			);
		//$this->db->where('id', $id);	
		$this->db->update('storico_abbonamenti', $up_data);
	}

}







