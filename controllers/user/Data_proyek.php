<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_proyek extends CI_Controller {
	// CONSTRUCT
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
		$this->load->model('model_proyek'); //panggil model buat nampilin data proyek
	}
	
	// INPUT DATA proyek PKWT
	public function input_proyek() {
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/pkwt/input_proyek',
				'username'=>$this->session->userdata('username'),
				'id_peg'=>$id);
		
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_input_proyek() {
		$input = $this->model_proyek->addData();
		
		if ($input === TRUE) {
			echo "<script>alert('Data berhasil ditambahkan!');history.go(-2);</script>";
		} elseif ($input === FALSE) {
			echo "<script>alert('Data gagal ditambahkan!');history.go(-1);</script>";
		}
	}
		
	// EDIT DATA proyek PKWT
	public function edit_proyek() { // controller form edit
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/pkwt/edit_proyek',
				'username'=>$this->session->userdata('username'));
		$data['dpr'] = $this->model_proyek->getData($id);
				
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_edit_proyek() { // controller proses edit
		$id = $this->input->get('id');
		$edit = $this->model_proyek->editData($id);
		
		if ($edit == TRUE) {
			echo "<script>alert('Data berhasil diperbaharui!');history.go(-2);</script>";
		} elseif ($edit == FALSE) {
			echo "<script>alert('Data gagal diperbaharui!');history.go(-1);</script>";
		}
	}
	
	// DELETE DATA proyek
	public function proc_delete_proyek() { // c proses hapus data
		$id = $this->input->get('id');
		$delete = $this->model_proyek->deleteData($id);
		
		if ($delete == TRUE) {
			echo "<script>alert('Data berhasil dihapus!');history.go(-1);</script>";
		} elseif ($delete == FALSE) {
			echo "<script>alert('Data gagal dihapus!');history.go(-1);</script>";
		}
		
		
	}
}