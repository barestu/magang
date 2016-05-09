<?php
class Model_pkwt extends CI_Model {
 public function __construct() {
	$this->load->database();
 }
 
 // Ambil semua data pegawai dari database
 public function getAllData() {
	$query = $this->db->query("SELECT tbl_pegawai.id_peg, nip, nama, nama_jab, nama_bid, nama_direktorat, mulai_kontrak, berakhir_kontrak
			FROM tbl_pegawai, tb_jabatan, tb_bidang, tb_direktorat, tb_pegawai_pkwt
			WHERE tbl_pegawai.id_jab = tb_jabatan.id_jab
			AND id_status = 2
			AND tbl_pegawai.id_bid = tb_bidang.id_bid
			AND tbl_pegawai.id_direktorat = tb_direktorat.id_direktorat
			AND tbl_pegawai.id_peg = tb_pegawai_pkwt.id_peg
			ORDER BY nip ASC");
	
	return $query->result_array();
 }
 
 // Ambil data pegawai yang ditentukan
 public function getData($id) {
	$this->db->select('*');
	$this->db->from('tbl_pegawai AS tp, tb_pegawai_pkwt AS tpp, tb_jabatan AS tj, tb_bidang AS tb, tb_direktorat AS td');
	$this->db->where('tp.id_peg', $id);
	$this->db->where('tp.id_peg = tpp.id_peg');
	$this->db->where('tp.id_bid = tb.id_bid');
	$this->db->where('tp.id_jab = tj.id_jab');
	$this->db->where('tp.id_direktorat = td.id_direktorat');
	$query = $this->db->get();
	
	return $query->row_array();
 }
 
 // Input data pegawai baru 
 public function addData() {
	$d['id_status'] = 2;
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
		$d2['no_npwp'] = $this->input->post('no_npwp');
		$d2['no_kontrak'] = $this->input->post('no_kontrak');
		$d2['mulai_kontrak'] = $this->input->post('mulai_kontrak');
		$d2['berakhir_kontrak'] = $this->input->post('berakhir_kontrak');
		$date1 = $d2['mulai_kontrak'];
		$date2 = $d2['berakhir_kontrak'];
		$d2['lama_kontrak'] = $this->model_pkwt->lamaKontrak($date1, $date2);
		$d2['uang_tugas'] = $this->input->post('uang_tugas');
		$d2['uang_insentif'] = $this->input->post('uang_insentif');
		$d2['uang_makan'] = $this->input->post('uang_makan');
		$d2['uang_transport'] = $this->input->post('uang_transport');
		$this->db->insert('tb_pegawai_pkwt', $d2);
		
		if($this->db->affected_rows() > 0) {
			return TRUE;
		}
	} else {
		return FALSE;
	}	
 }
 
 // Edit data pegawai
 public function editDataPegawai($id) {
	$d['id_status'] = 2;
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
 
 public function editDataPKWT($id) {
		$d['id_peg'] = $this->input->post('id_peg');
		$d['no_npwp'] = $this->input->post('no_npwp');
		$d['no_kontrak'] = $this->input->post('no_kontrak');
		$d['mulai_kontrak'] = $this->input->post('mulai_kontrak');
		$d['berakhir_kontrak'] = $this->input->post('berakhir_kontrak');
		$date1 = $d['mulai_kontrak'];
		$date2 = $d['berakhir_kontrak'];
		$d['lama_kontrak'] = $this->model_pkwt->lamaKontrak($date1, $date2);
		$d['uang_tugas'] = $this->input->post('uang_tugas');
		$d['uang_insentif'] = $this->input->post('uang_insentif');
		$d['uang_makan'] = $this->input->post('uang_makan');
		$d['uang_transport'] = $this->input->post('uang_transport');	
	$this->db->where('id_peg', $id);
	$this->db->update('tb_pegawai_pkwt', $d);
	
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
		$this->db->delete('tb_pegawai_pkwt');		
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
 
 // HITUNG LAMA KONTRAK
 public function lamaKontrak($date1, $date2) {
	$ts1 = strtotime($date1);
	$ts2 = strtotime($date2);

	$year1 = date('Y', $ts1);
	$year2 = date('Y', $ts2);

	$month1 = date('m', $ts1);
	$month2 = date('m', $ts2);

	$diff = (($year2 - $year1) * 12) + ($month2 - $month1);
	
	return $diff;
 }

}
?>