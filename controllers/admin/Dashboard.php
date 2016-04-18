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
		/*$data['username'] = $this->session->userdata('username');*/
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/dashboard',
				'username'=>$this->session->userdata('username'));
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
}
?>