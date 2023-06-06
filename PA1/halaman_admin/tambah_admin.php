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
    <link rel="icon" href="../asset/iconadmin.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">
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
            </li>
            </ul>
          </nav>
          
        </div>
      </div> 
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
       <div class="container-fluid">
          <div class="row">
          </div>
          <!-- code -->
          <section class="vh-100">
  <div class="container py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block" style="background-color: #BDB76B;">
              <img src="../asset/fotodilogin.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center" style="background-color: #BDB76B;">
              <div class="card-body p-4 p-lg-5 text-black ">
                
                <div class="d-flex align-items-center mb-3 pb-1">    
                  <span class="h1 fw-bold mb-0">Tambah Admin Mauas JKM</span>
                </div>
                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create into your account</h5>
                <form action="tambah_admin_process.php" method="post">
                <div class="form-outline mb-1">
                  <input type="text" id="form2Example17" class="form-control form-control-lg" name="username_register"/>
                  <label class="form-label" for="form2Example17" >Username</label>
                  </div>
                  <div class="form-outline mb-1">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="password_register"/>
                    <label 
                    class="form-label" for="form2Example27" >Password</label>
                  </div>
                  <div class="pt-1 mb-1">
                    <button class="btn btn-dark btn-lg btn-block" name="login">Tambah Admin <i class='fas fa-user-plus'></i></button>
                  </div>
                </form>
                      
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  </div>
       </div>
    </main>


    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>