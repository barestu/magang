<?php
class Notifikasi_pegawai_model extends CI_Model {
 public function __construct() {
 $this->load->database();
 }
 
 // Kode untuk menampilkan data tabel pada database
 public function kontrak_tempo() {

 $query = $this->db->query("SELECT id_peg, nip, no_kontrak, nama, nama_status, berakhir_kontrak, DATEDIFF(berakhir_kontrak,CURDATE()) AS selisih
			FROM tbl_pegawai  NATURAL JOIN tb_pegawai_pkwt  NATURAL JOIN tb_status 
			WHERE tbl_pegawai.id_peg = tb_pegawai_pkwt.id_peg
			AND tbl_pegawai.id_status = tb_status.id_status 
			AND tb_pegawai_pkwt.berakhir_kontrak 
				BETWEEN CURDATE() 
					AND ADDDATE(CURDATE(), INTERVAL 1 MONTH)				
			ORDER BY berakhir_kontrak ASC");
 return $query;
 }
}
?>