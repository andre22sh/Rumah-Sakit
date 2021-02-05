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
					<a href="#">Laporan Pendaftaran</a>
				</li>
				<li class="active">Laporan Pendaftaran</li>
			</ul><!-- /.breadcrumb -->
			<div class="nav-search" id="nav-search">
			</div><!-- /.nav-search -->
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<div class="clearfix">
						<h4 class="pink">
							<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
							Laporan Pendaftaran
							<div class="pull-right tableTools-container"></div>
						</h4>
					</div>
					<div class="table-header">
							Hasil untuk "Data Pendaftaran"
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>
		
					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>    
								<th class="center" width="6%">No. Reg</th>
								<th class="center" width="20%">No. Rawat</th>
								<th class="center" width="20%">No. Rekmed</th>
								<th class="center" width="20%">Nama Pasien</th>
								<th class="center" width="20%">Cara Masuk</th>
								<th class="center" width="20%">Dokter Penanggung Jawab</th>
								<th class="center" width="20%">Poliklinik</th>
								<th class="center" width="20%">Jenis Pembayaran</th>
								<th class="center" id = "groupdokter">
									<a href="#groupdokter" onclick="return tambah_kategori('0');" class="tooltip-info" data-toggle="modal" data-target="#m_kategori" data-rel="tooltip" title="Tambah">
									<span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a>
								</th>
							</tr>
						</thead>
			
							<tr>
								<td align="center">11045478869</td>
								<td align="center">2019/08/14/11045478869</td>
								<td align="center">000003</td>
								<td align="center">Ananda Sekti Yusman</td>
								<td align="center">Rawat Jalan</td>
								<td align="center">Joko Supriawan</td>
								<td align="center">Dokter Umum</td>
								<td align="center">Kartu Indonesia Sehat</td>
								<td align="center"></td>
							</tr>

							<tr>
								<td align="center">11007784596</td>
								<td align="center">2019/08/14/11007784596</td>
								<td align="center">000004</td>
								<td align="center">Rizky Aulia</td>
								<td align="center">Rawat Inap</td>
								<td align="center">Nila Riana</td>
								<td align="center">Bedah Umum</td>
								<td align="center">Dana Pribadi</td>
								<td align="center"></td>
							</tr>

							<tr>
								<td align="center">11145733300</td>
								<td align="center">2019/08/14/11145733300</td>
								<td align="center">000005</td>
								<td align="center">Sucipto</td>
								<td align="center">Rawat Jalan</td>
								<td align="center">Muhammad Rizky</td>
								<td align="center">Spesialis Anak</td>
								<td align="center">BPJS</td>
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
          Input Laporan
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
            <tr><td style="width: 25%">No.Regristrasi</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="noreg" id="noreg" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">No.Rawat</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="norawat" id="norawat" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Alamat Dokter</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="alamatdokter" id="alamatdokter" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">No.Rekmed</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="norekmed" id="norekmed" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Nama Pasien</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="namapasien" id="namapasien" required value="">
              </td>
            </tr>
			<tr><td style="width: 25%">Dokter Penanggung Jawab</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="dokterpenanggungjwb" id="dokterpenanggungjwb" required value="">
              </td>
            </tr>
			<tr><td style="width: 25%">Keterangan</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="poli" id="poli" required value="">
              </td>
            </tr>
			<div class="form-group">
			<tr><td style="width: 25%">Jenis Pembayaran</td>
              <td style="width: 50%"><label>
              	 <select type="option" class="form-control" name="bayar" id="bayar" required value="">
				<option value="">Pilih</option>
        		<option value="Dokter Umum">Dana Pribadi</option>
				<option value="Dokter Anak">BPJS</option>
				<option value="Bedah Umum">Kartu Indonesia Sehat</option>
				<option value="Bedah Umum">Kartu Jakarta Sehat</option>
				</select>
              </td>
            </tr></div>
          </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-white btn-info btn-bold" type="btnSimpan" id="btnSimpan">
          <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
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
 

var noreg= document.getElementById( "noreg" );
var norawat = document.getElementById( "norawat" );
var norekmed= document.getElementById( "norekmed" );
var dokterpenanggungjwb= document.getElementById( "dokterpenanggungjwb" );
var poli= document.getElementById( "poli" );
var bayar= document.getElementById( "bayar" );
 
  var noreg= document.getElementById( "noreg" );
  if(noreg.value == "" ){
      $('#konfirmasi1').html('<strong>Lengkapi Data No Regristrasi</strong> <br/> </div>');}
    else{
      $('#konfirmasi1').html('');}

  var norawat= document.getElementById( "norawat" );
  if(norawat.value == "" ){
      $('#konfirmasi2').html('<strong> Lengkapi Data No Rawat </strong> <br/> </div>');}
    else{
      $('#konfirmasi2').html('');}

  var norekmed= document.getElementById( "norekmed" );
  if(norekmed.value == "" ){
      $('#konfirmasi3').html('<strong>Lengkapi Data No Rekam Medis</strong> <br/> </div>');}
    else{
      $('#konfirmasi3').html('');}

  var dokterpenanggungjwb= document.getElementById( "dokterpenanggungjwb" );
  if(dokterpenanggungjwb.value == "" ){
      $('#konfirmasi4').html('<strong>Lengkapi Data No Telepon</strong> <br/> </div>');}
    else{
      $('#konfirmasi4').html('');}


  var poli= document.getElementById( "poli" );
  if(poli.value == "" ){
      $('#konfirmasi5').html('<strong>Lengkapi Data Poliklinik</strong> <br/> </div>');}
    else{
      $('#konfirmasi5').html('');}


  var bayar= document.getElementById( "bayar" );
  if(bayar.value == "" ){
      $('#konfirmasi6').html('<strong>Pilih Jenis Pembayaran</strong> <br/> </div>');}
    else{
      $('#konfirmasi6').html('');}
  
});

    });


  
  </script>  