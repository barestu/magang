<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_diklat extends CI_Controller {
	// CONSTRUCT
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		} elseif ($this->session->userdata('level')=="user") {
			echo "<script>alert('Anda tidak memiliki hak untuk mengakses halaman ini!')</script>";
			redirect('login');
		}
		$this->load->helper('text');
		$this->load->model('model_diklat'); //panggil model buat nampilin data diklat
	}
	
	// INPUT DATA diklat ORGANIK
	public function input_diklat() {
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/organik/input_diklat',
				'username'=>$this->session->userdata('username'),
				'id_peg'=>$id);
		
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_input_diklat() {
		$input = $this->model_diklat->addData();
		
		if ($input === TRUE) {
			echo "<script>alert('Data berhasil ditambahkan!');history.go(-2);</script>";
		} elseif ($input === FALSE) {
			echo "<script>alert('Data gagal ditambahkan!');history.go(-1);</script>";
		}
	}
	
	// INPUT DATA diklat PKWT
	public function input_diklat_pkwt() {
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/pkwt/input_diklat',
				'username'=>$this->session->userdata('username'),
				'id_peg'=>$id);
		
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_input_diklat_pkwt() {
		$input = $this->model_diklat->addData();
		
		if ($input === TRUE) {
			echo "<script>alert('Data berhasil ditambahkan!');history.go(-2);</script>";
		} elseif ($input === FALSE) {
			echo "<script>alert('Data gagal ditambahkan!');history.go(-1);</script>";
		}
	}
	
	// EDIT DATA diklat ORGANIK
	public function edit_diklat() { // controller form edit
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/organik/edit_diklat',
				'username'=>$this->session->userdata('username'));
		$data['dd'] = $this->model_diklat->getData($id);
				
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_edit_diklat() { // controller proses edit
		$id = $this->input->get('id');
		$edit = $this->model_diklat->editData($id);
		
		if ($edit == TRUE) {
			echo "<script>alert('Data berhasil diperbaharui!');history.go(-2);</script>";
		} elseif ($edit == FALSE) {
			echo "<script>alert('Data gagal diperbaharui!');history.go(-1);</script>";
		}
	}
	
	// EDIT DATA diklat PKWT
	public function edit_diklat_pkwt() { // controller form edit
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/pkwt/edit_diklat',
				'username'=>$this->session->userdata('username'));
		$data['dd'] = $this->model_diklat->getData($id);
				
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_edit_diklat_pkwt() { // controller proses edit
		$id = $this->input->get('id');
		$edit = $this->model_diklat->editData($id);
		
		if ($edit == TRUE) {
			echo "<script>alert('Data berhasil diperbaharui!');history.go(-2);</script>";
		} elseif ($edit == FALSE) {
			echo "<script>alert('Data gagal diperbaharui!');history.go(-1);</script>";
		}
	}
	
	// DELETE DATA diklat
	public function proc_delete_diklat() { // c proses hapus data
		$id = $this->input->get('id');
		$delete = $this->model_diklat->deleteData($id);
		
		if ($delete == TRUE) {
			echo "<script>alert('Data berhasil dihapus!');history.go(-1);</script>";
		} elseif ($delete == FALSE) {
			echo "<script>alert('Data gagal dihapus!');history.go(-1);</script>";
		}
		
		
	}
}