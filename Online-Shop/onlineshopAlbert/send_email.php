<?php
    $id = $_GET['id'];
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Load Composer's autoloader
    require './app/vendor/autoload.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();                                         
        $mail->Host       = 'smtp.sendgrid.net';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'apikey';                               // SMTP username
        $mail->Password   = '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';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('albert.gstoehl@outlook.com');
        $mail->addAddress($_SESSION['email'], $_SESSION['name']);     // Die E-Mail Adresse des Benutzers

        // Content
        $mail->isHtml(true);                                  // Email Format ist HTML
        $mail->Subject = "Bestellung: $id";                   // Bestellungs ID wird zum Subjekt der Email
        $mail->Body    =  $_SESSION['contentEmail'];          // Der HTML Code der Bestellungsübersicht wird übergeben
        $mail->AltBody = 'Wir werden Ihre Bestellung sobald möglich versenden';     //Wenn die Email keine HTML nachricht erlaubt

        $mail->send();      // Mail wird gesendet

    } catch (Exception $e) {
        echo "Beim senden der Email gab es einen Fehler: {$mail->ErrorInfo}";
    }