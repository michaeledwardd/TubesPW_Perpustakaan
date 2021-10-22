<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="asset/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="asset/icon/Favicon2.svg">
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;1,500&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>PerpustakaanKita</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <div class="logo">
        <a class="navbar-brand fw-bold">
          <img src="asset/icon/logo.svg" alt="Logo PerpustakanKu">
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active " aria-current="page" href="#">Menu Utama</a>
          <a class="nav-link me-3" href="about.php">Tentang Kami</a>
          <div class="d-flex position-relative">
            <button class="badge rounded-pill btn btn-sm btn-warning me-2" type="button">
              <a class="text-light" style="text-decoration: none" href="./page/registerPage.php">Sign Up</a>
            </button>
            <button class="badge rounded-pill btn btn-sm btn-outline-warning ms-2" type="button" href="./loginPage.php">
              <a class="text-light" style="text-decoration: none" href="./page/loginPage.php">Login</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Hero or Jumbotron Section -->
  <section id="jumbotron">
    <div class="container">
      <div class="row outline outline-primary mt-5">
        <div class="col-md mt-4">
          <h1 class="display-5">Baca Buku Tanpa Ribet!</h1>
          <p>Koleksi kami <strong><mark class="bg-warning"> lengkap dan mudah</mark></strong> untuk dicari tanpa perlu sulit dan ribet untuk dicari.</p>
          <hr class="my-4">
          <a class="btn btn-primary btn-lg" href="./page/registerPage.php" role="button"><strong>Daftar Sekarang!</strong> </a>
        </div>
        <div class="col-md mt-4">
          <img width="90%" src="asset/icon/lemari_buku.svg" alt="Lemari Buku">
        </div>
      </div>
    </div>
  </section>
  <!-- Hero or Jumbotron Section End -->

  <!-- Layanan Kami -->
  <section class="page-section bg-light" id="services">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,160L48,181.3C96,203,192,245,288,250.7C384,256,480,224,576,186.7C672,149,768,107,864,128C960,149,1056,235,1152,240C1248,245,1344,171,1392,133.3L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
    <div class="container">
      <div class="text-center">
        <h1 class="section-heading text-uppercase mb-4">Layanan Kami</h1>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-warning"></i>
            <i class="bi bi-skip-forward-circle-fill  fa-stack-2x text-light"></i>
          </span>
          <h4 class="my-3">Cepat, Mudah & Instan</h4>
          <p class="text-muted">Pelayanan cepat, mudah, dan instan!.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-warning"></i>
            <i class="bi bi-stars fa-stack-2x text-light"></i>
          </span>
          <h4 class="my-3">Berkualitas</h4>
          <p class="text-muted">Menyediakan Buku yang berkualitas!.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-warning"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">Legal dan Aman</h4>
          <p class="text-muted">Buku yang tersedia memiliki sertifikasi legal dan aman digunakan.</p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,160L80,149.3C160,139,320,117,480,138.7C640,160,800,224,960,250.7C1120,277,1280,267,1360,261.3L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
  </section>
  <!-- Layanan Kami End -->

  <!-- Buku Kami -->
  <section class="py-5">
    <div class="container px-4 px-lg-5">
      <h1 class="section-heading text-uppercase mb-4 text-center">Top Book of the week</h1>
      <div class="row gx-4 gx-lg-5 align-items-center mb-5">
        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://images-na.ssl-images-amazon.com/images/I/41c62f1VaYL._SX258_BO1,204,203,200_.jpg" alt="..." /></div>
        <div class="col-md-6">
          <h1 class="display-5 fw-bolder">UI/UX Design Sketchbook</h1>

          <p class="p">Buku ini menjelaskan tentang bagaimana menjadi UX/UI Designer yang baik serta tips dan trik dalam menghadapi segala urusan terkait hal tersebut</p>
          <div class="d-flex">
          </div>
        </div>
      </div>
      <div class="row gx-4 gx-lg-5 align-items-center mb-5">
        <div class="col-md-6">
          <h1 class="display-5 fw-bolder">Bootstrap 4: Designing Awesome Responsive Website</h1>

          <p class="p">Buku ini merupakan buku pegangan tentang Bootstrap 4 yang dapat digunakan oleh siapa saja yang ingin mendalami bidang keahlian web design. </p>
          <div class="d-flex">
          </div>
        </div>
        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://elibrary.bsi.ac.id/assets/images/buku/206355.png" alt="..." /></div>
      </div>
    </div>
  </section>
  <!-- Buku Kami End -->

  <!-- Carousel -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="container">
      <h1 class="section-heading text-uppercase text-center">PerpustakaanKita Gallery</h1>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://images.unsplash.com/photo-1524311583145-d5593bd3502a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=871&q=80" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1526314114033-349ef6f72220?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=923&q=80" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1526894826544-0f81b0a5796d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=874&q=80" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- Peta Lokasi -->
  <div class="container my-5">
    <div class="text-center">
      <h1>Kunjungi Perpustakaan Kami di:</h1>
      <iframe title="Peta" class="container" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.1350320383776!2d110.41304270574608!3d-7.780808838571881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59f1d2361f71%3A0x4a2ce83adbcfd5aa!2sPerpustakaan%20Universitas%20Atma%20Jaya%20Yogyakarta!5e0!3m2!1sid!2sid!4v1633610599589!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
  <!-- Peta Lokasi End -->

  <!-- Footer -->
  <div class="bg-dark text-light text-center">
    <div class="card-header">
      Copyright © 2021 | Tugas Besar PW
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Michael Edward Setiawan | Effendi Prakoso | Noval Izra Khadavi | Akbar Hamonangan Lubis</p>
        <footer class="blockquote-footer">Design By: Pemrograman Web B <cite title="Source Title">Kelompok 4</cite></footer>
      </blockquote>
    </div>
  </div>
  <!-- Footer End -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>