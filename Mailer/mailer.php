
<?php
date_default_timezone_set("Asia/Kolkata");
require_once("PHPMailer/PHPMailerAutoload.php");

if(isset($_POST['email']))
{
    $name = $_POST['name'];
    // $cname = $_POST['cname'];
    $Email = $_POST['email'];
    $mobile = $_POST['number'];
    $message1 = $_POST['message'];
    $datae = date("l, F j, Y, g:i a");
    $mail = new PHPMailer();
//     $mail->IsSMTP();
// $mail->IsHTML(true);
     $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'my1653948@gmail.com';
    $mail->Password = 'montu8898157696'; 
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;  
      $mail->setFrom("my1653948@gmail.com", "Enquriry for Montu Yadav Portfolio");
    $mail->addReplyTo("my1653948@gmail.com", "Enquriry for Montu Yadav Portfolio");
   

    // $mail->addAddress('jileni7892@cyclesat.com'); 
    $mail->addAddress('xewose1176@farebus.com'); 




    $message = '<html><body>';
    $message .= '<table rules="all" style="border:1px solid #666;border-color: #666;" cellpadding="10" width="100%">';
    $message .= "<tr><td><strong> Name</strong> </td><td>".$name."</td></tr>";
    $message .= "<tr><td><strong> Email. </strong> </td><td> ".$Email." </td></tr>";
    $message .= "<tr><td><strong> mobile No</strong> </td><td> ".$mobile." </td></tr>";
    // $message .= "<tr><td><strong> Subject</strong> </td><td> ".$subject." </td></tr>";
    $message .= "<tr><td><strong> Message </strong> </td><td> ".$message1." </td></tr>";
    $message .= "<tr><td><strong> Date & Time :</strong> </td><td>" .$datae."</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";
    $mail->IsHTML(true);
    $mail->Subject = "Enquriry for Montu Yadav Portfolio";
    $mail->Body = $message;
    if(!$mail->send()){
        echo "1";
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
        // return false;
    }else{
       echo "0";
    }
}
?>