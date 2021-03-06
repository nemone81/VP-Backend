<?php
class Abbonamenti extends CI_Controller {
 	
	public function __construct()
	{
	    session_start();
	    parent::__construct();
	    if ( !isset($_SESSION['username']) ) {
   	    redirect('admin');
   	    }
	
		$this->load->model('abbonamenti_model');
		$this->load->model('soci_model');
	
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


 /*	public function view($slug)
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
	}	*/
	
	
	public function create($id_socio)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Inserisi un abbonamento';
		$data['tipologia'] = $this->tipologia->getData();
		$data['soci_item'] = $this->soci_model->get_soci_by_id($id_socio);				
		
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
			//$data['nome_abbonamenti'] = $this->tipologia->get_nome_abbonamenti();
			//$data['nome_soci'] = $this->tipologia->get_nome_soci();
			$this->abbonamenti_model->set_abbonamenti();
			$this->session->set_flashdata('abbonamento', 'new_abbonamento');
			redirect('soci/'.$id_socio, 'refresh');
			/*
			
			$data['abbonamenti'] = $this->abbonamenti_model->get_abbonamenti_id_socio($id_socio);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);	
			$this->load->view('abbonamenti/abb_success', $data);
			$this->load->view('templates/footer');*/
		}
	}
	
	public function edit($id, $id_socio)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Modifica dati';
		$data['tipologia'] = $this->tipologia->getData();
		$data['nome_abbonamenti'] = $this->tipologia->get_nome_abbonamenti();
		$data['nome_soci'] = $this->tipologia->get_nome_soci();

		$this->form_validation->set_rules('abbonamento', 'abbonamento', 'required');		
		if ($this->form_validation->run() === FALSE)
		{
			$data['abbonamenti_item'] = $this->abbonamenti_model->get_abbonamenti($id);
			$data['soci_item'] = $this->soci_model->get_soci_by_id($id_socio);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('abbonamenti/abb_edit_script', $data);
			$this->load->view('abbonamenti/abb_edit');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->abbonamenti_model->update_abbonamenti($id);
			$this->session->set_flashdata('abbonamento', 'edit_abbonamento');
			redirect('soci/'.$id_socio, 'refresh');
			
			
			/*
			
			$data['abbonamenti_item'] = $this->abbonamenti_model->get_abbonamenti($id);
			$data['soci_item'] = $this->soci_model->get_soci_by_id($id_socio);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);	
			$this->load->view('abbonamenti/abb_success_edit', $data);
			$this->load->view('templates/footer');*/
			
			
			
			
			
		}
	}
	
	public function delete_abbonamenti($id, $id_socio)
	{
		$data['title'] = 'Elimina soci';
		$this->abbonamenti_model->delete_abbonamenti($id);
		redirect('soci/'.$id_socio, 'refresh');
	}	

	
}