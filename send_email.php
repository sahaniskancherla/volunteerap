<?php
if(isset($_POST["email"])){
  require_once('email/class.phpmailer.php');
  include("email/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
  include "connect.php"; 
  $query = "SELECT `email`,`phonenumber` FROM `institutes` where upper(`name`) = upper('".$_POST['institute']."') and `type`= '$toteach2'";
	$table = mysqli_query($conn,$query);
	$key = mysqli_fetch_array($table);
	$email=$key['email'];
	$instphonenumber = $key['phonenumber'];
  $mail = new PHPMailer();
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "volunteerap.mobicare@gmail.com";  // GMAIL username
  $mail->Password   = "MobicarE";            // GMAIL password

  $mail->SetFrom('volunteerap.mobicare@gmail.com', 'VolunteerAP'); // Change the name as you want
  $mail->Subject    = "Request to share knowledge";
  $mail->Body = "FirstName : $first_name
LastName :$last_name
Gender :$gender
Profession :$profession
To Teach:$toteach
Topic :$topic
Check-in :$checkin
Check-out :$checkout
Email :$email1
Phone Number :$phonenumber 
Description :$description


Thankyou

";
  $mail->AddAddress($email);
  //$mail->AddAddress("sahaniskancherla@yahoo.com");
  $mail->Send();
 if(strlen($instphonenumber)>2)
 {
	$mess="VolunteerAP!%0a$first_name $last_name would like to teach $toteach at your institute on $checkin. Contact him @ $phonenumber.%0a-Admin Team"; // %0a will give newline in SMS
	$mobile="91$instphonenumber"; //,919966067203,919293940004,919392345123 Include all numbers separated by comma & prefixed with 91
	$sms = file_get_contents("http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=smudunuri2&password=suresh11&sendername=SRKRTC&mobileno=".$mobile."&message=".urlencode($mess).""); //change the parameters based on your sms pack account
	echo "<br><br><font color='green' size='3'><b>Email has been Successfully Sent!</b></font></center>"; 	  
 }
}
  ?>

