<?php
class Dashboard_model extends CI_Model {
 public function __construct() {
 $this->load->database();
 }
 
 // Kode untuk menampilkan data tabel pada database
 public function notifikasi() {

 $query = $this->db->query("SELECT nip, nama, nama_status, berakhir_kontrak, DATEDIFF(berakhir_kontrak,CURDATE()) AS selisih
			FROM tbl_pegawai  NATURAL JOIN tb_pegawai_pkwt  NATURAL JOIN tb_status 
			WHERE tbl_pegawai.id_peg = tb_pegawai_pkwt.id_peg
			AND tbl_pegawai.id_status = tb_status.id_status 
			AND tb_pegawai_pkwt.berakhir_kontrak 
				BETWEEN CURDATE() 
					AND ADDDATE(CURDATE(), INTERVAL 1 MONTH)				
			ORDER BY berakhir_kontrak DESC");
 			if ($query->num_rows() > 0){
 				$notif = $query->num_rows(); 				
				$post['notifikasi'] = $notif;
				$this->session->set_userdata($post);
 			}
 }
 //data chart pegawai
 public function pegawai_organik() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai 
							WHERE id_status = '1'");
 			if ($query->num_rows() > 0){
 				$organik = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$organik = 0;
 			}
 			return $organik;
 }
 public function pegawai_pkwt() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai 
							WHERE id_status = '2'");
 			if ($query->num_rows() > 0){
 				$pkwt = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$pkwt = 0;
 			}
 			return $pkwt;
 }
  //data chart Bidang
 public function direksi_bidang() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Direksi'");
 			if ($query->num_rows() > 0){
 				$direksi = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$direksi = 0;
 			}
 			return $direksi;
 }
 public function pemasaran_bidang() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Pemasaran'");
 			if ($query->num_rows() > 0){
 				$pemasaran = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$pemasaran = 0;
 			}
 			return $pemasaran;
 }
 public function pengembangan_usaha_bidang() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Pengembangan Usaha'");
 			if ($query->num_rows() > 0){
 				$pengembangan_usaha = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$pengembangan_usaha = 0;
 			}
 			return $pengembangan_usaha;
 }
 public function pengusahaan_bidang() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Pengusahaan'");
 			if ($query->num_rows() > 0){
 				$pengusahaan = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$pengusahaan = 0;
 			}
 			return $pengusahaan;
 }
 public function pembangkit_bidang() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Pembangkit'");
 			if ($query->num_rows() > 0){
 				$pembangkit = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$pembangkit = 0;
 			}
 			return $pembangkit;
 }
 public function t_dan_d_bidang() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Transmisi dan Distribusi'");
 			if ($query->num_rows() > 0){
 				$t_dan_d = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$t_dan_d = 0;
 			}
 			return $t_dan_d;
 }
 public function konstruksi_bidang() {

  $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Konstruksi'");
 			if ($query->num_rows() > 0){
 				$konstruksi = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$konstruksi = 0;
 			}
 			return $konstruksi;
 }
 public function keuangan_bidang() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Keuangan'");
 			if ($query->num_rows() > 0){
 				$keuangan = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$keuangan = 0;
 			}
 			return $keuangan;
 }
 public function akutansi_bidang() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Akuntansi'");
 			if ($query->num_rows() > 0){
 				$akuntansi = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$akuntansi = 0;
 			}
 			return $akuntansi;
 }
 public function sdm_bidang() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'SDM'");
 			if ($query->num_rows() > 0){
 				$sdm = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$sdm = 0;
 			}
 			return $sdm;
 }
 public function umum_bidang() {

  $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Umum'");
 			if ($query->num_rows() > 0){
 				$umum = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$umum = 0;
 			}
 			return $umum;
 }
 public function hukum_bidang() {

  $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Hukum'");
 			if ($query->num_rows() > 0){
 				$hukum = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$hukum = 0;
 			}
 			return $hukum;
 }
 public function humas_bidang() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Humas'");
 			if ($query->num_rows() > 0){
 				$humas = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$humas = 0;
 			}
 			return $humas;
 }
  public function pengadaan_bidang() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Pengadaan'");
 			if ($query->num_rows() > 0){
 				$pengadaan = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$pengadaan = 0;
 			}
 			return $pengadaan;
 }
  public function audit_internal_bidang() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Audit Internal'");
 			if ($query->num_rows() > 0){
 				$audit_internal = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$audit_internal = 0;
 			}
 			return $audit_internal;
 }
  public function mmr_bidang() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Manajemen Mutu dan Risiko'");
 			if ($query->num_rows() > 0){
 				$mmr = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$mmr = 0;
 			}
 			return $mmr;
 }
  public function pengawas_internal_bidang() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Pengawas Internal'");
 			if ($query->num_rows() > 0){
 				$pengawas_internal = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$pengawas_internal = 0;
 			}
 			return $pengawas_internal;
 }
  public function informasi_teknologi_bidang() {

 $query = $this->db->query("SELECT id_status
							FROM tbl_pegawai ,tb_bidang  
							WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
							AND nama_bid = 'Informasi Teknologi'");
 			if ($query->num_rows() > 0){
 				$informasi_teknologi = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$informasi_teknologi = 0;
 			}
 			return $informasi_teknologi;
  }
   public function jumlah_bidang() {

 $query = $this->db->query("SELECT id_bid
							FROM tb_bidang ");
 			if ($query->num_rows() < 1){
 				$jumlah_bidang = 0;
 			}
 			elseif ($query->num_rows() > 0){	
 			$jumlah_bidang = $query->num_rows(); 
 		}				
 			return $jumlah_bidang;
  }

//DATA CHART JABATAN
  public function project_dir() {

 $query = $this->db->query("SELECT id_peg
							FROM tbl_pegawai ,tb_jabatan  
							WHERE tbl_pegawai.id_jab = tb_jabatan.id_jab 
							AND nama_jab = 'Project Director'");
 			if ($query->num_rows() > 0){
 				$project_dir= $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$project_dir = 0;
 			}
 			return $project_dir;
  }
  public function project_manager() {

 $query = $this->db->query("SELECT id_peg
							FROM tbl_pegawai ,tb_jabatan  
							WHERE tbl_pegawai.id_jab = tb_jabatan.id_jab 
							AND nama_jab = 'Project Manager'");
 			if ($query->num_rows() > 0){
 				$project_manager = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$project_manager = 0;
 			}
 			return $project_manager;
  }
  public function ptl() {

 $query = $this->db->query("SELECT id_peg
							FROM tbl_pegawai ,tb_jabatan  
							WHERE nama_jab IN('Project Team Leader','Project Team Leader/Manager','PTL Jawa/Bali Crossing','Co. PTL')
							AND tbl_pegawai.id_jab = tb_jabatan.id_jab ");
 			if ($query->num_rows() > 0){
 				$ptl = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$ptl = 0;
 			}
 			return $ptl;
  }
  public function civil_engineer() {

 $query = $this->db->query("SELECT id_peg
							FROM tbl_pegawai ,tb_jabatan  
							WHERE nama_jab IN('Site Civil Engineer','Senior Engineer Sipil','Project Engineer Civil','Junior Engineer Teknik Sipil','Foundation Engineer','Enjinir Sipil','Civil Site Inspector','Civil Inspector','Civil Engineer Waterways','Civil Engineer','Enjinir Sipil','Assistant Civil Engineer')
							AND tbl_pegawai.id_jab = tb_jabatan.id_jab ");
 			if ($query->num_rows() > 0){
 				$civil_engineer = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$civil_engineer = 0;
 			}
 			return $civil_engineer;
  }
  public function mechanical_engineer() {

 $query = $this->db->query("SELECT id_peg
							FROM tbl_pegawai ,tb_jabatan  
							WHERE nama_jab IN('Site Mechanical Engineer','Senior Engineer Mesin','Mechanical Inspector','Mechanical Engineer','Inspector Mechanical Engineer','Enjinir Mesin','Assistant Engineer Teknik Mesin')
							AND tbl_pegawai.id_jab = tb_jabatan.id_jab ");
 			if ($query->num_rows() > 0){
 				$mechanical_engineer = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$mechanical_engineer = 0;
 			}
 			return $mechanical_engineer;
  }
  public function i_c() {

 $query = $this->db->query("SELECT id_peg
							FROM tbl_pegawai ,tb_jabatan  
							WHERE nama_jab IN('Instrument & Control Engineer','Project Engineer I&C','Assistant Engineer Teknik I&C')
							AND tbl_pegawai.id_jab = tb_jabatan.id_jab ");
 			if ($query->num_rows() > 0){
 				$i_c = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$i_c = 0;
 			}
 			return $i_c;
  }
  public function electrical_engineer() {

 $query = $this->db->query("SELECT id_peg
							FROM tbl_pegawai ,tb_jabatan  
							WHERE nama_jab IN('Site Electrical Engineer','Senior Engineer Listrik','Lead Engineer Electrical','Elektro - Mechaninal Engineer','Electrical Inspector','Electrical Engineer')
							AND tbl_pegawai.id_jab = tb_jabatan.id_jab ");
 			if ($query->num_rows() > 0){
 				$electrical_engineer = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$electrical_engineer = 0;
 			}
 			return $electrical_engineer;
  }
  public function qa_qc() {

 $query = $this->db->query("SELECT id_peg
							FROM tbl_pegawai ,tb_jabatan  
							WHERE nama_jab IN('Tim QA/QC','QA/QC Engineer','Junior Engineer QA/QC','Leader QA/QC Mechanical Engineer')
							AND tbl_pegawai.id_jab = tb_jabatan.id_jab ");
 			if ($query->num_rows() > 0){
 				$qa_qc = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$qa_qc = 0;
 			}
 			return $qa_qc;
  }
  public function boiler() {

 $query = $this->db->query("SELECT id_peg
							FROM tbl_pegawai ,tb_jabatan  
							WHERE nama_jab IN('Inspector Boiler')
							AND tbl_pegawai.id_jab = tb_jabatan.id_jab ");
 			if ($query->num_rows() > 0){
 				$boiler = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$boiler = 0;
 			}
 			return $boiler;
  }
  public function hse() {

 $query = $this->db->query("SELECT id_peg
							FROM tbl_pegawai ,tb_jabatan  
							WHERE nama_jab IN('HSE Engineer')
							AND tbl_pegawai.id_jab = tb_jabatan.id_jab ");
 			if ($query->num_rows() > 0){
 				$hse = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$hse = 0;
 			}
 			return $hse;
  }
  public function piping() {

 $query = $this->db->query("SELECT id_peg
							FROM tbl_pegawai ,tb_jabatan  
							WHERE nama_jab IN('Piping Engineer')
							AND tbl_pegawai.id_jab = tb_jabatan.id_jab ");
 			if ($query->num_rows() > 0){
 				$piping = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$piping = 0;
 			}
 			return $piping;
  }
  public function geodetic() {

 $query = $this->db->query("SELECT id_peg
							FROM tbl_pegawai ,tb_jabatan  
							WHERE nama_jab IN('Geodetic Engineer')
							AND tbl_pegawai.id_jab = tb_jabatan.id_jab ");
 			if ($query->num_rows() > 0){
 				$geodetic = $query->num_rows(); 				
 			}
 			elseif ($query->num_rows() < 1){
 				$geodetic = 0;
 			}
 			return $geodetic;
  }
  public function jumlah_jabatan() {

 $query = $this->db->query("SELECT nama_jab
							FROM tb_jabatan ");
 			if ($query->num_rows() < 1){
 				$jumlah_jabatan = 0;
 			}
 			elseif ($query->num_rows() > 0){	
 			$jumlah_jabatan = $query->num_rows(); 
 		}				
 			return $jumlah_jabatan;
  }

}
?>
