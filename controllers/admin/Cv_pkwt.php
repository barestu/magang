<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cv_pkwt extends CI_Controller {
	// CONSTRUCT
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
		$this->load->model('model_cv_pkwt');
	}
	
	// INPUT CV
	public function index() {
		$id = $this->input->get('id');
		$data = array('title' => 'SIPEG',
 			'isi' => 'admin/cv/cv_input',
 			'username' => $this->session->userdata('username'));
		$data['data_peg'] = $this->model_cv_pkwt->getDataPegawai($id);
		$data['data_diklat'] = $this->model_cv_pkwt->getDataDiklat($id);
		$data['data_sertifikasi'] = $this->model_cv_pkwt->getDataSertif($id);
		$data['data_proyek'] = $this->model_cv_pkwt->getDataProyek($id);
		
 		$this->load->view('admin/cv/layout/wrapper_input', $data);
	}
	
	// PRINT CV
	public function proc_input_cv_pkwt() {
		
	}
	
}
?>
