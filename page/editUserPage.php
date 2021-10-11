<?php
include '../component/sidebar.php';

$id = $_GET['id'];

$query = mysqli_query($con, "SELECT * from users where id='$id'");
$data = mysqli_fetch_assoc($query);


?>

<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>EDIT DATA PENGGUNA</h4>
    <hr>
    <form action="../process/edituserProcess.php?id=$id" method="post">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Pengguna</label>
            <input class="form-control" id="namaPeminjam" name="namaPengguna" aria-describedby="emailHelp"
                value="<?php echo $data['namaPengguna']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nomor Identitas</label>
            <input class="form-control" id="nomorIdentitas" name="nomorIdentitas" aria-describedby="emailHelp"
                value="<?php echo $data['nomorIdentitas']; ?>">
        </div>
        <!--Masih diragukan code ini -->
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenisKelamin" id="jenisKelamin">
                    <option value="Lakilaki">Lakilaki</option>
                    <option value="Perempuan">Perempuan</option>
                    
                </select>
            </div>
        <!-- Sampai sini masih diragukan -->
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username"
                aria-describedby="emailHelp" value="<?php echo $data['username']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email"
                aria-describedby="emailHelp" value="<?php echo $data['email']; ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password"
                aria-describedby="emailHelp" value="<?php echo $data['password']; ?>">
        </div>



        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="editUser">Edit Profile</button>
        </div>
    </form>
</div>

</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>