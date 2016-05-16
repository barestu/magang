<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_pegawai_pkwt extends CI_Controller {
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
		$this->load->model('model_data_pkwt'); //panggil model buat nampilin data pegawai
		$this->load->model('model_diklat'); //panggil model buat nampilin data diklat
		$this->load->model('model_sertifikasi'); //panggil model buat nampilin data sertif
		$this->load->model('model_keluarga'); //panggil model buat nampilin data keluarga
		$this->load->model('model_proyek'); //panggil model buat nampilin data proyek
	}
	
	// INDEX
	public function index() {
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/pkwt/data_pegawai',
				'username'=>$this->session->userdata('username'));
		$data['data_peg'] = $this->model_data_pkwt->getData($id);
		$data['data_diklat'] = $this->model_diklat->getDataAll($id);
		$data['data_sertifikasi'] = $this->model_sertifikasi->getDataAll($id);
		$data['data_keluarga'] = $this->model_keluarga->getDataAll($id);
		$data['data_proyek'] = $this->model_proyek->getDataAll($id);
		
		$this->load->view('admin/layout/wrapper', $data);
	}
}