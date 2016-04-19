<?php
class Master_jabatan_model extends CI_Model {
 public function __construct() {
 $this->load->database();
 }
 
 // Kode untuk menampilkan data tabel pada database
 public function tabel_master_jabatan() {

 $query = $this->db->query('SELECT * FROM tb_jabatan ORDER BY id_jab ASC');
 return $query;
 }

 public function form_input() {

	$query = $this->db->query("SELECT MAX(id_jab) AS max  FROM tb_jabatan");
	return $query; 

 }
 public function proc_input() {
		$input['id_jab'] = $this->input->post("id_jab");
		$input['nama_jab'] = $this->input->post("nama_jab");		
 		$this->db->insert("tb_jabatan",$input);

 		if($this->db->affected_rows() > 0) {
		return TRUE;
			} else {
		return FALSE;
					}	
 }  
public function delete($id){
	
  $this->db->where('id_jab', $id);
  $this->db->delete('tb_jabatan');
  if($this->db->affected_rows() == 1) {
			return TRUE;		
	} else {
		return FALSE;
	}
}


}
