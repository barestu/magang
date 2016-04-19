<?php
class Master_kompetensi_model extends CI_Model {
 public function __construct() {
 $this->load->database();
 }
 
 // Kode untuk menampilkan data tabel pada database
 public function tabel_master_kompetensi() {

 $query = $this->db->query('SELECT * FROM tb_kompetensi ORDER BY id_kompetensi ASC');
 return $query;
 }

 public function form_input() {

	$query = $this->db->query("SELECT MAX(id_kompetensi) AS max  FROM tb_kompetensi");
	return $query; 

 }
 public function proc_input() {
		$input['id_kompetensi'] = $this->input->post("id_kompetensi");
		$input['nama_kompetensi'] = $this->input->post("nama_kompetensi");		
 		$this->db->insert("tb_kompetensi",$input);

 		if($this->db->affected_rows() > 0) {
		return TRUE;
			} else {
		return FALSE;
					}	
 }  
public function delete($id){
	
  $this->db->where('id_kompetensi', $id);
  $this->db->delete('tb_kompetensi');
  if($this->db->affected_rows() == 1) {
			return TRUE;		
	} else {
		return FALSE;
	}
}


}
