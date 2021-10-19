<?php
include '../component/sidebar.php'

?>

<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>TAMBAH PEMINJAM</h4>
    <hr>
    <form action="../process/createPeminjamanProcess.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Peminjam</label>
            <input class="form-control" id="namaPeminjam" name="namaPeminjam" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nomor identitas</label>
            <input class="form-control" id="nomorIdentitas" name="nomorIdentitas" aria-describedby="emailHelp" required pattern="[0-9]{5,7}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
            <select class="form-select" aria-label="Default select example" name="judulBuku" id="judulBuku" required>
                <option>
                    <?php
                    $query = mysqli_query($con, "SELECT judulBuku FROM buku WHERE status='Available' ORDER BY id");
                    while ($cek = mysqli_fetch_assoc($query)) {
                        if ($cek['judulBuku'] === TRUE) {
                            echo '<option value="', $cek['judulBuku'] . '" selected >' . $cek['judulBuku'] . '</option';
                        } else {
                            echo '<option value="' . $cek['judulBuku'] . '">' . $cek['judulBuku'] . '</option>';
                        }
                    }
                    ?>
                </option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Peminjaman</label>
            <input type="date" class="form-control" id="tanggalPeminjaman" name="tanggalPeminjaman"
                aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Pengembalian</label>
            <input type="date" class="form-control" id="tanggalPengembalian" name="tanggalPengembalian"
                aria-describedby="emailHelp" required>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="tambahPeminjaman">Tambah Peminjaman</button>
        </div>
    </form>
</div>

</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>