<?php
class Soci extends CI_Controller {

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
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('soci/index', $data);
		$this->load->view('templates/footer_table');
	}
	

	public function view($id)  
	{
		$data = array();
		$data['soci_item'] = $this->soci_model->get_soci_by_id($id);
		
		if (empty($data['soci_item']))
		{
			show_404();
		}
	//	$data['title'] = $data['soci_item']['title'];
		$data['title'] = 'Scheda Socio';
		$data['tipologia'] = $this->tipologia->getData();
		$data['abbonamenti'] = $this->query_db->get_abbonamenti($id);
		$data['abbonamenti_scaduti'] = $this->query_db->get_abbonamenti_scaduti();
		$data['nome_abbonamenti'] = $this->query_db->get_nome_abbonamenti();
		$data['ultima_iscrizione'] = $this->query_db->get_ultima_iscrizione($id);		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('soci/view', $data);
		$this->load->view('templates/footer_table');
	}	
	
	
	public function create($id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Inserisci un nuovo socio';
		$data['tipologia'] = $this->tipologia->getData();


		$this->form_validation->set_rules('nome', 'nome', 'required');
		$this->form_validation->set_rules('cognome', 'cognome', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$maxnumtessera = $this->soci_model->get_maxtessera();
			$this->load->view('soci/create',  array('Ntessera' => $maxnumtessera['tessera']));
			$this->load->view('templates/footer_form');
		}
		else
		{
			$this->soci_model->set_soci();
			$data['soci'] = $this->soci_model->get_soci();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);	
			$this->load->view('soci/success', $data);
			$this->load->view('templates/footer');
		}
	}
	
	
	public function edit($id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['tipologia'] = $this->tipologia->getData();
		$this->form_validation->set_rules('nome', 'nome', 'required');
		$this->form_validation->set_rules('cognome', 'cognome', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$data['title'] = 'Modifica dati';
			$data['soci_item'] = $this->soci_model->get_soci_by_id($id);
			$this->load->view('templates/header', $data);
			$this->load->view('soci/edit_script', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('soci/edit');
			$this->load->view('templates/footer_form');
		}
		else
		{
			$data['title'] = 'Dati modificati';

			$this->soci_model->update_soci();
			$data['soci_item'] = $this->soci_model->get_soci_by_id($id);
			
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);	
			$this->load->view('soci/success_edit', $data);
			$this->load->view('templates/footer');
		}
	}
	

	public function get_dump_soci()
	{
		$this->load->dbutil();
		$this->load->helper('file');
		$report = $this->soci_model->dump_soci();
		$new_report = $this->dbutil->csv_from_result($report);
		$dump_filename = 'dump/Lista_Soci_'.unix_to_human(time()).'.csv';
		write_file($dump_filename, $new_report);
		redirect(base_url($dump_filename), 'refresh');
	}	
	
	
	public function delete_soci($id)
	{
		$data['title'] = 'Elimina dati';
		$this->soci_model->delete_soci($id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);	
		$this->load->view('templates/success', $data);	
		$this->load->view('templates/footer');	  
	}
	
}