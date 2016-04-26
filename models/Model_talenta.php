<?php
class Model_talenta extends CI_Model {
 public function __construct() {
	$this->load->database();
 }
 
 public function getDataAll($id) {
	$this->db->select('*');
	$this->db->from('tb_talenta AS tt, tb_grade AS tg, tbl_pegawai AS tp');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = tt.id_peg');
	$this->db->where('tt.id_grade = tg.id_grade');
	$this->db->order_by('mulai_tanggal', 'ASC');
	$query = $this->db->get();
	
	return $query->result_array();
 }
 
 public function getData($id) {
	$this->db->select('*');
	$this->db->from('tb_talenta AS tt, tb_grade AS tg');
	$this->db->where('id_talenta', $id);
	$this->db->where('tt.id_grade = tg.id_grade');
	$query = $this->db->get();
	
	return $query->row_array();
 }
 
 public function addData() {
	$d['id_peg'] = $this->input->post('id_peg');
	$d['mulai_tanggal'] = $this->input->post('mulai_tanggal');
	$d['berakhir_tanggal'] = $this->input->post('berakhir_tanggal');
	$d['semester'] = $this->input->post('semester');
	$d['id_grade'] = $this->input->post('id_grade');
	$d['poin'] = $this->input->post('poin');
	$this->db->insert('tb_talenta', $d);
	
	if($this->db->affected_rows() > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 public function editData($id) {
	$d['id_peg'] = $this->input->post('id_peg');
	$d['mulai_tanggal'] = $this->input->post('mulai_tanggal');
	$d['berakhir_tanggal'] = $this->input->post('berakhir_tanggal');
	$d['semester'] = $this->input->post('semester');
	$d['id_grade'] = $this->input->post('id_grade');
	$d['poin'] = $this->input->post('poin');
	$this->db->where('id_talenta', $id);
	$this->db->update('tb_talenta', $d);
	
	if($this->db->affected_rows() > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 public function deleteData($id) {
	$this->db->where('id_talenta', $id);
	$this->db->delete('tb_talenta');
	
	if($this->db->affected_rows() == 1) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 // GRADE LIST
 public function getGradeList() {
	$query = $this->db->query('SELECT * FROM tb_grade ORDER BY nama_grade ASC');
	return $query->result();
 }
}
?>