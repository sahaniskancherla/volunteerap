<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
    var datefield=document.createElement("input")
    datefield.setAttribute("type", "date")
    if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n') 
    }
</script>
 
<script>
if (datefield.type!="date"){ //if browser doesn't support input type="date", initializ	e date picker widget:
    jQuery(function($){ //on document.ready
        $('#ddate').datepicker();
    })
	 jQuery(function($){ //on document.ready
        $('#ddate1').datepicker();
    })
}
</script>
</head>
<?php include "connect.php"; ?>
<?php
if(isset($_GET['school']))
{
	$query = "SELECT `type` FROM `institutes` where upper(`name`) = upper('".$_GET['school']."')";
	$table = mysqli_query($conn,$query);
	$key = mysqli_fetch_row($table);
}
else
if(isset($_GET['college']))
{
	$query = "SELECT `type` FROM `institutes` where upper(`name`) = upper('".$_GET['college']."')";
	$table = mysqli_query($conn,$query);
	$key = mysqli_fetch_row($table);
}
?>
				
<?php include "head_section.php"; ?>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<style>
    select:required:invalid {
    color: #999;
    }
    option[value=””][disabled] {
    display: none;
    }
    option {
    color: #000;
    }
	button{

	   cursor: pointer;
    width: 30%;
    height: 42px;
    margin-top: 25px;
    padding: 0px;
    background: #eb4141;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: 0;
    -moz-box-shadow: 0 15px 30px 0 rgba(255,255,255,.1) inset;
    -webkit-box-shadow: 0 15px 30px 0 rgba(255,255,255,.1) inset;
    box-shadow: 0 15px 30px 0 rgba(255,255,255,.1) inset;
    font-family: 'PT Sans', Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #fff;
    text-shadow: 0 1px 2px rgba(0,0,0,.1);
    -o-transition: all .2s;
    -moz-transition: all .2s;
    -webkit-transition: all .2s;
    -ms-transition: all .2s;
	
}



