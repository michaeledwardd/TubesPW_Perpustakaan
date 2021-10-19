<?php
include '../component/sidebar.php'

?>

<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>TAMBAH BUKU</h4>
    <hr>
    <form action="../process/createBukuProcess.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nomer ISBN</label>
            <input type="tel" class="form-control" id="isbn" name="isbn" aria-describedby="emailHelp" required pattern="[0-9]{3,5}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Pengarang</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
            <input class="form-control" id="judulBuku" name="judulBuku" aria-describedby="emailHelp" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
            <input  class="form-control" id="tahunTerbit" name="tahunTerbit" aria-describedby="emailHelp" required pattern="[0-9]{4}">
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
            <button type="submit" class="btn btn-primary" name="tambahBuku">Tambah Buku</button>
        </div>
    </form>
</div>

</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>