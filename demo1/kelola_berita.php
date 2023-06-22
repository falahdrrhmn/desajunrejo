<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Berita</h4>
                            <a href="?halaman=tambah_berita" class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-plus"></i>
                                    Tambah Berita
                            </a>
                    </div>
                </div>
                <div class="card-body">
                <!-- Modal -->
                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header no-bd">
                                <h5 class="modal-title">
                                    <span class="fw-mediumbold">
                                        New
                                    </span> 
                                    <span class="fw-light">
                                        Row
                                    </span>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <p class="small">Create a new row using this form, make sure you fill them all</p>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Name</label>
                                            <input id="addName" type="text" class="form-control" placeholder="fill name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pr-0">
                                        <div class="form-group form-group-default">
                                            <label>Position</label>
                                                <input id="addPosition" type="text" class="form-control" placeholder="fill position">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-default">
                                                                        <label>Office</label>
                                                                        <input id="addOffice" type="text" class="form-control" placeholder="fill office">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer no-bd">
                                                        <button type="button" id="addRowButton" class="btn btn-primary">Add</button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="">
                                            <div class="table-responsive">
                                                <table id="add" class="display table table-striped table-hover" >
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Judul</th>
                                                            <th>Isi</th>
                                                            <th>Tanggal</th>
                                                            <!-- <th>Jenis Kelamin</th>
                                                            <th>Status Warga</th>
                                                            <th>Password</th>
                                                            <th>Hak Akses</th> -->
                                                            <th style="width: 10%">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $no=1;
                                                            $tampil = "SELECT * FROM beritafix";
                                                            $query = mysqli_query($konek,$tampil);
                                                            while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
                                                                // $username = $data['nik'];
                                                                // $nama = $data['nama'];
                                                                // $password = $data['password'];
                                                                // $tempat = $data['tempat_lahir'];
                                                                // $tanggal = $data['tanggal_lahir'];
                                                                // $alamat = $data['alamat'];
                                                                // $jekel = $data['jekel'];
                                                                // $status_warga = $data['status_warga'];
                                                                // $tanggal_lahir = date("d-F-Y", strtotime($tanggal));
                                                                // $hak_akses = $data['hak_akses'];

                                                                $id = $data['id'];
                                                                $judul = $data['judul'];
                                                                $isi = $data['isi'];
                                                                $tanggal = $data['tanggal'];
                                                                
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $no++;?></td>
                                                            <td><?php echo $judul;?></td>
                                                            <td><?php echo $isi;?></td>
                                                            <td><?php echo $tanggal;?></td>
                                                            
                                                            <td>
                                                                <div class="form-button-action">
                                                                    <a href="?halaman=ubah_berita&id=<?php echo $id;?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Berita">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>
                                                                    <a href="?halaman=kelola_berita&id=<?php echo $id;?>" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus Berita">
                                                                        <i class="fa fa-times"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                            }   
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
        </div>
</div>


<?php
    if(isset($_GET['id'])){
        $sql_hapus = "DELETE FROM beritafix WHERE id='".$_GET['id']."'";
        $query_hapus = mysqli_query($konek,$sql_hapus);
        if($query_hapus){
            echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>" ;
            echo '<meta http-equiv="refresh" content="3; url=?halaman=kelola_berita">';
          }else{
            echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>" ;
            echo '<meta http-equiv="refresh" content="3; url=?halaman=kelola_berita">';
          }
    }
?>