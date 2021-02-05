<?php

session_start();
include_once 'koneksi.php';
$type = $_REQUEST['type'];

switch ($type) 
{
	case 1:
		$kd_jadwal_praktek 	= $_REQUEST['kd_jadwal_praktek'];
		$IdDokter      	= $_REQUEST['IdDokter'];
		$NamaDokter 	= $_REQUEST['NamaDokter'];
		$txtspesialis   	= $_REQUEST['txtspesialis'];
		$hr_kerja   		= $_REQUEST['hr_kerja'];
		$waktu_kerja   = $_REQUEST['waktu_kerja'];
		$txtruangan 	= $_REQUEST ['txtruangan'];
		
		$pesanError = array();
		if (empty($kd_jadwal_praktek)) {
			$pesanError[] = "<b>Kode Jadwal Praktek</b> Tidak Boleh Kosong!";
		}
		if (empty($IdDokter)) {
			$pesanError[] = "<b>ID Dokter</b> Tidak Boleh Kosong!";
		}
		if (empty($NamaDokter)) {
			$pesanError[] = "<b>Nama Dokter</b> Tidak Boleh Kosong!";
		}
		if (empty($txtspesialis)) {
			$pesanError[] = "<b>Spesialis</b> Tidak Boleh Kosong!";
		}
		if (empty($hr_kerja)) {
			$pesanError[] = "<b>Hari</b> Tidak Boleh Kosong!";
		}
		if (empty($waktu_kerja)) {
			$pesanError[] = "<b>Waktu</b> Tidak Boleh Kosong!";
		}
		if (empty($txtruangan)) {
			$pesanError[] = "<b>Ruangan</b> Tidak Boleh Kosong!";
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
			$mySql = "SELECT * FROM jadwal_praktek WHERE kd_jadwal_praktek = '".$kd_jadwal_praktek."'";
			$myQry = mysqli_query ($koneksi, $mySql);
			$jumlah = mysqli_num_rows ($myQry);

			if ($jumlah==0){

				$mySql = "INSERT INTO jadwal_praktek (kd_jadwal_praktek,id_dokter,nama_dokter,spesialis,hari,waktu,ruangan)
				VALUES ('$kd_jadwal_praktek','$IdDokter','$NamaDokter','$txtspesialis','$hr_kerja','$waktu_kerja','$txtruangan')";
				$data['msg'][0] = "ok";
				$data['msg'][1] = "Data Berhasil Ditambahkan!";
				$myQry = mysqli_query($koneksi,$mySql);
			}

			else {
				$mySql = "UPDATE jadwal_praktek SET
								kd_jadwal_praktek='$kd_jadwal_praktek',
								id_dokter='$IdDokter', 
						 		nama_dokter='$NamaDokter',
						 		spesialis='$txtspesialis',
						 		hari='$hr_kerja',
						 		waktu='$waktu_kerja',
						 		ruangan ='$txtruangan'
						 		WHERE kd_jadwal_praktek ='$kd_jadwal_praktek'";
				$data['msg'][0] = "ok";
				$data['msg'][1] = "data berhasil diubah...";
				$myQry = mysqli_query($koneksi, $mySql);
			}	
		}
		
	echo json_encode($data);
	break;

	case 2:
		$kd_jadwal_praktek 	= 	$_REQUEST['kd_jadwal_praktek'];
		$mySql 	 	= 	"DELETE FROM jadwal_praktek WHERE kd_jadwal_praktek = '".$kd_jadwal_praktek."'";
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
			$mySql = "SELECT * FROM jadwal_praktek";
			$myQry = mysqli_query ($koneksi, $mySql);
			$i=1;
			$data="";
			while ($myData = mysqli_fetch_array ($myQry)) {
				$akses="";

					$akses="<center> <a href='#' class='tooltip-success' data-rel='tooltip' title='ubah'> <span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a> <a href='#' class='tooltip-error' data-rel='tooltip' title='hapus'><span class='red'><i class='ace-icon fa fa-trash-o bigger-120'></i></span></a></center>";
					$data.= sprintf("[\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\"],", 
								$myData['kd_jadwal_praktek'],$myData['id_dokter'],$myData['nama_dokter'],$myData['spesialis'],$myData['hari'],$myData['waktu'],$myData['ruangan'],$akses);
				$i++;

			}
			echo '{"data":['.substr($data,0,-1).']}';

		break;
		default :
}

?>
