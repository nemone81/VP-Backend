<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct()
	{
		session_start();
		parent::__construct();
		if ( !isset($_SESSION['username']) ) {
		    die();
		}
		
		$this->load->model('soci_model');
		$this->load->model('abbonamenti_model');
	}

	public function getJsonPData($callback, $anno = null)
	{	
		if ($anno == null) $anno = date('Y');
		
		switch($callback)
		{
			case 'iscrizioni':
				$data = $this->abbonamenti_model->get_storico_abbonamenti('I',$anno);
				break;
			case 'mensili':
				$data = $this->abbonamenti_model->get_storico_abbonamenti('M',$anno);
				break;
			case 'annuali':
				$data = $this->abbonamenti_model->get_storico_abbonamenti('A',$anno);
				break;
			case 'carnet':
				$data = $this->abbonamenti_model->get_storico_abbonamenti('K',$anno);
				break;
			case 'trimestrali':
				$data = $this->abbonamenti_model->get_storico_abbonamenti('T',$anno);
				break;
			default:
				die("Error");
				
		}

		// come prima cosa creiamo un array che associa ad ogni chiave (mese) il valore
		$data_assoc = array();
		foreach ($data as $d) {
			$key = $d['month_val'];
			$value = $d['total'];
			$data_assoc[$key] = $value;
		}
		
		// popoliamo $data_assoc con i mesi che non contiene
		$json_p_pre = array();
		for ($i=1; $i<=12; $i++) {
			if (isset($data_assoc[$i])) $json_p_pre[$i] = $data_assoc[$i];
			else $json_p_pre[$i] = 0;
		}
		
		// a questo punto abbiamo in json_p_pre tutti i mesi
		
		// creiamo l'array che genera il json formattato correttamente 
		$json_p = array();
		foreach ($json_p_pre as $key => $value) {
			$json_p[] = array((int)$key, (int)$value);
		}
		
		$json_i = 'var '.$callback.'='.json_encode($json_p);
		
	    header('Content-Type: text/javascript; charset=utf8');
//	    header('Access-Control-Allow-Origin: http://www.example.com/');
	    header('Access-Control-Max-Age: 3628800');
//	    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
	
	    echo $json_i;
	
	}
}