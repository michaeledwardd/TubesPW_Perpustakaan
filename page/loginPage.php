<!doctype html>
<html lang="en">
<!-- Catatan belum banyak yang di edit -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrit y="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet">
    <title>Login Page</title>
    <link rel="shortcut icon" href="../asset/icon/Favicon2.svg">

</head>

<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <div class="logo">
                <a class="navbar-brand fw-bold">
                    <img src="../asset/icon/logo.svg" alt="Logo PerpustakanKu">
                </a>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary me-2" type="button">
                    <em class="bi bi-arrow-left-circle-fill"></em>
                    <a class="text-light" style="text-decoration: none" href="../">Kembali</a>
                </button>
            </div>
        </div>
    </nav>

    <!-- Login Form -->
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="d-none d-sm-block col-md-6 col-lg-7">
                <img class="w-100" src="../asset/icon/welcome.svg" alt="ilustrasi selamat datang">
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="bg bg-transparent text-dark">
                    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
                        <div class="card text-dark bg-light ma-5 shadow">
                            <h3 class="card-header text-warning fw-bold text-center">LOGIN</h3>
                            <div class="card-body">
                                <form action="../process/loginProcess.php" method="post">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input class="form-control" id="email" pattern="[^ @]*@[^ @]*" name="email" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
            
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                                    </div>
                                </form>
                                <p class="mt-2 mb-0">Belum punya akun ? <a href="./registerPage.php" class="textprimary">Klik Disini!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Form End -->

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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>