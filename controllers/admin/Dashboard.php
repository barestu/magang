<?php

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
	}
	public function index() {								
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/dashboard_view'
 			,'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('id_user_login');
		session_destroy();
		redirect('login');
	}
	

}
?>