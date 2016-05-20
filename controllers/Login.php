<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->session->unset_userdata('status_akun');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('id_user_login');
		$this->session->unset_userdata('notifikasi');
		$this->session->unset_userdata('status_akun');
		$this->session->unset_userdata('nip');
		$this->session->unset_userdata('id_status');
		session_destroy();
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
				$sess_data['status_akun'] = $sess->status_akun;
				$sess_data['nip'] = $sess->nip;
				//buat sesion data mengetahui akun pkwt atau organik
				$nip = $sess->nip;
				$id_status = $this->model_user->cari_id_status($nip);
				$sess_data['id_status'] = $id_status; //end of mengetahui

				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='Adm.super' && $this->session->userdata('status_akun')=='1') {
				redirect('admin/Dashboard');
			}
			elseif ($this->session->userdata('level')=='Adm.pkwt' && $this->session->userdata('status_akun')=='1') {
				redirect('admin/Dashboard');
			}
			elseif ($this->session->userdata('level')=='Adm.organik' && $this->session->userdata('status_akun')=='1') {
				redirect('admin/Dashboard');
			}
			elseif ($this->session->userdata('level')=='user' && $this->session->userdata('status_akun')=='1') {
				redirect('user/Dashboard');
			}
			elseif ($this->session->userdata('status_akun')=='0') {
				echo "<script>alert('Gagal login: Akun belum aktif!');history.go(-1);</script>";
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
			echo "<script>alert('Hubungi admin untuk aktivasi akun!');history.go(-2);</script>";	
		} elseif ($input === FALSE) {
			echo "<script>alert('Username sudah dipakai!');history.go(-1);</script>";
		}
		elseif ($input === 1) {
			echo "<script>alert('NIP tidak terdaftar!');history.go(-1);</script>";
		}
	}

}

?>