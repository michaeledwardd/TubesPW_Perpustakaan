<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>

  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;1,500&display=swap" rel="stylesheet">

  <link href="asset/style.css" rel="stylesheet">
  <title>PerpustakaanKita</title>
  <link rel="shortcut icon" href="asset/icon/Favicon2.svg">
</head>

<body>
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container">
      <div class="logo">
        <a class="navbar-brand fw-bold" href="\Tubes_PW\TubesPW_Perpustakaan">
          <img src="asset/icon/logo.svg" alt="Logo PerpustakanKu">
        </a>
      </div>
      <div class="d-flex justify-content-end">
        <button class="btn btn-primary me-2" type="button">
          <a class="text-light" style="text-decoration: none" href="./page/registerPage.php">Sign Up</a>
        </button>
        <button class="btn btn-warning ms-2" type="button" href="./loginPage.php">
          <a class="text-light" style="text-decoration: none" href="./page/loginPage.php">Login</a>
        </button>
      </div>
    </div>
  </nav>

  <!-- carouselExampleFade  -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://images.unsplash.com/photo-1548048026-5a1a941d93d3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block bgColor">
          <h2 class="display-4">PERPUSTAKAAN KITA</h2>
          <p class="lead">Menyediakan buku berkualitas dan terbaru</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1549675584-91f19337af3d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=872&q=80" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block bgColor">
          <h2 class="display-4">PERPUSTAKAAN KITA</h2>
          <p class="lead">Jalan Babarsari nomor 32 Sleman Yogyakarta</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1593672572837-d1bb82b59370?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=774&q=80" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block bgColor">
          <h2 class="display-4">PERPUSTAKAAN KITA</h2>
          <p class="lead">Cepat, Mudah, dan Instan</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>\
  <br>

  <!-- informasi perpustakaan -->
  <center>
    <div class="container-fluid">
      <h1>
        Informasi Perpustakaan
      </h1>
    
      <div class="d-flex">
        <div class="card" style="width: 18rem;">
          <img class="card-imgtop" src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">WAJIB BAWA KARTU</h5>
            <p class="cardtext">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
    
          </div>
        </div>
        <div class="card mx-4" style="width: 18rem;">
          <img class="card-imgtop" src="https://media.istockphoto.com/photos/can-you-keep-a-secret-picture-id1071323224?b=1&k=20&m=1071323224&s=170667a&w=0&h=Ohhkw79tBMATMYxXt8N9SDvulL9k9vplnuX2fw_OF5A=" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">JAGA KETENANGAN</h5>
            <p class="cardtext">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
    
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img class="card-imgtop" src="https://images.unsplash.com/photo-1586810165616-94c631fc2f79?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">JAGA KEBERSIHAN</h5>
            <p class="cardtext">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
    
          </div>
        </div>
        <div class="card mx-4" style="width: 18rem;">
          <img class="card-imgtop" src="https://images.unsplash.com/photo-1586810165616-94c631fc2f79?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">JAGA KEAMANAN</h5>
            <p class="cardtext">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
          </div>
        </div>
      </div>

    </div>
    <br>
    <h3>Kunjungi Perpustakaan kami di: </h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.1350320383776!2d110.41304270574608!3d-7.780808838571881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59f1d2361f71%3A0x4a2ce83adbcfd5aa!2sPerpustakaan%20Universitas%20Atma%20Jaya%20Yogyakarta!5e0!3m2!1sid!2sid!4v1633610599589!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <br>
  
    <br>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2021 by Pemrograman Web UAJY<br>Design:Kelompok 8<br>AHL, EP, MES, NI</p>
        </div>
      </div>
    </div>
  </center>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>

</body>

</html>