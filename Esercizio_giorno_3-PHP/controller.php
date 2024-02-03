<?php
   session_start();

   //var_dump($_FILES['image']);
   //print_r($_REQUEST);

   $contacts = isset($_SESSION['contacts'])  ?  $_SESSION['contacts'] : [] ;

   $firstname = $_REQUEST['firstname'];
   $lastname = $_REQUEST['lastname'];
   $email = $_REQUEST['email'];
   $password = $_REQUEST['password'];


   $contact = [
       'Firstname' => $firstname, 
       'Lastname' => $lastname,  
       'Email' => $email,
       'Password' => $password,
    ];

   $_SESSION['contacts'] = [...$contacts, $contact];

   session_write_close();


    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'cc18060cb093e8';                     //SMTP username
        $mail->Password   = '5d2a8cac7c2caa';                               //SMTP password
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


        //Recipients
        $mail->setFrom('from@example.com', 'Lavinia Baratti');
        $mail->addAddress($email, $firstname . ' ' . $lastname);     //Add a recipient


        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Grazie per esserti registrato sul nostro sito';
        $mail->Body    = '<h1>Gazie!!!</h1><p>Ti aspettiamo sulla nostra rubrica</p>';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    header('Location: http://localhost/Back-end/Esercizio_giorno_3-PHP/index.php');
?>