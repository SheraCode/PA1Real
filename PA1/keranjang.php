<?php
require 'config.php';
    session_start();
    if(!isset($_SESSION['username'])) {
      header("location:user.php");
      exit;
    }
    $id_user =$_SESSION["akun_id"];
    $data2 = mysqli_query($conn,"SELECT * FROM checkout_produk WHERE status_bayar = 'Bayar Sekarang' AND akun_id = '$id_user'");
    $count2 = mysqli_num_rows($data2);

?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://select2.github.io/select2-bootstrap-theme/css/select2-bootstrap.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Keranjang</title>
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
    <style>
        body {
            background-image: url();
            
        }

    </style>
</head>

<body>
<div class="d-flex align-items-start m-1">
    <?php 
        require 'config.php';
        $id_user =$_SESSION["akun_id"];
        $data1 = mysqli_query($conn,"SELECT * FROM checkout_produk WHERE akun_id = '$id_user'");
        $count1 = mysqli_num_rows($data1);
        $data2 = mysqli_query($conn,"SELECT * FROM checkout_produk WHERE status_bayar = 'Bayar Sekarang' AND akun_id = '$id_user'");
        $count2 = mysqli_num_rows($data2);
        $data3 = mysqli_query($conn,"SELECT * FROM checkout_produk WHERE status_bayar = 'Menunggu Konfirmasi' AND akun_id = '$id_user'");
        $count3 = mysqli_num_rows($data3);
        $data4 = mysqli_query($conn,"SELECT * FROM checkout_produk WHERE akun_id = '$id_user' AND status_bayar = 'Terkonfirmasi'");
        $count4 = mysqli_num_rows($data4);
        $data5 = mysqli_query($conn,"SELECT * FROM checkout_produk WHERE status_bayar = 'Pesanan Dikirim' AND akun_id = '$id_user'");
        $count5 = mysqli_num_rows($data5);
        $data6 = mysqli_query($conn,"SELECT * FROM checkout_produk WHERE status_bayar = 'Pesanan Selesai' AND akun_id = '$id_user'");
        $count6 = mysqli_num_rows($data6);
        $data7 = mysqli_query($conn,"SELECT * FROM checkout_produk WHERE status_bayar = 'Pesanan Dibatalkan' AND akun_id = '$id_user'");
        $count7 = mysqli_num_rows($data7);

    ?>
    </div>

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
                     <li class="nav-item"><a class="nav-link" href="keranjang.php"><i class="bi bi-chat-fill"></i> Pertanyaan</a></li>
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
<!-- mulai keranjang disini -->

