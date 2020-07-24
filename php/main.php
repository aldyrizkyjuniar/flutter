<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
    $mail = new PHPMailer;     
    try 
{             

    $mail->isSMTP();   
    $mail->SMTPDebug = 2;                                
    $mail->Host = 'stpm.gmail.com';  
    $mail->SMTPAuth = true;  
    //ganti dengan email dan password yang akan di gunakan sebagai email pengirim                  
    $mail->Username = 'juniaraldyrizky@gmail.com';       
    $mail->Password = 'loedewa04'; 
    $mail->SMTPSecure = 'tls';                           
    $mail->Port = 587;                                  
    //ganti dengan email dan nama kamu
    $mail->setFrom('juniaraldyrizky@gmail.com', 'aldy');
    $mail->addAddress($_POST['email'], $_POST['name']);     
    $mail->Subject = "Aktivasi pendaftaran Member";
    $mail->Body    = "Selemat, anda berhasil membuat akun. Untuk mengaktifkan akun anda silahkan klik link dibawah ini.";
    $mail->send();
}
    ?>