<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if(isset($_POST['register'])){

// untuk mengoneksikan dengan database dengan memanggil file db.php
include('../db.php');

// tampung nilai yang ada di from ke variabel
// sesuaikan variabel namaPengguna yang ada di registerPage.php disetiap input
$username  =  $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$namaPengguna  =  $_POST['namaPengguna'];
$nomorIdentitas  =  $_POST['nomorIdentitas'];
$jenisKelamin =  $_POST['jenisKelamin'];

// Melakukan insert ke databse dengan query dibawah ini
$query  =  mysqli_query($con,
"INSERT INTO users(username, password, namaPengguna, nomorIdentitas, jenisKelamin) VALUES
('$username',  '$password',  '$namaPengguna',  '$nomorIdentitas',  '$jenisKelamin')")
or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan di- tangani oleh perintah “or die”

if($query){ echo
'<script>
alert("Register  Success");  window.location  = "../index.php"
</script>';
}else{
echo
'<script>
alert("Register Failed");
</script>';
}

}else{
echo
'<script> window.history.back()
</script>';
}
?>
