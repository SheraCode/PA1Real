
<!doctype html>
<html lang="en">
  <head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      body {
 background-image: url("asset/background_register.jpg");
}
    </style>
        <link rel="icon" href="asset/background_register.jpg">

  </head>
  <body class="">
  <section class="vh-100">
  <div class="container py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block" style="background-color: #BDB76B;">
              <img src="asset/fotodilogin.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center" style="background-color: #BDB76B;">
              <div class="card-body p-4 p-lg-5 text-black ">
                
                <div class="d-flex align-items-center mb-3 pb-1">    
                  <span class="h1 fw-bold mb-0">MauasJKM</span>
                </div>
                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create your account</h5>
                <form action="register_process.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
  <div class="form-outline mb-1">
    <input type="text" id="form2Example17" class="form-control form-control-lg" name="username_register" autofocus>
    <label class="form-label" for="form2Example17">Username</label>
  </div>
  <div class="form-outline mb-1">
    <input type="password" id="form2Example27" class="form-control form-control-lg" name="password_register" autofocus>
    <label class="form-label" for="form2Example27">Password</label>
  </div>
  <div class="form-outline mb-1">
    <input type="text" id="form2Example17" class="form-control form-control-lg" name="nama_lengkap" autofocus>
    <label class="form-label" for="form2Example17">Nama Lengkap</label>
  </div>
  <div class="form-outline mb-1">
    <input type="email" id="form2Example27" class="form-control form-control-lg" name="alamat_email" autofocus>
    <label class="form-label" for="form2Example27">Alamat Email</label>
  </div>
  <div class="form-outline mb-1">
    <input type="text" id="form2Example17" class="form-control form-control-lg" name="alamat" autofocus>
    <label class="form-label" for="form2Example17">Alamat</label>
  </div>
  <div class="form-outline mb-1">
    <input type="file" id="form2Example27" class="form-control form-control-lg" name="filefoto" autofocus>
    <label class="form-label" for="form2Example27">Upload Foto Profil</label>
  </div>
  <div class="pt-1 mb-1">
    <button class="btn btn-dark btn-lg btn-block" name="login">Register</button>
  </div>
</form>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  function validateForm() {
    var username = document.forms[0]["username_register"].value;
    var password = document.forms[0]["password_register"].value;
    var namaLengkap = document.forms[0]["nama_lengkap"].value;
    var alamatEmail = document.forms[0]["alamat_email"].value;
    var alamat = document.forms[0]["alamat"].value;
    var fileFoto = document.forms[0]["filefoto"].value;

    if (username === "" || password === "" || namaLengkap === "" || alamatEmail === "" || alamat === "" || fileFoto === "") {
      swal("Oops!", "Mohon lengkapi semua field.", "error");
      return false;
    }

    return true;
  }
</script>

                <p class="mb-5 pb-lg-2" style="color: black;">Do you have an account? 
                    <a href="login.php"
                      style="color: #393f81;" class="text-decoration-none">Login here</a></p>
                      <div class="text-center">
                        <a href="https://www.instagram.com/mauas_jkm/" class="text-decoration-none">
                          <i class='fa fa-instagram m-3 p-3' style='font-size:46px; color:black'></i>
                          <a href="https://www.facebook.com/search/top?q=mauas%20jkm" class="text-decoration-none">
                              <i class='fa fa-facebook m-3 p-3' style='font-size:46px; color:black'></i>
                            </a>
                        <a href="https://www.youtube.com/@mauasjkm2880" class="text-decoration-none">
                            <i class='fa fa-youtube m-3 p-3' style='font-size:46px; color:black'></i>
                        </a>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>