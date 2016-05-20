<?php
class Pengaturan_akun_model extends CI_Model {
 public function __construct() {
 $this->load->database();
 }
 
public function proc_edit_password() {
	$id_user_login = $this->input->post("id_user_login");		
	$passlama = md5($this->input->post("password"));

	$this->db->select('*');
	$this->db->from('tbl_user_login');
	$this->db->where('password', $passlama);
	$query = $this->db->get();  					
	if ($query->num_rows() > 0){							
		$input['password'] = md5($this->input->post("passwordbaru"));
	
		$this->db->where('id_user_login', $id_user_login);        
		$this->db->update("tbl_user_login",$input);
		if($this->db->affected_rows() == 1) {
			return TRUE; }					
		}
	else {
		return FALSE;
			}			 		
	}		 
}
