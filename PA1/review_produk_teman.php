<?php
session_start();
?>
<?php
    if(!isset($_SESSION['username'])) {
      header("location:user.php");
      exit;
    }
?>
<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="asset/background_register.jpg">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <form action="review_produk_teman_process.php" method="post" enctype="multipart/form-data">
        <p class="h6 fw-bold mb-0 mt-3 text-center">Silahkan Review Produk dengan mengisikan Deskripsi Ulasan dan mengupload gambar Produk</p>
        <div class="form-outline mb-2">
            <input type="hidden" id="form2Example27" class="form-control form-control-lg" name="username" value="<?php echo $_SESSION['username']?>"/>
         </div>
        <div class="form-outline mb-2">
            <label class="form-label mt-3" for="form2Example27"><b>Upload Gambar Produk</b></label>
            <input type="file" id="form2Example27" class="form-control form-control-lg" name="file_gambar" required/>
         </div>
         <div class="form-outline mb-2">
            <label class="form-label mt-3" for="form2Example27"><b>Ulasan Produk</b></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ulasan_produk" required></textarea>
         </div>
         
         <div class="form-outline mb-2">
            <button class="btn btn-success mt-3"><b>Review</b></button>
         </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

