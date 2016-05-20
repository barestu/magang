<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_talenta extends CI_Controller {
	// CONSTRUCT
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
		$this->load->model('model_talenta'); //panggil model buat nampilin data talenta
	}
	
	// INPUT DATA talenta
	public function input_talenta() {
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/organik/input_talenta',
				'username'=>$this->session->userdata('username'),
				'id_peg'=>$id);
		$data['data_grade'] = $this->model_talenta->getGradeList(); // dropdown list grade di form
		
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_input_talenta() {
		$input = $this->model_talenta->addData();
		
		if ($input === TRUE) {
			echo "<script>alert('Data berhasil ditambahkan!');history.go(-2);</script>";
		} elseif ($input === FALSE) {
			echo "<script>alert('Data gagal ditambahkan!');history.go(-1);</script>";
		}
	}
	
	// EDIT DATA talenta
	public function edit_talenta() { // controller form edit
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/organik/edit_talenta',
				'username'=>$this->session->userdata('username'));			
		$data['data_grade'] = $this->model_talenta->getGradeList(); // dropdown list grade di form
		$data['dt'] = $this->model_talenta->getData($id);
				
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_edit_talenta() { // controller proses edit
		$id = $this->input->get('id');
		$edit = $this->model_talenta->editData($id);
		
		if ($edit == TRUE) {
			echo "<script>alert('Data berhasil diperbaharui!');history.go(-2);</script>";
		} elseif ($edit == FALSE) {
			echo "<script>alert('Data gagal diperbaharui!');history.go(-1);</script>";
		}
	}
	
	// DELETE DATA talenta
	public function proc_delete_talenta() { // c proses hapus data
		$id = $this->input->get('id');
		$delete = $this->model_talenta->deleteData($id);
		
		if ($delete == TRUE) {
			echo "<script>alert('Data berhasil dihapus!');history.go(-1);</script>";
		} elseif ($delete == FALSE) {
			echo "<script>alert('Data gagal dihapus!');history.go(-1);</script>";
		}
		
		
	}
}