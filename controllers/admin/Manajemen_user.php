<?php
class Manajemen_user extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
		$this->load->model('Manajemen_user_model');
	}
	public function index() {				
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/manajemen_user/manajemen_user_view',
 			'user' => $this->Manajemen_user_model->tabel_user(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function form_input() {				
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/manajemen_user/input_manajemen_user_view',
 			'id' => $this->Manajemen_user_model->form_input(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function proc_input() {			
 		$input=$this->Manajemen_user_model->proc_input();

 		if ($input == TRUE) {
			echo "<script>alert('Data berhasil ditambah!');history.go(-2);</script>";
		} elseif ($input == FALSE) {
			echo "<script>alert('Data gagal ditambah!');history.go(-1);</script>";
		}

	}
	public function form_edit() {				
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/manajemen_user/edit_manajemen_user_view',
 			'query' => $this->Manajemen_user_model->form_edit(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function proc_edit() {								
			$edit=$this->Manajemen_user_model->proc_edit();

			if ($edit == TRUE) {
			echo "<script>alert('Data berhasil diubah!');history.go(-2);</script>";
			} elseif ($edit == FALSE) {
			echo "<script>alert('Password lama salah!');history.go(-1);</script>";
			}		
	}
	public function form_delete($id_user_login) {
			$id = $this->input->get();
			$this->load->model("Manajemen_user_model",$id);
    		$delete = $this->Manajemen_user_model->delete($id_user_login); 

			if ($delete == TRUE) {
			echo "<script>alert('Data berhasil dihapus!');history.go(-1);</script>";
		} elseif ($delete == FALSE) {
			echo "<script>alert('Data gagal dihapus!');history.go(-1);</script>";
		}
	}
}
?>