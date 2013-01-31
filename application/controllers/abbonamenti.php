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
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('abbonamenti/abb_create_script', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('abbonamenti/abb_create', $data);
			$this->load->view('templates/footer_form');
		}
		else
		{
			$data['nome_abbonamenti'] = $this->query_db->get_nome_abbonamenti();
			$data['nome_soci'] = $this->query_db->get_nome_soci();
			$this->abbonamenti_model->set_abbonamenti();
			$data['abbonamenti'] = $this->abbonamenti_model->get_abbonamenti();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);	
			$this->load->view('abbonamenti/abb_success', $data);
			$this->load->view('templates/footer');
		}
	}
	
	public function edit($id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Modifica dati';
		$data['tipologia'] = $this->tipologia->getData();
		
		if ($this->form_validation->run() === FALSE)
		{
			$data['abbonamenti_item'] = $this->abbonamenti_model->get_abbonamenti($id);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('abbonamenti/abb_edit');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->abbonamenti_model->update_abbonamenti();
			$data['abbonamenti_item'] = $this->abbonamenti_model->get_abbonamenti($id);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);	
			$this->load->view('abbonamenti/abb_success_edit', $data);
			$this->load->view('templates/footer');
		}
	}
	
	public function delete_abbonamenti($id)
	{
		$data['title'] = 'Elimina soci';
		$this->abbonamenti_model->delete_abbonamenti($id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);	
		$this->load->view('templates/success', $data);	
		$this->load->view('templates/footer');	  
	}	

	
}