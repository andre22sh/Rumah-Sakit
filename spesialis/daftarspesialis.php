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
          <a href="#">Daftar Spesialis</a>
        </li>
        <li class="active"></li>
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
							<center>DAFTAR SPESIALIS</center>
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>
		
					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>    
								<th class="center" width="10%">Kode Spesialis</th>
								<th class="center" width="15%">Spesialis</th>
								<th class="center" width="10%">ID Dokter</th>
								<th class="center" width="20%">Nama Dokter</th>
								<th class="center" id = "" width = "5%">
									<a href="" onclick="return tambah_kategori('0');" class="tooltip-info" data-toggle="modal" data-target="#m_kategori" data-rel="tooltip" title="Tambah">
									<span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a>
								</th>
							</tr>
						</thead>

							<tr>
								<td align="center">DKUM01</td>
								<td align="center">Dokter Umum</td>
								<td align="center">41518010070</td>
								<td align="center">Muhammad Rizky</td>
								<td align="center"></td>
							</tr>

							<tr>
								<td align="center">ANK01</td>
								<td align="center">Anak</td>
								<td align="center">41518010069</td>
								<td align="center">Nila Riana</td>
								<td align="center"></td>
							</tr>

							<tr>
								<td align="center">BDHUM01</td>
								<td align="center">Bedah Umum</td>
								<td align="center">41518010072</td>
								<td align="center">Joko Supriawan</td>
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
          Data Obat
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
            <tr><td style="width: 25%">Kode Spesialis</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="kdsps" id="kdsps" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Spesialis</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="Spesialis" id="Spesialis" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">ID Dokter</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="IdDokter" id="IdDokter" required value ="">
              </td>
            </tr>
            <tr><td style="width: 25%">Nama Dokter</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="NamDok" id="NamDok" required value="">
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
 

var kdsps= document.getElementById( "kdsps" );
var Spesialis = document.getElementById( "Spesialis" );
var IdDokter= document.getElementById( "IdDokter" );
var NamDok= document.getElementById( "NamDok" );
 
  var kdsps = document.getElementById( "kdsps" );
  if(kdsps.value == "" ){
      $('#konfirmasi1').html('<strong>Lengkapi Data Kode Spesialis</strong> <br/> </div>');}
    else{
      $('#konfirmasi1').html('');}

  var Spesialis= document.getElementById( "Spesialis" );
  if(Spesialis.value == "" ){
      $('#konfirmasi2').html('<strong> Lengkapi Data Spesialis </strong> <br/> </div>');}
    else{
      $('#konfirmasi2').html('');}

  var IdDokter= document.getElementById( "IdDokter" );
  if(IdDokter.value == "" ){
      $('#konfirmasi3').html('<strong>Lengkapi Data ID Dokter</strong> <br/> </div>');}
    else{
      $('#konfirmasi3').html('');}

  var NamDok= document.getElementById( "NamDok" );
  if(NamDok.value == "" ){
      $('#konfirmasi4').html('<strong>Lengkapi Data Nama Dokter</strong> <br/> </div>');}
    else{
      $('#konfirmasi4').html('');}
  
  var jumobat= document.getElementById( "jumobat" );
  if(jumobat.value == "" ){
      $('#konfirmasi5').html('<strong>Lengkapi Data Jumlah Obat</strong> <br/> </div>');}
    else{
      $('#konfirmasi5').html('');}
  
});

    });


  
  </script>  