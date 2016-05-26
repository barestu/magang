<?php
class Model_diklat extends CI_Model {
 public function __construct() {
	$this->load->database();
 }
 
 public function getDataAll($id) {
	$this->db->select('*');
	$this->db->from('tb_diklat AS td, tbl_pegawai AS tp');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = td.id_peg');
	$this->db->order_by('tahun_dik', 'ASC');
	$query = $this->db->get();
	
	return $query->result_array();
 }
 
 public function getData($id) {
	$this->db->select('*');
	$this->db->from('tb_diklat');
	$this->db->where('id_dik', $id);
	$query = $this->db->get();
	
	return $query->row_array();
 }
 
 public function addData() {
	$d['id_peg'] = $this->input->post('id_peg');
	$d['nama_dik'] = $this->input->post('nama_dik');
	$d['jenis_dik'] = $this->input->post('jenis_dik');
	$d['tahun_dik'] = $this->input->post('tahun_dik');
	$this->db->insert('tb_diklat', $d);
	
	if($this->db->affected_rows() > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 public function editData($id) {
	$d['id_peg'] = $this->input->post('id_peg');
	$d['nama_dik'] = $this->input->post('nama_dik');
	$d['jenis_dik'] = $this->input->post('jenis_dik');
	$d['tahun_dik'] = $this->input->post('tahun_dik');
	$this->db->where('id_dik', $id);
	$this->db->update('tb_diklat', $d);
	
	if($this->db->affected_rows() > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 public function deleteData($id) {
	$this->db->where('id_dik', $id);
	$this->db->delete('tb_diklat');
	
	if($this->db->affected_rows() == 1) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
}
?>