<?php
    $id = $_GET['id'];
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Load Composer's autoloader
    require 'C:\Users\alber\vendor\autoload.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.sendgrid.net';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'apikey';                     // SMTP username
        $mail->Password   = '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';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('albert.gstoehl@outlook.com');
        $mail->addAddress($_SESSION['email'], $_SESSION['name']);     // Add a recipient

        // Content
        $mail->isHtml(true);                                  // Set email format to HTML
        $mail->Subject = "Bestellung: $id";
        $mail->Body    =  $_SESSION['contentEmail'];
        $mail->AltBody = 'Wir werden Ihre Bestellung sobald möglich versenden';

        $mail->send();

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }