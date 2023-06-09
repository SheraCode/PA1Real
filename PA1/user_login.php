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
    <title>Home</title>
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
     <!-- Start Slider -->
     <!-- <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="asset/MauasMadu.jpeg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> MauasJKM</strong></h1>
                            <p class="m-b-40">Madu MauasJKM</p>
                            <p><a class="btn hvr-hover" href="belilangsung_madu.php">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="asset/background_login.jpeg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> MauasJKM</strong></h1>
                            <p class="m-b-40">Cookies MauasJKM </p>
                            <p><a class="btn hvr-hover" href="belilangsung_cookies.php">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="asset/sambaltemanlogin.jpeg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> MauasJKM</strong></h1>
                            <p class="m-b-40">Sambal TEMAN(Teri Andaliman)</p>
                            <p><a class="btn hvr-hover" href="belilangsung_teman.php">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div> -->
    <!-- End Slider -->

	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid rounded" src="asset/postercookies.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>

        <!-- Start Products  -->
        <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Produk Olahan Mauas JKM</h1>
                        <p>Mauas JKM memberikan beberapa produk olahan yang tentunya sangat memberikan rasa Khas yang berbeda daripada Produk Olahan yang sejenisnya.</p>
                    </div>
                </div>
            </div>




            <?php 
require_once 'config.php';
$sql = "SELECT * FROM produk";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $counter = 0; // Counter untuk menghitung jumlah produk yang ditampilkan
    while ($row = mysqli_fetch_assoc($result)) {
        if ($counter % 3 == 0) {
            // Membuka baris baru setiap 3 produk
            echo '<div class="row">';
        }
?>
    <div class="col-lg-4 col-md-6 special-grid best-seller">
        <div class="products-single fix">
            <div class="box-img-hover">
                <div class="type-lb">
                    <p class="sale">Mauas JKM</p>
                </div>
                <img src="halaman_admin/<?php echo $row['gambar_1']; ?>" class="img-fluid" alt="Image">
                <div class="mask-icon">
                    <ul>
                    <li><a href="produk_mauas.php?id_produk=<?php echo $row['id_produk']; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="why-text">
                <h4><?php echo $row['nama_produk']; ?></h4>
                <h5><i class="bi bi-tags-fill"></i> IDR <?php echo number_format($row['harga_produk']); ?></h5>
            </div>
        </div>
    </div>
<?php
        $counter++;
        if ($counter % 3 == 0) {
            // Menutup baris setiap 3 produk
            echo '</div>';
        }
    }
    if ($counter % 3 != 0) {
        // Menutup baris terakhir jika jumlah produk tidak kelipatan 3
        echo '</div>';
    }
}
?>

    <!-- End Products  -->

    <!-- Start Blog  -->
    <?php
require_once 'config.php';

// Query untuk mengambil data produk dari tabel produk
$query = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);

// Cek apakah ada data produk
if (mysqli_num_rows($result) > 0) {
    ?>
    <div class="latest-blog">
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Deskripsi Produk</h1>
                        <p>Semua Produk yang dijual di Mauas JKM mempunyai ciri Khas nya masing-masing.</p>
                    </div>
                </div>
                <?php
                // Looping untuk menampilkan setiap data produk
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img class="img-fluid" src="halaman_admin/<?php echo $row['gambar_1']; ?>" alt="" />
                            </div>
                            <div class="blog-content">
                                <div class="title-blog">
                                    <h3><?php echo $row['nama_produk']; ?></h3>
                                    <p><?php echo $row['deskripsi_produk']; ?></p>
                                </div>

                                <!-- <div id="review-<?php echo $row['id']; ?>" class="mt-3"></div> -->
                                <div class="container">
                                    <label for="tanya"><b>Tanya Produk</b></label>
                                    <form action="tanya_produk_process.php" method="post">
                                        <textarea placeholder="Leave a comment here" name="pertanyaan" id="" cols="45" rows="5"></textarea>
                                        <input type="hidden" value="<?php echo $row['id_produk']?>" name="id_produk">
                                        <button class="btn btn-success m-2"><b>Tanya Produk</b></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    </div>
    <?php
} else {
    // Tampilkan pesan jika tidak ada data produk
    echo "No product data found.";
}
?>


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