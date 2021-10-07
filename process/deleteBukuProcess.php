<?php
    if(isset($_GET['id_buku'])){
        include ('../db.php');
        $id_buku = $_GET['id_buku'];
        $queryDelete = mysqli_query($con, "DELETE FROM buku WHERE id_buku='$id_buku'") or die(mysqli_error($con));
        if($queryDelete)
        {
            echo
            '<script>
            alert("Delete Success"); window.location = "../page/listBukuPage.php"
            </script>';
        }
        else
        {
            echo
            '<script>
            alert("Delete Failed"); window.location = "../page/listBukuPage.php"
            </script>';
        }
    }else {
 echo
 '<script>
 window.history.back()
 </script>';
 }
?>