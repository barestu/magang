<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_pegawai_organik extends CI_Controller {
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
		$this->load->model('model_data_organik'); //panggil model buat nampilin data pegawai
		$this->load->model('model_pendidikan'); //panggil model buat nampilin data pendidikan
		$this->load->model('model_diklat'); //panggil model buat nampilin data diklat
		$this->load->model('model_sertifikasi'); //panggil model buat nampilin data sertif
		$this->load->model('model_mutasi'); //panggil model buat nampilin data mutasi
		$this->load->model('model_talenta'); //panggil model buat nampilin data talenta
		$this->load->model('model_keluarga'); //panggil model buat nampilin data keluarga
		$this->load->model('Upload_gambar_model'); //panggil model buat nampilin foto profil
	}
	
	// INDEX
	public function index() {
		$id = $this->input->get('id');
		$data = array('title'=>'SIPEG', 
				'isi'=>'admin/organik/data_pegawai',
				'username'=>$this->session->userdata('username'));
		$data['data_peg'] = $this->model_data_organik->getData($id);
		$data['data_pendidikan'] = $this->model_pendidikan->getDataAll($id);
		$data['data_diklat'] = $this->model_diklat->getDataAll($id);
		$data['data_sertifikasi'] = $this->model_sertifikasi->getDataAll($id);
		$data['data_mutasi'] = $this->model_mutasi->getDataAll($id);
		$data['data_talenta'] = $this->model_talenta->getDataAll($id);
		$data['data_keluarga'] = $this->model_keluarga->getDataAll($id);
		$data['nama_gambar'] = $this->Upload_gambar_model->show_ava($id);
		
		$this->load->view('admin/layout/wrapper', $data);
	}
}