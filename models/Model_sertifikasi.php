<?php
class Model_sertifikasi extends CI_Model {
 public function __construct() {
	$this->load->database();
 }
 
 public function getDataAll($id) {
	$this->db->select('*');
	$this->db->from('tb_sertifikasi AS ts, tbl_pegawai AS tp');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = ts.id_peg');
	$this->db->order_by('tanggal_ser', 'ASC');
	$query = $this->db->get();
	
	return $query->result_array();
 }
 
 public function getData($id) {
	$this->db->select('*');
	$this->db->from('tb_sertifikasi');
	$this->db->where('id_ser', $id);
	$query = $this->db->get();
	
	return $query->row_array();
 }
 
 public function addData() {
	$d['id_peg'] = $this->input->post('id_peg');
	$d['tanggal_ser'] = $this->input->post('tanggal_ser');
	$d['nama_ser'] = strtoupper($this->input->post('nama_ser'));
	$this->db->insert('tb_sertifikasi', $d);
	
	if($this->db->affected_rows() > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 public function editData($id) {
	$d['id_peg'] = $this->input->post('id_peg');
	$d['tanggal_ser'] = $this->input->post('tanggal_ser');
	$d['nama_ser'] = strtoupper($this->input->post('nama_ser'));
	$this->db->where('id_ser', $id);
	$this->db->update('tb_sertifikasi', $d);
	
	if($this->db->affected_rows() > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 public function deleteData($id) {
	$this->db->where('id_ser', $id);
	$this->db->delete('tb_sertifikasi');
	
	if($this->db->affected_rows() == 1) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
}
?>