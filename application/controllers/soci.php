<?php
class Soci extends CI_Controller {

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
		$data['title'] = 'Scheda Socio';
		$data['tipologia'] = $this->tipologia->getData();
		$data['abbonamenti'] = $this->abbonamenti_model->get_abbonamenti_id_socio($id);
		$data['abbonamenti_scaduti'] = $this->abbonamenti_model->get_abbonamenti_scaduti();
		$data['nome_abbonamenti'] = $this->tipologia->get_nome_abbonamenti();
		$data['ultima_iscrizione'] = $this->abbonamenti_model->get_ultima_iscrizione($id);		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('soci/view', $data);
		$this->load->view('templates/footer_table');
	}	
	
	
	public function create($id = null)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Inserisci un nuovo socio';
		$data['tipologia'] = $this->tipologia->getData();


		$this->form_validation->set_rules('nome', 'nome', 'required');
		$this->form_validation->set_rules('cognome', 'cognome', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$data['soci_item'] = '';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$maxnumtessera = $this->soci_model->get_maxtessera();
			$this->load->view('soci/create_edit',  array('Ntessera' => $maxnumtessera['tessera']));
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
			$this->load->view('soci/create_edit');
			$this->load->view('templates/footer_form');
		}
		else
		{
			$data['title'] = 'Dati modificati';

			$this->soci_model->update_soci($id);
			$data['soci_item'] = $this->soci_model->get_soci_by_id($id);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);	
			$this->load->view('soci/success_edit', $data, $id);
			$this->load->view('templates/footer');
		}
	}
	
	public function get_csv_soci()
	{
		$this->load->dbutil();
		$report = $this->soci_model->dump_soci();
		$new_report = $this->dbutil->csv_from_result($report);
		$csv_filename = 'export_csv/Lista_Soci_'.unix_to_human(time()).'.csv';
		write_file($csv_filename, $new_report);
		redirect(base_url($csv_filename), 'refresh');
	}	
	
	public function backup_db()
	{
		$this->load->dbutil();
		$backup_filename = 'backup_my_Sql/Database_'.unix_to_human(time()).'.zip';
		$prefs = array(
                'format'      => 'zip',
                'filename'    => 'Database_'.unix_to_human(time()).'.zip',
        );
        $backup = $this->dbutil->backup($prefs);
		write_file($backup_filename, $backup); 
	}	
	
	public function delete_soci($id)
	{
		$data['title'] = 'Elimina dati';
		$this->soci_model->delete_soci($id);
		redirect('soci/', 'refresh');
	}
	
	
	
	
	
	
}