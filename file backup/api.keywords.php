<?php

session_start();
include_once "koneksidb.php";
$type = $_REQUEST['type'];

switch ($type)
	{
		case 1:
			$IdDokter = $_REQUEST['IdDokter'];
			$NamaDokter = $_REQUEST['NamaDokter'];
			$AlmtDokter = $_REQUEST['AlmtDokter'];
			$Notelp = $_REQUEST['Notelp'];
			$Spesialis = $_REQUEST['Spesialis'];
			
			if (empty($IdDokter)) {
				$mysql = "SELECT * FROM daftar_dokter WHERE id_dokter='".$id_dokter."'";

			}
			else {
				$mysql = "SELECT * FROM daftar_dokter WHERE id_dokter='".$id_dokter."'
				AND NOT (id_dokter='".$id_dokter."')";
			}
			$myQry = mysqli_query($koneksidb, $mysql);
			$myData = mysqli_fetch_array($myQry);
			if (mysqli_num_rows($myQry)>=1){
				$data['msg'][0] = 'error';
				$data['msg'][1] = 'maaf, Nama <b> $txtnama_supplier </b> sudah dipakai, silahkan ganti dengan lain';
			}
			else {
				$pesanerror = array ();
				if (empty($IdDokter)) {
					$pesanerror[] = "maaf,<b> id dokter <b> tidak boleh kosong!";
				}
					
				if (empty($nama_dokter)) {
					$pesanerror[] = "maaf,<b> nama supplier <b> tidak boleh kosong!";
				}
					
				if (empty($alamat_dokter)) {
					$pesanerror[] = "maaf,<b> alamat supplier <b> tidak boleh kosong!";
				}
					
				if (empty($no_telp)) {
					$pesanerror[] = "maaf,<b> telepon supplier <b> tidak boleh kosong!";

				if (empty($Spesialis)) {
					$pesanerror[] = "maaf,<b> telepon supplier <b> tidak boleh kosong!";	
						

				}
				if (count($pesanerror)>=1) {
					$pesan="";
					foreach ($pesanerror as $pesan_tampil) {
						$pesan.="$pesan_tampil<br>";
					}
				$data['msg'][0] = "error";
				$data['msg'][1] = $pesan;
				}
				elseif (empty($id)) {
					$mysql = "INSERT INTO daftar_dokter (id_dokter,nama_dokter,alamat_dokter,no_telp,spesialis) VALUES('$IdDokter','$NamaDokter','$AlmtDokter','$Notelp','$Spesialis')";
				$data['msg'][0] = "oke";
				$data['msg'][1] = "data berhasil ditambah ......";
				$myQry = mysqli_query($koneksidb, $mysql);
				}
				else {
					$mysql = "UPDATE daftar_dokter SET
					id_dokter='$IdDokter',
					nama_dokter= '$NamaDokter',
					alamat_dokter= '$AlmtDokter',
					no_telp= '$Notelp'
					spesialis='$Spesialis'
					WHERE id_dokter='$IdDokter'";
				$data['msg'][0] = "oke";
				$data['msg'][1] = "data berhasil diubah ......";
				$myQry = mysqli_query($koneksidb, $mysql);
				}
				
			}
			echo json_encode($data);
			break;

			default:
	}
