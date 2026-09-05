<?php
if(isset($_POST["email"])){
  require_once('email/class.phpmailer.php');
  include("email/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
  include "connect.php"; 
  $query = "SELECT `email` FROM `institutes` where upper(`name`) = upper('".$_POST['institute']."')";
	$table = mysqli_query($conn,$query);
	$key = mysqli_fetch_array($table);
	$email=$key['email'];

  $mail = new PHPMailer();
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "volunteerap.mobicare@gmail.com";  // GMAIL username
  $mail->Password   = "MobicarE";             // GMAIL password

  $mail->SetFrom('volunteerap.mobicare@gmail.com', 'ap'); // Change the name as you want
  $mail->Subject    = "applicant has the following request";
  $mail->Body = "Message From $name
REASON FOR CONTACT :
--------MESSAGE--------------

DETAILS:
Name : $name
Email :$email1
Phone Number :$phonenumber
Reason :$reason
Message :$message
Thankyou";
  $mail->AddAddress($email);
  $mail->Send();

  echo "<br><br><font color='green' size='3'><b>Email has been Successfully Sent!</b></font></center>"; 	  
}
  ?>

