



<?php
session_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
//Load composer's autoloader


$mail = new PHPMailer();                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';  // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers

                              // Enable TLS encryption, `ssl` also accepted
    $mail->Port = '465';   // Enable SMTP authentication
    $mail->Username = 'apoorvyadav1111@gmail.com';                 // SMTP username
    $mail->Password = 'gixxer150tallu';                           // SMTP password
                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('no-reply_at_pets@gmail.com');
    $mail->addAddress($_SESSION['email']);     // Add a recipient
        // Name is optional


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Verification email for signing up at Pets';
    $mail->Body    = 'Welcome User,<br> we at pets do our best in mind that our customers stay safe and away from fraud and harmful activities.Please click on the link below to verify that your email
<br>http://localhost:63342/A!/app/verify.php?u_id='.$_SESSION['uid'].'&ver_id='.$_SESSION['ver_id'].'
<br>please ignore this email if you dont recognise this activity ';
    $mail->AltBody = '<i>this is an autogenerated email please do not reply';

    $mail->send();
    echo 'Message has been sent';
    $mail->ErrorInfo;
    echo $_SESSION['email'];
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    echo $_SESSION['email'];
}

?>