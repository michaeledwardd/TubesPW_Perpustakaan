<?php
    if(isset($_POST['editPeminjaman']))
    {
        include ('../db.php');
        $id = $_POST['id'];
        $namaPeminjam = $_POST['namaPeminjam'];
        $nomorIdentitas = $_POST['nomorIdentitas'];
        $judulBuku = $_POST['judulBuku'];
        $tanggalPeminjaman = $_POST['tanggalPeminjaman'];
        $tanggalPengembalian = $_POST['tanggalPengembalian'];
        
        if($tanggalPengembalian < $tanggalPeminjaman)
        {
            echo '<script> alert ("Tanggal pengembalian tidak boleh kurang dari tanggal peminjaman"); window.history.back() </script>';
        }
        else
        {
            $queryEdit = mysqli_query($con, "UPDATE peminjaman SET namaPeminjam='$namaPeminjam', nomorIdentitas ='$nomorIdentitas', judulBuku='$judulBuku', tanggalPeminjaman='$tanggalPeminjaman', tanggalPengembalian='$tanggalPengembalian' WHERE id='$id'") or die(mysqli_error($con));                     
            if($queryEdit)
            {           
                echo                 
                '<script>                    
                    alert("Edit Success"); 
                    window.location = "../page/listPeminjamanPage.php"
                </script>';        
            }
            else
            {           
                    echo                 
                    '<script>                    
                        alert("Edit Failed");                 
                    </script>';       
            }   
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