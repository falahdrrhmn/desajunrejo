<!DOCTYPE html>
<html>
<head>
<title>Desa Junrejo </title>

<!-- Favicons -->
    <link href="../../assets/img/logo.png" rel="icon">
    <link href="../../assets/img/logo.png" rel="apple-touch-icon">
    <!-- main css -->
<link href="../../main/css/main/main.css" rel="stylesheet">
<!-- Vendor CSS Files -->
<link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
<link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Custom CSS -->

</head>
<body>
    
    <!--

    <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
          <nav>
            <div class="container">
              <ol>
                <li><a href="../../index.php">Home</a></li>
                <li>Berita</li>
              </ol>
            </div>
          </nav>
        </div><!-- End Breadcrumbs -->

        

            <!-- ======= Blog Section ======= -->
            <section id="blog" class="blog">
            <div class="container">
                <div class="section-header">
                    <h2>BERITA TERBARU</h2>
                    <p>"Berita terkini seputar kehidupan dan perkembangan Desa Junrejo, memberikan informasi yang lengkap dan akurat untuk warga serta mendorong partisipasi aktif dalam membangun Desa yang lebih maju dan sejahtera."</p>
                </div>
                <div class="row gy-4 posts-list">
                <?php 
                include '../../konek.php';

                // Fetch berita from database
                $query = "SELECT * FROM beritafix ORDER BY tanggal DESC";
                $result = mysqli_query($konek, $query);

                // Check if there are berita available
                if (mysqli_num_rows($result) > 0) {
                    $index = 1; 
                    while ($row = mysqli_fetch_assoc($result)) {
                        $judul = $row['judul'];
                        $isi = $row['isi'];
                        $nama = $row['nama'];
                        $tanggal = $row['tanggal'];
                        $gambar = 'blog-' . $index . '.jpg'; // URL gambar berdasarkan nomor indeks
                        $pp = 'blog-author-' . $index . '.jpg';
                        $index++

                    
                ?>

                
                <div class="col-xl-4 col-md-6">
                    <article>
                        <div class="post-img">
                    <img src="../../dataFoto/berita/<?php echo $gambar; ?>" alt="" class="img-fluid">
                        </div>
                        <p class="post-category">Politics</p>
                        <h2 class="title">
                            <a href="berita-details"><?php echo $judul; ?></a>
                        </h2>
                        <p><?php echo $isi ?></p>
                        <div class="d-flex align-items-center">
                            <img src="../../dataFoto/berita/<?php echo $pp; ?>" alt="" class="img-fluid post-author-img flex-shrink-0">
                            <div class="post-meta">
                            <p class="post-author-list"><?php echo $nama; ?></p>
                            <p class="post-date">
                                <time datetime="2022-01-01"><?php echo $tanggal; ?></time>
                            </p>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- End post list item -->

                <?php }
                } ?>

                </div><!-- End blog posts list -->
        
                <div class="blog-pagination">
                <ul class="justify-content-center">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
                </div><!-- End blog pagination -->
        
            </div>
            </section><!-- End Blog Section -->



    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h2>Agenda</h2>
              <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
            </div>
        </div>
    </section>

    </div>

</div>

<!-- Vendor JS Files -->
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/aos/aos.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>
<script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>

<!-- Main JS File -->
<script src="../../assets/js/main.js"></script>
</body>
</html>



