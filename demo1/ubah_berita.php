<?php
include '../konek.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM beritafix WHERE id='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_assoc($query);

    $judul = $data['judul'];
    $isi = $data['isi'];
    $tanggal = $data['tanggal'];
}

if(isset($_POST['ubah'])){
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];

    $sql = "UPDATE beritafix SET
        judul='$judul',
        isi='$isi',
        tanggal='$tanggal'
        WHERE id='$id'";
    $query = mysqli_query($konek, $sql);

    if($query){
        echo "<script>alert('Selamat... Ubah Berhasil');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=kelola_berita">';
    } else {
        echo "<script>alert('Gagal... Ubah Gagal');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=kelola_berita">';
    }
}

?>

<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <form method="POST">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">UBAH BERITA</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>ID</label>
                                    <input type="number" name="id" class="form-control" value="<?php echo $id; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" name="judul" class="form-control" value="<?php echo $judul; ?>" placeholder="Judul Berita">
                                </div>
                                <div class="form-group">
                                    <label>Isi</label>
                                    <input type="text" name="isi" class="form-control" value="<?php echo $isi; ?>" placeholder="Isi Berita">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" value="<?php echo $tanggal; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
                        <a href="?halaman=beranda" class="btn btn-default">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
