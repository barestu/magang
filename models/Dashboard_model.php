<?php
class Dashboard_model extends CI_Model {
 public function __construct() {
 $this->load->database();
 }
 
 // Kode untuk menampilkan data tabel pada database
 public function notifikasi() {

 $query = $this->db->query("SELECT nip, nama, nama_status, akhir_kontrak, DATEDIFF(akhir_kontrak,CURDATE()) AS selisih
			FROM tbl_pegawai  NATURAL JOIN tb_pegawai_pkwt  NATURAL JOIN tb_status 
			WHERE tbl_pegawai.id_peg = tb_pegawai_pkwt.id_peg
			AND tbl_pegawai.id_status = tb_status.id_status 
			AND tb_pegawai_pkwt.akhir_kontrak 
				BETWEEN CURDATE() 
					AND ADDDATE(CURDATE(), INTERVAL 1 MONTH)				
			ORDER BY akhir_kontrak DESC");
 			if ($query->num_rows() > 0){
 				$notif = $query->num_rows(); 				
				$post['notifikasi'] = $notif;
				$this->session->set_userdata($post);
 			}
 }
}
?>
