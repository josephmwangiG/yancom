<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require './src/Exception.php';
    require './src/PHPMailer.php';
    require './src/SMTP.php';
    
    $mail = new PHPMailer(true);
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
        
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'mail.smtp.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'info@smtp.com';
            $mail->Password   = '';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;  
            
            $mail->setFrom('info@smtp.com', $name);
            $mail->addAddress('info@smtp.com', 'HR DIGITAL CONSULTING LIMITED');
            
            $mail->isHTML(true);
            $mail->Subject = 'Client Enquiry';
            
            $mail->Body = "
                <div style='padding: 30px 20px'>                
                    <h2>Client Enquiry</h2>
                    <br>
                    <p><strong>Client Name:</strong> {$name}</p>
                    <p><strong>Email:</strong> {$email}</p>
                    <p><strong>Phone:</strong> {$phone}</p>
                    <p><strong></strong><br>{$message}</p>
                </div>
            ";

            if(!$mail->send()){
                echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }
        }catch(Exception $e){
            echo 'Error: ' . $e->getMessage() . ' in ' . $e->getFile() . ' on line ' . $e->getLine();
        }
    }