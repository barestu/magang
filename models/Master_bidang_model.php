<?php
class Master_bidang_model extends CI_Model {
 public function __construct() {
 $this->load->database();
 }
 
 // Kode untuk menampilkan data tabel pada database
 public function tabel_master_bidang() {

 $query = $this->db->query('SELECT * FROM tb_bidang ORDER BY id_bid ASC');
 return $query;
 }

 public function form_input() {

	$query = $this->db->query("SELECT MAX(id_bid) AS max  FROM tb_bidang");
	return $query; 

 }
 public function proc_input() {
		$input['id_bid'] = $this->input->post("id_bid");
		$input['nama_bid'] = $this->input->post("nama_bid");		
 		$this->db->insert("tb_bidang",$input);

 		if($this->db->affected_rows() > 0) {
		return TRUE;
			} else {
		return FALSE;
					}	
 }  
public function delete($id){
	
  $this->db->where('id_bid', $id);
  $this->db->delete('tb_bidang');
  if($this->db->affected_rows() == 1) {
			return TRUE;		
	} else {
		return FALSE;
	}
}


}
