<?php

class Master_kompetensi extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
		$this->load->model('Master_kompetensi_model');
	}
	public function index() {				
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/master_kompetensi_view',
 			'kompetensi' => $this->Master_kompetensi_model->tabel_master_kompetensi(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function form_input() {				
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/input_master_kompetensi_view',
 			'id' => $this->Master_kompetensi_model->form_input(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function proc_input() {	
		$input=$this->Master_kompetensi_model->proc_input(); 

 		if ($input === TRUE) {
			echo "<script>alert('Data berhasil ditambahkan!');history.go(-2);</script>";	
		} elseif ($input === FALSE) {
			echo "<script>alert('Data gagal ditambahkan!');history.go(-1);</script>";
		}
	}	
	public function form_delete($id_jab) {
			$id = $this->input->get();
			$this->load->model("Master_kompetensi_model",$id);
    		$delete=$this->Master_kompetensi_model->delete($id_jab); 

			if ($delete == TRUE) {
			echo "<script>alert('Data berhasil dihapus!');history.go(-1);</script>";
		} elseif ($delete == FALSE) {
			echo "<script>alert('Data gagal dihapus!');history.go(-1);</script>";
		}
	}
}
?>
