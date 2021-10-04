<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;1,500&display=swap" rel="stylesheet">

    <link href="style.css" rel="stylesheet">
    <title>Pepustakaan Kita Semuanya</title>
</head>

<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/tubes_perpustakaan">PerpustakaanKita</a>
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary me-2" type="button" >
                <a class="text-light" style="text-decoration: none" href="./page/registerPage.php">Sign Up</a>
            </button>
            <button class="btn btn-warning ms-2" type="button" href="./loginPage.php">
                <a class="text-light" style="text-decoration: none" href="./page/loginPage.php">Login</a>
            </button>
        </div>
    </div>
</nav>
 
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('http://static.jogjaasik.com/uploads/2020/01/Abhayagitri-Restaurant.jpg')">
          <div class="carousel-caption d-none d-md-block bgColor">
            <h2 class="display-4">PERPUSTAKAAN KITA</h2>
            <p class="lead">Menyediakan buku berkualitas dan terbaru</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://cdn-2.tstatic.net/jogja/foto/bank/images/madagascar-seafood-resto2_20170510_143409.jpg')">
          <div class="carousel-caption d-none d-md-block bgColor">
            <h2 class="display-4">PERPUSTAKAAN KITA</h2>
            <p class="lead">Jalan Babarsari nomor 32 Sleman Yogyakarta</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://asset.kompas.com/crops/OjkZAwIUqjT96vhJ2Oo3iacDeHY=/0x72:1000x739/750x500/data/photo/2021/05/30/60b3c2c41b2fe.jpg')">
          <div class="carousel-caption d-none d-md-block bgColor">
            <h2 class="display-4">PERPUSTAKAAN KITA</h2>
            <p class="lead">Pelayanan dilakukan dengan protokol kesehatan ketat</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>

<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>