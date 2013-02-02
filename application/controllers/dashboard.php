<?php
class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('soci_model');
		$this->load->model('abbonamenti_model');

	}

	public function index()
	{	
		$data['soci'] = $this->soci_model->get_soci();
		$data['title'] = 'Lista Soci';
		$data['tipologia'] = $this->tipologia->getData();
		$data['abbonamenti_scaduti'] = $this->abbonamenti_model->get_abbonamenti_scaduti();
		$data['nome_soci'] = $this->query_db->get_nome_soci();
		$data['nome_abbonamenti'] = $this->query_db->get_nome_abbonamenti();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/footer_table');
	}

	
}