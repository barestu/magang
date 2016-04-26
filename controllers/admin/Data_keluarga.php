<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_keluarga extends CI_Controller {
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
		$this->load->model('model_keluarga'); //panggil model buat nampilin data keluarga
	}
	
	// INPUT DATA keluarga
	public function input_keluarga() {
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/input_keluarga',
				'username'=>$this->session->userdata('username'),
				'id_peg'=>$id);
		
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_input_keluarga() {
		$input = $this->model_keluarga->addData();
		
		if ($input === TRUE) {
			echo "<script>alert('Data berhasil ditambahkan!');history.go(-2);</script>";
		} elseif ($input === FALSE) {
			echo "<script>alert('Data gagal ditambahkan!');history.go(-1);</script>";
		}
	}
	
	// EDIT DATA keluarga
	public function edit_keluarga() { // controller form edit
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/edit_keluarga',
				'username'=>$this->session->userdata('username'));
		$data['dk'] = $this->model_keluarga->getData($id);
				
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	public function proc_edit_keluarga() { // controller proses edit
		$id = $this->input->get('id');
		$edit = $this->model_keluarga->editData($id);
		
		if ($edit == TRUE) {
			echo "<script>alert('Data berhasil diperbaharui!');history.go(-2);</script>";
		} elseif ($edit == FALSE) {
			echo "<script>alert('Data gagal diperbaharui!');history.go(-1);</script>";
		}
	}
	
	// DELETE DATA keluarga
	public function proc_delete_keluarga() { // c proses hapus data
		$id = $this->input->get('id');
		$delete = $this->model_keluarga->deleteData($id);
		
		if ($delete == TRUE) {
			echo "<script>alert('Data berhasil dihapus!');history.go(-1);</script>";
		} elseif ($delete == FALSE) {
			echo "<script>alert('Data gagal dihapus!');history.go(-1);</script>";
		}
		
		
	}
}