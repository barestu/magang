<?php
class Laporan_pegawai_talenta_model extends CI_Model {
 public function __construct() {
 $this->load->database();
 }
 
 // Kode untuk menampilkan data tabel pada database
 public function list_direktorat() {

 $query = $this->db->query('SELECT * FROM tb_direktorat ORDER BY id_direktorat ASC');
 return $query;
 }
 public function list_jabatan() {

 $query = $this->db->query('SELECT * FROM tb_jabatan ORDER BY id_jab ASC');
 return $query;
 }
 public function list_bidang() {

 $query = $this->db->query('SELECT * FROM tb_bidang ORDER BY id_bid ASC');
 return $query;
 }

 public function proc_laporan() {
 	$query = '';
	$post['id_direktorat'] = $this->input->post('id_direktorat');
	$post['id_jab'] = $this->input->post('id_jab');
	$post['id_bid'] = $this->input->post('id_bid');
	$this->session->set_userdata($post);
	$post['id_direktorat'] = $this->session->userdata('id_direktorat');
	$post['id_jab'] = $this->session->userdata('id_jab');
	$post['id_bid'] = $this->session->userdata('id_bid');
	$where = ''; 

	 if (!empty($post['id_direktorat']) && !empty($post['id_jab']) && !empty($post['id_bid'])) {
          $where .= "AND tbl_pegawai.id_direktorat ='".$post['id_direktorat']."' 
						AND tbl_pegawai.id_jab = '".$post['id_jab']."' 
						AND tbl_pegawai.id_bid = '".$post['id_bid']."' ";          
        } else if (!empty($post['id_direktorat']) && !empty($post['id_jab'])) {
          $where .= "AND tbl_pegawai.id_direktorat ='".$post['id_direktorat']."' 
						AND tbl_pegawai.id_jab = '".$post['id_jab']."' ";                   
        } else if (!empty($post['id_direktorat']) && !empty($post['id_bid'])) {
          $where .= "AND tbl_pegawai.id_direktorat ='".$post['id_direktorat']."'					 
						AND tbl_pegawai.id_bid = '".$post['id_bid']."' ";                
        } else if (!empty($post['id_bid']) && !empty($post['id_jab'])) {          
          $where .= "AND tbl_pegawai.id_jab = '".$post['id_jab']."' 
						AND tbl_pegawai.id_bid = '".$post['id_bid']."' ";          
        } else if (!empty($post['id_direktorat'])) {
         $where .= "AND tbl_pegawai.id_direktorat ='".$post['id_direktorat']."' ";          
        } else if (!empty($post['id_jab'])) {        
          $where .= "AND tbl_pegawai.id_jab = '".$post['id_jab']."' ";          
        }  else if (!empty($post['id_bid'])) {          
          $where .= "AND tbl_pegawai.id_bid = '".$post['id_bid']."' ";          
        }    
if (!empty($where)) {
 $query = $this->db->query("SELECT nip, nama, mulai_tanggal, berakhir_tanggal, semester, poin, nama_grade
FROM tbl_pegawai NATURAL JOIN tb_jabatan NATURAL JOIN tb_bidang NATURAL JOIN tb_direktorat NATURAL JOIN tb_talenta NATURAL JOIN tb_grade
WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
AND tbl_pegawai.id_direktorat = tb_direktorat.id_direktorat 
AND tbl_pegawai.id_peg = tb_talenta.id_peg 
AND tbl_pegawai.id_jab = tb_jabatan.id_jab
AND tb_grade.id_grade = tb_talenta.id_grade
$where
ORDER BY nip ASC");}

 return $query;
 }

 public function data_export() {
 	$query = '';	
	$post['id_direktorat'] = $this->session->userdata('id_direktorat');
	$post['id_jab'] = $this->session->userdata('id_jab');
	$post['id_bid'] = $this->session->userdata('id_bid');
	$where = ''; 

	 if (!empty($post['id_direktorat']) && !empty($post['id_jab']) && !empty($post['id_bid'])) {
          $where .= "AND tbl_pegawai.id_direktorat ='".$post['id_direktorat']."' 
						AND tbl_pegawai.id_jab = '".$post['id_jab']."' 
						AND tbl_pegawai.id_bid = '".$post['id_bid']."' ";          
        } else if (!empty($post['id_direktorat']) && !empty($post['id_jab'])) {
          $where .= "AND tbl_pegawai.id_direktorat ='".$post['id_direktorat']."' 
						AND tbl_pegawai.id_jab = '".$post['id_jab']."' ";                   
        } else if (!empty($post['id_direktorat']) && !empty($post['id_bid'])) {
          $where .= "AND tbl_pegawai.id_direktorat ='".$post['id_direktorat']."'					 
						AND tbl_pegawai.id_bid = '".$post['id_bid']."' ";                
        } else if (!empty($post['id_bid']) && !empty($post['id_jab'])) {          
          $where .= "AND tbl_pegawai.id_jab = '".$post['id_jab']."' 
						AND tbl_pegawai.id_bid = '".$post['id_bid']."' ";          
        } else if (!empty($post['id_direktorat'])) {
         $where .= "AND tbl_pegawai.id_direktorat ='".$post['id_direktorat']."' ";          
        } else if (!empty($post['id_jab'])) {        
          $where .= "AND tbl_pegawai.id_jab = '".$post['id_jab']."' ";          
        }  else if (!empty($post['id_bid'])) {          
          $where .= "AND tbl_pegawai.id_bid = '".$post['id_bid']."' ";
           $post['id_direktorat'] ='';
          $post['id_jab'] ='';        
        }    
if (!empty($where)) {
 $query = $this->db->query("SELECT nip, nama, mulai_tanggal, berakhir_tanggal, semester, poin, nama_grade, nama_direktorat, nama_jab, nama_bid
FROM tbl_pegawai NATURAL JOIN tb_jabatan NATURAL JOIN tb_bidang NATURAL JOIN tb_direktorat NATURAL JOIN tb_talenta NATURAL JOIN tb_grade 
WHERE tbl_pegawai.id_bid = tb_bidang.id_bid 
AND tbl_pegawai.id_direktorat = tb_direktorat.id_direktorat 
AND tbl_pegawai.id_peg = tb_talenta.id_peg 
AND tbl_pegawai.id_jab = tb_jabatan.id_jab
AND tb_grade.id_grade = tb_talenta.id_grade  
$where
ORDER BY nip ASC");}
 return $query;
 }

}
