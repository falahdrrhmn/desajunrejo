<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST">
							<div class="card">
								<div class="card-header">
									<div class="card-title">LAPOR KE STAF</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label>Laporkan ke staf</label>
													<input type="text" name="isilaporan" class="form-control" placeholder="sebutkan laporan anda.." autofocus>
												</div>
											</div>
									</div>
								</div>
								<div class="card-action">
									<button name="simpan" class="btn btn-success btn-sm">Simpan</button>
									<a href="?halaman=tampil_lapor" class="btn btn-default btn-sm">Batal</a>
								</div>
							</div>
						</div>
						</form>
					</div>
</div>

<?php
    $tampil_nik = "SELECT * FROM data_user WHERE nik=$_SESSION[nik]";
	$query = mysqli_query($konek,$tampil_nik);
	$data = mysqli_fetch_array($query,MYSQLI_BOTH);

    


if(isset($_POST['simpan'])){
    $isilaporan = $_POST['isilaporan'];
    $tanggal = date('Y-m-d');
    $nik = $_SESSION['nik'];
    $nama = $_SESSION['nama'];

    $sql = "INSERT INTO laporan (nik, nama, isilaporan, tanggal) VALUES ('$nik', '$nama', '$isilaporan', '$tanggal')";
    $query = mysqli_query($konek, $sql);

    if($query){
        echo "<script language='javascript'>swal('Selamat...', 'Simpan Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_lapor">';
    }else{
        echo "<script language='javascript'>swal('Gagal...', 'Simpan Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tambah_lapor">';
    }
}
?>