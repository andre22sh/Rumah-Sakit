<?php
if(!defined('OFFDIRECT')) include 'error404.php';
include ('koneksi.php');
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
        <li class="active">Jadwal Praktek</li>
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
                <th class="center" width="13%">Kode Jadwal Praktek</th>
                <th class="center" width="15%">ID Dokter</th>
                <th class="center" width="13%">Nama Dokter</th>
                <th class="center" width="13%">Spesialis</th>
                <th class="center" width="13%">Hari</th>
                <th class="center" width="13%">Waktu</th>
                <th class="center" width="13%">Ruangan</th>
                <th class="center" width="13%">
                  <a href="#" onclick="return tambah_kategori('0');" class="tooltip-info" data-toggle="modal" data-target="#form_jadwal_praktek" data-rel="tooltip" title="Tambah Data">
                  <span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a>
                </th>
              </tr>
            </thead>          
              <tr>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
              </tr>

              <tr>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
              </tr>

              <tr>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
              </tr>
          </table>
          <!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
        </div>
      </div>
    </div>
  </div> 
</div>
      
  <div class="modal fade" id="form_jadwal_praktek" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header no-padding">
        <div class="table-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="white">&times;</span>
          </button>
          Jadwal Praktek
        </div>
      </div>

      <div class="modal-body">
        <form name="form_jadwal_praktek" id="form_jadwal_praktek" action="" method="post">
          <input type="hidden" name="idform" id="idform" value="">
            <div id="konfirmasi"></div>
              <div id="konfirmasihapus"></div>

          <table class="table table-form">
            <tr><td style="width: 25%">Kode Jadwal Praktek</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="kd_jadwal_praktek" id="kd_jadwal_praktek">
              </td>
            </tr>      
          <table class="table table-form">
            <tr><td style="width: 25%">ID Dokter</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="IdDokter" id="IdDokter">
              </td>
            </tr>
            <tr><td style="width: 25%">Nama Dokter</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="NamaDokter" id="NamaDokter">
              </td>
            </tr>
            <tr><td style="width: 25%">Spesialis</td>
              <td style="width: 50%">
                <select type="option" class="form-control" name="txtspesialis" id="txtspesialis">
                  <option value="">Pilih</option>
                  <option value="Dokter Umum">Dokter Umum</option>
                  <option value="Dokter Anak">Dokter Anak</option>
                  <option value="Bedah Umum">Bedah Umum</option>
                </select>
              </td>
            </tr>
            <tr><td style="width: 25%">Hari</td>
              <td style="width: 50%">
                <input type="date" class="input-tanggal" name="hr_kerja" id="hr_kerja">
              </td>
              <tr><td style="width: 25%">Waktu</td>
              <td style="width: 50%">
                <input type="time" class="form-control" name="waktu_kerja" id="waktu_kerja">
              </td>
            </tr>
            <tr><td style="width: 25%">Ruangan</td>
              <td style="width: 50%">
                <select type="option" class="form-control" name="txtruangan" id="txtruangan">
                  <option value="">Pilih</option>
                  <option value="A101">A101</option>
                  <option value="A102">A102</option>
                  <option value="A103">A103</option>
                  <option value="A103">A104</option>
                  <option value="A103">A105</option>
                  <option value="A103">A106</option>
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
</div>

<?php
  include "base_template_footer.php"; //akan memanggil base_template_footer.php sebagai footer
?>
      </div>
    </div>
 

</body>    

