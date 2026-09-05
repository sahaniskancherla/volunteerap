<!DOCTYPE html>
<html lang="en">
<?php include "institute_session.php";
 ?>
<?php include "head_section.php"; ?>

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
    width: 50%;
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
<!--change this when you add session-->
<?php 
include "int_nav.php";
?>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-md-15">
				<center>
  			    <div class='hd'>News Update</div>
				<?php
				if(isset($_GET['set']))
				{
					if($_GET['set']==1)
						echo '<div align="right"><font size="2%" color="red"><label id = "description_message" style="margin-left : 30px;">UPDATED</label></font></div>';
				}
				?>
				</center>
                
                <form role="form"  action="newsdb.php" method='post' onSubmit="return validate();">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>TITLE</label><font size="2%" color="red"><label id ="title_message" style="margin-left : 30px;"></label></font>
                                <input type="text" id="title" name="title"  class="form-control">
                            </div>
                            
							<div class="form-group col-lg-12">
                                <label>Hyperlink</label><font size="2%" color="#E5571B"><label id ="href_message" style="margin-left : 30px;">*optional</label></font>
                                <input type="text" id="link" name="link"  class="form-control">
                            </div>
                            
							<div class="clearfix"></div>
					 
                            <div class="form-group col-lg-12">
                                <label>Message</label><font size="2%" color="red"><label id ="message_message" style="margin-left : 30px;"></label></font>
                                <textarea id="message" name="message" class="form-control" style="resize:none" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-7" align="center">
                                <input type="hidden" name="save" value="contact">
                                <button  type="submit" style="float:right;color:#fff;" >POST</button>
                            </div>
                        </div>
                </form>

                </div>
          <!---      <div class="col-md-4">
				 <div class='hd'>Contact Us</div>
                    <p><strong>Phone:</strong>
                        +91 xxxxxxxxx
                    </p>
                    <p><strong>Mobile:
                        </strong>+91 xxxxxxxxx
                    </p>
                    <p><strong>Email:
                        </strong><a href="mailto:coordinator@BrainShare.net">coordinator@ApBrainShare.net</a>
                    </p>
                    <p><strong>Address:<br>
                        </strong>VolunteerAP Association<br>
                                xxxxxxxxxxxxxxx<br>
								xxxxxxxxxxxxxxxx<br>
								China Amiram, Bhimavaram - 534204<br>
								West Godavari Dt., Andhra Pradesh, India.
                    </p>
                </div> 
                <div class="clearfix"></div>
            </div>
        </div>  ---->


    </div>

    </div>
    <!-- /.container -->

	
	
<?php include "footer.php"; ?>
	
</body>
<script>
function validate()
{
	var title = document.getElementById('title').value;
	var message = document.getElementById('message').value;
	var check = 0;
	
	if(title.length < 1)
		{
	document.getElementById('title_message').innerHTML = "Enter Title";
	check=1;
		}
	else
	   document.getElementById('title_message').innerHTML = "";
   
  
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
