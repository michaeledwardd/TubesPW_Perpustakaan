<?php
include '../component/sidebar.php';

$id_buku = $_GET['id_buku'];

$query = mysqli_query($con, "SELECT * from buku where id_buku='$id_buku'");
$data = mysqli_fetch_assoc($query);


?>

   <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
   <h4 >EDIT DATA BUKU</h4>
       <hr>
       <form action="../process/editBukuprocess.php?id_buku=$id_buku" method="post">
       <input type="hidden" name="id_buku" value="<?= $data['id_buku'];?>">
       <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomer ISBN</label>
                <input class="form-control" id="isbn" name="isbn" aria-describedby="emailHelp" value="<?php echo $data['isbn']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Pengarang</label>
                <input class="form-control" id="pengarang" name="pengarang" aria-describedby="emailHelp"value="<?php echo $data['pengarang']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                <input class="form-control" id="judulBuku" name="judulBuku" aria-describedby="emailHelp" value="<?php echo $data['judulBuku']; ?>">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                <input class="form-control" id="tahunTerbit" name="tahunTerbit" aria-describedby="emailHelp" value="<?php echo $data['tahunTerbit']; ?>">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status</label>
                <input class="form-control" id="status" name="status" aria-describedby="emailHelp"value="<?php echo $data['status']; ?>">
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