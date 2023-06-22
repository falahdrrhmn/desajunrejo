<?php include 'konek.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Desa Junrejo</title>
    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/logo.png" rel="apple-touch-icon">
  <!-- plugins:css -->
  <link rel="stylesheet" href="main/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="main/vendors/base/vendor.bundle.base.css">
  <link href="main/css/sweetalert.css" rel="stylesheet" type="text/css">
  <script src="main/js/jquery-2.1.3.min.js"></script>
  <script src="main/js/sweetalert.min.js"></script>                
  <script src="main/js/sweetalert-dev.js"></script>  
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="main/css/style.css">
</head>

<style type="text/css">
  body{
    background-image: url("22.PNG");
  }
</style>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="main/img/logo4.png"  alt="logo">
              </div>
              <h4>LOGIN STAF</h4>
              
              <!-- masukin NIK -->
              <form method="POST" class="pt-3">
                <div class="form-group">
                  <input type="text" name="nik" class="form-control form-control-xs text-uppercase" placeholder="NIK" required autofocus>
                </div>

                <!-- masukin pasasword -->
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-xs text-uppercase" placeholder="Password" required autofocus>
                </div>
                <div class="mt-3">
                  <!-- <a href="SBAdmin/index.html" class="btn btn-block btn-primary btn-sm font-weight-medium auth-form-btn">LOGIN</a> -->
                  <button type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                    LOGIN
                  </button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  
                </div>
                <div class="mb-2">
                  <a class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn" href="http://localhost/desa-junrejo/">BATAL</a>
                </div>
                <!-- <div class="text-center mt-4 font-weight-light">
                  Belum memiliki akun? <a href="beranda.php" class="text-primary">Buat</a>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- login -->
  <?php
    if(isset($_POST['login'])){
      $nik = $_POST['nik'];
      $password = $_POST['password'];
      // $hak_akses = $_POST['hak_akses'];
      
        $sql_login = "SELECT * FROM data_user WHERE nik='$nik' AND password='$password'";
        $query_login = mysqli_query($konek,$sql_login);
        $data_login = mysqli_fetch_array($query_login,MYSQLI_BOTH);
        $jumlah_login = mysqli_num_rows($query_login);

        if($jumlah_login > 0){
          session_start();
          $_SESSION['hak_akses']=$data_login['hak_akses'];
          $_SESSION['password']=$data_login['password'];
          
          // kalo dia pemohon berarti gada akses buat masuk
          if($data_login['hak_akses'] == 'Pemohon'){
            echo "<script language='javascript'>swal('Gagal...', 'Anda tidak memiliki izin untuk masuk!', 'error');</script>" ;
            echo '<meta http-equiv="refresh" content="3; url=pegawai.php">';
          } else {
            echo "<script language='javascript'>swal('Selamat...', 'Login Berhasil!', 'success');</script>" ;
            echo '<meta http-equiv="refresh" content="3; url=demo1/main2.php">';
          }  
        }else{
          echo "<script language='javascript'>swal('Gagal...', 'Login Gagal', 'error');</script>" ;
          echo '<meta http-equiv="refresh" content="3; url=pegawai.php">';
        }
    }
  ?>

  <!-- plugins:js -->
  <script src="main/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="main/js/off-canvas.js"></script>
  <script src="main/js/hoverable-collapse.js"></script>
  <script src="main/js/template.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- endinject -->
  <script src="http://code.jquery.com/jquery-3.0.0.min.js"></script> 
</body>

</html>
<!-- oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "16"  -->