<?php

class CI_tipologia
{


	public $db;

	public function __construct() // connessione al DB
	{
		$this->ci =& get_instance();
		$this->ci->load->database();
		$this->db=$this->ci->db;
		}

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
			$query = $this->db->get_where('soci', array('id' => $id));
			return $query->result_array();		
		}

    public function getData() // tipologie socio
    {
        return array(
        	'S' => 'Standard',
        	'U' => 'Universitario',
        	'B' => 'Bambino'
        );
    }

}