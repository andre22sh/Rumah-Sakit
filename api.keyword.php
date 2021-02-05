<?php

session_start();
include_once 'koneksi.php';
$type = $_REQUEST['type'];

switch ($type) 
{
	case 1:
		$IdDokter      	= $_REQUEST['IdDokter'];
		$NamaDokter 	= $_REQUEST['NamaDokter'];
		$AlmtDokter   	= $_REQUEST['AlmtDokter'];
		$Notelp   		= $_REQUEST['Notelp'];
		$kd_spesialis   = $_REQUEST['kd_spesialis'];
		$txtspesialis 	= $_REQUEST ['txtspesialis'];
		
		$pesanError = array();
		if (empty($IdDokter)) {
			$pesanError[] = "<b>ID Dokter</b> Tidak Boleh Kosong!";
		}
		if (empty($NamaDokter)) {
			$pesanError[] = "<b>Nama Dokter</b> Tidak Boleh Kosong!";
		}
		if (empty($AlmtDokter)) {
			$pesanError[] = "<b>Alamat Dokter</b> Tidak Boleh Kosong!";
		}
		if (empty($Notelp)) {
			$pesanError[] = "<b>No. Telpon</b> Tidak Boleh Kosong!";
		}
		if (empty($kd_spesialis)) {
			$pesanError[] = "<b>Kode Spesialis</b> Tidak Boleh Kosong!";
		}
		if (empty($txtspesialis)) {
			$pesanError[] = "<b>Spesialis</b> Tidak Boleh Kosong!";
		}
		if (count($pesanError)>=1){
			$pesan="";
			foreach ($pesanError as $pesan_tampil) {
				$pesan.="$pesan_tampil<br>";
			}
			$data['msg'][0] = "Error";
			$data['msg'][1] = $pesan ;
		} 
		else {
			$mySql = "SELECT * FROM daftar_dokter WHERE id_dokter = '".$IdDokter."'";
			$myQry = mysqli_query ($koneksi, $mySql);
			$jumlah = mysqli_num_rows ($myQry);

			if ($jumlah==0){

				$mySql = "INSERT INTO daftar_dokter (id_dokter,nama_dokter,alamat_dokter,no_telpon,kd_spesialis,spesialis)
				VALUES ('$IdDokter','$NamaDokter','$AlmtDokter','$Notelp','$kd_spesialis','$txtspesialis')";
				$data['msg'][0] = "ok";
				$data['msg'][1] = "Data Berhasil Ditambahkan!";
				$myQry = mysqli_query($koneksi,$mySql);
			}

			else {
				$mySql = "UPDATE daftar_dokter SET
								id_dokter='$IdDokter', 
						 		nama_dokter='$NamaDokter',
						 		alamat_dokter='$AlmtDokter',
						 		no_telpon='$Notelp',
						 		kd_spesialis='$kd_spesialis',
						 		spesialis ='$txtspesialis'
						 		WHERE id_dokter ='$IdDokter'";
				$data['msg'][0] = "ok";
				$data['msg'][1] = "data berhasil diubah...";
				$myQry = mysqli_query($koneksi, $mySql);
			}	
		}
		
	echo json_encode($data);
	break;

	case 2:
		$IdDokter 	= 	$_REQUEST['IdDokter'];
		$mySql 	 	= 	"DELETE FROM daftar_dokter WHERE id_dokter = '".$IdDokter."'";
		$myQry 		= 	mysqli_query($koneksi, $mySql);
		if (!$myQry){
			$data['msg'][0] = "hapus";
			$data['msg'][1] = "<b>Error:</b>".mysqli_error($koneksi);
		}

		else{
			$data['msg'][0] = "hapus";
			$data['msg'][1] = "Hapus Data Berhasil Dilakukan!";
		}

		echo json_encode($data);
  	break;

  	case 97:
			$mySql = "SELECT * FROM daftar_dokter";
			$myQry = mysqli_query ($koneksi, $mySql);
			$i=1;
			$data="";
			while ($myData = mysqli_fetch_array ($myQry)) {
				$akses="";

					$akses="<center> <a href='#' class='tooltip-success' data-rel='tooltip' title='ubah'> <span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a> <a href='#' class='tooltip-error' data-rel='tooltip' title='hapus'><span class='red'><i class='ace-icon fa fa-trash-o bigger-120'></i></span></a></center> ";
					$data.= sprintf("[\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\"],", 
								$myData['id_dokter'],$myData['nama_dokter'],$myData['alamat_dokter'],$myData['no_telpon'],$myData['kd_spesialis'],$myData['spesialis'],$akses);
				$i++;

			}
			echo '{"data":['.substr($data,0,-1).']}';

		break;
		default :
}

?>
