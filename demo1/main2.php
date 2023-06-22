
<title>Desa Junrejo</title>

<?php
 session_start();
 if (isset($_SESSION['password'])=="" || ($_SESSION['hak_akses'])=="")  {
 header('location:login.php');
 }
 else{
 $hak_akses = $_SESSION['hak_akses'];
 }
 ?>
<?php include 'header.php'; ?>

		<!-- awal Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="main2.php">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">fitur</h4>
						</li>
						
						<li class="nav-item">
							<a href="?halaman=tampil_user">
								<i class="fas fa-user-alt"></i>
								<p>Data Warga</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?halaman=permohonan_surat">
								<i class="far fa-calendar-check"></i>
								<p>Cetak Surat</p>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a href="?halaman=kelola_surat">
								<i class="far fa-calendar-check"></i>
								<p>Sudah ACC</p>
							</a>
						</li> -->
						<li class="nav-item">
							<a href="?halaman=surat_dicetak">
								<i class="far fa-calendar-check"></i>
								<p>Surat Selesai</p>
							</a>
						</li>
						
						<!-- laporan -->
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Laporan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="?halaman=laporan_perbulan">
											<span class="sub-item">Perbulan</span>
										</a>
									</li>
									<li>
										<a href="?halaman=laporan_pertahun">
											<span class="sub-item">Pertahun</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- visi misi -->
						<li class="nav-item">
							<a data-toggle="collapse" href="#turun">
								<i class="fas fa-table"></i>
								<p>Visi Misi Desa</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="turun">
								<ul class="nav nav-collapse">
									<li>
										<a href="?halaman=visi">
											<span class="sub-item">Visi Desa</span>
										</a>
									</li>
									<li>
										<a href="?halaman=misi">
											<span class="sub-item">Misi Desa</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- berita -->
						<li class="nav-item">
							<a href="?halaman=kelola_berita">
								<i class="far fa-calendar-check"></i>
								<p>Berita</p>
							</a>
						</li>

						<!-- laporan warga -->
						<li class="nav-item">
							<a href="?halaman=tampil_laporan">
								<i class="far fa-calendar-check"></i>
								<p>Laporan Warga</p>
							</a>
						</li>
						
						<!-- tombol -->
						<li class="mx-4 mt-2">
							<a href="logout.php" class="btn btn-danger btn-block"><span class="btn-label mr-2"> <i class="icon-logout"></i> </span>Logout</a> 
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- akhir Sidebar -->

		<div class="main-panel">
			<div class="content">
			<?php
          if(isset($_GET['halaman'])){
            $hal = $_GET['halaman'];
            switch($hal){
              case 'beranda';
                include 'beranda.php';
              break;
              case 'ubah_pemohon';
                include 'ubah_pemohon.php';
			  break;
			  case 'tampil_pemohon';
                include 'tampil_pemohon.php';
			  break;
			  case 'request_sktm';
                include 'request_sktm.php';
			  break;
			  case 'request_sku';
                include 'request_sku.php';
			  break;
			  case 'request_skp';
                include 'request_skp.php';
			  break;
			  case 'request_skd';
                include 'request_skd.php';
			  break;
			  case 'tampil_status';
                include 'status_request.php';
			  break;
			  case 'belum_acc_sktm';
                include 'belum_acc_sktm.php';
			  break;
			  case 'belum_acc_sku';
                include 'belum_acc_sku.php';
			  break;
			  case 'belum_acc_skp';
                include 'belum_acc_skp.php';
			  break;
			  case 'belum_acc_skd';
                include 'belum_acc_skd.php';
			  break;
			  case 'sudah_acc_sktm';
                include 'acc_sktm.php';
			  break;
			  case 'sudah_acc_sku';
                include 'acc_sku.php';
			  break;
			  case 'sudah_acc_skp';
                include 'acc_skp.php';
			  break;
			  case 'sudah_acc_skd';
                include 'acc_skd.php';
			  break;
			  case 'detail_sktm';
                include 'detail_sktm.php';
			  break;
			  case 'detail_sku';
                include 'detail_sku.php';
			  break;
			  case 'detail_skp';
                include 'detail_skp.php';
			  break;
			  case 'detail_skd';
                include 'detail_skd.php';
			  break;
			  case 'cetak_sktm';
                include 'cetak_sktm.php';
			  break;
			  case 'kelola_berita';
                include 'kelola_berita.php';
			  break;
			  break;
			//   case 'kelola_surat';
            //     include 'kelola_surat.php';
			//   break;
			  case 'tampil_user';
                include 'tampil_user.php';
			  break;
			  case 'tambah_user';
                include 'tambah_user.php';
			  break;
			  case 'tambah_berita';
                include 'tambah_berita.php';
			  break;

			  case 'ubah_user';
                include 'ubah_user.php';
			  break;
			  case 'ubah_berita';
                include 'ubah_berita.php';
			  break;
			  case 'view_sktm';
                include 'view_sktm.php';
			  break;
			
			  // visi 
			  case 'visi';
                include 'visimisi/visi.php';
			  break;
			  case 'ubahvisi';
                include 'visimisi/ubahvisi.php';
			  break;
			  case 'tambahisi';
                include 'visimisi/tambahisi.php';
			  break;
			// misi
			case 'misi';
                include 'visimisi/misi.php';
			  break;
			  case 'ubahmisi';
                include 'visimisi/ubahmisi.php';
			  break;
			  case 'tambahmisi';
                include 'visimisi/tambahmisi.php';
			  break;
			  case 'misi';
                include 'misi.php';
			  break;

			//   tampil  laporan
			  case 'tampil_laporan';
                include 'laporan/tampillaporan.php';
			  break;

			  case 'view_sku';
                include 'view_sku.php';
			  break;
			  case 'view_skp';
                include 'view_skp.php';
			  break;
			  case 'view_skd';
                include 'view_skd.php';
			  break;
			  case 'view_cetak_sktm';
                include 'view_cetak_sktm.php';
			  break;
			  case 'view_cetak_sku';
                include 'view_cetak_sku.php';
			  break;
			  case 'view_cetak_skp';
                include 'view_cetak_skp.php';
			  break;
			  case 'view_cetak_skd';
                include 'view_cetak_skd.php';
			  break;
			  case 'surat_dicetak';
                include 'surat_dicetak.php';
              break;
			  case 'laporan_perbulan';
                include 'laporan_perbulan.php';
			  break;
			  case 'laporan_pertahun';
                include 'laporan_pertahun.php';
			  break;
			  case 'permohonan_surat';
                include 'permohonan_surat.php';
              break;
              default:
                echo "<center>HALAMAN KOSONG</center>";
              break;
            }
          }else{
            include 'beranda2.php';
          }
        ?>
	</div>
<?php include 'footer.php'; ?>