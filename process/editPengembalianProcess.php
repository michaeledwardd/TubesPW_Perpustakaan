<?php
    if(isset($_POST['editPengembalian']))
    {
        include ('../db.php');
        $id = $_POST['id'];
        $namaPeminjam = $_POST['namaPeminjam'];
        $nomorIdentitas = $_POST['nomorIdentitas'];
        $judulBuku = $_POST['judulBuku'];
        $statusPengembalian = $_POST['statusPengembalian'];
        

        $queryEdit = mysqli_query($con, "UPDATE pengembalian SET namaPeminjam='$namaPeminjam', nomorIdentitas ='$nomorIdentitas', judulBuku='$judulBuku', statusPengembalian='$statusPengembalian' WHERE id='$id'") or die(mysqli_error($con));                     
        if($queryEdit){           
            echo                 
            '<script>                    
                alert("Edit Success"); 
                window.location = "../page/listPengembalianPage.php"
            </script>';        
        }else{           
                echo                 
                '<script>                    
                    alert("Edit Failed");                 
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