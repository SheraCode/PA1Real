<?php
session_start();
//echo $_SESSION['id']
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
    <title>Profile</title>
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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color:#F8F8FF">
   
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
                    <a class="navbar-brand" href="user_login.php"><h3 class="h1 fw-bold mb-0">Mauas JKM</h3></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item"><a class="nav-link" href="user_login.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="product.php">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile_user.php">Profile</a></li>
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
                    <h2>Profile</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="user_login.php">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
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
                            <?php 
                            
                            require 'config.php';
                            $id_user =$_SESSION["akun_id"];
                            $data = mysqli_query($conn,"SELECT * FROM akun WHERE id_akun = '$id_user'");
                            foreach($data as $da) {
                            ?>
                            <div class="carousel-item active"><img class="d-block w-100" src="fotoprofil/<?php echo $da['foto']?>" width="100px" alt="First slide"> 
                        <?php }?></div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                    <h2 class="text-center"><b>Profile</b></h2>
                    <?php 
                    require 'config.php';
                   //session_start();
                    $id_user =$_SESSION["akun_id"];
                $data = mysqli_query($conn,"SELECT * FROM akun WHERE id_akun='  $id_user'");
                while($d = mysqli_fetch_array($data))
                {?>
                    <!-- form pembelian -->
                    <form>
                        <fieldset disabled>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><b>Username</b></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="-"  value="<?php echo $_SESSION['username']?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><b>Nama Lengkap</b></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_lengkap"placeholder="-" value="<?php echo $d['nama_lengkap']?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><b>Alamat Email</b></label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat_email"placeholder="-" value="<?php echo $d['alamat_email']?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label"><b>Alamat</b></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" placeholder="-"><?php echo $d['alamat']?></textarea>
                            </div>
                        </fieldset>
                    </form>
                    <?php }?>
                    <a href="add_profile_user.php"class="btn btn-primary text-decoration-none m-1 p-2"><b>Update Profil</b></a>
						</div>
                    </div>
                </div>
            </div>

			
			
           
    <!-- End Cart -->
    <div class="d-flex align-items-start m-1">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Semua Pesanan</button>


    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Belum Bayar</button>


    <button class="nav-link" id="v-pills-konfirmasi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-konfirmasi" type="button" role="tab" aria-controls="v-pills-konfirmasi" aria-selected="false" >Menunggu Konfirmasi</button>


    <button class="nav-link" id="v-pills-dikemas-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dikemas" type="button" role="tab" aria-controls="v-pills-dikemas" aria-selected="false" >Sedang Dikemas</button>


    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Sedang Dikirim</button>


    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Selesai</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
    <?php
  require 'config.php';
  $id_user =$_SESSION["akun_id"];
  $username = $_SESSION['username'];
        $data = mysqli_query($conn,"SELECT * FROM checkout_produk INNER JOIN produk ON checkout_produk.nama_produk = produk.id_produk WHERE username LIKE '%$username%'   ");

        while($d = mysqli_fetch_array($data))
{

  ?>
    <div class="container">
        <div class="card">
            <div class="card-body">
            <div class="row">
              <div class="col-6">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asset/madulogin.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/cookieslogin.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/SambalTEMAN1.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
              </div>
              <div class="col-6">
              <p><b><?php echo $d['nama_produk']?> x<?php echo $d['quantity']?></b></p>
              <p><b><?php echo $d['tanggal_pemesanan']?></b></p>
              <a href="bayar_sekarang_semua.php?id=<?= $d['id_checkout']; ?>" class="btn btn-success"><b>Detail</b></a>
              </div>
            </div>
            </div>
        </div>
    </div>
<?php }?>
    </div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
      
    <?php
  require 'config.php';
  $id_user =$_SESSION["akun_id"];
  $username = $_SESSION['username'];
        $data = mysqli_query($conn,"SELECT * FROM checkout_produk INNER JOIN produk ON checkout_produk.nama_produk = produk.id_produk WHERE username LIKE '%$username%' AND status_bayar = 'Bayar Sekarang'");

        while($d = mysqli_fetch_array($data))
{

  ?>
    <div class="container">
        <div class="card">
            <div class="card-body">
            <div class="row">
              <div class="col-6">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asset/madulogin.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/cookieslogin.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/cookieslogin.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
              </div>
              <div class="col-6">
              <p><b><?php echo $d['nama_produk']?> x<?php echo $d['quantity']?></b></p>
              <p><b><?php echo $d['tanggal_pemesanan']?></b></p>
              <a href="bayar_sekarang.php?id=<?= $d['id_checkout']; ?>"class="btn btn-success"><b>Bayar<br>Sekarang</b></a>
              </div>
            </div>
            </div>
        </div>
    </div>
<?php }?>
    </div>
    <div class="tab-pane fade" id="v-pills-dikemas" role="tabpanel" aria-labelledby="v-pills-dikemas-tab" tabindex="0">
    <?php
  require 'config.php';
  $id_user =$_SESSION["akun_id"];
  $username = $_SESSION['username'];
        $data = mysqli_query($conn,"SELECT * FROM checkout_produk INNER JOIN produk ON checkout_produk.nama_produk = produk.id_produk WHERE username LIKE '%$username%' AND status_bayar = 'Terkonfirmasi'");

        while($d = mysqli_fetch_array($data))
{

  ?>
    <div class="container">
        <div class="card">
            <div class="card-body">
            <div class="row">
              <div class="col-6">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asset/madulogin.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/cookieslogin.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/cookieslogin.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
              </div>
              <div class="col-6">
              <p><b><?php echo $d['nama_produk']?> x<?php echo $d['quantity']?></b></p>
              <p><b><?php echo $d['tanggal_pemesanan']?></b></p>
              <a href="bayar_sekarang.php?id=<?= $d['id_checkout']; ?>"class="btn btn-success"><b><?php echo $d['status_bayar'] ?></b></a>
              </div>
            </div>
            </div>
        </div>
    </div>
<?php }?>
    </div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
    <?php
  require 'config.php';
  $id_user =$_SESSION["akun_id"];
  $username = $_SESSION['username'];
        $data = mysqli_query($conn,"SELECT * FROM checkout_produk INNER JOIN produk ON checkout_produk.nama_produk = produk.id_produk WHERE username LIKE '%$username%' AND status_bayar = 'Pesanan Selesai'");

        while($d = mysqli_fetch_array($data))
{

  ?>
    <div class="container">
        <div class="card">
            <div class="card-body">
            <div class="row">
              <div class="col-6">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asset/madulogin.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/cookieslogin.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/cookieslogin.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
              </div>
              <div class="col-6">

              <form action="pesanan_diterima_process.php" method="post">
                <p><b><?php echo $d['nama_produk']?> x<?php echo $d['quantity']?></b></p>
                <p><b><?php echo $d['tanggal_pemesanan']?></b></p>
                <a href="product.php"class="btn btn-success"><b>Beli Lagi</b></a>
              </form>
              </div>
            </div>
            </div>
        </div>
    </div>
<?php }?>
    </div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
    <?php
  require 'config.php';
  $id_user =$_SESSION["akun_id"];
  $username = $_SESSION['username'];
        $data = mysqli_query($conn,"SELECT * FROM checkout_produk INNER JOIN produk ON checkout_produk.nama_produk = produk.id_produk WHERE username LIKE '%$username%' AND status_bayar = 'Bayar Sekarang' OR status_bayar = 'Pesanan Dikirim'  ");

        while($d = mysqli_fetch_array($data))
{

  ?>
    <div class="container">
        <div class="card">
            <div class="card-body">
            <div class="row">
              <div class="col-6">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asset/madulogin.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/cookieslogin.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/cookieslogin.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
              </div>
              <div class="col-6">

              <form action="pesanan_diterima_process.php" method="post">
                <p><b><?php echo $d['nama_produk']?> x<?php echo $d['quantity']?></b></p>
                <p><b><?php echo $d['tanggal_pemesanan']?></b></p>
                <span>Silahkan konfirmasi setelah menerima dan mengecek pesanan</span><br>
                <a href="pesanan_diterima_process.php?id=<?= $d['id_checkout']; ?>"class="btn btn-success"><b>Pesanan<br>Diterima</b></a>
              </form>
              </div>
            </div>
            </div>
        </div>
    </div>
<?php }?>
    </div>
    <div class="tab-pane fade" id="v-pills-konfirmasi" role="tabpanel" aria-labelledby="v-pills-konfirmasi-tab" tabindex="0">
    <?php
  require 'config.php';
  $id_user =$_SESSION["akun_id"];
  $username = $_SESSION['username'];
        $data = mysqli_query($conn,"SELECT * FROM checkout_produk INNER JOIN produk ON checkout_produk.nama_produk = produk.id_produk WHERE username LIKE '%$username%' AND status_bayar = 'Menunggu Konfirmasi'  ");

        while($d = mysqli_fetch_array($data))
{

  ?>
    <div class="container">
        <div class="card">
            <div class="card-body">
            <div class="row">
              <div class="col-6">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asset/madulogin.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/cookieslogin.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/cookieslogin.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
              </div>
              <div class="col-6">
              <p><b><?php echo $d['nama_produk']?> x<?php echo $d['quantity']?></b></p>
              <p><b><?php echo $d['tanggal_pemesanan']?></b></p>
              <a href="bayar_sekarang_baru.php?id=<?= $d['id_checkout']; ?>"class="btn btn-success"><b>Menunggu<br>Konfirmasi</b></a>
              </div>
            </div>
            </div>
        </div>
    </div>
<?php }?>
    </div>
  </div>
</div>






    <!-- Start copyright  -->
    <div class="footer-copyright mt-5">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>

