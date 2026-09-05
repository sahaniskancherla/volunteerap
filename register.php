<!DOCTYPE html>
<html lang="en">
<head>
<?php
 if(!isset($_SESSION)) 
    { 
        session_start();
    } 
?>
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
				
<?php include "head_section.php";?>
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

<?php 
	if(isset($_SESSION['uemail']))
		include "usernav.php";
	else
		include "nav.php"; 
?>

<?php 
	if(!isset($_SESSION['uemail']))
	{
		echo '  <center>
				<table>
				<td>
				<tr>
							<button onclick="location.href = '.'\'register.php\''.';" id="myButton1" class="button button2"><font color="white"><b>REGISTER_NOW</b></font></button>
				</tr>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				<td>
				<tr>
							<button onclick="location.href = '.'\'signup.php\''.';" id="myButton2" class="button button2"><font color="white"><b>SIGN-UP</b></font></button>
				</tr>
				</td>
				</table>
				</center>';
	}
?>

			
    <div class="register-container container">

        <div class="row">
            <div class="box">
                <div class="col-md-15">
                    <hr>
                    <h2 class="intro-text text-center">
                    <strong>Knowledge Sharing Registration Form</strong>
                    </h2>
                    <hr>
					
                    <p>
					<form action="regdb.php" role="form" method='post' onSubmit="return validate();">
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
                                <input type="radio" value = "0" id="male" name='gender' checked="checked"> <b>Male</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" value = "1" id="female" name='gender'> <b>Female</b>
								</span>
                            </div>
							
                            <div class="clearfix"></div>
            
							<div class="form-group col-lg-4">
							<label><b>Select an Profession</b></label>
									<select id="profession" style="width:100%;" class="form-control" name="profession"  required>
									<option value="" disabled selected>Choose a Profession</option>
									<option value="Scholar">Scholar</option>
									<option value="Engineer">Engineer</option>									
									<option value="Doctor">Doctor</option>									
									<option value="Other">Other</option>									
									</select>									
							</div>
                            					
                            
                            
                          <div class="form-group col-lg-4">
							<label><b>To Teach:</b></label>
									<select  style="width:100%;" class="form-control" name="toteach" onchange="showUser(this.value)" id="toteach" required>
									<option value="" disabled selected>Select an option</option>
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
							<div class="form-group col-lg-4">
							<label><b>Institute</b></label>
								
								<div id="txtHint">
								<select style="width:100%;" class="form-control" name="institute" id="institute" required>
								<option value="" disabled selected>Select an option</option>
								<?php
								if(isset($_GET['school']))
								{
									echo '<option value="'.$_GET['school'].'">'.$_GET['school'].'</option>';
								}
								else
								if(isset($_GET['college']))
								{
									echo '<option value="'.$_GET['college'].'">'.$_GET['college'].'</option>';
								}
								?>
								</select>
								</div>
														
							</div>
							
                            <div class="form-group col-lg-4">
                                <label>Topic Title:</label><font size="2%" color="red"><label id ="topic_message" style="margin-left : 30px;"></label></font>
                                <input type="text" class="form-control" name='topic' id='topic' placeholder="Enter your topic to share">
                            </div>
                            
							<div class="form-group col-lg-4">						
						<label >Check-In Date:</label><font size="2%" color="red"><label id ="checkin_message" style="margin-left : 30px;"></label></font>
						<input type="date" class="form-control" name="ddate" id="ddate">
						</div>
						
                            <div class="form-group col-lg-4">						
						<label >Check-Out Date:</label><font size="2%" color="red"><label id ="checkout_message" style="margin-left : 30px;"></label></font>
						<input type="date" class="form-control" name="ddate1" id="ddate1">
						</div>
						<div class="clearfix"></div>	
						
						<div class="form-group col-lg-4">						
						<label >Available Time:</label><font size="2%" color="red"><label id ="checktime_message" style="margin-left : 30px;"></label></font>
						<input type="time" class="form-control" name="ttime" id="ttime">
						</div>
						
						
                            <div class="form-group col-lg-4">						
                        <label>Email</label><font size="2%" color="red"><label id ="email_message" style="margin-left : 30px;"></label></font>
                        <input type="text" class="form-control" id="emailid" name="email" placeholder="enter your email...">
						</div>
						
							<div class="form-group col-lg-4">						
                        <label>Phone Number</label><font size="2%" color="#E5571B"><label id ="phonenumber_message" style="margin-left : 30px;">*optional</label></font>
                        <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="enter your contact number">
						</div>

						<div class="clearfix"></div>										
							
                            <div class="form-group col-lg-6">														
                        <label>Description :</label><font size="2%" color="red"><label id = "description_message" style="margin-left : 30px;"></label></font>
						<textarea id="description" name="description" class="form-control" style="font-size:12pt;height:120px;width:135%;resize:none" placeholder="Brief Topic Memo" ></textarea>
						</div>
						
						<div class="clearfix"></div>
                            <div class="form-group col-lg-7" align="center">
                                <input type="hidden" name="save" value="contact" >
                                <button type="submit" align="center" style='color:#fff;'>Register</button>
                            </div>
                        </div>
                    </form>

					</p>
				<p align='justify'>
				 <div class='hd'>Recently Shared</div>
				 <div id="owl-demo" class="owl-carousel">
				<?php
					$query = "SELECT * FROM  `registration` WHERE `accepted` = 2 ORDER BY `time` LIMIT 10";
					$table = mysqli_query($conn,$query);
					while($row = mysqli_fetch_row($table))
					{
						$name = ucwords($row[0]).' '.ucwords($row[1]);
						$institute = strtoupper($row[5]);
						$profession = strtoupper($row[3]);
						$time = $row[12];
						if($row[2]==0)
								$name = 'MR.'.$name;
							else
								$name = 'MRS.'.$name;
						echo '<div class="item"><span class="name">'.$name.'</span><br>'.$institute.'<br>'.$profession.'<br><span style="font-size:12px;color:blue;">shared on '.$time.'</span></div>';
					}
				?>
              </div>
			  <div class="customNavigation">
                <a class="btn prev">Previous</a>
                <a class="btn next">Next</a>
              </div>
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
<?php
if(isset($_SESSION['uemail'])) 
				{ 
						include "connect.php";
						$email = $_SESSION['uemail'];
						$query = "SELECT * FROM `signup` WHERE `email`='$email'";
						$table = mysqli_query($conn,$query);
						$row = mysqli_fetch_row($table);
						$firstname = $row[0];
						$lastname = $row[1];
						$gender = $row[2];
						if($row[2]==1)
							$gender = "female";
						else
							$gender = "male";
						$profession = $row[3];
						$phonenumber = $row[6];
				}
