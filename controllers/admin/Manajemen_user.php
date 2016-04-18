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
 			'isi' => 'admin/manajemen_user_view',
 			'user' => $this->Manajemen_user_model->tabel_user(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function form_input() {				
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/input_manajemen_user_view',
 			'id' => $this->Manajemen_user_model->form(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function proc_input() {	

		$input['id_user_login'] = $this->input->post("id_user_login");
		$input['username'] = $this->input->post("username");
		$input['password'] = md5($this->input->post("password"));
		$input['email'] = $this->input->post("email");
		$input['nip'] = $this->input->post("nip");
		$input['level'] = $this->input->post("level");			
		
 		$this->db->insert("tbl_user_login",$input);
 		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/manajemen_user_view',
 			'user' => $this->Manajemen_user_model->tabel_user(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function form_edit() {				
		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/edit_manajemen_user_view',
 			'query' => $this->Manajemen_user_model->form_edit(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function proc_edit() {			
						
			$this->load->model("Manajemen_user_model");
			$this->Manajemen_user_model->proc_edit();
		
 		$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/manajemen_user_view',
 			'coba' => $this->Manajemen_user_model->proc_edit(), 			
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function form_delete($id_user_login) {
			$id = $this->input->get();
			$this->load->model("Manajemen_user_model",$id);
    		$this->Manajemen_user_model->delete($id_user_login); 

			$isi = array('title' => 'SIPEG',
 			'isi' => 'admin/manajemen_user_view',
 			'user' => $this->Manajemen_user_model->tabel_user(),
 			'username' => $this->session->userdata('username'));
		
 		$this->load->view('admin/layout/wrapper',$isi);
	}
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
	

}
?>