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
        <li class="active">Jadwal Jaga</li>
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
							<center>JADWAL JAGA PEGAWAI</center>
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>
		
					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>    
								<th class="center" width="20%">Kode Jadwal</th>
                <th class="center" width="15%">Nama Pegawai</th>
								<th class="center" width="20%">Hari</th>
								<th class="center" width="20%">Waktu</th>
								<th class="center" width="20%">Ruangan</th>
								<th class="center" width="20%">
									<a href="#groupdokter" onclick="return tambah_kategori('0');" class="tooltip-info" data-toggle="modal" data-target="#m_kategori" data-rel="tooltip" title="Tambah">
									<span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a>
								</th>
							</tr>
						</thead>

							<tr>
								<td align="center">000142</td>
                <td align="center">Diana Putri</td>
								<td align="center">Senin dan Selasa</td>
								<td align="center">10:00 s/d 12:00</td>
								<td align="center">D-205</td>
								<td align="center"></td>
							</tr>

							<tr>
                <td align="center">000782</td>
								<td align="center">Anisa Triana</td>
								<td align="center">Selasa dan Kamis</td>
								<td align="center">13:00 s/d 15:00</td>
								<td align="center">C-415</td>
								<td align="center"></td>
							</tr>

							<tr>
                <td align="center">000198</td>
								<td align="center">Rahmawati</td>
								<td align="center">Rabu dan Jum'at</td>
								<td align="center">10:00 s/d 12:00</td>
								<td align="center">R-205</td>
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
          Daftar Pegawai
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
            <tr><td style="width: 25%">Nama Pegawai</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Hari</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="hari" id="hari" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Waktu</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="waktu" id="waktu" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Kode Jaga</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="kodejaga" id="kodejaga" required value="">
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
 

var nama_pegawai= document.getElementById( "nama_pegawai" );
var hari = document.getElementById( "hari" );
var waktu= document.getElementById( "waktu" );
var kodejaga= document.getElementById( "kodejaga" );
 
  var nama_pegawai= document.getElementById( "nama_pegawai" );
  if(nama_pegawai.value == "" ){
      $('#konfirmasi1').html('<strong>Lengkapi Data Nama Pegawai</strong> <br/> </div>');}
    else{
      $('#konfirmasi1').html('');}

  var hari= document.getElementById( "hari" );
  if(hari.value == "" ){
      $('#konfirmasi2').html('<strong> Lengkapi Data Hari </strong> <br/> </div>');}
    else{
      $('#konfirmasi2').html('');}

  var waktu= document.getElementById( "waktu" );
  if(waktu.value == "" ){
      $('#konfirmasi3').html('<strong>Lengkapi Data Waktu Kerja</strong> <br/> </div>');}
    else{
      $('#konfirmasi3').html('');}

  var kodejaga= document.getElementById( "kodejaga" );
  if(kodejaga.value == "" ){
      $('#konfirmasi4').html('<strong>Lengkapi Data Kode Jaga</strong> <br/> </div>');}
    else{
      $('#konfirmasi4').html('');}
  
});

    });


  
  </script>  