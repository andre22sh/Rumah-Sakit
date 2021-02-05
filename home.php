<?php
if(!defined('OFFDIRECT')) include 'error404.php';
include ('koneksi.php');

?>
<body class="no-skin">
<?php
	include "base_template_topnav.php";	 //akan memanggil file base_template_topnav.php sebagai header
	echo '<div class="main-container ace-save-state" id="main-container">';
	include "menu.php";	 //akan memanggil file menu.php sebagai pembuatan menu
	
?>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						
						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									overview &amp; stats
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
							
								
									<div class="alert alert-block alert-info">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button>

										<i class="ace-icon fa fa-check green"></i>

										Selamat datang
										<strong class="green">
											<b>Admin</b>
										</strong>,<br><br>
										Anda Berhasil Masuk!
									</div>
									
								
									<div class="widget-header widget-header-flat widget-header-small">
										<h5 class="widget-title">
											<i class="ace-icon fa fa-signal"></i>
											Kelola Halaman Web
										</h5>
										
									</div>
									<br>
								<div class="row">
									<div class="space-6"></div>

									<div class="col-sm-12 infobox-container">
										
										<div class="infobox infobox-green">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-user-md"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">100</span>
												<div class="infobox-content">Data Dokter</div>
											</div>

										</div>
										
										
										<div class="infobox infobox-blue">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-users"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">100</span>
												<div class="infobox-content">Data Pegawai</div>
											</div>

											
										</div>

										
										<div class="infobox infobox-red">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-wheelchair"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">30</span>
												<div class="infobox-content">Data Pasien</div>
											</div>
										</div>

										<div class="infobox infobox-red">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-bed"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">70</span>
												<div class="infobox-content">Data Tempat Tidur</div>
											</div>
										</div>

										<div class="infobox infobox-red">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-medkit"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">70</span>
												<div class="infobox-content">Data Obat</div>
											</div>
										</div>

										
										

										
									</div>


								</div><!-- /.row -->

								<div class="space-18"></div>

								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

<?php
	include "base_template_footer.php";	//akan memanggil base_template_footer.php sebagai footer
?>
      </div>
    </div>
 

</body>    

