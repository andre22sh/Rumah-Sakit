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
          <a href="#">Data Obat</a>
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
							<center>DATA OBAT</center>
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>
		
					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>    
								<th class="center" width="10%">Kode Obat</th>
								<th class="center" width="20%">Nama Obat</th>
								<th class="center" width="20%">Jenis Obat</th>
								<th class="center" width="20%">Harga Obat</th>
								<th class="center" width="20%">Stok Obat</th>
								<th class="center" id = "groupdokter">
									<a href="#groupdokter" onclick="return tambah_kategori('0');" class="tooltip-info" data-toggle="modal" data-target="#m_kategori" data-rel="tooltip" title="Tambah">
									<span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a>
								</th>
							</tr>
						</thead>

							<tr>
								<td align="center">CFX42</td>
								<td align="center">Cefixime</td>
								<td align="center">KAPSUL</td>
								<td align="center">150000</td>
								<td align="center">500</td>
								<td align="center"></td>
							</tr>

							<tr>
								<td align="center">MLX21</td>
								<td align="center">Molaxic</td>
								<td align="center">TABLET</td>
								<td align="center">100000</td>
								<td align="center">12999</td>
								<td align="center"></td>
							</tr>

							<tr>
								<td align="center">ASP13</td>
								<td align="center">ASPIRIN</td>
								<td align="center">TABLET</td>
								<td align="center">100000</td>
								<td align="center">1374</td>
								<td align="center"></td>
							</tr>
							<tr>
								<td align="center">KAF22</td>
								<td align="center">Kaflam</td>
								<td align="center">TABLET</td>
								<td align="center">100000</td>
								<td align="center">2142</td>
								<td align="center"></td>
							</tr>
							<tr>
								<td align="center">LEX214</td>
								<td align="center">Lexapram</td>
								<td align="center">KAPSUL</td>
								<td align="center">100000</td>
								<td align="center">1232</td>
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
            <tr><td style="width: 25%">Kode Obat</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="kdobat" id="kdobat" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Nama Obat</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="namaobat" id="namaobat" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Jenis Obat</td>
              <td style="width: 50%">
                <select type="option" class="form-control" name="jnsobat" id="jnsobat" required value="">
				<option value="">Pilih</option>
				<option value="TABLET">Tablet</option>
				<option value="KAPSUL">Kapsul</option>
				<option value="CAIR">Cair</option>
				</select>
              </td>
            </tr>
            <tr><td style="width: 25%">Harga Obat</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="harga" id="harga" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Jumlah Obat</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="jumobat" id="jumobat" required value="">
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
 

var kdobat= document.getElementById( "kdobat" );
var namaobat = document.getElementById( "namaobat" );
var jnsobat= document.getElementById( "jnsobat" );
var harga= document.getElementById( "harga" );
var jumobat= document.getElementById( "jumobat" );
 
  var kdobat = document.getElementById( "kdobat" );
  if(kdobat.value == "" ){
      $('#konfirmasi1').html('<strong>Lengkapi Data Kode Obat</strong> <br/> </div>');}
    else{
      $('#konfirmasi1').html('');}

  var namaobat= document.getElementById( "namaobat" );
  if(namaobat.value == "" ){
      $('#konfirmasi2').html('<strong> Lengkapi Data Nama Obat </strong> <br/> </div>');}
    else{
      $('#konfirmasi2').html('');}

  var jnsobat= document.getElementById( "jnsobat" );
  if(jnsobat.value == "" ){
      $('#konfirmasi3').html('<strong>Lengkapi Data Jenis Obat</strong> <br/> </div>');}
    else{
      $('#konfirmasi3').html('');}

  var harga= document.getElementById( "harga" );
  if(harga.value == "" ){
      $('#konfirmasi4').html('<strong>Lengkapi Data No Telepon</strong> <br/> </div>');}
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