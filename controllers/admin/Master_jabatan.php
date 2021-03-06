<?php

class Master_jabatan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
		$this->load->model('Master_jabatan_model');
	}
	public function index() {				
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/master/master_jabatan_view',
 			'jabatan' => $this->Master_jabatan_model->tabel_master_jabatan(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function form_input() {				
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/master/input_master_jabatan_view',
 			'id' => $this->Master_jabatan_model->form_input(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function proc_input() {	
		$input=$this->Master_jabatan_model->proc_input(); 

 		if ($input === TRUE) {
			echo "<script>alert('Data berhasil ditambahkan!');history.go(-2);</script>";	
		} elseif ($input === FALSE) {
			echo "<script>alert('Data gagal ditambahkan!');history.go(-1);</script>";
		}
	}	
	public function form_delete($id_jab) {
			$id = $this->input->get();
			$this->load->model("Master_jabatan_model",$id);
    		$delete=$this->Master_jabatan_model->delete($id_jab); 

			if ($delete == TRUE) {
			echo "<script>alert('Data berhasil dihapus!');history.go(-1);</script>";
		} elseif ($delete == FALSE) {
			echo "<script>alert('Data gagal dihapus!');history.go(-1);</script>";
		}
	}
}
?>
