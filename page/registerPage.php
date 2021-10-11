<!doctype html>
<html lang="en">
<!-- Catatan belum banyak yang di edit -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integ- rity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet">
    <title>Register Page</title>
    <link rel="shortcut icon" href="../asset/icon/Favicon2.svg">

</head>

<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container">
      <div class="logo">
      <a class="navbar-brand fw-bold" href="\Tubes_PW\TubesPW_Perpustakaan">
            <img src="../asset/icon/logo.svg" alt="Logo PerpustakanKu">
          </a>
      </div>
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary me-2" type="button" >
                <a class="text-light" style="text-decoration: none" href="../">Kembali</a>
            </button>
        </div>
    </div>
</nav>
    <div class="bg bg-light text-dark">
        <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center">
            <div class="card  text-dark  bg-light  ma-5  shadow  " style="min-width:  25rem;">
                <div class="card-header  fw-bold">Register</div>
                <div class="card-body">
                    <form action="../process/registerProcess.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pengguna</label>
                            <input class="form-control" id="namaPengguna" name="namaPengguna" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nomor Identitas</label>
                            <input class="form-control" id="nomorIdentitas" name="nomorIdentitas" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" aria-label="Default select example" name="jenisKelamin" id="jenisKelamin">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input class="form-control" id="username" name="username" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>


                        <div class="d-grid gap-2">
                            <button type="submit" class="btn  btn-primary" name="register">Register</button>
                        </div>
                    </form>
                    <p class="mt-2 mb-0">Sudah punya akun ? <a href="./loginPage.php" class="text-pri- mary">Login Disini!</a></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integ- rity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anony- mous"></script>
</body>

</html>