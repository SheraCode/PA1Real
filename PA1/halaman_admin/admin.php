<?php
    session_start();
    if(!isset($_SESSION['username'])) {
      header("location:../login_admin.php");
      exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mauas JKM</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../asset/iconadmin.png">
    <style>
      body {
 background-image: url("../asset/background_login.jpeg");
}
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">   
        <div class="container-fluid">
          <!-- offcanvas trigrer -->
          <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"></span>
          </button>
          <!-- offcanvas trigrer -->
          <a class="navbar-brand fw-bold text-uppercase me-auto" href="admin.php">Dashboard MAUAS JKM</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          </div>
        </div>
      </nav>
    <!-- navbar-->
    <!-- offcanvas -->
    
      <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-body p-0">
          <nav class="navbar-dark">
            <ul class="navbar-nav">
              <li>
                  <div class="text-muted small fw-bold text-uppercase px-3">
                  <hr class="dropdown-divider" />

                  </div>
              </li>
              <li>
                <a href="admin.php" class="nav-link px-3 active">
                  
                  <span class="me-2">
                    <i class="bi bi-speedometer"></i>
                  </span>
                  <span>Dashboard</span>
                  <a href="logout.php" class="btn btn-danger m-3">Log Out </a>
                  <a href="tambah_admin.php" class="btn btn-success m-3">Tambah Admin <i class='fas fa-user-plus'></i></a>

                </a>
              </li>
              <li class="my-4">
                  <hr class="dropdown-divider" />
              </li>
              <li>
                <div class="text-muted small fw-bold text-uppercase px-3">
                    Request User
                </div>
            </li>
            <li>
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span>Pemesanan</span>
                <span class="rigth-icon ms-auto">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </a>
              <div class="collapse" id="collapseExample">
                <div>
                 <ul class="navbar-nav ps-3">
                    <a href="checkout_pemesanan.php" class="nav-link px-3">
                      <span class="me-2">
                        <i class="bi bi-layout-split"></i>
                      </span>
                      <span>Checkout Pesanan</span>
                    </a>
                 </ul>
                </div>
              </div>
              <div class="collapse" id="collapseExample">
                <div>
                 <ul class="navbar-nav ps-3">
                    <a href="konfirmasi_pembayaran.php" class="nav-link px-3">
                      <span class="me-2">
                        <i class="bi bi-layout-split"></i>
                      </span>
                      <span>Konfirmasi Pembayaran</span>
                    </a>
                 </ul>
                </div>
              </div>
              <div class="collapse" id="collapseExample">
                <div>
                 <ul class="navbar-nav ps-3">
                    <a href="pesanan_terkonfirmasi.php" class="nav-link px-3">
                      <span class="me-2">
                        <i class="bi bi-layout-split"></i>
                      </span>
                      <span>Pesanan Terkonfirmasi</span>
                    </a>
                 </ul>
                </div>
              </div>
              <div class="collapse" id="collapseExample">
                <div>
                 <ul class="navbar-nav ps-3">
                    <a href="pesanan_kirim.php" class="nav-link px-3">
                      <span class="me-2">
                        <i class="bi bi-layout-split"></i>
                      </span>
                      <span>Pesanan Sedang Dikirim</span>
                    </a>
                 </ul>
                </div>
              </div>
              <div class="collapse" id="collapseExample">
                <div>
                 <ul class="navbar-nav ps-3">
                    <a href="pesanan_selesai.php" class="nav-link px-3">
                      <span class="me-2">
                        <i class="bi bi-cart-check"></i>                      
                      </span>
                      <span>Pesanan Selesai</span>
                    </a>
                 </ul>
                </div>
              </div>
              <li>
                <a href="pertanyaan.php" class="nav-link px-3">
                  <span class="me-2">
                    <i class="bi bi-question-octagon"></i>                  
                  </span>
                  <span>Pertanyaan</span>
                </a>
              </li>
              <li>
                <a href="produk.php" class="nav-link px-3">
                  <span class="me-2">
                  <i class="bi bi-bag-check-fill"></i>
                  </span>
                  <span>Produk</span>
                </a>
              </li>
            </li>
            </ul>
          </nav>
          
        </div>
      </div> 
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
       <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 fw-bold fs-3 text-center text-light">Data Pemesanan Mauas JKM</div> 
          </div>
          <div class="container text-center">
  <div class="row mt-3 m-1 p-1">
  <div class="container text-center">
  <div class="row">
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="../asset/logocekout.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><b>
    Pesanan Checkout</b></h5>
    <p class="card-text">Data dibawah adalah data secara keseluruhan </p>
    <?php 
        require '../config.php';
        $data1 = mysqli_query($conn,"SELECT * FROM checkout_produk WHERE status_bayar = 'Bayar Sekarang'");
        $count1 = mysqli_num_rows($data1);
        $data2 = mysqli_query($conn,"SELECT * FROM checkout_produk WHERE status_bayar = 'Menunggu Konfirmasi'");
        $count2 = mysqli_num_rows($data2);
        $data3 = mysqli_query($conn,"SELECT * FROM checkout_produk WHERE status_bayar = 'Pesanan Selesai'");
        $count3 = mysqli_num_rows($data3);

    ?>
    <a class="btn btn-primary"><?php echo $count1?> Produk</a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="../asset/logomenunggu.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><b>Konfirmasi Pembayaran</b></h5>
    <p class="card-text">Data dibawah adalah data secara keseluruhan.</p>
    <a class="btn btn-primary"><?php echo $count2?> Produk</a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="../asset/centangsukses.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><b>Pesanan Selesai</b></h5>
    <p class="card-text">Data dibawah adalah data secara keseluruha.</p>
    <a class="btn btn-primary"><?php echo $count3?> Produk</a>
  </div>
</div>
    </div>
  </div>
</div>
  </div>
       </div>
    </main>


    <main class="mt-5 pt-3">
       <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 fw-bold fs-3 text-center text-light">Data Pertanyaan Produk Mauas JKM</div> 
          </div>
          <div class="container text-center">
  <div class="row mt-3 m-1 p-1">
  <div class="container text-center">
  <div class="row">
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="../asset/madulogin.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><b>
    Madu Mauas</b></h5>
    <p class="card-text">Data dibawah adalah data Pertanyaan dari User. </p>
    <?php 
        require '../config.php';
        $data1 = mysqli_query($conn,"SELECT * FROM pertanyaan WHERE id_produk = 1");
        $count1 = mysqli_num_rows($data1);
        $data2 = mysqli_query($conn,"SELECT * FROM pertanyaan WHERE id_produk = 2");
        $count2 = mysqli_num_rows($data2);
        $data3 = mysqli_query($conn,"SELECT * FROM pertanyaan WHERE id_produk = 3");
        $count3 = mysqli_num_rows($data3);

    ?>
    <a class="btn btn-primary"><?php echo $count1?> Pertanyaan</a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="../asset/cookieslogin.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><b>Cookies Mauas</b></h5>
    <p class="card-text">Data dibawah adalah data Pertanyaan dari User.</p>
    <a class="btn btn-primary"><?php echo $count2?> Pertanyaan</a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="../asset/sambalTEMAN1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><b>Sambal Andaliman</b></h5>
    <p class="card-text">Data dibawah adalah data Pertanyaan dari User.</p>
    <a class="btn btn-primary"><?php echo $count3?> Pertanyaan</a>
  </div>
</div>
    </div>
  </div>
</div>
  </div>
       </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>