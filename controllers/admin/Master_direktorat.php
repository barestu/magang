<?php

class Master_direktorat extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
		$this->load->model('Master_direktorat_model');
	}
	public function index() {				
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/master/master_direktorat_view',
 			'direktorat' => $this->Master_direktorat_model->tabel_master_direktorat(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function form_input() {				
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/master/input_master_direktorat_view',
 			'id' => $this->Master_direktorat_model->form_input(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function proc_input() {	
		$input=$this->Master_direktorat_model->proc_input(); 

 		if ($input === TRUE) {
			echo "<script>alert('Data berhasil ditambahkan!');history.go(-2);</script>";	
		} elseif ($input === FALSE) {
			echo "<script>alert('Data gagal ditambahkan!');history.go(-1);</script>";
		}
	}	
	public function form_delete($id_direktorat) {
			$id = $this->input->get();
			$this->load->model("Master_direktorat_model",$id);
    		$delete=$this->Master_direktorat_model->delete($id_direktorat); 

			if ($delete == TRUE) {
			echo "<script>alert('Data berhasil dihapus!');history.go(-1);</script>";
		} elseif ($delete == FALSE) {
			echo "<script>alert('Data gagal dihapus!');history.go(-1);</script>";
		}
	}
}
?>
