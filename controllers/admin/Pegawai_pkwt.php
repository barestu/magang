<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai_pkwt extends CI_Controller {
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
		$this->load->model('model_pkwt'); //panggil model buat nampilin data pegawai
	}
	
	// INDEX
	public function index() {
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/pkwt/pegawai_pkwt',
				'username'=>$this->session->userdata('username'));
		$data['data_pkwt'] = $this->model_pkwt->getAllData();
		
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	// INPUT
	public function input() {
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/pkwt/input_data_pegawai',
				'username'=>$this->session->userdata('username'));
		$data['next_id'] = $this->model_pkwt->getNextId();
		$data['data_bidang'] = $this->model_pkwt->getBidang();
		$data['data_jabatan'] = $this->model_pkwt->getJabatan();
		$data['data_direktorat'] = $this->model_pkwt->getDirektorat();
		
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_input() {
		$input = $this->model_pkwt->addData();
		
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
				'isi'=>'admin/pkwt/edit_data_pegawai',
				'username'=>$this->session->userdata('username'));
		$data['row'] = $this->model_pkwt->getData($id); // data pegawai yang sudah ada sebelumnya
		$data['data_bidang'] = $this->model_pkwt->getBidang();
		$data['data_jabatan'] = $this->model_pkwt->getJabatan();
		$data['data_direktorat'] = $this->model_pkwt->getDirektorat();
				
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_edit() {
		$id = $this->input->get('id');
		$edit1 = $this->model_pkwt->editDataPegawai($id);
		$edit2 = $this->model_pkwt->editDataPKWT($id);
		
		if ($edit1 || $edit2 == TRUE) {
			echo "<script>alert('Data berhasil diperbaharui!');history.go(-2);</script>";
		} elseif ($edit1 || $edit2 == FALSE) {
			echo "<script>alert('Data gagal diperbaharui!');history.go(-1);</script>";
		}
	}
	
	// DELETE
	public function proc_delete() {
		$id = $this->input->get('id');
		$delete = $this->model_pkwt->deleteData($id);
		
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