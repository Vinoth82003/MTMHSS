<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'Exception.php';
require_once 'PHPMailer.php';
require_once 'SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try {

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'vvino9521@gmail.com';
        $mail->Password = 'gbfdiohutjaucbor';
        $mail->SMTPSecure = 'tls';
        $mail->Port = '587';

        $mail->setFrom('vvino9521@gmail.com');
$mail->addAddress($email, $name);


        $mail->isHTML(true);
        $mail->Subject = 'Your Query has been Received';

        $mail->Body = "Dear $name,<br><br>Thank you for contacting us. Your query has been received by our team and will be properly addressed soon.<br><br><strong>Query Details:</strong><br>Name: $name<br>Message: $message<br><br>Best regards,<br>Your Team";


        $mail->send();
        
        $teamMail = new PHPMailer(true);
$teamMail->isSMTP();
$teamMail->Host = 'smtp.gmail.com';
$teamMail->SMTPAuth = true;
$teamMail->Username = 'vvino9521@gmail.com';
$teamMail->Password = 'gbfdiohutjaucbor';
$teamMail->SMTPSecure = 'tls';
$teamMail->Port = '587';

$teamMail->setFrom('vvino9521@gmail.com');
$teamMail->addAddress('2021pecit223@gmail.com', 'Team');

$teamMail->isHTML(true);
$teamMail->Subject = 'New Query Received';
$teamMail->Body = "Name: $name<br>Phone: $phone<br>Email: $email<br>Subject: $subject<br>Message: $message";

$teamMail->send();

        
        $alert= "<div class='success'><span>query submitted successfully......! check your email for acknowledgement</span></div>";

        
    } catch (Exception $e) {
        $alert = "<div class='error'><span>". $e->getMessage() ."</span></div>";
    }
}

?>
