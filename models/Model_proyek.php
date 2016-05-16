<?php
class Model_proyek extends CI_Model {
 public function __construct() {
	$this->load->database();
 }
 
 public function getDataAll($id) {
	$this->db->select('*');
	$this->db->from('tb_proyek AS tpr, tbl_pegawai AS tp');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = tpr.id_peg');
	$this->db->order_by('mulai_proyek', 'ASC');
	$query = $this->db->get();
	
	return $query->result_array();
 }
 
 public function getData($id) {
	$this->db->select('*');
	$this->db->from('tb_proyek');
	$this->db->where('id_proyek', $id);
	$query = $this->db->get();
	
	return $query->row_array();
 }
 
 public function addData() {
	$d['id_peg'] = $this->input->post('id_peg');
	$d['nama_proyek'] = $this->input->post('nama_proyek');
	$d['mulai_proyek'] = $this->input->post('mulai_proyek');
	$d['berakhir_proyek'] = $this->input->post('berakhir_proyek');
	$d['lokasi_proyek'] = $this->input->post('lokasi_proyek');
	$d['nama_lokasi_proyek'] = $this->input->post('nama_lokasi_proyek');
	$d['pemilik_proyek'] = $this->input->post('pemilik_proyek');
	$d['jabatan_proyek'] = $this->input->post('jabatan_proyek');
	$this->db->insert('tb_proyek', $d);
	
	if($this->db->affected_rows() > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 public function editData($id) {
	$d['id_peg'] = $this->input->post('id_peg');
	$d['nama_proyek'] = $this->input->post('nama_proyek');
	$d['mulai_proyek'] = $this->input->post('mulai_proyek');
	$d['berakhir_proyek'] = $this->input->post('berakhir_proyek');
	$d['lokasi_proyek'] = $this->input->post('lokasi_proyek');
	$d['nama_lokasi_proyek'] = $this->input->post('nama_lokasi_proyek');
	$d['pemilik_proyek'] = $this->input->post('pemilik_proyek');
	$d['jabatan_proyek'] = $this->input->post('jabatan_proyek');
	$this->db->where('id_proyek', $id);
	$this->db->update('tb_proyek', $d);
	
	if($this->db->affected_rows() > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 public function deleteData($id) {
	$this->db->where('id_proyek', $id);
	$this->db->delete('tb_proyek');
	
	if($this->db->affected_rows() == 1) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
}
?>