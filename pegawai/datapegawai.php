<?php
if(!defined('OFFDIRECT')) include 'error404.php';

?>
<body class="no-skin">
<?php
	include "base_template_topnav.php";	 //akan memanggil file base_template_topnav.php sebagai header
	echo '<div class="main-container ace-save-state" id="main-container">';
	include "menu.php";	 //akan memanggil file menu.php sebagai pembuatan menu

	
?>
<!-- HEADER TITLE -->
<div class="main-content">
  <div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
      <ul class="breadcrumb">
        <li>
          <i class="fa fa-desktop"></i>
          <a href="#">Home</a>
        </li>
        <li>
          <i class=" "></i>
          <a href="#">Data Pegawai</a>
        </li>
        <li class="active">Daftar Pegawai</li>
      </ul><!-- /.breadcrumb -->
      <div class="nav-search" id="nav-search">
      </div><!-- /.nav-search -->
    </div>
				
					
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<div class="clearfix">
						<h4 class="pink">
							
							
							<div class="pull-right tableTools-container"></div>
						</h4>
					</div>
					<div class="table-header">
							<center>DAFTAR PEGAWAI</center>
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>
		
					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>    
								<th class="center" width="6%">NIP</th>
								<th class="center" width="20%">Nama Pegawai</th>
								<th class="center" width="20%">Alamat Pegawai</th>
								<th class="center" width="20%">No. Telp</th>
								<th class="center" width="20%">Tempat/Tanggal Lahir</th>
                <th class="center" width="20%">Jenis Kelamin</th>
								<th class="center" width="20%">
									<a href="#m_kategori" onclick="return tambah_kategori('0');" class="tooltip-info" data-toggle="modal" data-target="#m_kategori" data-rel="tooltip" title="Tambah">
									<span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a>
								</th>
							</tr>
						</thead>

							<tr>
								<td align="center">99645878</td>
								<td align="center">Anisa Triana</td>
								<td align="center">Jl. Pondok Kacang</td>
								<td align="center">081311482557</td>
								<td align="center">Tuban, 15 Oktober 1970</td>
                <td align="center">Perempuan</td>
								<td align="center"></td>
							</tr>

							<tr>
								<td align="center">774582220</td>
								<td align="center">M. Al Rizki</td>
								<td align="center">Jl. Kav. DKI V</td>
								<td align="center">089541298107</td>
								<td align="center">Riau, 21 Oktober 1997</td>
                <td align="center">Laki-Laki</td>
								<td align="center"></td>
							</tr>

							<tr>
								<td align="center">911200754</td>
								<td align="center">Rahmawati</td>
								<td align="center">Jl. Sawah Hijau</td>
								<td align="center">085813994457</td>
								<td align="center">Jakarta, 11 Januari 1980</td>
                <td align="center">Perempuan</td>
								<td align="center"></td>
							</tr>

							<tr>
								<td align="center">988741203</td>
								<td align="center">Suryo</td>
								<td align="center">Jl. Soko Raya</td>
								<td align="center">08171100458</td>
								<td align="center">Kebumen, 1 Novemver 1985</td>
                <td align="center">Laki-Laki</td>
								<td align="center"></td>
							</tr>
					</table>
					<!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
				</div>
			</div>
		</div>
	</div> 
</div>
<div class="modal fade" id="m_kategori" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header no-padding">
        <div class="table-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="white">&times;</span>
          </button>
          Daftar Data Pegawai
        </div>
      </div>
      <div class="modal-body">
        <form name="f_kategori" id="f_kategori" action="" method="post">
          <input type="hidden" name="id" id="id" value="">
          
           <div id="notif" class="alert alert-danger alert-dismissible fade in" role="alert" style="display: none"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> 
              <div id="konfirmasi1"></div>
              <div id="konfirmasi2"></div>
              <div id="konfirmasi3"></div>
              <div id="konfirmasi4"></div>
              <div id="konfirmasi5"></div>
              <div id="konfirmasi6"></div>
              <div id="konfirmasi7"></div>
          </div>

          <table class="table table-form">
            <tr><td style="width: 25%">NIP</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="nip" id="nip" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Nama Pegawai</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Alamat Pegawai</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="alamat_pegawai" id="alamat_pegawai" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">No. Telepon</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="no_telepon" id="no_telepon" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Tempat/Tanggal Lahir</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="ttl" id="ttl" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Jenis Kelamin</td>
              <td style="width: 50%">
                <select type="" class="form-control" name="gender" id="gender" required value="">
        <option value="">Pilih</option>
        <option value="Dokter Umum">Laki-Laki</option>
        <option value="Dokter Anak">Perempuan</option>
        </select>
              </td>
            </tr>
          </table>
      </div>

      <div class="modal-footer">
        <button class="btn btn-white btn-info btn-bold" type="button" id="btnsimpan">
          <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
        <button class="btn btn-white btn-danger btn-round" type="reset">
          <i class="fa fa-refresh "></i> Reset</button>
        <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
          <i class="fa fa-minus-circle"></i> Tutup</button>
      </div>

      </form>
    </div>
  </div>
</div>

<?php
  include "base_template_footer.php"; //akan memanggil base_template_footer.php sebagai footer
?>
      </div>
    </div>
 

</body>    

<script type="text/javascript">

  $(document).ready(function(){
    $('#btnsimpan').click(function (){
       $("#notif").show();
 

var nip= document.getElementById( "nip" );
var nama_pegawai = document.getElementById( "nama_pegawai" );
var alamat_pegawai= document.getElementById( "alamat_pegawai" );
var no_telepon= document.getElementById( "no_telepon" );
var ttl= document.getElementById( "ttl" );
var gender= document.getElementById( "gender" );
 
  var nip= document.getElementById( "nip" );
  if(nip.value == "" ){
      $('#konfirmasi1').html('<strong>Lengkapi Data NIP</strong> <br/> </div>');}
    else{
      $('#konfirmasi1').html('');}

  var nama_pegawai= document.getElementById( "nama_pegawai" );
  if(nama_pegawai.value == "" ){
      $('#konfirmasi2').html('<strong> Lengkapi Data Nama Pegawai </strong> <br/> </div>');}
    else{
      $('#konfirmasi2').html('');}

  var alamat_pegawai= document.getElementById( "alamat_pegawai" );
  if(alamat_pegawai.value == "" ){
      $('#konfirmasi3').html('<strong>Lengkapi Data Alamat Pegawai</strong> <br/> </div>');}
    else{
      $('#konfirmasi3').html('');}

  var no_telepon= document.getElementById( "no_telepon" );
  if(no_telepon.value == "" ){
      $('#konfirmasi4').html('<strong>Lengkapi Data No Telepon</strong> <br/> </div>');}
    else{
      $('#konfirmasi4').html('');}


  var ttl= document.getElementById( "ttl" );
  if(ttl.value == "" ){
      $('#konfirmasi5').html('<strong>Lengkapi Data Tempat/Tanggal Lahir</strong> <br/> </div>');}
    else{
      $('#konfirmasi5').html('');}
  
});

    });


  
  </script>  