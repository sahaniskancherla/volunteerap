<?php

  require_once('email/class.phpmailer.php');
  include("email/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
  $mail = new PHPMailer();
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "volunteerap.mobicare@gmail.com";  // GMAIL username
  $mail->Password   = "MobicarE";            // GMAIL password changing password wait

  $mail->SetFrom('volunteerap.mobicare@gmail.com', 'VolunteerAP'); // Change the name as you want
  $mail->Subject    = "Request Accecpted";
  $mail->Body = "$firstname $lastname your request has been accepted to teach $toteach of $institute on $topic topic between $checkin and $checkout at $checktime
	Thankyou for being a part of VolunteerAP.";
  $mail->AddAddress($email);
  //$mail->AddAddress("sahaniskancherla@yahoo.com");
  $mail->Send();

  if(strlen($phonenumber)>2)
{	
 $mess="Your request has been accepted for $institute.%0aThankyou for being a part of VolunteerAP"; // %0a will give newline in SMS
 $mobile="91$phonenumber"; //,919966067203,919293940004,919392345123 Include all numbers separated by comma & prefixed with 91
 $sms = file_get_contents("http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=smudunuri2&password=suresh11&sendername=SRKRTC&mobileno=".$mobile."&message=".urlencode($mess).""); //change the parameters based on your sms pack account
}
  echo "<br><br><font color='green' size='3'><b>Email has been Successfully Sent!</b></font></center>"; 	  

  ?>

