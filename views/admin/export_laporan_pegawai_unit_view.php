<?php
header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");
header("content-disposition: attachment;filename=Laporan_Pegawai_Unit_&_Satuan_Kerja_PLNE.xls");

?>

<!-- Buat Menu Table saat di Export Ke Excel-->
<center><h2>Laporan Per Unit Pegawai PLNE</h2></center>

<table border='1'>
<h3>
<thead><tr>
<td align="center" width=52>No.</td>
<td align="center" width=150>Nip</td>
<td align="center" width=300>Nama</td>
<td align="center">TTL</td>
<td align="center">Jenis Kelamin</td>
<td align="center">Agama</td>
<td align="center">No.Telephone</td>
<td align="center">Email 1</td>
<td align="center">Email 2</td>
<td align="center">Kepegawaian</td>
<td align="center">Status Perkawinan</td>
<td align="center">Jumlah Keluarga</td>
<!--<td align="center" width=300>Anggota Keluarga</td>
<td align="center">Jenis Kelamin</td>
<td align="center">Tanggal Lahir</td>
<td align="center">Keterangan</td>-->
</tr></thead>
<h3><tbody>

<!--pencetakan-->
<?php            
            $no=1;
            foreach($data_pribadi->result_array() as $row){
            $nip = $row['nip'];
            $nama = $row['nama'];
            $tempat_lahir = $row['tempat_lahir'];
            $tgl_lahir = $row['tgl_lahir'];
            $jenis_kelamin = $row['jenis_kelamin'];
            $agama = $row['agama'];
            $no_telp = $row['no_telp'];
            $email = $row['email'];
            $email2 = $row['email2'];
            $nama_status = $row['nama_status'];
            $status = $row['status'];                    
            $jml_keluarga = $row['jml_keluarga'];            
            echo "<tr>
                  <td align='center'>$no</td>
                   <td align='center'>$nip</td>
                  <td width=300>$nama</td>
                  <td align='center'>$tempat_lahir , $tgl_lahir</td>
                  <td align='center'>$jenis_kelamin</td>
                  <td align='center'>$agama</td>
                  <td>$no_telp</td>
                  <td align='center'>$email</td>
                  <td align='center'>$email2</td>
                  <td align='center'>$nama_status</td> 
                  <td align='center'>$status</td>
                  <td align='center'>$jml_keluarga</td>                                 
                </tr>";
            $no++;
            }

           // foreach($data_keluarga->result_array() as $row){            
            //$nama_kel = $row['nama_kel'];
            //$hub_kel = $row['hub_kel'];
            //$jk_kel = $row['jk_kel'];
            //$tgl_kel = $row['tgl_kel'];
            //$ket_kel = $row['ket_kel'];
             
            //echo "<tr>                                   
                  //<td width=300>($hub_kel) $nama_kel</td>                  
                  //<td align='center'>$jk_kel</td>
                  //<td align='center'>$tgl_kel</td>  
                  //<td align='center'>$ket_kel</td>                  
                //</tr>";}

?>
<!--selesai pencetakan-->
</tbody></h3>
</table> 
<br>
<h5>Berdasarkan Unit & Satuan Kerja :</h5>
<table border='1'>
<?php
$no=1;
$id_bid = $this->session->userdata('id_bid');
$id_jab = $this->session->userdata('id_jab');
$id_direktorat = $this->session->userdata('id_direktorat');
$nama_jab ='-';
$nama_bid ='-';
$nama_direktorat ='-';
            foreach($data_pribadi->result_array() as $row);
            if (!empty($id_jab)) {
            $nama_jab = $row['nama_jab'];}
            if (!empty($id_bid)) {           
            $nama_bid = $row['nama_bid'];}
            if (!empty($id_direktorat)) {             
            $nama_direktorat = $row['nama_direktorat'];}
?>
<h3><tbody>      

			</tr> 
				<td align="center">Jabatan :</td>
				<td align="center"><?php echo $nama_jab; ?></td>
			</tr>                                    
          		<tr>
                  <td align='center'>Bidang :</td>
                  <td align='center'><?php echo $nama_bid; ?></td>                  
                  </tr>
                  <tr> 
				<td align="center">Direktorat :</td>
				<td align="center"><?php echo $nama_direktorat; ?></td>
			</tr>       
</tbody></h3>
</table>