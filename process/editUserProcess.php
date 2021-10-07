<?php
if (isset($_POST['update'])) {
    // Menangkap Variabel yang diterima dari form edit
    include('../db.php');
    $id  =  $_POST['id'];
    $username  =  $_POST['username'];
    $name  =  $_POST['name'];
    $npm  =  $_POST['npm'];
    $prodi =  $_POST['prodi'];
    
    $queryUpdate  =  mysqli_query($con, 
    "UPDATE users set   
        username = '$username',
        name = '$name',
        npm = '$npm',
        prodi = '$prodi'
        WHERE id='$id'");
    if ($queryUpdate) {
        echo '<script>
        alert("Update Success"); window.location = "../page/listMahasiswaPage.php"
        </script>';
    } else {
        echo
        '<script>
        alert("Update Failed"); window.location = "../page/listMahasiswaPage.php"
        </script>';
    }
} else {
    echo '<script>
window.history.back()
</script>';
}
?>