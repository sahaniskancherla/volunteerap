<!DOCTYPE html>
<html lang="en">

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
    width: 60%;
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

</style>
<body>

<?php include "nav.php"; ?>

    <div class="container">
        <div class="row">
            <div class="box">
			<div class="col-md-8">
                
  			    <div class='hd'>Contact Form</div>
                <p>You can leave a message to Institues using the below contact form </p>
                <form role="form"  action="contactdb.php" method='post' onSubmit="return validate();">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>YOUR:: Name</label>
                                <input type="text" id="name" name="name"  class="form-control"><font size="2%" color="red"><label id ="name_message" style="margin-left : 30px;"></label></font>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="text" id="emailid" name="email"  class="form-control"><font size="2%" color="red"><label id ="email_message" style="margin-left : 30px;"></label></font>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label><font size="2%" color="#E5571B"><label id ="phonenumber_message" style="margin-left : 30px;">*optional</label></font>
                                <input type="text" id="phonenumber" name="phonenumber"  class="form-control">
                            </div>
							
							<div class="form-group col-lg-6">
							<label><b>Institute Type:</b></label>
									<select  style="width:100%;" class="form-control" name="institutetype" onchange="showUser(this.value)" id="toteach" required>
									<option value="" disabled selected>Select an option</option>
									<option value="0">Primary-School</option>
									<option value="1">Secondary-School</option>
									<option value="2">Engineering-College</option>
									<option value="3">Medical-College</option>
									<option value="4">Others</option>
									</select>									
							</div>
							
							 <div class="form-group col-lg-6">
							<label><b>Select Institute</b></label>
								<div id="txtHint">
								<select style="width:100%;" class="form-control" name="institute" id="institute" required>
								<option value="" disabled selected>Select an option</option>
								</select>
								</div>						
							</div>
							
							<div class="form-group col-lg-6">
							<label><b>Reason For Contact</b></label>
									    <select style="width:100%;" class="form-control" name="reason" id="reason" required>
										<option value="" disabled selected>Choose a reason</option>
										<option value="1">Request for Postpond</option>
										<option value="2">Request for Residence</option>
										<option value="3">Request for Transport</option>
										<option value="4">Others</option>
										</select>								
							</div>
                            
							<div class="clearfix"></div>
					 
                            <div class="form-group col-lg-12">
                                <label>Message</label><font size="2%" color="red"><label id ="message_message" style="margin-left : 30px;"></label></font>
                                <textarea id="message" name="message" class="form-control" style="resize:none" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-7" align="center">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" style='color:#fff;' >Submit</button>
                            </div>
                        </div>
                </form>

                
                </div>
                <div class="col-md-4">
				 <div class='hd'>Contact Us</div>
                    <p><strong>Phone:</strong>
                        +91 9392345123 (Sahani)
                    </p>
                    <p><strong>Mobile:
                        </strong>+91 9392345123 (Sahani)
                    </p>
                    <p><strong>Email:
                        </strong><a href="sahaniskancherla@yahoo.com">volunteerap.mobicare@gmail.com</a>
                    </p>
                    <p><strong>Address:<br>
                        </strong>VolunteerAP Association<br>
                            
								China Amiram, Bhimavaram - 534204<br>
								West Godavari Dt., Andhra Pradesh, India.
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>


    </div>

    </div>
    <!-- /.container -->

	
	
<?php include "footer.php"; ?>
	
</body>
<script>
function validate()
{
	var name = document.getElementById('name').value;
	var emailid = document.getElementById('emailid').value;
	var phno = document.getElementById('phonenumber').value;
	var message = document.getElementById('message').value;
	var check = 0;
	
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
	
	
	var pcheck = /^[0-9]{10}$/;
	if(!pcheck.test(phno))
	{
		if(phno.length != 0)
			document.getElementById('phonenumber_message').innerHTML = "Invalid PhoneNumber";
			check=1;
	}
	else
		document.getElementById('phonenumber_message').innerHTML = "*optional";
	
	var ucheck = /^[A-Za-z]{4,30}$/;
   
   if(!ucheck.test(name))
   { 
	if(name.length > 30 || name.length < 4)
		{
	document.getElementById('name_message').innerHTML = "Name must contain 4 to 30 chars";
	check=1;
		}
	else
		{
	document.getElementById('name_message').innerHTML = "Name must not contain special chars";
    check=1;
		}
   }
   else
	   document.getElementById('name_message').innerHTML = "";
   
  
	if(message.length < 1 || message == '')
	{
		document.getElementById('message_message').innerHTML = "Enter message";
		check = 1;
	}
	else
		document.getElementById('messsage_message').innerHTML = "";
	
	

	
	
	
	if(check == 1)
		return false;
	else
		return true;
}
</script>
</html>
