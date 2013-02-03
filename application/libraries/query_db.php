<?php
class CI_query_db	{

		public $db;
	
		public function __construct() // connessione al DB
		{
			$this->ci =& get_instance();
			$this->ci->load->database();
			$this->db=$this->ci->db;
			}

		/*public function get_abbonamenti($id_socio = FALSE) // restituisce Lista Abbonamenti opzionalmente per id_socio
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
			$this->db->like('codice_abbonamento', 'I' ); // tipologia Iscrizione
			$this->db->or_like('codice_abbonamento', 'T' ); // tipologia Trimestrale
			$this->db->or_like('codice_abbonamento', 'A' ); // tipologia Annuale
			$query = $this->db->get('abbonamenti');
			return $query->result_array();
			}
			
			*/
	
/*
		public function get_nome_abbonamenti($id = FALSE) // restituisce array codice abbonamento => nome abbonamento opzionalmente per id_abbonamento
		{
			if ($id === FALSE)
			{
				$return = array();
				$this->db->select('codice, nome');
				$query = $this->db->get('tipo_abbonamenti');
				foreach($query->result() as $row) 
				{
					$return[$row->codice] = $row->nome;
				}
				return $return;
			}
				$query = $this->db->get_where('tipo_abbonamenti', array('id' => $id));
				return $query->result_array();		
			}
			
		public function get_nome_soci($id = FALSE)  // restituisce array id_socio => nome-cognome socio opzionalmente per id_socio
		{
			if ($id === FALSE)
			{
				$return = array();
				$this->db->select('id, nome, cognome');
				$query = $this->db->get('soci');
				foreach($query->result() as $row) 
				{
					$return[$row->id] = $row->nome.' '.$row->cognome;
				}
				return $return;
			}
				$query = $this->db->get_where('tipo_abbonamenti', array('id' => $id));
				return $query->result_array();		
			}
*/
		
		
}
