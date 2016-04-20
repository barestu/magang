<?php
class Model_data_organik extends CI_Model {
 public function __construct() {
	$this->load->database();
 }
 
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

 public function getDiklat($id) {
	$this->db->select('*');
	$this->db->from('tb_diklat AS td, tbl_pegawai AS tp');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = td.id_peg');
	$this->db->order_by('tahun_dik', 'ASC');
	$query = $this->db->get();
	
	return $query->result_array();
 }
 
 public function getSertifikasi($id) {
	$this->db->select('*');
	$this->db->from('tb_sertifikasi AS ts, tbl_pegawai AS tp');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = ts.id_peg');
	$this->db->order_by('tanggal_ser', 'ASC');
	$query = $this->db->get();
	
	return $query->result_array();
 }
 
 public function getMutasi($id) {
	$this->db->select('*');
	$this->db->from('tb_mutasi AS tm, tbl_pegawai AS tp');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = tm.id_peg');
	$this->db->order_by('tgl_sejak', 'ASC');
	$query = $this->db->get();
	
	return $query->result_array();
 }
 
 public function getTalenta($id) {
	$this->db->select('*');
	$this->db->from('tb_talenta AS tt, tb_grade AS tg, tbl_pegawai AS tp');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = tt.id_peg');
	$this->db->where('tt.id_grade = tg.id_grade');
	$this->db->order_by('mulai_tanggal', 'ASC');
	$query = $this->db->get();
	
	return $query->result_array();
 }
 
 public function getKeluarga($id) {
	$this->db->select('*');
	$this->db->from('tb_keluarga AS tk, tbl_pegawai AS tp');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = tk.id_peg');
	$this->db->order_by('tgl_kel', 'ASC');
	$query = $this->db->get();
	
	return $query->result_array();
	 
 }
 
}
?>