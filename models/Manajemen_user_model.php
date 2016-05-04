<?php
class Manajemen_user_model extends CI_Model {
 public function __construct() {
 $this->load->database();
 }
 
 // Kode untuk menampilkan data tabel pada database
 public function tabel_user() {

 $query = $this->db->query('SELECT * FROM tbl_user_login ORDER BY id_user_login ASC');
 return $query;
 }

 public function form_input() {

	$query = $this->db->query("SELECT MAX(id_user_login) AS max  FROM tbl_user_login");
	return $query; 

 }

 public function proc_input() {
		$input['id_user_login'] = $this->input->post("id_user_login");
		$input['username'] = $this->input->post("username");
		$input['password'] = md5($this->input->post("password"));
		$input['email'] = $this->input->post("email");
		$input['nip'] = $this->input->post("nip");
		$input['level'] = $this->input->post("level");
		$input['status_akun'] =	'0';		
		
 		$this->db->insert("tbl_user_login",$input);

 		if($this->db->affected_rows() > 0) {
			return TRUE;		
		} else {
		return FALSE;
		}

 }

public function form_edit() {
	$where = $this->input->get('id');
			$this->db->select('*');
 			$this->db->from('tbl_user_login');
  			$this->db->where('id_user_login', $where);
  			$query = $this->db->get();
	return $query;

 }
public function proc_edit() {
			$id = $this->input->post("id_user_login");		
			$passlama = md5($this->input->post("password"));

 			$this->db->select('*');
 			$this->db->from('tbl_user_login');
  			$this->db->where('password', $passlama);
  			$query = $this->db->get();  					
			if ($query->num_rows() > 0){
				$input['username'] = $this->input->post("username");				
				$input['email'] = $this->input->post("email");
				$input['nip'] = $this->input->post("nip");
				$input['level'] = $this->input->post("level");
				$input['password'] = md5($this->input->post("passwordbaru"));
			
				$this->db->where('id_user_login', $id);        
				$this->db->update("tbl_user_login",$input);
				if($this->db->affected_rows() == 1) {
					return TRUE; }					
				}
			else {
				return FALSE;
					}			
						 
				
 			} 			 
public function delete($id){
	
  $this->db->where('id_user_login', $id);
  $this->db->delete('tbl_user_login');
  if($this->db->affected_rows() == 1) {
			return TRUE;		
	} else {
		return FALSE;
	}
}
	public function aktiv() {
		$id = $this->input->get('id');
		$input['status_akun'] = '1'; 
		
		$this->db->where('id_user_login', $id);        
		$this->db->update("tbl_user_login",$input);
		if($this->db->affected_rows() == 1) {
					return TRUE; }					
			else {
				return FALSE;
					}		

 	}


}
