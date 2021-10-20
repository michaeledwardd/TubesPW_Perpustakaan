<?php
    require ('../config.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users where email = '$email'";
    $query = mysqli_query($con,$sql);

    if(mysqli_num_rows($query) == 0 ){
        echo '<script>alert("Email belum diverifikasi");
        window.location.href=" ../page/loginPage.php";
            </script>';
    }else {
        $user = mysqli_fetch_assoc($query);
        if(password_verify($password,$user['password'])){
            if($user['is_verified']==1){
                session_start();
                $_SESSION['isLogin'] = true;
                $_SESSION['user'] = $user;
                $_SESSION['email'] = $email;
		
               header("location: ../page/dashboardPage.php");
               exit;
            }else {
                echo '<script>alert("Silahkan verifikasi email dahulu");
                window.location.href="../page/loginPage.php";
            </script>';
            }
        }else {
            echo '<script>alert("Passwordnya salah");
            window.location.href="../page/loginPage.php";
            </script>';
            
        }
    }
?>