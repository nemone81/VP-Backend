<?php
class Backup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
   	}

	public function backup_db()
	{
		$this->load->dbutil();
		$backup_filename = 'backup_my_Sql/Database'.unix_to_human(time()).'.zip';
		$prefs = array(
                'format'      => 'zip',
                'filename'    => 'Database'.unix_to_human(time()).'.zip',
        );
        $backup = $this->dbutil->backup($prefs);
		write_file($backup_filename, $backup); 
	}	

}