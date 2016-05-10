<?php
class Model_organik extends CI_Model {
 public function __construct() {
	$this->load->database();
 }
 
 // Ambil semua data pegawai dari database
 public function getAllData() {
	$query = $this->db->query("SELECT id_peg, nip, nama, nama_jab, nama_bid, nama_direktorat
			FROM tbl_pegawai, tb_jabatan, tb_bidang, tb_direktorat
			WHERE tbl_pegawai.id_jab = tb_jabatan.id_jab
			AND tbl_pegawai.id_bid = tb_bidang.id_bid
			AND tbl_pegawai.id_direktorat = tb_direktorat.id_direktorat
			AND tbl_pegawai.id_status = '1'
			ORDER BY nip ASC");
	
	return $query->result_array();
 }
 
 // Ambil data pegawai yang ditentukan
 public function getData($id) {
	$this->db->select('*');
	$this->db->from('tbl_pegawai AS tp, tb_pegawai_organik AS tpo, tb_jabatan AS tj, tb_bidang AS tb, tb_direktorat AS td');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = tpo.id_peg');
	$this->db->where('tp.id_bid = tb.id_bid');
	$this->db->where('tp.id_jab = tj.id_jab');
	$this->db->where('tp.id_direktorat = td.id_direktorat');
	$query = $this->db->get();
	
	return $query->row_array();
 }
 
 // Input data pegawai baru 
 public function addData() {
	$d['id_status'] = 1;
	$d['id_peg'] = $this->input->post('id_peg');
	$d['id_bid'] = $this->input->post('id_bid');
	$d['id_jab'] = $this->input->post('id_jab');
	$d['id_direktorat'] = $this->input->post('id_direktorat');	 
	$d['nip'] = $this->input->post('nip');
	$d['nama'] = $this->input->post('nama');
	$d['alamat'] = $this->input->post('alamat');
	$d['no_telp'] = $this->input->post('no_telp');
	$d['email'] = $this->input->post('email');
	$d['email2'] = $this->input->post('email2');
	$d['tempat_lahir'] = $this->input->post('tempat_lahir');
	$d['tgl_lahir'] = $this->input->post('tgl_lahir');
	$d['jenis_kelamin'] = $this->input->post('jenis_kelamin');
	$d['agama'] = $this->input->post('agama');
	$d['status'] = $this->input->post('status');
	$d['jml_keluarga'] = $this->input->post('jml_keluarga');
	$this->db->insert('tbl_pegawai', $d);
	
	if($this->db->affected_rows() > 0) {
		$d2['id_peg'] = $this->input->post('id_peg');
		$d2['tgl_masuk'] = $this->input->post('tgl_masuk');
		$d2['tgl_angkat'] = $this->input->post('tgl_angkat');
		$this->db->insert('tb_pegawai_organik', $d2);
		if($this->db->affected_rows() > 0) {
			return TRUE;
		}
	} else {
		return FALSE;
	}	
 }
 
 // Edit data pegawai
 public function editDataPegawai($id) {
	$d['id_status'] = 1;
	$d['id_peg'] = $id;
	$d['id_bid'] = $this->input->post('id_bid');
	$d['id_jab'] = $this->input->post('id_jab');
	$d['id_direktorat'] = $this->input->post('id_direktorat');	 
	$d['nip'] = $this->input->post('nip');
	$d['nama'] = $this->input->post('nama');
	$d['alamat'] = $this->input->post('alamat');
	$d['no_telp'] = $this->input->post('no_telp');
	$d['email'] = $this->input->post('email');
	$d['email2'] = $this->input->post('email2');
	$d['tempat_lahir'] = $this->input->post('tempat_lahir');
	$d['tgl_lahir'] = $this->input->post('tgl_lahir');
	$d['jenis_kelamin'] = $this->input->post('jenis_kelamin');
	$d['agama'] = $this->input->post('agama');
	$d['status'] = $this->input->post('status');
	$d['jml_keluarga'] = $this->input->post('jml_keluarga');
	
	$this->db->where('id_peg', $id);
	$this->db->update('tbl_pegawai', $d);
	
	if($this->db->affected_rows() > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 public function editDataOrganik($id) {
	$d['id_peg'] = $id;
	$d['tgl_masuk'] = $this->input->post('tgl_masuk');
	$d['tgl_angkat'] = $this->input->post('tgl_angkat');	
	$this->db->where('id_peg', $id);
	$this->db->update('tb_pegawai_organik', $d);
	
	if($this->db->affected_rows() > 0) {
		return TRUE;
	} else {
		return FALSE;
	}
 }
 
 // Delete data pegawai
 public function deleteData($id) {
	$this->db->where('id_peg', $id);
	$this->db->delete('tbl_pegawai');
	
	if($this->db->affected_rows() == 1) {
		$this->db->where('id_peg', $id);
		$this->db->delete('tb_pegawai_organik');		
		if($this->db->affected_rows() == 1) {
			return TRUE;
		}
	} else {
		return FALSE;
	}
 }
 
 // FUNGSI DB DROPDOWN DI FORM
 public function getBidang() {
	$query = $this->db->query('SELECT * FROM tb_bidang ORDER BY nama_bid ASC');
	return $query->result();
 }
 
 public function getJabatan() {
	$query = $this->db->query('SELECT * FROM tb_jabatan ORDER BY nama_jab ASC');
	return $query->result();
 }
 
 public function getDirektorat() {
	$query = $this->db->query('SELECT * FROM tb_direktorat ORDER BY nama_direktorat ASC');
	return $query->result();
 }
 
 // NEXT ID
 public function getNextId() {
	$query = $this->db->query('SELECT MAX(id_peg) AS max FROM tbl_pegawai');
	$next_id = $query->row('max') + 1;
	return $next_id;
 }

}
?>