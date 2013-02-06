<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		session_start();
		parent::__construct();
		if ( !isset($_SESSION['username']) ) {
		redirect('admin');
		}
		
		$this->load->model('soci_model');
		$this->load->model('abbonamenti_model');

	}

	public function index()
	{	
	
		$data['storico_iscritti'] = $this->abbonamenti_model->get_storico_abbonamenti('I');
		$data['storico_mensili'] = $this->abbonamenti_model->get_storico_abbonamenti('M');
		$data['storico_trimestrali'] = $this->abbonamenti_model->get_storico_abbonamenti('T');
		$data['storico_annuali'] = $this->abbonamenti_model->get_storico_abbonamenti('A');
		$data['storico_coupon'] = $this->abbonamenti_model->get_storico_abbonamenti('K');

		$this->abbonamenti_model->update_abbonamenti_storico();
	}

	
}