<script>
$(document).ready(function() {
    var myTable =$('#datatable').DataTable({
      "ajax": {
        type  : "POST",
        url   : '<?php echo $baseURL; ?>api.jadwaldokter.php',
        data  : function(d) {
          d.type ="97";
        }}
      });

    $('#datatable tbody').on('click', '.fa-pencil-square-o', function(){

        $("#form_jadwal_praktek").modal('show');

        kd_jadwal_praktek    =   myTable.row($(this).parents('tr') ).data()[0];
        IdDokter             =   myTable.row($(this).parents('tr') ).data()[1];
        NamaDokter           =   myTable.row($(this).parents('tr') ).data()[2];
        txtspesialis         =   myTable.row($(this).parents('tr') ).data()[3];
        hr_kerja             =   myTable.row($(this).parents('tr') ).data()[4];
        waktu_kerja          =   myTable.row($(this).parents('tr') ).data()[5];
        txtruangan           =   myTable.row($(this).parents('tr') ).data()[6];

        $('#kd_jadwal_praktek').val(kd_jadwal_praktek);
        $('#IdDokter').val(IdDokter);
        $('#NamaDokter').val(NamaDokter);
        $('#txtspesialis').val(txtspesialis);
        $('#hr_kerja').val(hr_kerja);
        $('#waktu_kerja').val(waktu_kerja);
        $('#txtruangan').val(txtruangan);
        
    });

    $('#datatable tbody').on('click', '.fa-trash-o', function() {

      var jawab;
      obj=$(this).parents('tr');
      kd_jadwal_praktek = myTable.row( $(this).parents('tr')).data()[0];

      jawab=confirm("Apakah Anda Yakin Untuk Menghapus Record? \n"+

                    "Kode Jadwal Praktek: "+myTable.row( $(this).parents('tr')).data()[0]+"\n"+
                    "Dokter: "+myTable.row( $(this).parents('tr')).data()[2]+"\n"+
                    "Spesialis: "+myTable.row( $(this).parents('tr')).data()[3]+"?");

      if (jawab=false){
        exit();
      }

      console.log(kd_jadwal_praktek);
        $.post("<?php echo $baseURL;?>api.jadwaldokter.php", { type: "2", kd_jadwal_praktek:kd_jadwal_praktek }, function(data) {
          obj = $.parseJSON(data);
          if (obj.msg[0]=="hapus"){
              $("#form_jadwal_praktek").modal ('hide');

              $('konfirmasihapus').html(
                '<div class="alert alert-success alert alert-dismissible fade in" role="alert">'+
                '<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>'+'<strong>Hapus Data</strong><br/>'+obj.msg[1]+'</div>');

              setTimeout(function(){
                $('#konfirmasihapus').html('');
                $('#form_jadwal_praktek').modal('hide');
              },5000);

              myTable.ajax.reload();
          }
        });
        
    });  


  $('#btnsimpan').click(function(){

    $.post( "<?php echo $baseURL; ?>api.jadwaldokter.php", 
    {
      type:1,
        kd_jadwal_praktek:$('#kd_jadwal_praktek').val(),
        IdDokter:$('#IdDokter').val(),
        NamaDokter:$('#NamaDokter').val(),
        txtspesialis:$('#txtspesialis').val(),
        hr_kerja:$('#hr_kerja').val(),
        waktu_kerja:$('#waktu_kerja').val(),
        txtruangan:$('#txtruangan').val(),
    }, function(data) {


      console.log(data);
      obj = $.parseJSON(data);
                  
      if(obj.msg[0]=="ok"){
        $('#konfirmasi').html(
          '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                    '<button type ="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+'<strong>SUKSES</strong><br/>'+obj.msg[1]+
                    '</div>');

          setTimeout(function(){
              $('#konfirmasi').html('');
            },5000);
            
            $('#kd_jadwal_praktek').val('');
            $('#IdDokter').val('');
            $('#NamaDokter').val('');
            $('#txtspesialis').val('');
            $('#hr_kerja').val('');
            $('#waktu_kerja').val('');
            $('#txtruangan').val('');

      }

      else{
        $('#konfirmasi').html(
          '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+'<strong>Error</strong><br/>'+obj.msg[1]+
                    '</div>');

        setTimeout(function(){
              $('#konfirmasi').html('');
            },5000);
      }

      myTable.ajax.reload();

    });
    
  })
});


</script>