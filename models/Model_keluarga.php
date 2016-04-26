<?php
class Model_keluarga extends CI_Model {
 public function __construct() {
	$this->load->database();
 }
 
 public function getDataAll($id) {
	$this->db->select('*');
	$this->db->from('tb_keluarga AS tk, tbl_pegawai AS tp');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = tk.id_peg');
	$this->db->order_by('tgl_kel', 'ASC');
	$query = $this->db->get();
	
	return $query->result_array();
	 
 }
 
 public function getData($id) {
	$this->db->select('*');
	$this->db->from('tb_keluarga');
	$this->db->where('id_kel', $id);
	$query = $this->db->get();
	
	return $query->row_array();
 }
 
 public function addData() {
	$d['id_peg'] = $this->input->post('id_peg');
	$d['nama_kel'] = $this->input->post('nama_kel');
	$d['hub_kel'] = $this->input->post('hub_kel');
	$d['jk_kel'] = $this->input->post('jk_kel');
	$d['tgl_kel'] = $this->input->post('tgl_kel');
	$d['ket_kel'] = $this->input->post('ket_kel');
	$this->db->insert('tb_keluarga', $d);
	
	if($this->db->affected_rows() > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 public function editData($id) {
	$d['id_peg'] = $this->input->post('id_peg');
	$d['nama_kel'] = $this->input->post('nama_kel');
	$d['hub_kel'] = $this->input->post('hub_kel');
	$d['jk_kel'] = $this->input->post('jk_kel');
	$d['tgl_kel'] = $this->input->post('tgl_kel');
	$d['ket_kel'] = $this->input->post('ket_kel');
	$this->db->where('id_kel', $id);
	$this->db->update('tb_keluarga', $d);
	
	if($this->db->affected_rows() > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 public function deleteData($id) {
	$this->db->where('id_kel', $id);
	$this->db->delete('tb_keluarga');
	
	if($this->db->affected_rows() == 1) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
}
?>