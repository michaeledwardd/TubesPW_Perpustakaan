<?php

    if(isset($_POST['tambahPengembalian']))
    {
        include('../db.php');

        $namaPeminjam = $_POST['namaPeminjam'];
        $nomorIdentitas = $_POST['nomorIdentitas'];
        $judulBuku = $_POST['judulBuku'];
        $statusPengembalian = $_POST['statusPengembalian'];

        $query = mysqli_query($con,
        "INSERT INTO pengembalian(namaPeminjam, nomorIdentitas, judulBuku, statusPengembalian)
        VALUES
        ('$namaPeminjam', '$nomorIdentitas', '$judulBuku', '$statusPengembalian')")
        or die(mysqli_error($con)); 

        if($query)
        {
            echo
            '<script>
            alert("Create data Pengembalian success"); window.location = "../page/addPengembalianPage.php"
            </script>';
        }
        else
        {
            echo
            '<script>
            alert("Create data Pengembalian failed");
            </script>';
        }

    }
    else
    {
         echo
        '<script>
        window.history.back()
        </script>';
    }