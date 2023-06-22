<?php
  if(!isset($_SESSION)) 
  { 
	  session_start(); 
  } 
 if (isset($_SESSION['password'])=="" || ($_SESSION['hak_akses'])=="")  {
 header('location:login.php');
 }
 else{
 $hak_akses = $_SESSION['hak_akses'];
//  $nama = $_SESSION['nama'];
//  $nik = $_SESSION['nik'];
 }
 ?>

<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Halo <?php echo $nama;?>!</h2>
								<h5 class="text-white op-7 mb-2">Sebelum Anda Request Surat Keterangan Lengkapi Biodata Anda, Klik Biodata Anda</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
								<a href="?halaman=tampil_pemohon" class="btn btn-sm btn-primary btn-round"><span class="btn-label">
									<i class="fas fa-user"></i> Biodata Anda</a>
							</div>
						</div>
					</div>
				</div>

				<div class="page-inner mt--5">
					<div class="row mt--2">

						<!-- surat keterangan usaha -->
						<div class="col-md-4 pr-md-0">
								<div class="card-pricing2 card-primary">
									<div class="pricing-header">
										<h6 class="fw-bold text-center text-uppercase">Surat Keterangan Usaha</h6>
									</div>
									<div class="price-value">
										<div class="value">
											<span class="currency"></span>
											<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
											<span class="month"></span>
										</div>
									</div>
									<ul class="pricing-content">
									</ul>
									<a href="?halaman=request_sku" class="btn btn-primary btn-round btn-sm mb-3">
										<span class="btn-label">
											<i class="fas fa-plus-circle"></i>
										</span> Request</a>
								</div>
						</div>

						<!-- surat keterangan tidak mampu -->
						<div class="col-md-4 pr-md-0">
								<div class="card-pricing2 card-success">
									<div class="pricing-header">
										<h6 class="fw-bold text-center text-uppercase">Surat Keterangan Tidak Mampu</h6>
									</div>
									<div class="price-value">
										<div class="value">
											<span class="currency"></span>
											<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
											<span class="month"></span>
										</div>
									</div>
									<ul class="pricing-content">
									</ul>
									<a href="?halaman=request_sktm" class="btn btn-success btn-round btn-sm mb-4"><span class="btn-label">
										<i class="fas fa-plus-circle"></i> Request</a>
								</div>
						</div>

						<!-- surat keterangan pembuatan ktp -->
						<div class="col-md-4 pr-md-0">
								<div class="card-pricing2 card-warning">
									<div class="pricing-header">
										<h6 class="fw-bold text-center text-uppercase">Surat Keterangan Pembuatan KTP</h6>
									</div>
									<div class="price-value">
										<div class="value">
											<span class="currency"></span>
											<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
											<span class="month"></span>
										</div>
									</div>
									<ul class="pricing-content">
									</ul>
									<a href="?halaman=request_skp" class="btn btn-warning btn-round btn-sm mb-3"><span class="btn-label">
										<i class="fas fa-plus-circle"></i> Request</a>
								</div>
						</div>

						<!-- gak dipake -->
						<!-- <div class="col-md-3 pr-md-0">
								<div class="card-pricing2 card-secondary">
									<div class="pricing-header">
										<h6 class="fw-bold text-center text-uppercase">Surat Keterangan Domisili</h6>
									</div>
									<div class="price-value">
										<div class="value">
											<span class="currency"></span>
											<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
											<span class="month"></span>
										</div>
									</div>
									<ul class="pricing-content">
									</ul>
									<a href="?halaman=request_skd" class="btn btn-secondary btn-round btn-sm mb-3"><span class="btn-label">
										<i class="fas fa-plus-circle"></i> Request</a>
								</div>
						</div> -->
	</div>
</div>
