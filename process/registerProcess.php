<?php
    require ('../config.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/OAuth.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/POP3.php';
    require '../PHPMailer/src/SMTP.php';

    
    $namaPengguna = $_POST['namaPengguna'];
    $nomorIdentitas = $_POST['nomorIdentitas'];
    $jenisKelamin = $_POST['jenisKelamin'];
    
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $code = md5($email.date('Y-m-d'));

    $sql = "SELECT * FROM users where email='$email'";
    $query = mysqli_query($con,$sql);
    if(mysqli_num_rows($query) > 0){
        echo '<script>alert("Email sudah terdaftar");
        window.location.href = "http://www.perpustakaankita.com/page/registerPage.php"
        </script>';
    }else {
        $sql = "INSERT INTO users (namaPengguna,nomorIdentitas,jenisKelamin,email,username,password,verif_code)VALUES('$namaPengguna','$nomorIdentitas','$jenisKelamin','$email','$username','$password','$code')";
        $query = mysqli_query($con,$sql);

        //Create a new PHPMailer instance
        $mail = new PHPMailer;

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        // SMTP::DEBUG_OFF = off (for production use)
        // SMTP::DEBUG_CLIENT = client messages
        // SMTP::DEBUG_SERVER = client and server messages
        $mail->SMTPDebug = SMTP::DEBUG_OFF;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption mechanism to use - STARTTLS or SMTPS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'michedwards0@gmail.com';

        //Password to use for SMTP authentication
        $mail->Password = 'masedward12';

        //Set who the message is to be sent from
        $mail->setFrom('perpustakaankita@gmail.com', 'Your website service');

        //Set an alternative reply-to address
        //$mail->addReplyTo('replyto@example.com', 'First Last');

        //Set who the message is to be sent to
        $mail->addAddress($email, $namaPengguna);

        //Set the subject line
        $mail->Subject = 'Verification Account - PerpustakaanKita';

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $body = "Hi, ".$namaPengguna."<br>Plase verif your email before access our website : <br> http://localhost:8081/TUGASBESAR_PERPUSTAKAANKITA/process/confirmEmail.php?code=".$code;
        $mail->Body = $body;
        //Replace the plain text body with one created manually
        $mail->AltBody = 'Verification Account';

        //send the message, check for errors
        if (!$mail->send()) {
            echo 'Mailer Error: '. $mail->ErrorInfo;
        } else {
            echo 'Register sukses silahkan login !';
            
            //Section 2: IMAP
            //Uncomment these to save your message in the 'Sent Mail' folder.
            #if (save_mail($mail)) {
            #    echo "Message saved!";
            #}
        }

    }
?>