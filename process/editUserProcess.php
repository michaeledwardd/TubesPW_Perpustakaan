<?php
if (isset($_POST['editUser'])) {
    // Menangkap Variabel yang diterima dari form edit
    include('../db.php');
    $id  =  $_POST['id'];
    $namaPengguna = $_POST['namaPengguna'];
    $jenisKelamin  =  $_POST['jenisKelamin'];
    $nomorIdentitas  =  $_POST['nomorIdentitas'];
    $username  =  $_POST['username'];
    $password =  $_POST['password'];
    
    $queryUpdate  =  mysqli_query($con, 
    "UPDATE users set   
        namaPengguna = '$namaPengguna',
        jenisKelamin = '$jenisKelamin',
        nomorIdentitas = '$nomorIdentitas',
        username = '$username',
        password = '$password'
        WHERE id='$id'");
    if ($queryUpdate) {
        echo '<script>
        alert("Update Success"); window.location = "../page/listUserPage.php"
        </script>';
    } else {
        echo
        '<script>
        alert("Update Failed"); window.location = "../page/listUserPage.php"
        </script>';
    }
} else {
    echo '<script>
window.history.back()
</script>';
}
?>