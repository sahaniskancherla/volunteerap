<!DOCTYPE html>
<html lang="en">

<?php include "head_section.php"; ?>
<body>

<?php include "nav.php"; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-md-15">
                    <hr>
                    <h2 class="intro-text text-center">
                    <strong>News & Events</strong>
                    </h2>
                    <hr>
                    <p align='center'>
				 <div class='hd'>What's New?</div>
  				 <p>
						 <marquee style='font-size:16px;' onmouseover='javascript:stop()' behavior='scroll' onmouseout='javascript:start()' scrollamount='1' scrolldelay='35' height='300' direction='up' loop='-1' truespeed='truespeed' >
						 
						 <?php
							include "connect.php";
							$query = "SELECT * FROM `news` ORDER BY `time` DESC";
							$table = mysqli_query($conn,$query);
							while($row = mysqli_fetch_row($table))
								{
									echo "<dl><dt><b><a href='".$row[1]."'><font color='green'>".$row[0]."</font></a></b><div style='font-size:14px;color:#0079b2;'>".$row[2]."</div></dt>
						 <dd><br></dd></dl>";
								}
						 ?>
						 
						 
						 
						 
						 </marquee> 
                    </p>
                </div>
					</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

<?php include "footer.php"; ?>
	
</body>

</html>
