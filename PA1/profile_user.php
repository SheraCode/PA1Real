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

<div class="d-flex align-items-start container mt-5">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</button>
      <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Pesanan</button>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
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
            </div>
            

      </div>
      <div class="tab-pane fade m-2" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">


      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Belum Bayar</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Menunggu Konfirmasi</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Terkonfirmasi</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">Pesanan Dikirim</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="pills-selesai-tab" data-bs-toggle="pill" data-bs-target="#pills-selesai" type="button" role="tab" aria-controls="pills-selesai" aria-selected="false">Pesanan Selesai</button>
</li>
</ul>
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

<div class="container mt-5">
            <div class="card">
                <div class="card-header text-center">
                    <b>Data Pesanan</b>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                            require_once 'config.php';
                            $id_user =$_SESSION["akun_id"];
                            $data = mysqli_query($conn, "SELECT * FROM checkout_produk INNER JOIN akun ON akun.id_akun = checkout_produk.akun_id WHERE status_bayar = 'Bayar Sekarang' AND akun_id = '$id_user'");
                            while($d = mysqli_fetch_array($data))
{?>  
                            
                          <tr>
                            <th scope="row"><?php echo $d['nama_lengkap']?></th>
                            <td>Rp <?php echo number_format($d['total_pembayaran']) ?></td>
                            <td>
                           <a href="upload_gambar.php?id=<?= $d['id_checkout']?>" class="btn btn-success">Upload Bukti Bayar</a>
</div>                                </td>
                          </tr>
                          <?php }?>
                        </tbody> 
                      </table>
                </div>
            </div>
        </div>





</div>
<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <b>Pesanan Menunggu Konfirmasi</b>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Bukti</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
require_once 'config.php';
$id_user = $_SESSION["akun_id"];
$data = mysqli_query($conn, "SELECT * FROM checkout_produk INNER JOIN akun ON akun.id_akun = checkout_produk.akun_id WHERE status_bayar = 'Menunggu Konfirmasi' AND akun_id = '$id_user'");
while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <th scope="row"><?php echo $d['nama_lengkap'] ?></th>
    <td>Rp <?php echo number_format($d['total_pembayaran']) ?></td>
    <td>
        <?php
        $imagePath = 'buktibayar/' . $d['bukti_bayar'];
        if (file_exists($imagePath)) {
            ?>
            <img src="<?php echo $imagePath ?>" alt="Bukti Bayar" style="max-width: 200px; max-height: 290px;">
            <?php
        } else {
            echo "Gambar tidak ditemukan.";
        }
        ?>
    </td>
</tr>
<?php } ?>


                </tbody>
              </table>
        </div>
    </div>
</div>
</div>
<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">


<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <b>Pesanan Terkonfirmasi</b>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Bukti</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
require_once 'config.php';
$id_user = $_SESSION["akun_id"];
$data = mysqli_query($conn, "SELECT * FROM checkout_produk INNER JOIN akun ON akun.id_akun = checkout_produk.akun_id WHERE status_bayar = 'Terkonfirmasi' AND akun_id = '$id_user'");
while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <th scope="row"><?php echo $d['nama_lengkap'] ?></th>
    <td>Rp <?php echo number_format($d['total_pembayaran']) ?></td>
    <td>
        <?php
        $imagePath = 'buktibayar/' . $d['bukti_bayar'];
        if (file_exists($imagePath)) {
            ?>
            <img src="<?php echo $imagePath ?>" alt="Bukti Bayar" style="max-width: 200px; max-height: 290px;">
            <?php
        } else {
            echo "Gambar tidak ditemukan.";
        }
        ?>
    </td>
</tr>
<?php } ?>


                </tbody>
              </table>
        </div>
    </div>
</div>
</div>


</div>
<div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <b>Pesanan Sedang Dikirim</b>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Tanggal Pemesanan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
require_once 'config.php';
$id_user = $_SESSION["akun_id"];
$data = mysqli_query($conn, "SELECT * FROM checkout_produk INNER JOIN akun ON akun.id_akun = checkout_produk.akun_id WHERE status_bayar = 'Pesanan Dikirim' AND akun_id = '$id_user'");
while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <th scope="row"><?php echo $d['nama_lengkap'] ?></th>
    <td>Rp <?php echo number_format($d['total_pembayaran']) ?></td>
    <td>
        <?php
        $imagePath = 'buktibayar/' . $d['bukti_bayar'];
        if (file_exists($imagePath)) {
            ?>
            <img src="<?php echo $imagePath ?>" alt="Bukti Bayar" style="max-width: 200px; max-height: 290px;">
            <?php
        } else {
            echo "Gambar tidak ditemukan.";
        }
        ?>
    </td>
    <td>
        <a href="pesanan_diterima_process.php?id=<?= $d['id_checkout']?>" class="btn btn-success"><b>Pesanan Diterima</b></a>
    </td>
</tr>
<?php } ?>


                </tbody>
              </table>
        </div>
    </div>
</div>
</div>



</div>
<div class="tab-pane fade" id="pills-selesai" role="tabpanel" aria-labelledby="pills-selesai-tab" tabindex="0">
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <b>Pesanan Selesai</b>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Tanggal Pemesanan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
require_once 'config.php';
$id_user = $_SESSION["akun_id"];
$data = mysqli_query($conn, "SELECT * FROM checkout_produk INNER JOIN akun ON akun.id_akun = checkout_produk.akun_id WHERE status_bayar = 'Pesanan Selesai' AND akun_id = '$id_user'");
while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <th scope="row"><?php echo $d['nama_lengkap'] ?></th>
    <td>Rp <?php echo number_format($d['total_pembayaran']) ?></td>
    <td>
        <?php
        $imagePath = 'buktibayar/' . $d['bukti_bayar'];
        if (file_exists($imagePath)) {
            ?>
            <img src="<?php echo $imagePath ?>" alt="Bukti Bayar" style="max-width: 200px; max-height: 290px;">
            <?php
        } else {
            echo "Gambar tidak ditemukan.";
        }
        ?>
    </td>
</tr>
<?php } ?>


                </tbody>
              </table>
        </div>
    </div>
</div>
</div>



</div>
</div>








                    
      </div>
    </div>
  </div>















<!-- End Cart -->




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

