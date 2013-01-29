<?php
class CI_query_db	{

		public $db;
	
		public function __construct()
		{
			$this->ci =& get_instance();
			$this->ci->load->database();
			$this->db=$this->ci->db;
			}

		public function get_abbonamenti($id_socio = FALSE)
		{
			if ($id_socio === FALSE)
			{
				$query = $this->db->get('abbonamenti');
				return $query->result_array();
			}
				$query = $this->db->get_where('abbonamenti', array('id_socio' => $id_socio));
				return $query->result_array();		
			}
		
		public function get_abbonamenti_scaduti()
		{
			$now = unix_to_human(time());
			$mesidue = unix_to_human((time()-5184000)); // la data di oggi -60 giorni 
			$this->db->where('scadenza <', $now); 
			//$this->db->where('scadenza >', $mesidue); // 
			$query = $this->db->get('abbonamenti');
			return $query->result_array();
			}
	
	
		public function get_tipo_abbonamenti($id = FALSE)
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
	
}