<!-- akhir keranjang disini -->
     
     <div class="container mt-5">
     <h2 class="text-dark"><b>Tabel Pertanyaan</b></h2>
     <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
       <li class="nav-item" role="presentation">
         <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Madu</button> 
       </li>
       <li class="nav-item" role="presentation">
         <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Cookies</button>
       </li>
       <li class="nav-item" role="presentation">
         <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Sambal</button>
       </li>
     </ul>
     <div class="tab-content" id="pills-tabContent">
     <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
       <?php
       // Periksa apakah 'id_akun' ada dalam $_SESSION
       if (isset($_SESSION['akun_id'])) {
           $id_akun = $_SESSION['akun_id'];
     
           // Ambil data akun dari database berdasarkan id_akun
           $query = mysqli_query($conn, "SELECT * FROM akun WHERE id_akun = '$id_akun'");
           $akun = mysqli_fetch_assoc($query);
     
           // Periksa apakah akun ditemukan
           if ($akun) {
               // Lanjutkan dengan kode yang lain
               $id_user = $akun['id_akun'];
               $madu = mysqli_query($conn, "SELECT pertanyaan, jawaban FROM pertanyaan INNER JOIN akun ON pertanyaan.id_user = akun.id_akun WHERE pertanyaan.id_produk = 1 AND pertanyaan.id_user = '$id_user'");
     
               if ($madu) {
                   while ($madup = mysqli_fetch_assoc($madu)) { ?>
                       <div class="row gy-3 my-3" style="background-color:white;">
                           <div class="col-lg-6">
                               <img src="asset/madulogin.jpeg" class="d-block w-100" alt="...">
                           </div>
                           <div class="card-body col-lg-6">
                               <h2 class="card-title"><b>Madu</b></h2>
                               <div class="card">
                                   <div class="card-header">
                                       <b>PERTANYAAN</b>
                                   </div>
                                   <div class="card-body">
                                       <h3 class="card-title"><?php echo $madup['pertanyaan']; ?></h3>
                                   </div>
                               </div>
                               <div class="card">
                                   <div class="card-header">
                                       <b>JAWABAN</b>
                                   </div>
                                   <div class="card-body">
                                   <h3 class="card-title"><?php echo $madup['jawaban']; ?></h3>
                                   </div>
                               </div>
                           </div>
                       </div>
       <?php
                   }
               } else {
                   echo "Query error: " . mysqli_error($conn); // Menampilkan pesan error jika terjadi kesalahan dalam query
               }
           } else {
               echo "Akun tidak ditemukan.";
           }
       } else {
           echo "ID akun tidak tersedia dalam sesi.";
       }
       ?>
     </div>
       <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
       <?php
     
     // Periksa apakah 'id_akun' ada dalam $_SESSION
     if (isset($_SESSION['akun_id'])) {
       $id_akun = $_SESSION['akun_id'];
     
     
       // Ambil data akun dari database berdasarkan id_akun
       $query = mysqli_query($conn, "SELECT * FROM akun WHERE id_akun = '$id_akun'");
       $akun = mysqli_fetch_assoc($query);
     
       // Periksa apakah akun ditemukan
       if ($akun) {
         // Lanjutkan dengan kode yang lain
         $id_user = $akun['id_akun'];
         $cookies = mysqli_query($conn, "SELECT pertanyaan,jawaban FROM pertanyaan INNER JOIN akun ON pertanyaan.id_user = akun.id_akun WHERE pertanyaan.id_produk = 2 AND pertanyaan.id_user = '$id_user'");
       
     
         if ($cookies) {
           while ($cookiesp = mysqli_fetch_assoc($cookies)) { ?>
               <div class="row gy-3 my-3" style="background-color:white;">
                   <div class="col-lg-6">
                   <img class="img-fluid" src="asset/cookies.jpeg" alt="" />
                   </div>
                   <div class="card-body col-lg-6">
                       <h2 class="card-title"><b>Cookies</b></h2>
                       <div class="card">
                           <div class="card-header">
                               <b>PERTANYAAN</b>
                           </div>
                           <div class="card-body">
                               <h3 class="card-title"><?php echo $cookiesp['pertanyaan']; ?></h3>
                           </div>
                       </div>
                       <div class="card">
                           <div class="card-header">
                               <b>JAWABAN</b>
                           </div>
                           <div class="card-body">
                           <h3 class="card-title"><?php echo $cookiesp['jawaban']; ?></h3>
                           </div>
                       </div>
                   </div>
               </div>
           <?php } ?>
         <?php } else {
             echo "Query error: " . mysqli_error($conn); // Menampilkan pesan error jika terjadi kesalahan dalam query
         }
     } else {
         echo "Akun tidak ditemukan.";
     }
     } else {
     echo "ID akun tidak tersedia dalam sesi.";
     }
     ?>
     
     
       </div>
     
       <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
       <?php
     
     // Periksa apakah 'id_akun' ada dalam $_SESSION
     if (isset($_SESSION['akun_id'])) {
       $id_akun = $_SESSION['akun_id'];
     
       // Ambil data akun dari database berdasarkan id_akun
       $query = mysqli_query($conn, "SELECT * FROM akun WHERE id_akun = '$id_akun'");
       $akun = mysqli_fetch_assoc($query);
     
       // Periksa apakah akun ditemukan
       if ($akun) {
         // Lanjutkan dengan kode yang lain
         $id_user = $akun['id_akun'];
         $sambal = mysqli_query($conn, "SELECT pertanyaan,jawaban FROM pertanyaan INNER JOIN akun ON pertanyaan.id_user = akun.id_akun WHERE pertanyaan.id_produk = 3 AND pertanyaan.id_user = '$id_user'");
     
         if ($sambal) { ?>
     
           <?php  foreach ($sambal as $sambalp) { ?>
             <div class="row gy-3 my-3" style="background-color:white;" >
                   <div class="col-lg-6">
                   <img class="img-fluid" src="asset/sambalteman.jpeg" alt="" />
                   </div>
     
                   <div class="card-body col-lg-6">
                           <h2 class="card-title"><b>Sambal</b></h2>
                           <div class="card">
                           <div class="card-header">
                               <b>PERTANYAAN</b>
                           </div>
                           <div class="card-body">
                               <h3 class="card-title"><?php echo $sambalp['pertanyaan']; ?></h3>
                           </div>
                       </div>
                       <div class="card">
                           <div class="card-header">
                               <b>JAWABAN</b>
                           </div>
                           <div class="card-body">
                           <h3 class="card-title"><?php echo $sambalp['jawaban']; ?></h3>
                           </div>
                       </div>
                   </div>
             </div>
           <?php } ?>
         <?php } else {
             echo "Query error: " . mysqli_error($conn); // Menampilkan pesan error jika terjadi kesalahan dalam query
         }
     } else {
         echo "Akun tidak ditemukan.";
     }
     } else {
     echo "ID akun tidak tersedia dalam sesi.";
     }
     ?>
       </div>
     </div>
     </div>
     
        </div>
    </div>

    <!-- Start Instagram Feed  -->
    <div class="instagram-box mt-5">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

</body>

</html>