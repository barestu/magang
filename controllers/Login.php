<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->load->view('login/login_form');
	}

	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
					  'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('model_user'); // load model_user
		$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Login';
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$sess_data['id_user_login'] = $sess->id_user_login;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin') {
				redirect('admin/Dashboard');
			}
			elseif ($this->session->userdata('level')=='user') {
				redirect('user/Dashboard');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

	public function sign_up() {
		$this->load->model('model_user');
		$isi = array('id' => $this->model_user->sign_up());			

		$this->load->view('login/sign_up_form',$isi);
	}
	public function input_sign_up() {
		$this->load->model('model_user'); 
				$input=$this->model_user->input_sign_up(); 

 		if ($input === TRUE) {
			echo "<script>alert('Berhasil daftar akun!');history.go(-2);</script>";	
		} elseif ($input === FALSE) {
			echo "<script>alert('Username sudah dipakai!');history.go(-1);</script>";
		}
	}

}

?>