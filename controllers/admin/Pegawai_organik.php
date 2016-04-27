<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai_organik extends CI_Controller {
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
		$this->load->model('model_organik'); //panggil model buat nampilin data pegawai
	}
	
	// INDEX
	public function index() {
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/pegawai_organik',
				'username'=>$this->session->userdata('username'));
		$data['data_organik'] = $this->model_organik->getAllData();
		
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	// INPUT
	public function input() {
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/input_organik',
				'username'=>$this->session->userdata('username'));
		$data['next_id'] = $this->model_organik->getNextId();
		$data['data_bidang'] = $this->model_organik->getBidang();
		$data['data_jabatan'] = $this->model_organik->getJabatan();
		$data['data_direktorat'] = $this->model_organik->getDirektorat();
		
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_input() {
		$input = $this->model_organik->addData();
		
		if ($input === TRUE) {
			echo "<script>alert('Data berhasil ditambahkan!');history.go(-2);</script>";
		} elseif ($input === FALSE) {
			echo "<script>alert('Data gagal ditambahkan!');history.go(-1);</script>";
		}
	}
	
	// EDIT
	public function edit() {
		$id = $this->input->get('id');
		
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/edit_organik',
				'username'=>$this->session->userdata('username'));
		$data['row'] = $this->model_organik->getData($id); // data pegawai yang sudah ada sebelumnya
		$data['data_bidang'] = $this->model_organik->getBidang();
		$data['data_jabatan'] = $this->model_organik->getJabatan();
		$data['data_direktorat'] = $this->model_organik->getDirektorat();
				
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_edit() {
		$id = $this->input->get('id');
		$edit1 = $this->model_organik->editDataPegawai($id);
		$edit2 = $this->model_organik->editDataOrganik($id);
		
		if ($edit1 || $edit2 == TRUE) {
			echo "<script>alert('Data berhasil diperbaharui!');history.go(-2);</script>";
		} elseif ($edit1 || $edit2 == FALSE) {
			echo "<script>alert('Data gagal diperbaharui!');history.go(-1);</script>";
		}
	}
	
	// DELETE
	public function proc_delete() {
		$id = $this->input->get('id');
		$delete = $this->model_organik->deleteData($id);
		
		if ($delete === TRUE) {
			echo "<script>alert('Data berhasil dihapus!');history.go(-1);</script>";
		} elseif ($delete === FALSE) {
			echo "<script>alert('Data gagal dihapus!');history.go(-1);</script>";
		}
	}
	
	// LOGOUT
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
}
?>