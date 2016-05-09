<?php

class Cv extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
		//$this->load->model('Cv_model');
	}
	public function index() {				
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/cv/cv_view',
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout_cv/wrapper_cv',$isi);
	}
	
}
?>
