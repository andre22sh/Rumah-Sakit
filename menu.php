<script type="text/javascript">
	try{ace.settings.loadState('main-container')}catch(e){}
</script>

<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
	<script type="text/javascript">
		try{ace.settings.loadState('sidebar')}catch(e){}
	</script>

	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-success">
				<i class="ace-icon fa fa-signal"></i>
			</button>

			<button class="btn btn-info">
				<i class="ace-icon fa fa-pencil"></i>
			</button>

			<button class="btn btn-warning">
				<i class="ace-icon fa fa-users"></i>
			</button>

			<button class="btn btn-danger">
				<i class="ace-icon fa fa-cogs"></i>
			</button>
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div><!-- /.sidebar-shortcuts -->

	<ul class="nav nav-list">
		<li class="active">
			<a href="<?php echo $baseURL ; ?>home">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>

			<b class="arrow"></b>
		</li>
		
				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-user-md"></i>
						<span class="menu-text">
							Data Dokter
						</span>

						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					
					<ul class="submenu">
			
								
									
									<li class="">
										<a href="<?php echo $baseURL ;?>dokter/daftardokter"><i class="menu-icon fa fa-caret-right"></i>Daftar Dokter</a>
									</li>
									<b class="arrow"></b>

									<li class="">
										<a href="<?php echo $baseURL ;?>dokter/jadwaldokter"><i class="menu-icon fa fa-caret-right"></i>Jadwal Praktek</a>
									</li>
									<b class="arrow"></b>

	</ul><!-- /.nav-list -->

	<li class="">
					<a href="<?php echo $baseURL ;?>spesialis/daftarspesialis">
						<i class="menu-icon fa fa-user-md"></i>
						<span class="menu-text">
							Daftar Spesialis
						</span>
					
					</a>
	

	
	<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-users"></i>
						<span class="menu-text">
							Data Pegawai
						</span>

						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					
					<ul class="submenu">
			
									<li class="">
										<a href="<?php echo $baseURL ;?>pegawai/datapegawai"><i class="menu-icon fa fa-caret-right"></i>Daftar Pegawai</a>
									</li>
									<b class="arrow"></b>

									<li class="">
										<a href="<?php echo $baseURL ;?>pegawai/jadwalpegawai"><i class="menu-icon fa fa-caret-right"></i>Jadwal Jaga</a>
									</li>
									<b class="arrow"></b>

	</ul><!-- /.nav-list -->

	<li class="">
					<a href="<?php echo $baseURL ;?>pasien/daftarpasien">
						<i class="menu-icon fa fa-wheelchair"></i>
						<span class="menu-text">
							Data Pasien
						</span>
					
					</a>
					
					
	
	<li class="">
					<a href="<?php echo $baseURL ;?>tempat_tidur/datatempattidur">
						<i class="menu-icon fa fa-bed"></i>
						<span class="menu-text">
							Data Tempat Tidur
						</span>
					</a>
	
	<li class="">
					<a href="<?php echo $baseURL ;?>obat/dataobat">
						<i class="menu-icon fa fa-medkit"></i>
						<span class="menu-text">
							Data Obat
						</span>
					</a>
					
	<li class="">
					<a href="<?php echo $baseURL ;?>laporan/datapendaftaran">
						<i class="menu-icon fa fa-folder"></i>
						<span class="menu-text">
							Laporan Pendaftaran
						</span>
					</a>

	<li class="">
					<a href="https://www.google.com/search?safe=strict&sxsrf=ACYBGNSrJGBjskOyemE6NyVySdvi29kFWQ:1571194654970&q=rumah+sakit&npsic=0&rflfq=1&rlha=0&rllag=-6207682,106847084,223&tbm=lcl&ved=2ahUKEwj476Ca5J_lAhWF6XMBHfb9CvIQtgN6BAgKEAQ&tbs=lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2&rldoc=1#rlfi=hd:;si:;mv:[[-6.1898547,106.8614698],[-6.2216834,106.830648]];tbs:lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2">
						<i class="menu-icon fa fa-plus-square"></i>
						<span class="menu-text">
							Cari Rumah Sakit
						</span>
					</a>
					

	</ul><!-- /.nav-list -->			
					
	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>