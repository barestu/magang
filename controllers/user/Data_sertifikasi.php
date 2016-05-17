<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_sertifikasi extends CI_Controller {
	// CONSTRUCT
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
		$this->load->model('model_sertifikasi'); //panggil model buat nampilin data sertifikasi
	}
	
	// INPUT DATA sertifikasi ORGANIK
	public function input_sertifikasi() {
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/organik/input_sertifikasi',
				'username'=>$this->session->userdata('username'),
				'id_peg'=>$id);
		
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_input_sertifikasi() {
		$input = $this->model_sertifikasi->addData();
		
		if ($input === TRUE) {
			echo "<script>alert('Data berhasil ditambahkan!');history.go(-2);</script>";
		} elseif ($input === FALSE) {
			echo "<script>alert('Data gagal ditambahkan!');history.go(-1);</script>";
		}
	}	
	
	// INPUT DATA sertifikasi PKWT
	public function input_sertifikasi_pkwt() {
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/pkwt/input_sertifikasi',
				'username'=>$this->session->userdata('username'),
				'id_peg'=>$id);
		
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_input_sertifikasi_pkwt() {
		$input = $this->model_sertifikasi->addData();
		
		if ($input === TRUE) {
			echo "<script>alert('Data berhasil ditambahkan!');history.go(-2);</script>";
		} elseif ($input === FALSE) {
			echo "<script>alert('Data gagal ditambahkan!');history.go(-1);</script>";
		}
	}
	
	// EDIT DATA sertifikasi ORGANIK
	public function edit_sertifikasi() { // controller form edit
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/organik/edit_sertifikasi',
				'username'=>$this->session->userdata('username'));
		$data['ds'] = $this->model_sertifikasi->getData($id);
				
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_edit_sertifikasi() { // controller proses edit
		$id = $this->input->get('id');
		$edit = $this->model_sertifikasi->editData($id);
		
		if ($edit == TRUE) {
			echo "<script>alert('Data berhasil diperbaharui!');history.go(-2);</script>";
		} elseif ($edit == FALSE) {
			echo "<script>alert('Data gagal diperbaharui!');history.go(-1);</script>";
		}
	}
		
	// EDIT DATA sertifikasi PKWT
	public function edit_sertifikasi_pkwt() { // controller form edit
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/pkwt/edit_sertifikasi',
				'username'=>$this->session->userdata('username'));
		$data['ds'] = $this->model_sertifikasi->getData($id);
				
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_edit_sertifikasi_pkwt() { // controller proses edit
		$id = $this->input->get('id');
		$edit = $this->model_sertifikasi->editData($id);
		
		if ($edit == TRUE) {
			echo "<script>alert('Data berhasil diperbaharui!');history.go(-2);</script>";
		} elseif ($edit == FALSE) {
			echo "<script>alert('Data gagal diperbaharui!');history.go(-1);</script>";
		}
	}
	
	// DELETE DATA sertifikasi
	public function proc_delete_sertifikasi() { // c proses hapus data
		$id = $this->input->get('id');
		$delete = $this->model_sertifikasi->deleteData($id);
		
		if ($delete == TRUE) {
			echo "<script>alert('Data berhasil dihapus!');history.go(-1);</script>";
		} elseif ($delete == FALSE) {
			echo "<script>alert('Data gagal dihapus!');history.go(-1);</script>";
		}
		
		
	}
}