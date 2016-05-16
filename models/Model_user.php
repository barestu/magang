<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('tbl_user_login', $data);
			return $query;
		}

	public function cari_id_status($nip) {
		$this->db->select('id_status');
			$this->db->from('tbl_pegawai');
			$this->db->where('nip', $nip);
			$idstat = $this->db->get();			

	return $idstat->row('id_status');
	}
	
	public function sign_up() {
		$query = $this->db->query("SELECT MAX(id_user_login) AS max  FROM tbl_user_login");
	return $query; 
	}

	public function input_sign_up() {	
			$userbaru = $this->input->post("username");
			$nipvalid = $this->input->post("nip");

 			$this->db->select('username');
 			$this->db->from('tbl_user_login');
  			$this->db->where('username', $userbaru);
  			$query = $this->db->get();

			if ($query->num_rows() < 1){
				$this->db->select('nip');
 				$this->db->from('tbl_pegawai');
  				$this->db->where('nip', $nipvalid);
  				$query = $this->db->get();

  				if ($query->num_rows() > 0){
					$input['id_user_login'] = $this->input->post("id_user_login");
					$input['username'] = $userbaru;				
					$input['email'] = $this->input->post("email");
					$input['nip'] = $nipvalid;
					$input['level'] = "user";
					$input['password'] = md5($this->input->post("password"));
					$input['status_akun'] = '0';			
					$this->db->insert("tbl_user_login",$input);

							if($this->db->affected_rows() == 1) {
								return TRUE; }					
				}
				else {
				return 1;}	
			}
			else {
				return FALSE;
					}		
	 }
}

?>