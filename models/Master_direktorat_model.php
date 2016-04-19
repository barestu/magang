<?php
class Master_direktorat_model extends CI_Model {
 public function __construct() {
 $this->load->database();
 }
 
 // Kode untuk menampilkan data tabel pada database
 public function tabel_master_direktorat() {

 $query = $this->db->query('SELECT * FROM tb_direktorat ORDER BY id_direktorat ASC');
 return $query;
 }

 public function form_input() {

	$query = $this->db->query("SELECT MAX(id_direktorat) AS max  FROM tb_direktorat");
	return $query; 

 }
 public function proc_input() {
		$input['id_direktorat'] = $this->input->post("id_direktorat");
		$input['nama_direktorat'] = $this->input->post("nama_direktorat");		
 		$this->db->insert("tb_direktorat",$input);

 		if($this->db->affected_rows() > 0) {
		return TRUE;
			} else {
		return FALSE;
					}	
 }  
public function delete($id){
	
  $this->db->where('id_direktorat', $id);
  $this->db->delete('tb_direktorat');
  if($this->db->affected_rows() == 1) {
			return TRUE;		
	} else {
		return FALSE;
	}
}


}
