<?php
include '../component/sidebar.php';

$id = $_GET['id'];

$query = mysqli_query($con, "SELECT * from buku where id='$id'");
$data = mysqli_fetch_assoc($query);


?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #FFC107; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <h4>EDIT DATA BUKU</h4>
    <hr>
    <form action="../process/editBukuprocess.php?id=$id" method="post">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nomer ISBN</label>
            <input class="form-control" id="isbn" name="isbn" aria-describedby="emailHelp" value="<?php echo $data['isbn']; ?>" required pattern="[0-9]{3,5}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Pengarang</label>
            <input class="form-control" id="pengarang" name="pengarang" aria-describedby="emailHelp" value="<?php echo $data['pengarang']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
            <input class="form-control" id="judulBuku" name="judulBuku" aria-describedby="emailHelp" value="<?php echo $data['judulBuku']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
            <input class="form-control" id="tahunTerbit" name="tahunTerbit" aria-describedby="emailHelp" value="<?php echo $data['tahunTerbit']; ?>" required pattern="[0-9]{4}">
        </div>

        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status Buku</label>
                <select class="form-select" aria-label="Default select example" name="status" id="status" required>
                    <option value=""></option>
                    <option value="Available">Available</option>
                    <option value="Not Available">Not Available</option>
                    
                </select>
            </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="editBuku">EditBuku</button>
        </div>
    </form>
</div>

</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>