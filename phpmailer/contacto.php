<?php
require 'PHPMailerAutoload.php';
echo !extension_loaded('openssl')?"Not Available":"Available <br/>";
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'thetixs.com';       //  ssl://smtp.gmail.com          // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'developer@thetixs.com';                      // SMTP username
$mail->Password = 'uoW9developer';                           // SMTP password
$mail->SMTPSecure = 'ssl';  //TLS                       // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;          //587                          // TCP port to connect to


//echo $email= $_POST['n2']."@".$_POST['n3'];
$mail->setFrom('developer@thetixs.com', 'Equos Saddlery');
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('andreyzf20@gmail.com');             // Name is optional
//$mail->addReplyTo('$email','roshan');
//$mail->addCC('passmethecode@gmail.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Contacto';
$mail->Body    = 
   
    '<div align="center" style="background-color:#f6f8f8;">
        <div align="center" style="display:inline-block;
                                  height:auto;
                                  width:100%;">
          <div style="
             background-color:#e44c2a;
             display:inline-block;
             width:100%;
             height:auto;
             text-align:center;
             color:#fff;
             align-content:center;
             ">
            
          </div>

          <div style="color:#e44c2a; padding:20px;" align="left">
            <br/>
           <b>'.$_POST['name'].'</b>, 
                    
          </div>
          
          <div style="color:#e44c2a; padding:20px;" align="left">
            <br/>
           <b>'.$_POST['email'].'</b>, 
                    
          </div>
          
          <div style="color:#e44c2a; padding:20px;" align="left">
            <br/>
           <b>'.$_POST['Message'].'</b>, 
                    
          </div>

         
          <div style="height:30px;">
          </div>
          
        </div>
      </div>
 ';
//file_get_contents('template-guest.php');
// $mail->AltBody = 'Hello';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else {
    header('location: thankyou.php');
}
?>