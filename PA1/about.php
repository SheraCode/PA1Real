<?php
    session_start();
    if(!isset($_SESSION['username'])) {
      header("location:user.php");
      exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>About</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="icon" href="asset/background_register.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
   <script>
    function alert() {
        swal({
      title: "Tidak Dapat dibeli",
      text: "Silahkan Login Terlebih Dahulu",
      icon: "warning",
      button: "Ok",
    });
    }

    function alertcoment() {
        swal({
      title: "Tidak Dapat Bertanya",
      text: "Silahkan Login Terlebih Dahulu",
      icon: "warning",
      button: "Ok",
    });
    }
  
  
   </script>

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html"><h3 class="h1 fw-bold mb-0">Mauas JKM</h3></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item"><a class="nav-link" href="user_login.php"><i class="bi bi-house-door-fill"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="product.php"><i class="bi bi-basket3-fill"></i> Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php"><i class="bi bi-person-square"></i> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile_user.php"><i class="bi bi-person-fill"></i> Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="keranjang.php"><i class="bi bi-chat-fill"></i> Questions</a></li>

                    <?php
require_once 'config.php';
$id_akun = $_SESSION["akun_id"];

// Query untuk menghitung jumlah data
$query = "SELECT COUNT(*) as total FROM chart WHERE id_user = '$id_akun'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$totalData = $row['total'];

// Tampilkan jumlah data pada navbar
echo '<li class="nav-item"><a class="nav-link" href="chart.php"><i class="bi bi-cart-fill"></i>(' . $totalData . ')</a></li>';
?>
                        <li class="nav-item"><button class="btn btn-danger m-1"><a href="logout.php" class="h5 text-decoration-none">Log Out</a></button></li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
           
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

<!-- Slider Dinamis Coba -->
<?php
require_once 'config.php';

// Query untuk mengambil data carousel dari tabel carousel
$query = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);

// Cek apakah ada data carousel
if (mysqli_num_rows($result) > 0) {
    ?>
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <?php
            // Looping untuk menampilkan setiap data carousel
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <li class="text-center">
                    <img src="halaman_admin/<?php echo $row['gambar_1']; ?>" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="m-b-20"><strong><?php echo $row['nama_produk']; ?></strong></h1>
                                <!-- <p class="m-b-40"><?php echo $row['deskripsi_produk']; ?></p> -->
                                <p><a class="btn hvr-hover" href="produk_mauas.php?id_produk=<?php echo $row['id_produk']; ?>">Shop Now</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <?php
            }
            ?>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <?php
} else {
    // Tampilkan pesan jika tidak ada data carousel
    echo "No carousel data found.";
}
?>


<!-- Akhir Slider Otomatis coba -->
    <!-- Start Categories  -->
    <h2 class="h1 fw-bold mb-0 m-1 p-3 mt-3 text-center">Sertifikat Produksi Pangan Industri Rumah Tangga UMKM Mauas JKM</h2>
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="asset/IzinCookies.png" alt="" />
                        <a class="btn hvr-hover" href="#">IRT Cookies Mauas</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="asset/IRTSambal.png" alt="" />
                        <a class="btn hvr-hover" href="#">IRT Sambal Teri Andaliman</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="asset/IRTMadu.png" alt="" />
                        <a class="btn hvr-hover" href="#">IRT Madu Mauas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->
	
	<div class="container">
    <div class="row">
        <div class="col-md-6">
        <h2 class="h3 fw-bold mb-0 m-2 p-1 mt-2 text-center">Alamat Mauas Jkm</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.13994931647574!2d99.16547290438417!3d2.427070298231319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
            1!3m3!1m2!1s0x302e0173a176fbb3%3A0xea93dc74d2069159!2sMadu%20MAUAS!5e0!3m2!1sid!2sid!4v1679560840490!5m2!1sid!2sid" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="img-fluid"></iframe>
        </div>
        <div class="col-md-6">
        <h2 class="h3 fw-bold mb-0 m-1 p-2 mt-2 text-center">Deskripsi Mauas Jkm</h2>
        <p class="h5 fw-bold">
        MAUAS JKM adalah sebuah UMKM yang terletak di (lokasi). Nama UMKM itu sendiri yaitu MAUAS JKM (Mauas(Batak) = Haus, 
        JKM berasal dari singkatan nama pemilik umkm nya yaitu Jernih Kristina Manurung). UMKM ini memproduksi beberapa produk,
         diantara lain Madu murni, cookies dengan bahan campuran madu, dan Sambal Teman(Teri Andaliman).
        </p>
            
        </div>
      </div>
      
</div>
<div class="container mt-5">
    <img class="img-fluid" src="asset/postercookies.png" alt="">
</div>

        <!-- Start Products  -->
        <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Pembayaran Produk Mauas JKM</h1>
                    </div>
                </div>
            </div>



    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="asset/mandirijernikartika.jpg" alt="" />
                        <a class="btn hvr-hover" href="javascript:void()" id="bri" >Bank Mandiri</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Sertifikat Halal Madu Mauas JKM</h1>
                    </div>
                </div>
            </div>
    <div class="categories-shop">
        <div class="container">
                <div class="col-12 ">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="asset/halal.png" alt="" />
                    </div>
            </div>
        </div>
    </div>





    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Pemasaran Produk Kami</h1>
                        <p>Produk yang dijual dari Mauas JKM dipasarkan juga di beberapa tempat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="asset/RumahKreatifToba.png" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Rumah Kreatif Toba</h3>
                                <p>Produk UMKM Mauas JKM dijual juga secara online melalui Rumah Kreatif Toba yang dimana web ini merupakan E-Commmerce para UMKM yang berada di Kabupaten Tobasa.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="asset/Batikta.png" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Batikta</h3>
                                <p>Produk ini dijual juga di Toko Kain Batikta yang dimana Batikta adalah salah satu tempat pembelian produk UMKM Mauas JKM secara langsung.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="asset/Silangittt.png" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Silangit</h3>
                                <p>Produk UMKM Mauas JKM dipasarkan juga di Banndara Silangit sehingga sangat cocok untuk dijadikan oleh-oleh dari Sumatera Utara bagi para pengunjung yang pergi ke Sumatera Utara.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->


    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="asset/MauasMadu.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mauas_jkm/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="asset/cookieslogin.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mauas_jkm/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="asset/SambalTeman.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mauas_jkm/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="asset/MaduMauasJKM.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mauas_jkm/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="asset/PackagingCookies.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mauas_jkm/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="asset/madulogin.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mauas_jkm/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="asset/background_login.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mauas_jkm/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="asset/background_register.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mauas_jkm/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="asset/SambalTEMAN.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mauas_jkm/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="asset/MaduMauasJKM.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mauas_jkm/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; MauasJKM 2023</p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
