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

 public function form() {

	$query = $this->db->query("SELECT MAX(id_user_login) AS max  FROM tbl_user_login");
	return $query; 

 }

public function form_edit() {
			$where = $this->input->get();

			$query = $this->db->get_where("tbl_user_login",$where);
	return $query;

 }
public function proc_edit() {
		$id = $this->input->post("id_user_login");		
		$passlama = md5($this->input->post("password"));

			$this->db->select('password');
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
				}		 
				return $query;
 			} 			 
public function delete($id){
	
  $this->db->where('id_user_login', $id);
  $this->db->delete('tbl_user_login');
}


}
