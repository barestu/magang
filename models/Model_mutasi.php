<?php
class Model_mutasi extends CI_Model {
 public function __construct() {
	$this->load->database();
 }
 
 public function getDataAll($id) {
	$this->db->select('*');
	$this->db->from('tb_mutasi AS tm, tbl_pegawai AS tp');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = tm.id_peg');
	$this->db->order_by('tgl_sejak', 'ASC');
	$query = $this->db->get();
	
	return $query->result_array();
 }
 
 public function getData($id) {
	$this->db->select('*');
	$this->db->from('tb_mutasi');
	$this->db->where('id_mut', $id);
	$query = $this->db->get();
	
	return $query->row_array();
 }
 
 public function addData() {
	$d['id_peg'] = $this->input->post('id_peg');
	$d['tgl_sejak'] = $this->input->post('tgl_sejak');
	$d['tgl_hingga'] = $this->input->post('tgl_hingga');
	$d['nama_mut'] = strtoupper($this->input->post('nama_mut'));
	$this->db->insert('tb_mutasi', $d);
	
	if($this->db->affected_rows() > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 public function editData($id) {
	$d['id_peg'] = $this->input->post('id_peg');
	$d['tgl_sejak'] = $this->input->post('tgl_sejak');
	$d['tgl_hingga'] = $this->input->post('tgl_hingga');
	$d['nama_mut'] = strtoupper($this->input->post('nama_mut'));
	$this->db->where('id_mut', $id);
	$this->db->update('tb_mutasi', $d);
	
	if($this->db->affected_rows() > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 public function deleteData($id) {
	$this->db->where('id_mut', $id);
	$this->db->delete('tb_mutasi');
	
	if($this->db->affected_rows() == 1) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
}
?>