
<!doctype html>
<html lang="en">
  <head>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      body {
 background-image: url("asset/background_login.jpeg");
}
    </style>
        <link rel="icon" href="asset/background_register.jpg">

  </head>
  <body class="">

  <section class="vh-100"   >
  <div class="container py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="asset/fotodilogin.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center" style="background-color: #9DC183;">
              <div class="card-body p-4 p-lg-5 text-black ">

                <form action="halaman_admin/login_process_admin.php" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    
                    <span class="h1 fw-bold mb-0">Login Admin</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" class="form-control form-control-lg" name="username" required>
                    <label class="form-label" for="form2Example17">Username</label>
                  </div>

                  <div class="form-outline mb-2">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" required>
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-2">
                    <button class="btn btn-dark btn-lg btn-block"name="login">Login</button>
                  </div>

                  
                      
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
                </form>
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