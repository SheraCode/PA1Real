   <?php
    session_start();
    if(!isset($_SESSION['username'])) {
      header("location:user.php");
      exit;
    }

   

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
                    <li class="nav-item"><a class="nav-link" href="user_login.php"><i class="bi bi-house-door-fill"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="product.php"><i class="bi bi-basket3-fill"></i> Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php"><i class="bi bi-person-square"></i> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile_user.php"><i class="bi bi-person-fill"></i> Profile</a></li>
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
                            <img class="d-block w-100" src="fotoprofil/<?php echo $da['foto']?>" alt="First slide" width=""> 
                        <?php }?>
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


<!-- YANG BARU -->
<div class="container">

  <div class="d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <button class="nav-link " id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Belum Bayar ( <?php echo $count2?>)</button>
      <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">Menunggu Konfirmasi ( <?php echo $count3?>)</button>
      <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Sedang Dikemas ( <?php echo $count4?>)</button>
      <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Pesanan Dikirim ( <?php echo $count5?>)</button>
      <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Pesanan Selesai( <?php echo $count6?>)</button>
      <button class="nav-link" id="v-pills-batal-tab" data-bs-toggle="pill" data-bs-target="#v-pills-batal" type="button" role="tab" aria-controls="v-pills-batal" aria-selected="true">Pesanan Dibatalkan( <?php echo $count7?>)</button>

    </div>
    <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade" id="v-pills-batal" role="tabpanel" aria-labelledby="v-pills-batal-tab" tabindex="0">
    <?php
require 'config.php';
$id_user =$_SESSION["akun_id"];
$username = $_SESSION['username'];
    $data = mysqli_query($conn,"SELECT * FROM checkout_produk INNER JOIN produk ON checkout_produk.nama_produk = produk.id_produk WHERE username LIKE '%$username%' AND status_bayar = 'Pesanan Dibatalkan'");

    if($count7 == 0) { ?>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <img src="asset/tidakadapesanan.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    <?php }
      while($d = mysqli_fetch_array($data))
{?>  
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
            <a href="batal_pemesanan.php?id=<?= $d['id_checkout'] ?>"class="btn btn-success"><b>Lihat<br>Detail</b></a>
          </form>
          </div>
        </div>
        </div>
    </div>
</div>
<?php }?>
    </div>
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">

      <?php
require 'config.php';
$id_user =$_SESSION["akun_id"];
$username = $_SESSION['username'];
    $data = mysqli_query($conn,"SELECT * FROM checkout_produk INNER JOIN produk ON checkout_produk.nama_produk = produk.id_produk WHERE username LIKE '%$username%' AND status_bayar = 'Pesanan Selesai'");

    if($count6 == 0) { ?>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <img src="asset/tidakadapesanan.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    <?php }
      while($d = mysqli_fetch_array($data))
{?>  
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
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">


      <?php
  require 'config.php';
  $id_user =$_SESSION["akun_id"];
  $username = $_SESSION['username'];
        $data = mysqli_query($conn,"SELECT * FROM checkout_produk INNER JOIN produk ON checkout_produk.nama_produk = produk.id_produk WHERE username LIKE '%$username%' AND status_bayar = 'Bayar Sekarang'");
      if($count2 == 0) { ?>
        <div class="container">
          <div class="card">
            <div class="card-body">
              <img src="asset/tidakadapesanan.png" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      <?php }
        while($d = mysqli_fetch_array($data))
{?>  

  
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
      <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">


      <?php
  require 'config.php';
  $id_user =$_SESSION["akun_id"];
  $username = $_SESSION['username'];
        $data = mysqli_query($conn,"SELECT * FROM checkout_produk INNER JOIN produk ON checkout_produk.nama_produk = produk.id_produk WHERE username LIKE '%$username%' AND status_bayar = 'Menunggu Konfirmasi'  ");
        if($count3 == 0) { ?>
          <div class="container">
            <div class="card">
              <div class="card-body">
                <img src="asset/tidakadapesanan.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        <?php }
          while($d = mysqli_fetch_array($data))
  {?>  
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
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">

      <?php
  require 'config.php';
  $id_user =$_SESSION["akun_id"];
  $username = $_SESSION['username'];
        $data = mysqli_query($conn,"SELECT * FROM checkout_produk INNER JOIN produk ON checkout_produk.nama_produk = produk.id_produk WHERE username LIKE '%$username%' AND status_bayar = 'Terkonfirmasi'   ");
        if($count4 == 0) { ?>
          <div class="container">
            <div class="card">
              <div class="card-body">
                <img src="asset/tidakadapesanan.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        <?php }
          while($d = mysqli_fetch_array($data))
  {?>  

  
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
              <a href="cetak.php?id=<?= $d['id_checkout']?>" class="btn btn-warning"><b>Download<br>Invoice<b></a>

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
        $data = mysqli_query($conn,"SELECT * FROM checkout_produk INNER JOIN produk ON checkout_produk.nama_produk = produk.id_produk WHERE username LIKE '%$username%' AND status_bayar = 'Pesanan Dikirim'  ");

        if($count5 == 0) { ?>
          <div class="container">
            <div class="card">
              <div class="card-body">
                <img src="asset/tidakadapesanan.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        <?php }
          while($d = mysqli_fetch_array($data))
  {?>  
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
      <div class="tab-pane fade" id="v-pills-finish" role="tabpanel" aria-labelledby="v-pills-finish-tab" tabindex="0">

      <?php
  require 'config.php';
  $id_user =$_SESSION["akun_id"];
  $username = $_SESSION['username'];
        $data = mysqli_query($conn,"SELECT * FROM checkout_produk INNER JOIN produk ON checkout_produk.nama_produk = produk.id_produk WHERE username LIKE '%$username%' AND status_bayar = 'Pesanan Selesai'");

        if($count6 == 0) { ?>
          <div class="container">
            <div class="card">
              <div class="card-body">
                <img src="asset/tidakadapesanan.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        <?php }
          while($d = mysqli_fetch_array($data))
  {?>  
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


</div>
</div>

<div class="container mt-5">
  <h2>Tabel Pertanyaan</h2>
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
