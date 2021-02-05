<?php
date_default_timezone_set('Asia/Jakarta');


$koneksi =mysqli_connect('localhost','root','','db_rs');

if (mysqli_connect_errno()){
    echo mysqli_connect_error();
} else {
	$tes = "sukses";
}



?>