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
                <th class="center" width="15%">Nama Dokter</th>
                <th class="center" width="15%">Alamat Dokter</th>
                <th class="center" width="15%">No. Telp</th>
                <th class="center" width="15%">Kode Spesialis</th>
                <th class="center" width="15%">Spesialis</th>
                <th class="center" width="20%">
                  <a href="#" onclick="return tambah_kategori('0');" class="tooltip-info" data-toggle="modal" data-target="#data_form_dokter" data-rel="tooltip" title="">
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
              </tr>

              <tr>
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
              </tr>
          </table>
          <!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
        </div>
      </div>
    </div>
  </div> 
</div>
      
  <div class="modal fade" id="data_form_dokter" tabindex="-1">
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
        <form name="form_dokter" id="form_dokter" action="" method="post">
          <input type="hidden" name="idform" id="idform" value="">
            <div id="konfirmasi"></div>
              <div id="konfirmasihapus"></div>

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
            <tr><td style="width: 25%">Alamat Dokter</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="AlmtDokter" id="AlmtDokter">
              </td>
            </tr>
            <tr><td style="width: 25%">No. Telepon</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="Notelp" id="Notelp">
              </td>
              <tr><td style="width: 25%">Kode Spesialis</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="kd_spesialis" id="kd_spesialis">
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
        url   : '<?php echo $baseURL; ?>api.keyword.php',
        data  : function(d) {
          d.type ="97";
        }}
      });

    $('#datatable tbody').on('click', '.fa-pencil-square-o', function(){

        $("#data_form_dokter").modal('show');

        IdDokter      =   myTable.row($(this).parents('tr') ).data()[0];
        NamaDokter    =   myTable.row($(this).parents('tr') ).data()[1];
        AlmtDokter    =   myTable.row($(this).parents('tr') ).data()[2];
        Notelp        =   myTable.row($(this).parents('tr') ).data()[3];
        kd_spesialis  =   myTable.row($(this).parents('tr') ).data()[4];
        txtspesialis  =   myTable.row($(this).parents('tr') ).data()[5];

        $('#IdDokter').val(IdDokter).attr('readonly','readonly') ;
        $('#NamaDokter').val(NamaDokter);
        $('#AlmtDokter').val(AlmtDokter);
        $('#Notelp').val(Notelp);
        $('#kd_spesialis').val(kd_spesialis);
        $('#txtspesialis').val(txtspesialis);
        
    });

    $('#datatable tbody').on('click', '.fa-trash-o', function() {

      var jawab;
      obj=$(this).parents('tr');
      IdDokter = myTable.row( $(this).parents('tr')).data()[0];

      jawab=confirm("Apakah Anda Yakin Untuk Menghapus Record? \n"+

                    "Dokter: "+myTable.row( $(this).parents('tr')).data()[1]+"\n"+
                    "Spesialis: "+myTable.row( $(this).parents('tr')).data()[5]+"?");

      if (jawab=false){
        exit();
      }

      console.log(IdDokter);
        $.post("<?php echo $baseURL;?>api.keyword.php", { type: "2", IdDokter:IdDokter }, function(data) {
          obj = $.parseJSON(data);
          if (obj.msg[0]=="hapus"){
              $("#data_form_dokter").modal ('hide');

              $('konfirmasihapus').html(
                '<div class="alert alert-success alert alert-dismissible fade in" role="alert">'+
                '<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>'+'<strong>Hapus Data</strong><br/>'+obj.msg[1]+'</div>');

              setTimeout(function(){
                $('#konfirmasihapus').html('');
                $('#data_form_dokter').modal('hide');
              },5000);

              myTable.ajax.reload();
          }
        });
        
    });  


  $('#btnsimpan').click(function(){

    $.post( "<?php echo $baseURL; ?>api.keyword.php", 
    {
      type:1,
      IdDokter:$('#IdDokter').val(),
        NamaDokter:$('#NamaDokter').val(),
        AlmtDokter:$('#AlmtDokter').val(),
        Notelp:$('#Notelp').val(),
        kd_spesialis:$('#kd_spesialis').val(),
        txtspesialis:$('#txtspesialis').val()
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
            
            $('#IdDokter').val('');
            $('#NamaDokter').val('');
            $('#AlmtDokter').val('');
            $('#Notelp').val('');
            $('#kd_spesialis').val('');
            $('#txtspesialis').val('');

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
































