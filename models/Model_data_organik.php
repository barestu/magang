<?php
class Model_data_organik extends CI_Model {
 public function __construct() {
	$this->load->database();
 }
 
  //function di pakai oleh user
 public function cari_id() {

$nip = $this->session->userdata('nip');
	$this->db->select('id_peg');
			$this->db->from('tbl_pegawai');
			$this->db->where('nip', $nip);
			$idpeg = $this->db->get();			

	return $idpeg->row('id_peg');
 }//end of function
 
 // Ambil data pegawai yang ditentukan
 public function getData($id) {
	$this->db->select('*');
	$this->db->from('tbl_pegawai AS tp, tb_pegawai_organik AS to, tb_jabatan AS tj, tb_bidang AS tb, tb_direktorat AS td');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = to.id_peg');
	$this->db->where('tp.id_bid = tb.id_bid');
	$this->db->where('tp.id_jab = tj.id_jab');
	$this->db->where('tp.id_direktorat = td.id_direktorat');
	$query = $this->db->get();
	
	return $query->row_array();
 }
}
?>