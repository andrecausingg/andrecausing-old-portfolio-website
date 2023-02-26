<?php
    // MAIL
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';
    require 'PHPMailer-master/src/Exception.php'; 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $mail = new PHPMailer();

    $name = $_POST["name"];
    $email = $_POST["email"];
    $budget = $_POST["budget"];
    $details = $_POST["details"];

    if (isset($_POST["btnRatesSubmit"])){
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'andrecausing33@gmail.com';                     //SMTP username
        $mail->Password   = 'bsizn!81#hJ';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('andrecausing33@gmail.com');
        $mail->addAddress($email);                             //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'We received your submission';

        // Client Email
        $mail->Body = "    
        <div style='width:500px; margin:auto auto; padding:56px; box-shadow: 0 4px 4px 0 rgba(233,240,243,0.4); border:1px solid #ECEFF3;border-radius: 12px'>
            <h2 style'font-size:30px;'>Hello $name,</h2>

            <p style='font-weight:300; font-size:18px;'>Thanks for taking the time to share some basic details with me about your Web project.
            I'm pretty busy these days, but I'll do my best to email or call you sometime in the next 24 hours with some additional questions.</p>
            
            <p style='font-weight:300;font-size:20px;'>Have a great day!</p>

            <h3 style='margin:0;'>Andre Causing</h3>
            <span style='font-size: 12px;'>Web Developer and Web Designer</span> <br>
            <span style='font-size: 12px;'>andrecausing33@gmail.com</span>
        </div>";

        $mail->AltBody = "
        <div style='width:500px; margin:auto auto; padding:56px; box-shadow: 0 4px 4px 0 rgba(233,240,243,0.4); border:1px solid #ECEFF3;border-radius: 12px'>
            <h2 style'font-size:30px;'>Hello $name,</h2>

            <p style='font-weight:300; font-size:18px;'>Thanks for taking the time to share some basic details with me about your Web project.
            I'm pretty busy these days, but I'll do my best to email or call you sometime in the next 24 hours with some additional questions.</p>
            
            <p style='font-weight:300;font-size:20px;'>Have a great day!</p>

            <h3 style='margin:0;'>Andre Causing</h3>
            <span style='font-size: 12px;'>Web Developer and Web Designer</span> <br>
            <span style='font-size: 12px;'>andrecausing33@gmail.com</span>
        </div>";

        if($mail->send()){
            $mail->ClearAllRecipients(); 
            $a = 1;
        }else{
            echo "SOMETHING WENT WRONG";
        }

        if($a == 1){
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
            $mail->Subject = 'Project';

            // Me Email
            $mail->Body = "
            <p><b>Name:</b> $name</p>
            <p><b>Email:</b> $email</p> 
            <p><b>Budget:</b> $budget</p>
            <p><b>Details:</b> $details</p>";

            if($mail->send()){
                echo "<script>window.location.href='success-email-project.php';</script>";
            }else{
                echo "SOMETHING WENT WRONG";
            }
        }
    }        

?>

