<?php
if(!defined('OFFDIRECT')) include 'error404.php';

?>
<body class="no-skin">
<?php
  include "base_template_topnav.php";  //akan memanggil file base_template_topnav.php sebagai header
  echo '<div class="main-container ace-save-state" id="main-container">';
  include "menu.php";  //akan memanggil file menu.php sebagai pembuatan menu
  
  
?>

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
          <a href="#">Data Dokter</a>
        </li>
        <li class="active">Daftar Dokter</li>
      </ul><!-- /.breadcrumb -->
      <div class="nav-search" id="nav-search">
      </div><!-- /.nav-search -->
    </div>
    <div class="page-content">
      <div class="row">
        <div class="col-xs-12">
          <div class="clearfix">
            <h4 class="pink">
              <i class=" "></i>
              <div class="pull-right tableTools-container"></div>
            </h4>
          </div>
          <div class="table-header">
              <center>DAFTAR DOKTER</center>
          </div>
          <!-- BATAS HEADER TITLE -->
          <div class="ln_solid"></div>
    
          <!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>    
                <th class="center" width="10%">ID Dokter</th>
                <th class="center" width="20%">Nama Dokter</th>
                <th class="center" width="20%">Alamat Dokter</th>
                <th class="center" width="20%">No. Telp</th>
                <th class="center" width="20%">Spesialis</th>
                <th class="center" width="20%">
                  <a href="#m_kategori" onclick="return tambah_kategori('0');" class="tooltip-info" data-toggle="modal" data-target="#m_kategori" data-rel="tooltip" title="Tambah">
                  <span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a>
                </th>
              </tr>
            </thead>          
              <tr>
                <td align="center">41518010070</td>
                <td align="center">Muhammad Rizky</td>
                <td align="center">Jl. Alfalah</td>
                <td align="center">089626070637</td>
                <td align="center">Dokter Umum</td>
                <td align="center"></td>
              </tr>

              <tr>
                <td align="center">41518010069</td>
                <td align="center">Nila Riana</td>
                <td align="center">Jl. Tj. Priuk</td>
                <td align="center">08214112498</td>
                <td align="center">Anak</td>
                <td align="center"></td>
              </tr>

              <tr>
                <td align="center">41518010072</td>
                <td align="center">Joko Supriawan</td>
                <td align="center">Jl. Rawa Buaya</td>
                <td align="center">085713224470</td>
                <td align="center">Bedah Umum</td>
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
          Daftar Dokter
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
            <tr><td style="width: 25%">ID Dokter</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="IdDokter" id="IdDokter" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Nama Dokter</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="NamaDokter" id="NamaDokter" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Alamat Dokter</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="AlmtDokter" id="AlmtDokter" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">No. Telepon</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="Notelp" id="Notelp" required value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Spesialis</td>
              <td style="width: 50%">
                <select type="option" class="form-control" name="Spesialis" id="Spesialis" required value="">
				<option value="">Pilih</option>
        <option value="Dokter Umum">Dokter Umum</option>
				<option value="Dokter Anak">Dokter Anak</option>
				<option value="Bedah Umum">Bedah Umum</option>
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