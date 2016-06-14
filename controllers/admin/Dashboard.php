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
		$this->session->unset_userdata('status_akun');
		$this->session->unset_userdata('notifikasi');								
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/dashboard_view',
 			'notifikasi' => $this->Dashboard_model->notifikasi(),
 			'organik' => $this->Dashboard_model->pegawai_organik(),
 			'pkwt' => $this->Dashboard_model->pegawai_pkwt(),
 			//chart bidang
 			'direksi' => $this->Dashboard_model->direksi_bidang(),
 			'pemasaran' => $this->Dashboard_model->pemasaran_bidang(),
 			'pengembangan_usaha' => $this->Dashboard_model->pengembangan_usaha_bidang(),
 			'pengusahaan' => $this->Dashboard_model->pengusahaan_bidang(),
 			'pembangkit' => $this->Dashboard_model->pembangkit_bidang(),
 			't_dan_d' => $this->Dashboard_model->t_dan_d_bidang(),
 			'konstruksi' => $this->Dashboard_model->konstruksi_bidang(),
 			'keuangan' => $this->Dashboard_model->keuangan_bidang(),
 			'akuntansi' => $this->Dashboard_model->akutansi_bidang(),
 			'sdm' => $this->Dashboard_model->sdm_bidang(),
 			'umum' => $this->Dashboard_model->umum_bidang(),
 			'hukum' => $this->Dashboard_model->hukum_bidang(),
 			'humas' => $this->Dashboard_model->humas_bidang(),
 			'pengadaan' => $this->Dashboard_model->pengadaan_bidang(),
 			'audit_internal' => $this->Dashboard_model->audit_internal_bidang(),
 			'mmr' => $this->Dashboard_model->mmr_bidang(),
 			'pengawas_internal' => $this->Dashboard_model->pengawas_internal_bidang(),
 			'informasi_teknologi' => $this->Dashboard_model->informasi_teknologi_bidang(),
 			'jumlah_bidang' => $this->Dashboard_model->jumlah_bidang(),
 			//chart jabatan
 			'project_dir' => $this->Dashboard_model->project_dir(),
 			'project_manager' => $this->Dashboard_model->project_manager(),
 			'ptl' => $this->Dashboard_model->ptl(),
 			'civil_engineer' => $this->Dashboard_model->civil_engineer(),
 			'mechanical_engineer' => $this->Dashboard_model->mechanical_engineer(),
 			'i_c' => $this->Dashboard_model->i_c(),
 			'electrical_engineer' => $this->Dashboard_model->electrical_engineer(),
 			'qa_qc' => $this->Dashboard_model->qa_qc(),
 			'boiler' => $this->Dashboard_model->boiler(),
 			'hse' => $this->Dashboard_model->hse(),
 			'piping' => $this->Dashboard_model->piping(),
 			'geodetic' => $this->Dashboard_model->geodetic(),
 			'jumlah_jabatan' => $this->Dashboard_model->jumlah_jabatan(),
 			'username' => $this->session->userdata('username')
 			);

 		$this->load->view('admin/layout/wrapper',$isi);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('id_user_login');
		$this->session->unset_userdata('notifikasi');
		$this->session->unset_userdata('status_akun');
		session_destroy();
		redirect('login');
	}
	

}
?>