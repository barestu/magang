<?php
class Model_cv_pkwt extends CI_Model {
 public function __construct() {
	$this->load->database();
 }
 
 // Data Pegawai
 public function getDataPegawai($id) {
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

 // Data Diklat
 public function getDataDiklat($id) {
	$this->db->select('*');
	$this->db->from('tb_diklat AS td, tbl_pegawai AS tp');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = td.id_peg');
	$this->db->order_by('tahun_dik', 'ASC');
	$query = $this->db->get();
	
	return $query->result_array();
 }
 
 // Data Sertifikat
 public function getDataSertif($id) {
	$this->db->select('*');
	$this->db->from('tb_sertifikasi AS ts, tbl_pegawai AS tp');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = ts.id_peg');
	$this->db->order_by('tanggal_ser', 'ASC');
	$query = $this->db->get();
	
	return $query->result_array();
 }
 
 // Data Proyek
 public function getDataProyek($id) {
	$this->db->select('*');
	$this->db->from('tb_proyek AS tpr, tbl_pegawai AS tp');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = tpr.id_peg');
	$this->db->order_by('mulai_proyek', 'ASC');
	$query = $this->db->get();
	
	return $query->result_array();
	
 }
}
?>