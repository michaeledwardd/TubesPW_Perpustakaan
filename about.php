<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="asset/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="asset/icon/Favicon2.svg">
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
                <a class="navbar-brand fw-bold" >
                    <img src="asset/icon/logo.svg" alt="Logo PerpustakanKu">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link " href="index_testing.php">Menu Utama</a>
                    <a class="nav-link active me-3" aria-current="page" href="#">Tentang Kami</a>
                    <div class="d-flex position-relative">
                        <button class="badge rounded-pill btn btn-sm btn-warning me-2 " type="button">
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

    <!-- Tentang Kami -->
    <section id="about" class="mt-5">
        <div class="container text-center">
            <h1>Projek Kami</h1>
            <div class="row">
                <div class="col">
                    <p>Kami dari <strong class="text-warning">Kelompok 4 </strong>mengambil topik tentang: PERPUSTAKAAN</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Tentang Kami End -->

    <!-- Hero or Jumbotron Section -->
    <div class="container">
        <div class="row text-center outline outline-primary">
            <h1 class="mt-5">Anggota Kelompok</h1>
            <div class="col-sm-3 mt-4">
                <div class="card">
                    <div class="card-body">
                        <img class="rounded-circle mb-2" width="100px" src="https://upload.wikimedia.org/wikipedia/commons/d/de/Me_bank_logo15.png" alt="">
                        <h5 class="card-title">Michael Edward Setiawan</h5>
                        <p class="card-text"> 190710093 | Mahasiswa Informatika</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-4">
                <div class="card">
                    <div class="card-body">
                        <img class="rounded-circle mb-2" width="100px" src="https://www.kindpng.com/picc/m/106-1068191_transparent-avatar-clipart-hd-png-download.png" alt="">
                        <h5 class="card-title">Effendi Prakoso</h5>
                        <p class="card-text"> 190710301 | Mahasiswa Informatika.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-4">
                <div class="card">
                    <div class="card-body">
                        <img class="rounded-circle mb-2" width="100px" src="https://www.kindpng.com/picc/m/106-1068191_transparent-avatar-clipart-hd-png-download.png" alt="">
                        <h5 class="card-title">Noval Izra Khadavi</h5>
                        <p class="card-text"> 190710471 | Mahasiswa Informatika</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-4">
                <div class="card">
                    <div class="card-body">
                        <img class="rounded-circle mb-2" width="100px" src="https://yt3.ggpht.com/ytc/AKedOLQIzzelIU3g3rjH4tRjvtqSyly1cSLq6arS_l-aHw=s900-c-k-c0x00ffffff-no-rj" alt="">
                        <h5 class="card-title">Akbar Hamonangan Lubis</h5>
                        <p class="card-text"> 217007167 | Frontend Developer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero or Jumbotron Section End -->

    <!-- Footer -->
    <div class="bg-dark text-light text-center mt-5">
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