.button2 {background-color: #008CBA;}

</style>
<body>

<?php include "nav.php"; ?>
<center>
<table>
<td>
<tr>
            <button onclick="location.href = 'register.php';" id="myButton1" class="button button2"><font color="white"><b>REGISTER_NOW</b></font></button>
</tr>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td>
<tr>
			<button onclick="location.href = 'signup.php';" id="myButton2" class="button button2"><font color="white"><b>SIGN-UP</b></font></button>
</tr>
</td>
</table>
</center>
			
    <div class="register-container container">

        <div class="row">
            <div class="box">
                <div class="col-md-15">
                    <hr>
                    <h2 class="intro-text text-center">
                    <strong>SIGN UP FOR FREE</strong>
                    </h2>
                    <hr>
					
                    <p>
					<form action="signupdb.php" role="form" method='post' onSubmit="return validate();">
                        <div class="row">
                            
							<div class="form-group col-lg-4">
                                <label>First Name</label><font size="2%" color="red"><label id ="first_name_message" style="margin-left : 30px;"></label></font>
                                <input type="text" class="form-control" name='first_name1' id='first_name1'>
                            </div>
							
                            <div class="form-group col-lg-4">
                                <label>Last Name</label><font size="2%" color="red"><label id ="last_name_message" style="margin-left : 30px;"></label></font>
                                <input type="text" class="form-control" name='last_name' id='last_name'>
                            </div>
							
							<div class="form-group col-lg-4">
                                <label>Gender</label>
								<span class='radio2'>
                                <input type="radio" value = "0" name='gender' checked="checked"> <b>Male</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" value = "1" name='gender'> <b>Female</b>
								</span>
                            </div>
							
                            <div class="clearfix"></div>
            
							<div class="form-group col-lg-4">
							<label><b>Select an Profession</b></label>
									<select  style="width:100%;" class="form-control" name="profession" id="profession" required>
									<option value="" disabled selected>Choose a Profession</option>
									<option value="Scholar">Scholar </option>
									<option value="Engineer">Engineer</option>									
									<option value="Doctor">Doctor</option>									
									<option value="Other">Other</option>									
									</select>									
							</div>
						
                            <div class="form-group col-lg-4">						
                        <label>Email</label><font size="2%" color="red"><label id ="email_message" style="margin-left : 30px;"></label></font>
                        <input type="text" class="form-control" id="emailid" name="email" placeholder="enter your email...">
						</div>
						
							<div class="form-group col-lg-4">						
                        <label>Phone Number</label><font size="2%" color="red"><label id ="phonenumber_message" style="margin-left : 30px;"></label></font>
                        <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="enter your contact number">
						</div>
						
							<div class="form-group col-lg-4">						
                        <label>Password</label><font size="2%" color="red"><label id ="password_message" style="margin-left : 30px;"></label></font>
                        <input type="password" class="form-control" id="password1" name="password1" placeholder="enter your password">
						</div>
							
							<div class="form-group col-lg-4">						
                        <label>Confirm Password</label><font size="2%" color="red"><label id ="cpassword_message" style="margin-left : 30px;"></label></font>
                        <input type="password" class="form-control" id="cpassword1" name="cpassword" placeholder="confirm your password">
						</div>

						<div class="clearfix"></div>										
							
                            <div class="form-group col-lg-6">														
                        <label>About You :</label><font size="2%" color="red"><label id = "description_message" style="margin-left : 30px;"></label></font>
						<textarea id="description" name="description" class="form-control" style="font-size:12pt;height:120px;width:135%;resize:none" placeholder="Few lines about you" ></textarea>
						</div>
						
						<div class="clearfix"></div>
                            <div class="form-group col-lg-7" align="center">
                                <input type="hidden" name="save" value="contact" >
                                <button type="submit" align="center" style='color:#fff;'>SIGN-UP</button>
                            </div>
                        </div>
                    </form>

					</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

<!---
<php
					$query = "SELECT `type` FROM `institutes` where upper(`name`) = upper(".$_GET['school'].")";
					$table = mysqli_query($conn,$query);
					$row = mysqli_fetch_row($table);
				?>
				var key = <php echo $row[0]?>;
-->	


<?php include "footer.php"; ?>
	
</body>
<script>
function validate()
{
	var first_name = document.getElementById('first_name1').value;
	var last_name = document.getElementById('last_name').value;
	var phno = document.getElementById('phonenumber').value;
	var description = document.getElementById('description').value;
   var emailid = document.getElementById('emailid').value;
   var password = document.getElementById('password1').value;
   var cpassword = document.getElementById('cpassword1').value;
   var check = 0;

if(phno.length!=10)
{
	document.getElementById('phonenumber_message').innerHTML = "PhoneNumber must be 10 digits";
	check=1;
}
else
{
	if(!(phno.charAt(0)=="9" || phno.charAt(0)=="8" || phno.charAt(0)=="7" || phno.charAt(0)=="0"))
	{
			document.getElementById('phonenumber_message').innerHTML = "Enter valid PhoneNumber";
			check = 1;
	}
	else
		document.getElementById('phonenumber_message').innerHTML = "";
}

if(emailid.length < 1)
{
	    document.getElementById("email_message").innerHTML = "Enter EmailId";
        check=1;
}
else
{	
	var atpos = emailid.lastIndexOf("@"); 
	var dotpos = emailid.lastIndexOf(".");
	 if (atpos < 2 || dotpos <= atpos+2 || dotpos+2 >= emailid.length)   
      {
        document.getElementById("email_message").innerHTML = "In-valid E-mail Address!";
        check=1;
      }
	 else
	 {
		 document.getElementById("email_message").innerHTML = "";
	 }
}

	
	var ucheck = /^[A-Za-z]{4,30}$/;
   
   if(!ucheck.test(last_name))
   { 
	if(last_name.length > 30 || last_name.length < 4)
		{
	document.getElementById('last_name_message').innerHTML = "Name must contain 4 to 30 chars";
	check=1;
		}
	else
		{
	document.getElementById('last_name_message').innerHTML = "Name must not contain special chars";
    check=1;
		}
   }
   else
	   document.getElementById('last_name_message').innerHTML = "";
   
    
	if(!ucheck.test(first_name))
   { 
	if(first_name.length > 30 || first_name.length < 4)
		{
	document.getElementById('first_name_message').innerHTML = "Name must contain 4 to 30 chars";
	check=1;
		}
	else
		{
	document.getElementById('first_name_message').innerHTML = "Name must not contain special chars";
    check=1;
		}
   }
   else
	   document.getElementById('first_name_message').innerHTML = "";
	
	if(description.length < 1 || description == '')
	{
		document.getElementById('description_message').innerHTML = "Enter description";
		check = 1;
	}
	else
		document.getElementById('description_message').innerHTML = "";
	
	
	if(password.length <= 0)
	{
		document.getElementById('password_message').innerHTML = "Password can't be empty";
		check = 1;
	}
	else
	{
		if(password.length < 4 || password.length >20)
		{
			document.getElementById('password_message').innerHTML = "Password length must be >=4 and <=20";
			check = 1;
		}
		else
			document.getElementById('password_message').innerHTML = "";
	}
	
	if(cpassword !== password)
	{
		document.getElementById('password1').value = "";
		document.getElementById('cpassword1').value = "";
		document.getElementById('cpassword_message').innerHTML = "Password didnt match";
		check = 1;
	}
	else
		document.getElementById('cpassword_message').innerHTML = "";
	
	if(check == 1)
		return false;
	else
		return true;
}
</script>

</html>
