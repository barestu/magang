<?php
class Model_pendidikan extends CI_Model {
 public function __construct() {
	$this->load->database();
 }
 
 public function getDataAll($id) {
	$this->db->select('*');
	$this->db->from('tb_pendidikan AS tpen, tbl_pegawai AS tp');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = tpen.id_peg');
	$this->db->order_by('tahun_pen', 'ASC');
	$query = $this->db->get();
	
	return $query->result_array();
 }
 
 public function getData($id) {
	$this->db->select('*');
	$this->db->from('tb_pendidikan');
	$this->db->where('id_pen', $id);
	$query = $this->db->get();
	
	return $query->row_array();
 }
 
 public function addData() {
	$d['id_peg'] = $this->input->post('id_peg');
	$d['tingkat_pen'] = strtoupper($this->input->post('tingkat_pen'));
	$d['tahun_pen'] = $this->input->post('tahun_pen');
	$d['lembaga_pen'] = strtoupper($this->input->post('lembaga_pen'));
	$d['gelar_pen'] = strtoupper($this->input->post('gelar_pen'));
	$this->db->insert('tb_pendidikan', $d);
	
	if($this->db->affected_rows() > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 public function editData($id) {
	$d['id_peg'] = $this->input->post('id_peg');
	$d['tingkat_pen'] = strtoupper($this->input->post('tingkat_pen'));
	$d['tahun_pen'] = $this->input->post('tahun_pen');
	$d['lembaga_pen'] = strtoupper($this->input->post('lembaga_pen'));
	$d['gelar_pen'] = strtoupper($this->input->post('gelar_pen'));
	$this->db->where('id_pen', $id);
	$this->db->update('tb_pendidikan', $d);
	
	if($this->db->affected_rows() > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 public function deleteData($id) {
	$this->db->where('id_pen', $id);
	$this->db->delete('tb_pendidikan');
	
	if($this->db->affected_rows() == 1) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
}
?>