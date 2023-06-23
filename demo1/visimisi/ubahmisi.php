<!-- <?php include '../konek.php';?> -->
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM misi WHERE id='$id'";
        $query = mysqli_query($konek,$sql);
        $data=mysqli_fetch_array($query,MYSQLI_BOTH);
        $isi = $data['isi'];
    }
?>




<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$tampil_id = "SELECT * FROM misi WHERE id=$id";
		$query = mysqli_query($konek,$tampil_id);
		$data = mysqli_fetch_array($query,MYSQLI_BOTH);
		$id = $data['id'];
		$isi = $data['isi'];
		
	}
	
?>

<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 

<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <form method="POST">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Ubah misi</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>ID</label>
									<input type="number" name="id" class="form-control" placeholder="ID" value="<?= $id;?>" readonly>
                                </div>
                                <div class="form-group">
									<label>Msi</label>
									
                                    <textarea name="isi" class="form-control" cols="30" rows="10" placeholder="Isi misi..."><?= $isi;?></textarea>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button name="ubah" class="btn btn-success">Ubah</button>
						<a href="?halaman=misi" class="btn btn-default">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if(isset($_POST['ubah'])){
	$id = $_POST['id'];
	$isi = $_POST['isi'];

	$sql = "UPDATE misi SET
	isi='$isi' WHERE id=$id";
	$query = mysqli_query($konek,$sql);

	if($query){
		echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=misi">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=misi">';
	  }
}
	
?>