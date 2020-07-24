<?php
error_reporting(0);
require_once 'PHPMailer/PHPMailerAutoload.php';

include_once ("connect.php");
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = sha1($_POST['password']);

$sqlinsert = "INSERT INTO tbuser (NAMA,EMAIL,PHONE,PASSWORD,CREDIT,VERIFY) VALUES ('$name','$email','$phone','$password','50','1')";
   
if ($conn->query($sqlinsert) === true)
{
echo "success";
$from = "juniaraldyrizky@gmail.com";
$password = "loedewa04";
 
$message = "Hii!" .$email. "Welcome to SOCBOOK mobile apps";
// Configuring SMTP server settings
date_default_timezone_set('Etc/UTC');
$mail = new PHPMailer(); 
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->SMTPKeepAlive = true;   
$mail->Mailer = "smtp"; // don't change the quotes!
//$mail->isSMTP();
$mail->Host =gethostbyname('ssl://smtp.gmail.com');
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = $from;
$mail->Password = $password;
$mail->FromName = "SOCBOOK";

// Email Sending Details
$mail->addAddress($email);
$mail->msgHTML($message);

// Success or Failure
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p>'.$error.'</p>';
}
else 
{
$res="Email Sent Successfully on your Email Id Please check out your Email and activate your account!";
}

    sendEmail($email);
    
    
  
}
else
{
    echo "failed";
}

function sendEmail($email){

}
//https://socbookweb.000webhostapp.com/register_user.php?name=aldy&email=asdasdasa@gmail.com&phone=1111111&password=222
?>