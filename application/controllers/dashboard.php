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
		$data['soci'] = $this->soci_model->get_soci();
		$data['title'] = 'Lista Soci';
		$data['tipologia'] = $this->tipologia->getData();
		$data['abbonamenti_scaduti'] = $this->abbonamenti_model->get_abbonamenti_scaduti();
		$data['nome_soci'] = $this->tipologia->get_nome_soci();
		$data['nome_abbonamenti'] = $this->tipologia->get_nome_abbonamenti();
		$data['numero_iscritti_attivi'] = $this->abbonamenti_model->get_numero_abbonamenti('I');
		$data['numero_mensili_attivi'] = $this->abbonamenti_model->get_numero_abbonamenti('M');
		$data['numero_annuali_attivi'] = $this->abbonamenti_model->get_numero_abbonamenti('A');
		$data['numero_trimestrali_attivi'] = $this->abbonamenti_model->get_numero_abbonamenti('T');


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/footer_table');
	}

	
}