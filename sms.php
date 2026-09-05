<?php

 $mess="XYZ SYSTEM!%0aYour Registration Has Been Successfully Completed. Enter your secret code: J@eF66 %0a-Admin Team"; // %0a will give newline in SMS

 $mobile="919866600002,919293940004,919848427327"; //Include all numbers separated by comma & prefixed with 91

 $sms = file_get_contents("http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=YOURUSERNAME&password=YOURPASSWORD&sendername=YOURSENDERID&mobileno=".$mobile."&message=".urlencode($mess).""); //change the parameters based on your sms pack account

 echo $sms;

 echo "hello";
?>
