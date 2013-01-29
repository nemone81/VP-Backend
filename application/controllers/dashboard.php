<?php
class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('soci_model');
	}

	public function index()
	{	
		$data['soci'] = $this->soci_model->get_soci();
		$data['title'] = 'Lista Soci';
		$data['tipologia'] = $this->tipologia->getData();
		$data['abbonamenti_scaduti'] = $this->query_db->get_abbonamenti_scaduti();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/footer_table');
	}

	
}