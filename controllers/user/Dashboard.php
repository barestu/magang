<?php

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
		$this->load->model('Dashboard_model');
	}
	public function index() {		
		$this->session->unset_userdata('notifikasi');								
		$isi = array('title' => 'SIPEG',
 			'isi' => 'user/dashboard_view',
 			'notifikasi' => $this->Dashboard_model->notifikasi(),
 			'organik' => $this->Dashboard_model->pegawai_organik(),
 			'pkwt' => $this->Dashboard_model->pegawai_pkwt(),
 			'username' => $this->session->userdata('username'),
 			'id_status' => $this->session->userdata('id_status'));
		
 		$this->load->view('user/layout/wrapper',$isi);
	}

	public function logout() {
		$this->session->unset_userdata('status_akun');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('id_user_login');
		$this->session->unset_userdata('notifikasi');
		$this->session->unset_userdata('status_akun');
		$this->session->unset_userdata('nip');
		$this->session->unset_userdata('id_status');
		session_destroy();
		redirect('login');
	}
	

}
?>