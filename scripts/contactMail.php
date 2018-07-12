


<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
//    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mx1.hostinger.in';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'digigon@vdm.com.pk';                 // SMTP username
    $mail->Password = 'Vision123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('digigon@vdm.com.pk', 'Digigon Enquiry');
    $mail->addAddress('radeanf@gmail.com', 'Ayaz vayani');     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('info@vdm.com.pk');
//    $mail->addBCC('bcc@example.com');

    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $message = '<html><body>';
    $message .= '<h2>DigiGon™ Enquiry Form</h2>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['full_name']) . "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
    $message .= "<tr><td><strong>Contact:</strong> </td><td>" . strip_tags($_POST['contact']) . "</td></tr>";
    $message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Digigon Enquiry';
    $mail->Body    = $message;


//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Thank you, Your Message has been sent. We will contact you soon';
    echo ' this page will redirect in 7 sec to digigon.vdm.com.pk';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>

<script type="application/javascript">
    var url = "http://digigon.vdm.com.pk"
    setTimeout(function () {
        window.location.href = url
    },7000)
</script>