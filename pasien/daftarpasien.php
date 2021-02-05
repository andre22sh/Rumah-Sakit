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
          <a href="#">Data Pasien</a>
        </li>
        <li class="active">Data Pasien</li>
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
							<center>DATA PASIEN</center>
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>
		
					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>    
								<th class="center" width="6%">No. Reg</th>
								<th class="center" width="20%">Nama Pasien</th>
								<th class="center" width="20%">Alamat Pasien</th>
								<th class="center" width="20%">No. Telp</th>
								<th class="center" width="20%">Dokter Penanggung Jawab</th>
								<th class="center" id = "groupdokter">
									<a href="#groupdokter" onclick="return tambah_kategori('0');" class="tooltip-info" data-toggle="modal" data-target="#m_kategori" data-rel="tooltip" title="Tambah">
									<span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a>
								</th>
							</tr>
						</thead>

							<tr>
								<td align="center">11045478869</td>
								<td align="center">Ananda Sekti</td>
								<td align="center">Jl. Wana Mulya</td>
								<td align="center">082111114457</td>
								<td align="center">Joko Supriawan</td>
								<td align="center"></td>
							</tr>

							<tr>
								<td align="center">11007784596</td>
								<td align="center">Rizky Aulia</td>
								<td align="center">Jl. Kembangan</td>
								<td align="center">082557820413</td>
								<td align="center">Nila Riana</td>
								<td align="center"></td>
							</tr>

							<tr>
								<td align="center">11145733300</td>
								<td align="center">Sucipto</td>
								<td align="center">Jl. Bojong Raya</td>
								<td align="center">085813774458</td>
								<td align="center">Muhammad Rizky</td>
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
          Data Penanganan Pasien
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
            <tr><td style="width: 25%">No. Registrasi</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="NoReg" id="NoReg" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Nama Pasien</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="NoPas" id="NoPas" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Alamat Pasien</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="AlmtPas" id="AlmtPas" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">No.Telepon</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="Telp" id="Telp" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Dokter Penanggung Jawab</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="NmDok" id="NmDok" required value="">
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
  
<script type="text/javascript">
  $('#btnsimpan').click(function(){
    $.post("<?php echo $baseURL;?>api.keyword.php",{
      type:1,
      txtId:$('#NoReg').val(),
      txtnama:$('#NoPas').val(),
      txtjk:$('#AlmtPas').val(),
      txtno:$('#Telp').val(),
      txtalamat:$('#NmDok').val()
    },function(data){
        alert(data);
    });
  });
</script>