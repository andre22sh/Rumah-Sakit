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
          <a href="#">Data Tempat Tidur</a>
        </li>
        
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
							<center>DATA TEMPAT TIDUR</center>
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>
		
					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>    
								<th class="center" width="20%">Kode Tempat Tidur</th>
								<th class="center" width="20%">Nama Ruangan</th>
								<th class="center" width="20%">Nama Gedung</th>
								<th class="center" width="20%">Status</th>
								<th class="center" id = "groupdokter">
									<a href="#groupdokter" onclick="return tambah_kategori('0');" class="tooltip-info" data-toggle="modal" data-target="#m_kategori" data-rel="tooltip" title="Tambah">
									<span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a>
								</th>
							</tr>
						</thead>

							<tr>
								<td align="center">00131</td>
								<td align="center">R-205</td>
								<td align="center">Gedung "R"</td>
								<td align="center">Kosong</td>
								<td align="center"></td>
								
							</tr>

							<tr>
								<td align="center">00132</td>
								<td align="center">C-415</td>
								<td align="center">Gedung "C"</td>
								<td align="center">Kosong</td>
								<td align="center"></td>
								
							</tr>

							<tr>
								<td align="center">00213</td>
								<td align="center">D-205</td>
								<td align="center">Gedung "D"</td>
								<td align="center">Terisi</td>
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
          Data Tempat Tidur
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
            <tr><td style="width: 25%">Kode Tempat Tidur</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="KodTempTitodTempTit" id="KodTempTitodTempTit" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Nama Ruangan</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="NamaRuang" id="NamaRuang" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Nama Gedung</td>
              <td style="width: 50%">
                <select type="" class="form-control" name="NamGed" id="NamGed" required value="">
        <option value="">Pilih</option>
        <option value="Gedung A">Gedung "A"</option>
        <option value="Gedung B">Gedung "B"</option>
        <option value="Gedung C">Gedung "C"</option>
        <option value="Gedung D">Gedung "D"</option>
        <option value="Gedung E">Gedung "E"</option>
        <option value="Gedung F">Gedung "F"</option>
        <option value="Gedung G">Gedung "G"</option>
        <option value="Gedung H">Gedung "H"</option>
        <option value="Gedung I">Gedung "I"</option>
        <option value="Gedung J">Gedung "J"</option>
        <option value="Gedung K">Gedung "K"</option>
        <option value="Gedung L">Gedung "L"</option>
        <option value="Gedung M">Gedung "M"</option>
        <option value="Gedung N">Gedung "N"</option>
        <option value="Gedung O">Gedung "O"</option>
        <option value="Gedung P">Gedung "P</option>
        <option value="Gedung Q">Gedung "Q</option>
        <option value="Gedung R">Gedung "R</option>
        <option value="Gedung S">Gedung "S</option>
        </select>
              </td>
            </tr>
            <tr><td style="width: 25%">Status</td>
              <td style="width: 50%">
                <select type="" class="form-control" name="Status" id="Status" required value="">
				<option value="">Pilih</option>
        <option value="Kosong">Kosong</option>
				<option value="Terisi">Terisi</option>
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
 

var KodTempTitodTempTit= document.getElementById( "KodTempTitodTempTit" );
var NamaRuang = document.getElementById( "NamaRuang" );
var NamGed= document.getElementById( "NamGed" );
var Status= document.getElementById( "Status" );
 
  var KodTempTitodTempTit= document.getElementById( "KodTempTitodTempTit" );
  if(KodTempTitodTempTit.value == "" ){
      $('#konfirmasi1').html('<strong>Lengkapi Data Kode Tempat Tidur</strong> <br/> </div>');}
    else{
      $('#konfirmasi1').html('');}

  var NamaRuang= document.getElementById( "NamaRuang" );
  if(NamaRuang.value == "" ){
      $('#konfirmasi2').html('<strong> Lengkapi Data Nama Ruangan </strong> <br/> </div>');}
    else{
      $('#konfirmasi2').html('');}

  var NamGed= document.getElementById( "NamGed" );
  if(NamGed.value == "" ){
      $('#konfirmasi3').html('<strong>Lengkapi Data Nama Gedung</strong> <br/> </div>');}
    else{
      $('#konfirmasi3').html('');}

  var Status= document.getElementById( "Status" );
  if(Status.value == "" ){
      $('#konfirmasi4').html('<strong>Lengkapi Data Status</strong> <br/> </div>');}
    else{
      $('#konfirmasi4').html('');}
  
  
});

    });


  
  </script>  