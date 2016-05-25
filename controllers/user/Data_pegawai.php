<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_pegawai extends CI_Controller {
	// CONSTRUCT
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
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
		$this->load->model('model_data_pkwt'); //panggil model buat nampilin data pegawai
		$this->load->model('model_proyek'); //panggil model buat nampilin data diklat
		$this->load->model('Upload_gambar_model'); //panggil model buat nampilin foto profil
	}
	
	// INDEX
	public function index() {
		$id = $this->model_data_organik->cari_id();
		
		if ($this->session->userdata('id_status') === '1') { 
			// pegawai login adalah pegawai organik
			$isi='user/organik/data_pegawai';
			$data_peg = $this->model_data_organik->getData($id);
		} elseif ($this->session->userdata('id_status') === '2') {
			// pegawai login adalah pegawai pkwt
			$isi='user/pkwt/data_pegawai';
			$data_peg = $this->model_data_pkwt->getData($id);
		}
		
		$data = array('title'=>'SIPEG',
				'username'=>$this->session->userdata('username'));
		$data['isi'] = $isi;
		$data['data_peg'] = $data_peg;
		$data['data_pendidikan'] = $this->model_pendidikan->getDataAll($id);
		$data['data_diklat'] = $this->model_diklat->getDataAll($id);
		$data['data_sertifikasi'] = $this->model_sertifikasi->getDataAll($id);
		$data['data_mutasi'] = $this->model_mutasi->getDataAll($id);
		$data['data_talenta'] = $this->model_talenta->getDataAll($id);
		$data['data_keluarga'] = $this->model_keluarga->getDataAll($id);
		$data['data_proyek'] = $this->model_proyek->getDataAll($id);
		$data['nama_gambar'] = $this->Upload_gambar_model->show_ava($id);
		
		$this->load->view('user/layout/wrapper', $data);
	}
}