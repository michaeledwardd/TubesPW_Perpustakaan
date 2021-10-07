<?php
    if(isset($_POST['editBuku']))
    {
        include ('../db.php');
        $isbn = $_POST['isbn'];
        $pengarang = $_POST['pengarang'];
        $judulBuku = $_POST['judulBuku'];
        $tahunTerbit = $_POST['tahunTerbit'];
        $status = $_POST['status'];
        

        $queryEdit = mysqli_query($con, "UPDATE buku SET 
            isbn='$isbn', 
            nomorIdentitas ='$nomorIdentitas', 
            judulBuku='$judulBuku', 
            tahunTerbit='$tahunTerbit', 
            status = '$statusPengembalian' 
            WHERE id='$id'") 
        
        or die(mysqli_error($con));                     
        if($queryEdit){           
            echo                 
            '<script>                    
                alert("Edit Success"); 
                window.location = "../page/listBukuPage.php"
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