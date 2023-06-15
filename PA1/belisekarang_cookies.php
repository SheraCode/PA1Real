<?php
session_start();
?>
<?php
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
    <title>Check Out Madu Mauas</title>
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



    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Check Out Cookies Mauas</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="product.php">Product</a></li>
                        <li class="breadcrumb-item active">Check Out Cookies Mauas</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="asset/cookieslogin.jpeg" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="asset/cookies.jpeg" alt="Second slide"> </div>
                            <div class="carousel-item "> <img class="d-block w-100" src="asset/cookieslogin.jpeg" alt="First slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span> 
					</a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
						<i class="fa fa-angle-right" aria-hidden="true"></i> 
						<span class="sr-only">Next</span> 
					</a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                <img class="d-block w-100 img-fluid" src="asset/cookieslogin.jpeg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="asset/cookies.jpeg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="asset/cookieslogin.jpeg" alt="" />
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                       
                    <!-- form pembelian -->
                    <form action="checkout_process_cookies.php" method="post">
                        <h5 class="h1 fw-bold mb-0 text-center">Form Pembelian</h5>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>Username</b></label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $_SESSION['username']?>" name="username">
                        </div>
                            <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"><b>Quantity</b></label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $_POST['Quantity']?>" name="quantity">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"><b>Alamat</b></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
                        </div>
                        <div class="price-box-bar">
                                <div class="cart-and-bay-btn">
                                    <button class="btn hvr-hover mt-3 text-light"><b>Beli Sekarang</b></button>
                                </div>
                            </div>
                            <div class="add-to-btn">
                                <div class="add-comp">
                                </div>
                                <div class="share-bar mt-3">
                                    
                                    <a class="btn hvr-hover" href="https://www.facebook.com/search/top?q=mauas%20jkm"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                    <a class="btn hvr-hover" href="https://www.instagram.com/mauas_jkm/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    <a class="btn hvr-hover" href="https://wa.me/62811626688?text=Halo%20Admin%20saya%20Mau%20Pesan"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                                </div>
                            </form>
						</div>
                    </div>
                </div>
            </div>

			
			
           
    <!-- End Cart -->

    

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