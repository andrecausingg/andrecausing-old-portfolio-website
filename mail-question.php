<?php
    // MAIL
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';
    require 'PHPMailer-master/src/Exception.php'; 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $mail = new PHPMailer();

    // if(isset($_POST['name'])){
    //     $name = $_POST['name'];
    // }

    // if(isset($_POST['email'])){
    //     $email = $_POST['email'];
    // }

    // if(isset($_POST['comment'])){
    //     $comment = $_POST['comment'];
    // }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    if (isset($_POST["btnSubmitFormQuestion"])){
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'andrecausing33@gmail.com';                     //SMTP username
        $mail->Password   = '';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('andrecausing33@gmail.com');
        $mail->addAddress('andrecausing33@gmail.com');                             //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Question';

        $mail->Body = "Name: $name | Email: $email <br> Comment: $comment";

        $mail->AltBody = "Name: $name | Email: $email <br> Comment: $comment";

        if($mail->send()){
            echo "<script>window.location.href='success-email-question.php';</script>";
        }else{
            echo "SOMETHING WENT WRONG";
        }
    }        

?>