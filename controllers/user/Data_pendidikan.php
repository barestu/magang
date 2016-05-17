<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_pendidikan extends CI_Controller {
	// CONSTRUCT
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
		$this->load->model('model_pendidikan'); //panggil model buat nampilin data pendidikan
	}
	
	// INPUT DATA PENDIDIKAN
	public function input_pendidikan() {
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/organik/input_pendidikan',
				'username'=>$this->session->userdata('username'),
				'id_peg'=>$id);
		
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_input_pendidikan() {
		$input = $this->model_pendidikan->addData();
		
		if ($input === TRUE) {
			echo "<script>alert('Data berhasil ditambahkan!');history.go(-2);</script>";
		} elseif ($input === FALSE) {
			echo "<script>alert('Data gagal ditambahkan!');history.go(-1);</script>";
		}
	}
	
	// EDIT DATA PENDIDIKAN
	public function edit_pendidikan() { // controller form edit
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/organik/edit_pendidikan',
				'username'=>$this->session->userdata('username'));
		$data['dp'] = $this->model_pendidikan->getData($id);
				
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_edit_pendidikan() { // controller proses edit
		$id = $this->input->get('id');
		$edit = $this->model_pendidikan->editData($id);
		
		if ($edit == TRUE) {
			echo "<script>alert('Data berhasil diperbaharui!');history.go(-2);</script>";
		} elseif ($edit == FALSE) {
			echo "<script>alert('Data gagal diperbaharui!');history.go(-1);</script>";
		}
	}
	
	// DELETE DATA PENDIDIKAN
	public function proc_delete_pendidikan() { // c proses hapus data
		$id = $this->input->get('id');
		$delete = $this->model_pendidikan->deleteData($id);
		
		if ($delete == TRUE) {
			echo "<script>alert('Data berhasil dihapus!');history.go(-1);</script>";
		} elseif ($delete == FALSE) {
			echo "<script>alert('Data gagal dihapus!');history.go(-1);</script>";
		}
		
		
	}
}