<?php
class Upload_gambar_model extends CI_Model {
	var $tabel = 'tb_upload_gambar'; //buat variabel tabel
 public function __construct() {
 	parent::__construct();
 $this->load->database();
 }
 
  public function change_ava($id) {
    $this->db->select('nama_gambar');
	$this->db->from('tb_upload_gambar');
	$this->db->where('id_peg', $id);
	$this->db->where('status_gambar = "custom" ');
    $query = $this->db->get();
	
	return $query->row(); 
    }

 public function insert_ava($data,$id) {
 	   $this->db->where('id_peg', $id);
       $this->db->update($this->tabel,$data);

				if($this->db->affected_rows() == 1) {
					return TRUE; }		
				else {
					return FALSE;
					}			
       
    }

 public function show_ava($id) {
    $this->db->select('nama_gambar');
	$this->db->from('tb_upload_gambar');
	$this->db->where('id_peg', $id);
    $query = $this->db->get();
	
	return $query->row_array(); 
    }


}
