<?php
class Pengaturan_akun extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
		$this->load->model('Pengaturan_akun_model');
	}
	public function index() {				
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/pengaturan_akun_view', 			
 			'username' => $this->session->userdata('username'),
 			'id_user_login' => $this->session->userdata('id_user_login'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function proc_edit_password() {								
			$edit=$this->Pengaturan_akun_model->proc_edit_password();

			if ($edit == TRUE) {
			echo "<script>alert('Password berhasil diubah!');history.go(-2);</script>";
			} elseif ($edit == FALSE) {
			echo "<script>alert('Password gagal diubah!');history.go(-1);</script>";
			}		
	}
	public function proc_edit_username() {								
			$edit=$this->Pengaturan_akun_model->proc_edit_username();

			if ($edit == TRUE) {
			echo "<script>alert('Username berhasil diubah!');history.go(-2);</script>";
			} elseif ($edit == FALSE) {
			echo "<script>alert('Username gagal diubah!');history.go(-1);</script>";
			}		
	}
}
?>