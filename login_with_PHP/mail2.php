<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$body = $_POST['body'];


	require_once "PHPMailer/PHPMailer.PHP";
	require_once "PHPMailer/SMTP.PHP";
	require_once "PHPMailer/Exception.PHP";
     
     $mail=new PHPMailer();

     $mail->isSMTP();
     $mail->Host = "smtp.gmail.com";
     $mail->SMTPAuth = true;
     $mail->Username = "malik@gmail.com";
     $mail->Password = "Malik@2277"
     $mail->Port = 465;
     $mail->SMTPSecure = "ss1";

      $mail->isHTML(true);
       $mail->setForm($email , $name);
        $mail->addAddress("malik@gmail.com");
         $mail->Subject =("$email ($subject)");
          $mail->Body = $body;

          if($email->send()){

          	$status = "Success";
          	$response = "Email is sent!";
          }else{

          	$stetus ="failed";
          	$response ="Something is wrong : <br>". $mail->ErrorInfo;


          }

          exit (json_encode(array("status" =>$status, "response" => $response)));


}





?>
