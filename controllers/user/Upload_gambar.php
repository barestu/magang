<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_gambar extends CI_Controller {
	// CONSTRUCT
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		} 
		$this->load->helper(array('form', 'url'));
		$this->load->model('Upload_gambar_model');
		$this->load->database();
	}
	
	public function index(){
		$gambar ='';
		$id = $this->input->get('id');
		$status_gambar = "custom";

		$data= $this->Upload_gambar_model->change_ava($id);
		if(!empty ($data->nama_gambar)) {			
		$path = './gallery/' .$data->nama_gambar;	
   		unlink($path);
   		$this->Upload_gambar_model->reset_ava($id);
		}

		$this->load->library('upload');
        $nmfile = "avatar_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './gallery'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2000'; //maksimum besar file 2000kb
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        //$config['max_size'] = '100'; //maksimum besar file 100kb
        //$config['max_width']  = '400'; //lebar maksimum 400 px
        //$config['max_height']  = '500'; //tinggi maksimu 500 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
		
            if ($this->upload->do_upload('ava'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'nama_gambar' =>$gbr['file_name'],
                  'tipe_gambar' =>$gbr['file_type'],
                  'status_gambar' =>$status_gambar );
 
                $insert = $this->Upload_gambar_model->insert_ava($data,$id); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload
                if ($insert == TRUE) {
					$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Upload gambar berhasil!</div></div>");
                echo "<script>history.go(-1);</script>";

				} elseif ($insert == FALSE) {
					$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload!</div></div>");
                echo "<script>history.go(-1);</script>";

				}
            }elseif ( ! $this->upload->do_upload('ava')){
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Pilih file gambar dahulu!</div></div>");
                echo "<script>history.go(-1);</script>";
           		 }
        
    }
    public function delete_gambar(){
    $id = $this->input->get('id');

    $data['nama_gambar'] = $this->Upload_gambar_model->show_ava($id);
    $path = $_SERVER['DOCUMENT_ROOT'].'/gallery/';
	$files = glob($path.$data['nama_gambar']); // get file names
	unlink($file);
	}
}