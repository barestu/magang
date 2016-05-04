<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('tbl_user_login', $data);
			return $query;
		}

	
	public function sign_up() {
		$query = $this->db->query("SELECT MAX(id_user_login) AS max  FROM tbl_user_login");
	return $query; 
	}

	public function input_sign_up() {	
			$userbaru = $this->input->post("username");

 			$this->db->select('*');
 			$this->db->from('tbl_user_login');
  			$this->db->where('username', $userbaru);
  			$query = $this->db->get();  					
			if ($query->num_rows() < 1){
				$input['id_user_login'] = $this->input->post("id_user_login");
				$input['username'] = $userbaru;				
				$input['email'] = $this->input->post("email");
				$input['nip'] = $this->input->post("nip");
				$input['level'] = "user";
				$input['password'] = md5($this->input->post("password"));
				$input['status_akun'] = '0';
			
				$this->db->insert("tbl_user_login",$input);
				if($this->db->affected_rows() == 1) {
					return TRUE; }					
				}
			else {
				return FALSE;
					}		
	 }
}

?>