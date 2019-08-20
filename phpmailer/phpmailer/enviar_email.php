<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        include('class/phpmailer/src/PHPMailer.php');
        include('class/phpmailer/src/SMTP.php');
        include('class/phpmailer/src/OAuth.php');

        

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                //Server settings
                $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'gabrielserq@gmail.com';                 // SMTP username
                $mail->Password = 'ollideback';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 581;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom('gabrielserq@gmail.com', 'Gabriel');
                $mail->addAddress('gabrielserq@outlook.com', 'Gabriel');     // Add a recipient

                //Attachments
                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Assunto';
                $mail->Body    = '<h1>Corpo</h1>';
                $mail->AltBody = 'Corpo';

                $mail->send();
                echo "aquiii";
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

        ?>
    </body>
</html>
