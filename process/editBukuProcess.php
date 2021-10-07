<?php
if (isset($_POST['editBuku'])) {
    include('../db.php');
    $id = $_POST['id'];
    $isbn = $_POST['isbn'];
    $pengarang = $_POST['pengarang'];
    $judulBuku = $_POST['judulBuku'];
    $tahunTerbit = $_POST['tahunTerbit'];
    $status = $_POST['status'];


    $queryEdit = mysqli_query($con, "UPDATE buku SET 
            isbn='$isbn', 
            pengarang ='$pengarang', 
            judulBuku='$judulBuku', 
            tahunTerbit='$tahunTerbit', 
            status = '$status' 
            WHERE id='$id'")

        or die(mysqli_error($con));
    if ($queryEdit) {
        echo
        '<script>                    
                alert("Edit Success"); 
                window.location = "../page/listBukuPage.php"
            </script>';
    } else {
        echo
        '<script>                    
                    alert("Edit Failed");                 
                </script>';
    }
} else {
    echo
    '<script>
        window.history.back()
        </script>';
}