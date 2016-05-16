<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cv_organik extends CI_Controller {
	// CONSTRUCT
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
		$this->load->model('model_cv_organik');
	}
	
	// INDEX
	public function index() {
		$id = $this->input->get('id');	
			
		$data = array('title' => 'SIPEG',
 			'isi' => 'admin/cv/cv_view',
 			'username' => $this->session->userdata('username'));
		$data['data_peg'] = $this->model_cv_organik->getDataPegawai($id);
		$data['data_pendidikan'] = $this->model_cv_organik->getDataPendidikan($id);
		$data['data_diklat'] = $this->model_cv_organik->getDataDiklat($id);
		$data['data_sertifikasi'] = $this->model_cv_organik->getDataSertif($id);
		$data['data_mutasi'] = $this->model_cv_organik->getDataMutasi($id);
		$data['data_talenta'] = $this->model_cv_organik->getDataTalenta($id);
		$data['data_keluarga'] = $this->model_cv_organik->getDataKeluarga($id);
		
 		$this->load->view('admin/cv/layout/wrapper', $data);
	}
	
}
?>
