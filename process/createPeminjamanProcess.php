<?php

    if(isset($_POST['tambahPeminjam']))
    {
        include('../db.php');

        $namaPeminjam = $_POST['namaPeminjam'];
        $nomorIdentitas = $_POST['nomorIdentitas'];
        $judulBuku = $_POST['judulBuku'];
        $tanggalPeminjaman = $_POST['tanggalPeminjaman'];
        $tanggalPengembalian = $_POST['tanggalPengembalian'];

        $query = mysqli_query($con,
        "INSERT INTO peminjaman(namaPeminjam, nomorIdentitas, judulBuku, tanggalPeminjaman, tanggalPengembalian)
        VALUES
        ('$namaPeminjam', '$nomorIdentitas', '$judulBuku', '$tanggalPeminjaman', '$tanggalPengembalian')")
        or die(mysqli_error($con)); 

        if($query)
        {
            echo
            '<script>
            alert("Create data Peminjaman success"); window.location = "../page/listPeminjamanPage.php"
            </script>';
        }
        else
        {
            echo
            '<script>
            alert("Create data Peminjaman failed");
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
