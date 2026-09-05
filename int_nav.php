<head>

	
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Gem style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	
    <title>VolunteerAP</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">


   <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lato|Oswald|Roboto+Condensed' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<style>
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript"> 
$(window).scroll(function(){
     var top=$(window).scrollTop()
     console.log(top)
     /*put your color in background color */
     if(top>50){ $('.brand').css('background-color','#2980B9');
				$('.nav').css('background-color','#fff');
				$('.brand>a').css('color','#fff');}
     else{ $('.brand').css('background-color','Transparent'); 
	 				$('.nav').css('background-color','Transparent');
	 				$('.brand>a').css('color','#2980B9');}

      }) 
</script>


<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Gem jQuery -->


    <div class="brand"><a href="institute.php" style='text-decoration:none;'>VolunteerAP</a>

		<nav class="main-nav">
			<ul>
				<!-- inser more links here -->
				<li><a class="cd-signin" href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>	
    <div class="address-bar"><br></div>
	<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="logout.php">Logout</a></li>
			</ul>

			

			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->


        <div class="container">
			
			
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style='background: #2980B9;'>
			                <div class="navbar-brand" style='color:#fff;background-color:#2980B9;' >VolunteerAP</div>
			<div id="mySidenav" class="sidenav" style='background-color:#fff;'>
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                      <a href="confirm.php">CONFIRM DUTY</a>
                      <a href="institute.php">ACCECPT REQUESTS</a>
                      <a href="addnews2.php">ADD NEWS & UPDATES</a>
			</div> 
			<span style="font-size:30px;cursor:pointer;align:right;color:#fff;" onclick="openNav()">&#9776; Menu</span>
               <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->

<ul>
<li style="display: inline-block;"><a  href="logout.php"   style="color: #fff;align:right;"> <span class="glyphicon glyphicon-log-out" ></span> Logout</a></li>
</ul>

			

			<a href="#0" class="cd-close-form">Close</a>
			
	


           
		   </div>
    <!-- Navigation -->
    <nav class="navbar1 navbar-default" role="navigation">		   
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav1 navbar-nav">
					<li>
                        <a href="institute.php">ACCECPT REQUESTS</a>
                    </li>
					<li>
                        <a href="confirm.php">CONFIRM DUTY</a>
                    </li>
					<li>
                        <a href="addnews2.php">ADD NEWS & UPDATES</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<script>
	function validate()
	{
		
	}
	</script>
	<br>
</body>