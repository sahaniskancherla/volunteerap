<!DOCTYPE html>
<html lang="en">
 <?php include "admin_session.php";?>
 <?php include "head_section.php"; 
  include "connect.php";
  ?>
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
    width: 40%;
    height: 42px;
    margin-top: 30px;
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
    font-size: 32px;
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
  <?php include "ownernav.php"; ?>
  
<div class="container" align="center">
        <div class="row" >
            <div class="box" >
                <div class="col-md-15" >
				<hr>
  			    <div class='hd'>Institution Entry Form</div>
				<hr>
				<br>
				
				<?php
				if(isset($_GET['set']))
				{
					if($_GET['set']==0)
					{
				echo '<div align="left">
				<font size="2%" color="red"><label id ="name_message" style="margin-left : 30px;">This Institues Already exists</label></font>
				</div>';
					}
					else
					if($_GET['set']==1)
					{
				echo '<div align="left">
				<font size="2%" color="red"><label id ="name_message" style="margin-left : 30px;">Institues Added</label></font>
				</div>';
					}
				}
				?>
				
				 <div class="row" align="center">
				 <form action="ownerdb.php" onSubmit="return validate();" method="post">
                            <div class="form-group col-lg-5">
                                <label>Institution Name</label><font size="2%" color="red"><label id ="name_message" style="margin-left : 30px;"></label></font>
                                <input type="text" id="name" name="name" placeholder="Enter Institution Name" class="form-control">
                            </div>
							 <div class="form-group col-lg-5">
                                <label>Institue Email Address</label><font size="2%" color="red"><label id ="email_message" style="margin-left : 30px;"></label></font>
                                <input type="text" id="email" name="email" placeholder="Enter Institution Email Address" class="form-control">
                            </div>

							<div class="form-group col-lg-5">
							<label><b>Select an Institute Type</b></label>
								<select  id="instituetype" name="instituetype" style="width:100%;" class="form-control" name="Institues" required>
								<option value="" disabled selected>Choose a Institue type</option>
								<?php
									$query = "SELECT * FROM `institutetype` WHERE 1";
									$table = mysqli_query($conn,$query);
									while($row = mysqli_fetch_row($table))
									{
										echo '<option value="'.$row[0].'">'.$row[1].'</option>';
									}
									?>	
								</select>									
							</div>

							<div class="form-group col-lg-5">
							<label><b>Select Institute Location</b></label>
								<select  id="location" name="location" style="width:100%;" class="form-control" name="Institues" required>
									<option value="" disabled selected>Choose Institue location</option>
									<option value="Bhimavaram">Bhimavaram</option>								
									</select>									
							</div>
			
			
							 <div class="form-group col-lg-5">
                                <label>Institue Password</label><font size="2%" color="red"><label id ="password_message" style="margin-left : 30px;"></label></font>
                                <input type="password" id="password" name="password" placeholder="Enter Institution Password" class="form-control">
                            </div>
							
							<div class="form-group col-lg-5">
                                <label>Confirm Password</label><font size="2%" color="red"><label id ="cpassword_message" style="margin-left : 30px;"></label></font>
                                <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control">
                            </div>
							
							<div class="form-group col-lg-5">						
                        <label>Phone Number</label><font size="2%" color="red"><label id ="phonenumber_message" style="margin-left : 30px;"></label></font>
                        <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="enter your contact number">
						</div>
							
							<br>
										<div class="clearfix"></div>
										<br>
										<br>
							<div class="form-group col-lg-7" align="right">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" style='color:#fff;'>Submit</button>
                            </div>
				</form>
				</div>
				</div>
			</div>
		</div>			
</div>		
<script>
function validate()
{
var name = document.getElementById('name').value;
var phno = document.getElementById('phonenumber').value;
var email = document.getElementById('email').value;
var atpos = email.lastIndexOf("@"); 
var password = document.getElementById('password').value;
var cpassword = document.getElementById('cpassword').value;

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

   if(name.length == 0)
   {
	    document.getElementById("name_message").innerHTML = "Enter Name";
        check=1;
   }
   else
   {
	    document.getElementById("name_message").innerHTML = "";
   }
   
   var dotpos = email.lastIndexOf(".");
   //Checks Min 2 chars in email name (ravi/abc12), domain name (gmail/yahoo) and domain type (.com/.net)
   if (atpos < 2 || dotpos <= atpos+2 || dotpos+2 >= email.length)   
      {
        document.getElementById("email_message").innerHTML = "In-valid E-mail Address!";
        check=1;
      } 
	else
		document.getElementById("email_message").innerHTML = "";


	
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
		document.getElementById('password').value = "";
		document.getElementById('cpassword').value = "";
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
<?php include "footer.php"; ?>
	
</body>

</html>
