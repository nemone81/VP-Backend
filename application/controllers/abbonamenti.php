<?php
class Abbonamenti extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('abbonamenti_model');
	}

	public function index()
	{	
		$data['abbonamenti'] = $this->abbonamenti_model->get_abbonamenti();
		$data['title'] = 'Lista abbonamenti';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('abbonamenti/abb_index', $data);
		$this->load->view('templates/footer');
	}


	public function view($slug)
	{
		$data['abbonamenti_item'] = $this->abbonamenti_model->get_abbonamenti($slug);
		
		if (empty($data['abbonamenti_item']))
		{
			show_404();
		}
	//	$data['title'] = $data['abbonamenti_item']['title'];
		$data['title'] = 'Scheda abbonamentio';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('abbonamenti/abb_view', $data);
		$this->load->view('templates/footer');
	}	
	
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Inserisi un abbonamento';
		$data['tipologia'] = $this->tipologia->getData();
		$this->form_validation->set_rules('abbonamento', 'abbonamento', 'required');		
	//	$this->form_validation->set_rules('scadenza', 'scadenza', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('abbonamenti/abb_create_script', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('abbonamenti/abb_create', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->abbonamenti_model->set_abbonamenti();
			$data['abbonamenti'] = $this->abbonamenti_model->get_abbonamenti();
			//$datas['soci'] = $this->soci_model->get_soci();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);	
			$this->load->view('abbonamenti/abb_success', $data);
			$this->load->view('templates/footer');
		}
	}
	
	public function edit($slug)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Modifica dati';
		$data['tipologia'] = $this->tipologia->getData();
		$this->form_validation->set_rules('nome', 'nome', 'required');
		$this->form_validation->set_rules('cognome', 'cognome', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$data['abbonamenti_item'] = $this->abbonamenti_model->get_abbonamenti($slug);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('abbonamenti/abb_edit');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->abbonamenti_model->update_abbonamenti();
			$data['abbonamenti_item'] = $this->abbonamenti_model->get_abbonamenti($slug);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);	
			$this->load->view('abbonamenti/abb_success_edit', $data);
			$this->load->view('templates/footer');
		}
	}

	
}