<?php
class Master_grade_model extends CI_Model {
 public function __construct() {
 $this->load->database();
 }
 
 // Kode untuk menampilkan data tabel pada database
 public function tabel_master_grade() {

 $query = $this->db->query('SELECT * FROM tb_grade ORDER BY id_grade ASC');
 return $query;
 }

 public function form_input() {

	$query = $this->db->query("SELECT MAX(id_grade) AS max  FROM tb_grade");
	return $query; 

 }
 public function proc_input() {
		$input['id_grade'] = $this->input->post("id_grade");
		$input['nama_grade'] = $this->input->post("nama_grade");		
 		$this->db->insert("tb_grade",$input);

 		if($this->db->affected_rows() > 0) {
		return TRUE;
			} else {
		return FALSE;
					}	
 }  
public function delete($id){
	
  $this->db->where('id_grade', $id);
  $this->db->delete('tb_grade');
  if($this->db->affected_rows() == 1) {
			return TRUE;		
	} else {
		return FALSE;
	}
}


}
