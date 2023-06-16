<?php
    session_start();
    if(!isset($_SESSION['username'])) {
      header("location:user.php");
      exit;
    }

    require_once 'functions.php';
    $data = new rajaongkir();

    $kota = $data->get_city();  
    $kota_array = json_decode($kota, true);
        

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
    <title>Cek Ongkir</title>
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
            background-image: url(asset/background_login.jpeg);
            
        }

    </style>
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

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 ">
                <div class="card">
                    <div class="card-header bg-secondary text-light">
                        <b>Cek Ongkos Kirim Produk</b>
                    </div>
                    <div class="card-body bg-warning text-dark">
                    <form id="form-cek-ongkir" action="cost.php" method="POST">
    <div class="form-group">
        <label for="kota_asal"><b>Kota Asal (Toba Samosir)</b></label>
        <select name="kota_asal" id="kota_asal" class="form-control">
            <?php foreach ($kota_array['rajaongkir']['results'] as $key => $value) {
                if ($value['city_name'] === 'Toba Samosir') {
                    echo '<option value="' . $value['city_id'] . '" selected>' . $value['city_name'] . '</option>';
                } else {
                    echo '<option value="' . $value['city_id'] . '">' . $value['city_name'] . '</option>';
                }
            } ?>
        </select>
    </div>

    <div class="form-group">
        <label for="kota_tujuan"><b>Kota Tujuan</b></label>
        <select name="kota_tujuan" id="kota_tujuan" class="form-control">
            <option value=""></option>
            <?php foreach ($kota_array['rajaongkir']['results'] as $key => $value) { ?>
                <option value="<?= $value['city_id']; ?>"><?= $value['city_name']; ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group">
        <input type="hidden" id="berat" name="berat" class="form-control" min="1" max="30000" value="<?php echo isset($_POST['berat']) ? $_POST['berat'] : ''; ?>">
    </div>

    <div class="form-group">
        <button type="submit" id="btn-periksa-ongkir" class="btn btn-success" onclick="showOngkirContainer()"><b>Periksa Ongkir</b></button>
        <a href="chart.php" class="btn btn-danger"><b>Kembali</b></a>
    </div>
</form>

                    </div>
                </div>
            </div>

                        
            <div class="col-md-8 mt-3">
                <div class="card">
                    <div class="card-header bg-secondary text-light" id="hasil-pengecekan">
                        <b>Hasil Pengecekan</b>
                    </div>
                    <div class="card-body bg-opacity-50 text-dark">


                    <script>
document.getElementById('form-cek-ongkir').addEventListener('submit', function(event) {
  var fileInput = document.getElementById('lampiran_keranjang');
  var file = fileInput.files[0];
  var fileSize = file.size;
  var allowedExtensions = /(\.jpeg|\.jpg|\.png)$/i;
  var maxSize = 5 * 1024 * 1024; // 5 MB

  if (!allowedExtensions.exec(file.name) || fileSize > maxSize) {
    event.preventDefault(); // Menghentikan pengiriman formulir

    alert('File yang diunggah harus dalam format JPEG, JPG, atau PNG dengan ukuran di bawah 5 MB.');

    fileInput.value = ''; // Mengosongkan input file
  }
});
</script>

<form id="form-cek-ongkir" action="process_ongkir.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="kota_asal"><b>Ongkos Kirim</b></label>
    <input type="hidden" value="<?php echo isset($_POST['total']) ? $_POST['total'] : ''; ?>" name="total_pembayaran">
    <br>
    <input type="text" class="form-control" id="ongkir_input" readonly name="ongkir" required>
    <label for="kota_asal"><b>Upload Screenshot Keranjang</b></label>
    <br>
    <input type="file" name="lampiran_keranjang" id="lampiran_keranjang" accept=".jpeg, .jpg, .png" required>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-success"><b>Tambahkan Ongkir</b></button>
  </div>
</form>
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

    <script>
        $('#kota_asal').select2({
            placeholder: 'Pilih Kota Asal',
            theme: "bootstrap"
        });

        $('#kota_tujuan').select2({
            placeholder: 'Pilih Kota Tujuan',
            theme: "bootstrap"
        });

        $('#form-cek-ongkir').on('submit',function(e) {
            e.preventDefault();

            let kota_asal  = $('#kota_asal').select2('data')[0].text;
            let kota_tujuan  = $('#kota_tujuan').select2('data')[0].text;
            let berat = $('#berat').val();
             
            $('#hasil-pengecekan').html(`Hasil pengecekan pengiriman Produk dari <b>${kota_asal}</b> ke <b>${kota_tujuan}</b> dengan berat ${berat} gram`); 

            hasil_pengecekan();
        });

        function hasil_pengecekan() {
    $.ajax({
        url: 'cost.php',
        type: 'POST',
        data: {
            kota_asal: $('#kota_asal').val(),
            kota_tujuan: $('#kota_tujuan').val(),
            berat: $('#berat').val(),
        },
        success: function(response) {
            var result = JSON.parse(response);
            var ongkir = result.data[0][3]; // Ambil nilai ongkir dari response

            $('#ongkir_input').val(ongkir); // Isi nilai ongkir pada input

            resetForm('form-cek-ongkir', ['kota_asal', 'kota_tujuan']);
        }
    });
}




        function resetForm(form, select2 = []) {
            $('#'+form[0]).reset();
            if(select2.length > 0)
            {
                $.each(select2, function(k,v) {
                    $('#' + v).val('').trigger('change');
                })

                
            }
        }
    </script>

<script>
  function showOngkirContainer() {
    var ongkirContainer = document.getElementById('ongkir-container');
    ongkirContainer.style.display = 'block';
  }
</script>

</body>

</html>