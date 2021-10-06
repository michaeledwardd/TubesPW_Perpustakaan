<?php

    if(isset($_POST['tambahBuku']))
    {
        include('../db.php');

        $isbn = $_POST['isbn'];
        $pengarang = $_POST['pengarang'];
        $judulBuku = $_POST['judulBuku'];
        $tahunTerbit = $_POST['tahunTerbit'];
        $status = $_POST['status'];

        $query = mysqli_query($con,
        "INSERT INTO buku(isbn, pengarang, judulBuku, tahunTerbit, status)
        VALUES
        ('$isbn, '$pengarang', '$judulBuku', '$tahunTerbit','$status')")
        or die(mysqli_error($con)); 

        if($query)
        {
            echo
            '<script>
            alert("Create data buku success"); window.location = "../page/listBukuPage.php"
            </script>';
        }
        else
        {
            echo
            '<script>
            alert("Create data buku failed");
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
?>