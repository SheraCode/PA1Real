Total Pesanan Selesai<?php
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
                    <a href="pesanan_selesai.php" class="nav-link px-3 active">
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
            <div class="col-md-12 fw-bold fs-3 text-center text-light">Data Pesanan Selesai Produk Mauas JKM</div> 
          </div>
          <div class="container text-center">
          <div class="container">
              <div class="card">
                <div class="card-body">
                  <table class="table bg-dark text-light">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Lampiran Keranjang</th>
                            <th scope="col">Bukti</th>
                            <th scope="col">Total Belanja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
require_once '..\config.php';
$id_user = $_SESSION["akun_id"];
$data = mysqli_query($conn, "SELECT * FROM checkout_produk INNER JOIN akun ON akun.id_akun = checkout_produk.akun_id WHERE status_bayar = 'Pesanan Selesai'");
while ($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <th scope="row"><?php echo $d['nama_lengkap'] ?></th>
        <td>
        <?php
            $imagePath = '../lampiran_keranjang/' . $d['lampiran_keranjang'];
            if (file_exists($imagePath)) {
                ?>
                <img src="<?php echo $imagePath ?>" alt="Lampiran Keranjang" style="max-width: 200px; max-height: 290px;">
                <?php
            } else {
                echo "Gambar tidak ditemukan.";
            }
            ?>        </td>
        <td>
            <?php
            $imagePath = '../buktibayar/' . $d['bukti_bayar'];
            if (file_exists($imagePath)) {
                ?>
                <img src="<?php echo $imagePath ?>" alt="Bukti Bayar" style="max-width: 200px; max-height: 290px;">
                <?php
            } else {
                echo "Gambar tidak ditemukan.";
            }
            ?>
        </td>
        <td>Rp. 
        <?php echo number_format($d['total_pembayaran'])?>
        </td>

    </tr>
<?php } ?>


                    </tbody>
                  </table>
                  <div class="card bg-dark">
                    <div class="card-body">
                    <?php
// Total pembayaran per hari
$queryPerHari = "SELECT DATE_FORMAT(tanggal_pemesanan, '%d %M %Y') AS tanggal, SUM(total_pembayaran) AS total_perhari FROM checkout_produk INNER JOIN akun ON akun.id_akun = checkout_produk.akun_id WHERE status_bayar = 'Pesanan Selesai' GROUP BY tanggal_pemesanan";
$resultPerHari = mysqli_query($conn, $queryPerHari);

if (mysqli_num_rows($resultPerHari) > 0) {
    while ($row = mysqli_fetch_assoc($resultPerHari)) {
        $tanggal = $row['tanggal'];
        $totalPerHari = $row['total_perhari'];
    }
} else {
    $totalPerHari = 0;
}

// Total pembayaran per bulan
$queryPerBulan = "SELECT DATE_FORMAT(tanggal_pemesanan, '%M %Y') AS bulan, SUM(total_pembayaran) AS total_perbulan FROM checkout_produk INNER JOIN akun ON akun.id_akun = checkout_produk.akun_id WHERE status_bayar = 'Pesanan Selesai' GROUP BY MONTH(tanggal_pemesanan), YEAR(tanggal_pemesanan)";
$resultPerBulan = mysqli_query($conn, $queryPerBulan);

if (mysqli_num_rows($resultPerBulan) > 0) {
    while ($row = mysqli_fetch_assoc($resultPerBulan)) {
        $bulan = $row['bulan'];
        $totalPerBulan = $row['total_perbulan'];
    }
} else {
    $totalPerBulan = 0;
}

// Total pembayaran semua
$queryTotal = "SELECT SUM(total_pembayaran) AS total_semua FROM checkout_produk INNER JOIN akun ON akun.id_akun = checkout_produk.akun_id WHERE status_bayar = 'Pesanan Selesai'";
$resultTotal = mysqli_query($conn, $queryTotal);
$rowTotal = mysqli_fetch_assoc($resultTotal);
$totalSemua = $rowTotal['total_semua'];

?>

<h3 class="text-light text-start"><b>Total Omzet Perhari : Rp. <?php echo ($totalPerHari > 0) ? number_format($totalPerHari) : 'Anda belum mempunyai omset'; ?>,-</b></h3>
<h3 class="text-light text-start"><b>Total Omzet Perbulan : Rp. <?php echo ($totalPerBulan > 0) ? number_format($totalPerBulan) : 'Anda belum mempunyai omset'; ?>,-</b></h3>
<h3 class="text-light text-start"><b>Total Omzet Semua : Rp. <?php echo ($totalSemua > 0) ? number_format($totalPerBulan) : 'Anda belum mempunyai omset'; ?>,-</b></h3>

                    </div>
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