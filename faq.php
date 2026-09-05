<!DOCTYPE html>
<html lang="en">

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

</style>

<body>

<?php include "nav.php"; ?>

    <div class="container">

        <div class="row">
		
            <div class="box">
			
                <div class="col-md-15">
                    <hr>
                    <h2 class="intro-text text-center">

                    <strong>FAQ</strong>
                    </h2>
                    <hr>
<div class='hd'>-> How to get registered ?</div>
<p align='justify'>
1. In Home Tab at right side top you can find "Register Here" click on it .
   Then fill and submit Details .
   <br>
   <img src="img/faq1.png" style="height:50%;width:80%;border=1px;">
<br>
<br>
2. In Search Tab you can directly Search for a Institute orelse you can find it in List of Institutes click on the Institute name.
   Then fill and submit Details .
   <br>
   <img src="img/faq2.png" style="height:50%;width:80%;border=1px;">
   <br>
</p>
 <br>
 <br>
<p align='justify'>
<div class='hd'>->Is there a way to contact institues for further information</div>
<div align='justify'>

</p>
</div>
<p align='justify'>
In the Contact Tab you can select the Institute and with your details you can contact the Institutes.
   <br>
   <img src="img/faq3.png" style="height:50%;width:80%;border=1px;">
   <br>
</p>
<br>
<hr>
  <div class="form-group col-lg-9">
                                <label>Feel Free To Ask Any Other Question : </label>
                                <textarea class="form-control" style="resize:none" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-7" align="center">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" style='color:#fff;' >Submit</button>
                            </div>
    </div>
        </div>

    </div>
    <!-- /.container -->
</div>
<?php include "footer.php"; ?>
	
</body>

</html>
