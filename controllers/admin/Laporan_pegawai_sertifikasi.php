<?php

class Laporan_pegawai_sertifikasi extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
		$this->load->model('Laporan_pegawai_sertifikasi_model');
	}
	public function index() {
	$this->session->unset_userdata('id_direktorat');
	$this->session->unset_userdata('id_bid'); 
	$this->session->unset_userdata('id_jabatan');  				
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/laporan/laporan_pegawai_sertifikasi_view',
 			'view_direktorat' => $this->Laporan_pegawai_sertifikasi_model->list_direktorat(),
 			'view_jabatan' => $this->Laporan_pegawai_sertifikasi_model->list_jabatan(),
 			'view_bidang' => $this->Laporan_pegawai_sertifikasi_model->list_bidang(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function proc_laporan() {
	

		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/laporan/laporan_pegawai_sertifikasi_view',
 			'view_direktorat' => $this->Laporan_pegawai_sertifikasi_model->list_direktorat(),
 			'view_jabatan' => $this->Laporan_pegawai_sertifikasi_model->list_jabatan(),
 			'view_bidang' => $this->Laporan_pegawai_sertifikasi_model->list_bidang(),
 			'view_laporan' => $this->Laporan_pegawai_sertifikasi_model->proc_laporan(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function export_laporan() {
	

		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/laporan/laporan_pegawai_sertifikasi_view', 			
 			'data_export' => $this->Laporan_pegawai_sertifikasi_model->data_export(), 			
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/laporan/export_laporan_pegawai_sertifikasi_view',$isi);
	}
	

}
?>