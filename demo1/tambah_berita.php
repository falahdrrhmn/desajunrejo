<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">	
            <form method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">FORM TAMBAH BERITA</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" name="judul" class="form-control" placeholder="judul" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Isi</label>
									<textarea name="isi" class="form-control" cols="30" rows="10" placeholder="Isi..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nama Staf</label>
                                    <input type="text" name="nama" class="form-control" placeholder="nama..">
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" placeholder="tanggal..">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button name="simpan" class="btn btn-success btn-sm">Simpan</button>
                        <a href="?halaman=kelola_berita" class="btn btn-default btn-sm">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];

    // Handle uploaded file
    if (isset($_FILES['gambar'])) {
        $gambar = $_FILES['gambar']['name'];
        $gambar_tmp = $_FILES['gambar']['tmp_name'];
        $gambar_path = 'E:/xampp/htdocs/desa-junrejo/dataFoto/berita/' . $gambar;

        // Move the uploaded file to the desired location
        move_uploaded_file($gambar_tmp, $gambar_path);
    } else {
        $gambar = '';
    }

    $sql = "INSERT INTO beritafix (judul, isi, nama, tanggal, gambar) VALUES ('$judul', '$isi', '$nama', '$tanggal', '$gambar')";
    $query = mysqli_query($konek, $sql);

    if ($query) {
        echo "<script language='javascript'>swal('Selamat...', 'Simpan Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=kelola_berita">';
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Simpan Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=kelola_berita">';
    }
}
?>
