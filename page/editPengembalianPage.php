<?php
include '../component/sidebar.php';

$id = $_GET['id'];

$query = mysqli_query($con, "SELECT * from pengembalian where id='$id'");
$data = mysqli_fetch_assoc($query);


?>

   <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
   <h4 >EDIT DATA PENGEMBALIAN</h4>
       <hr>
       <form action="../process/editPengembalianProcess.php?id=$id" method="post">
       <input type="hidden" name="id" value="<?= $data['id'];?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Peminjam</label>
                <input class="form-control" id="namaPeminjam" name="namaPeminjam" aria-describedby="emailHelp" value="<?php echo $data['namaPeminjam']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Identitas</label>
                <input class="form-control" id="nomorIdentitas" name="nomorIdentitas" aria-describedby="emailHelp" value="<?php echo $data['nomorIdentitas']; ?>" required pattern="[0-9]{5,7}">
            </div>
            

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="judulBuku" class="form-label">Judul Buku</label>
                        <select class="form-select" id="judulBuku" name="judulBuku" aria-label="Default select example" value="<?php echo $data['judulBuku']; ?>">
                        <?php 
                            $query = mysqli_query($con, "SELECT judulBuku FROM buku WHERE status='Not Available' ORDER BY id ");
                            while($cek = mysqli_fetch_assoc($query)){

                                if($row['buku'] == $cek['judulBuku']){
                                    echo '<option value="'.$cek['judulBuku'].'" selected>'.$cek['judulBuku'].'</option>';
                                } else {
                                    echo '<option value="'.$cek['judulBuku'].'">'.$cek['judulBuku'].'</option>';
                                }
                            }
                        ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status Pengembalian</label>
                <select class="form-select" aria-label="Default select example" name="statusPengembalian" id="statusPengembalian" required>
                    <option value=""></option>
                    <option value="Sudah">Sudah</option>
                    <option value="Belum">Belum</option>
                    
                </select>
            </div>
            
            

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="editPengembalian">Edit Pengembalian</button>
            </div>
        </form>
   </div>
   
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>