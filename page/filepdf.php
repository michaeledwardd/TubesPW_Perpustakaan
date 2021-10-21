<?php
session_start();
ob_start();
include '../db.php'
?>
<head>
  
</head>

<body>
    <h1><center>Daftar Buku Perpustakaan Kita </center></h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ISBN</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Tahun terbit</th>
                <th scope="col">Status</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($con, "SELECT * FROM buku") or die(mysqli_error($con));

            if (mysqli_num_rows($query) == 0) {
                echo '<tr> <td colspan="7"> Buku tidak tersedia </td> </tr>';
            } else {
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
                    echo '
                        <tr>
                        <th scope="row">' . $no . '</th>
                        <td>' . $data['isbn'] . '</td>
                        <td>' . $data['judulBuku'] . '</td>
                        <td>' . $data['pengarang'] . '</td>
                        <td>' . $data['tahunTerbit'] . '</td>
                        <td>' . $data['status'] . '</td>
                        </tr>';
                    $no++;
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>

<?php

    $isi = ob_get_clean();

    require_once "mpdf_v8.0.3/vendor/autoload.php";

    $mpdf = new \Mpdf\Mpdf();

    $mpdf->AddPage("L", "", "", "", "", "5", "5", "5", "5", "", "", "", "", "", "", "", "", "", "", "", "A3");

    $mpdf->WriteHTML($isi);

    $mpdf->Output();

?>