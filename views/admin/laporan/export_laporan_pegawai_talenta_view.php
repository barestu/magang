<?php
header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");
header("content-disposition: attachment;filename=Laporan_Data_Talenta_Pegawai_PLNE.xls");

?>

<!-- Buat Menu Table saat di Export Ke Excel-->
<center><h2>Laporan Data Talenta Pegawai PLNE</h2></center>

<table border='1'>
<h3>
<thead><tr>
<td align="center" width=52>No.</td>
<td align="center" width=150>Nip</td>
<td align="center" width=300>Nama</td>
<td align="center">Periode</td>
<td align="center">Semester</td>
<td align="center">Grade</td>
<td align="center">Point</td>
</tr></thead>
<h3><tbody>

<!--pencetakan-->
<?php         
            $no=1;
            foreach($data_export->result_array() as $row){
            $nip = $row['nip'];
            $nama = $row['nama'];
            $mulai_tanggal = $row['mulai_tanggal'];
            $berakhir_tanggal = $row['berakhir_tanggal'];
            $semester = $row['semester'];
            $nama_grade = $row['nama_grade'];
            $poin = $row['poin'];          
            echo "<tr>
                  <td align='center'>$no</td>
                   <td align='center'>$nip</td>
                  <td width=300>$nama</td>
                  <td align='center'>".date('d-m-Y',strtotime($mulai_tanggal)); echo " s/d ".date('d-m-Y',strtotime($berakhir_tanggal)); echo "</td>
                  <td align='center'>$semester</td>
                  <td align='center'>$nama_grade</td>
                  <td align='center'>$poin</td>                                                
                </tr>";
            $no++;
            }         
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
            foreach($data_export->result_array() as $row);
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