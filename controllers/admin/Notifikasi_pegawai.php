<?php
class Notifikasi_pegawai extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->model('Notifikasi_pegawai_model');
	}
	public function index() {
		$this->session->unset_userdata('notifikasi');				
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/notifikasi_pegawai_view',
 			'kontrak_tempo' => $this->Notifikasi_pegawai_model->kontrak_tempo(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
}
?>