?>

<script type="text/javascript">
            function run(name){
				document.getElementById("toteach").value = <?php echo $key[0]?>;
				document.getElementById("institute").value = name;
            }
			function run2(){
				document.getElementById("first_name1").value = "<?php echo $firstname ?>";
				document.getElementById('last_name').value = "<?php echo $lastname?>";
				document.getElementById('phonenumber').value = "<?php echo $phonenumber?>";
				document.getElementById('emailid').value =  "<?php echo $email?>";
				document.getElementById('profession').value="<?php echo $profession?>";
				document.getElementById('<?php echo $gender?>').checked = true;
            }
			
           <?php
			   if(isset($_GET['school']))
					echo "run('".$_GET['school']."');";
			   else
				if(isset($_GET['college']))
					echo "run('".$_GET['college']."');";
				
				if(isset($_SESSION)) 
				{ 	
					echo "run2();";
				}	 
           ?>
		   
</script>

<?php include "footer.php"; ?>
	
</body>
<script>
function validate()
{
	var first_name = document.getElementById('first_name1').value;
	var last_name = document.getElementById('last_name').value;
	var topic = document.getElementById('topic').value;
	var phno = document.getElementById('phonenumber').value;
	var description = document.getElementById('description').value;
	var ttime = document.getElementById('ttime').value;
	var ddate = document.getElementById('ddate').value;
	var ddate1 = document.getElementById('ddate1').value;
   var emailid = document.getElementById('emailid').value;
   
   var check = 0;

   
if(ttime.length < 1)
{
	 document.getElementById("checktime_message").innerHTML = "Enter Time";
     check=1;
}
else
	 document.getElementById("checktime_message").innerHTML = "";
 
if(ddate.length < 1)
{
	 document.getElementById("checkin_message").innerHTML = "Enter Check-In Date";
     check=1;
}
else
	 document.getElementById("checkin_message").innerHTML = "";
 
if(ddate1.length < 1)
{
	 document.getElementById("checkout_message").innerHTML = "Enter Check-Out Date";
     check=1;
}
else
	 document.getElementById("checkout_message").innerHTML = "";
 
 
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
	
	if(phno.length != 0)
	{
	var pcheck = /^[0-9]{10}$/;
	if(!pcheck.test(phno))
	{
			document.getElementById('phonenumber_message').innerHTML = "Invalid PhoneNumber";
			check=1;
	}
	else
		document.getElementById('phonenumber_message').innerHTML = "*optional";
	}
	else
		document.getElementById('phonenumber_message').innerHTML = "*optional";
	
	
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
   
	
	if(topic.length == 0)
	{
		document.getElementById('topic_message').innerHTML = "Enter Topic";
		check = 1;
	}
	else
		document.getElementById('topic_message').innerHTML = "";
	
	if(description.length < 1 || description == '')
	{
		document.getElementById('description_message').innerHTML = "Enter description";
		check = 1;
	}
	else
		document.getElementById('description_message').innerHTML = "";
	
	
	
	if(check == 1)
		return false;
	else
		return true;
}
</script>
<script>
    $(document).ready(function() {

      var owl = $("#owl-demo");

      owl.owlCarousel({

      items : 3, //10 items above 1000px browser width
      itemsDesktop : [1000,4], //5 items between 1000px and 901px
      itemsDesktopSmall : [600,3], // 3 items betweem 900px and 601px
      itemsTablet: [1000,2], //2 items between 600 and 0;
      itemsMobile: [1000,1],
	  autoPlay: true,
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      
      });
 // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })

    });
    </script>
	
</html>
