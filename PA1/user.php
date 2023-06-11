
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
    <title>Utama</title>
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

    function alertdetail() {
        swal({
      title: "Tidak Dapat Melihat Detail Produk",
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
                        <li class="nav-item"><button class="btn btn-warning m-1"><a href="login.php" class="h5 text-decoration-none ">Login  <i class="bi bi-door-open-fill"></i> </a></i></button></li>
                        <li class="nav-item"><button class="btn btn-warning m-1"><a href="register.php" class="h5 text-decoration-none">Sign Up  <i class="bi bi-person-fill-add"></i></i></a></button></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
           
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="asset/MauasMadu.jpeg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> MauasJKM</strong></h1>
                            <p class="m-b-40">Madu MauasJKM </p>
                            <p><a class="btn hvr-hover" href="#"  onclick="alert()">Shop Now</a></p>
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
                            <p><a class="btn hvr-hover" href="#" onclick="alert()">Shop Now</a></p>
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
                            <p><a class="btn hvr-hover" href="#"  onclick="alert()">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <h2 class="h1 fw-bold mb-0 m-1 p-3 mt-3 text-center">Produk Olahan MauasJKM</h2>
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="asset/madulogin.jpeg" alt="" />
                        <a class="btn hvr-hover" href="detailmadu.php">Madu Mauas</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="asset/cookieslogin.jpeg" alt="" />
                        <a class="btn hvr-hover" href="detailcookies.php">Cookies Mauas</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="asset/sambalteman.jpeg" alt="" />
                        <a class="btn hvr-hover" href="detailteman.php">Sambal Teri Andaliman (TEMAN)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- End Categories -->
	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid rounded" src="asset/postermadu.png" alt="" />
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Top featured</button>
                            <button data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-4 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Mauas JKM</p>
                            </div>
                            <img src="asset/madulogin.jpeg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="detailmadu.php" data-toggle="tooltip" data-placement="right" title="View" ><i class="fas fa-eye text-light"></i></a></li>
                                </ul>
                                <a class="cart" onclick = "alert()">Beli Sekarang</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Madu Mauas</h4>
                            <h5><i class="bi bi-tags-fill"></i> IDR 150.000</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">Mauas JKM</p>
                            </div>
                            <img src="asset/cookieslogin.jpeg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="detailcookies.php" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye text-light"></i></a></li>
                                </ul>
                                <a class="cart" onclick = "alert()">Beli Sekarang</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Cookies Mauas</h4>
                            <h5><i class="bi bi-tags-fill"></i> IDR 25.000</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Mauas JKM</p>
                            </div>
                            <img src="asset/sambalteman.jpeg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="detailteman.php" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye text-light"></i></a></li>
                                </ul>
                                <a class="cart" onclick = "alert()">Beli Sekarang</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Sambal Teri Andaliman</h4>
                            <h5><i class="bi bi-tags-fill"></i> IDR 35.000</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Deskripsi Produk</h1>
                        <p>Semua Produk yang dijual di Mauas JKM mempunyai ciri Khas nya masing-masing.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="asset/MauasMadu.jpeg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Madu Mauas</h3>
                                <p>Madu Mauas adalah madu asli hutan,Madu Mauas JKM membudidayakan madu ternak jenis Lebah Cerana (daldal).</p>
                            </div>
                            <ul class="option-blog">
                                <li><a onclick="alertcoment()"><i class="far fa-comments" style="color:aliceblue"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="asset/cookieslogin.jpeg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Cookies Mauas</h3>
                                <p>Cookies Mauas memakai bahan pemanis alami yang dimana Madu Mauas sebagai pemanisnya dalam pembuatan Cookies.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a onclick="alertcoment()"><i class="far fa-comments" style="color:aliceblue"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="asset/SambalTEMAN.jpeg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Sambal Teri Andaliman</h3>
                                <p>Sambal ini adalah Produk Olahan dari Andaliman yang dimana sambal ini mempunyai masa EXP yang lama.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a onclick="alertcoment()"><i class="far fa-comments" style="color:aliceblue"></i></a></li>
                            </ul>
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