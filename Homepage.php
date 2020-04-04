<?php
//initializing session and checking if user is logged in or logged out
//if logged out, alert once to ask him to login
session_start();
if(!isset($_SESSION['email'])){
    echo '<script>alert("You are logged out, Kindly LogIn to Move Further")</script>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Process Management System</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <link rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous"/>

<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
    .mainbackg{
	background: linear-gradient(to left,black,transparent), url('img/background2.jpg');
	background-size: cover;
	background-position: center;
}
    header{
        background: url(img/background2.jpg);
        background-size: cover;
        background-position: center;
        min-height: 700px;   
    }
    @media screen and (max-width: 670px)
    {
    header{
        min-height: 500px;
    }
    }
    .bodyforform{
        background-image: url(img/background.jpg);
        background-size: cover;
        
    }
    .card{
        background:rgba(0,0,0,0.6);
    }
    .login label{
        font-size: 16px;
        color: #ccc;
    }
    .login input{
        font-size: 22px !important;
        color:#fff;
    }
    .myspan{
        color:#fff;
    }
    .login button:hover{
        padding:0px 40px;
        background-color: crimson;
    }
    </style>
</head>
<body>
    <header>
        <nav class="nav-wrapper transparent">
            <div class="container">
             <a href="" class="sidenav-trigger" data-target="mobile-menu">
                     <i class="material-icons">menu</i> 
             </a>           
            <ul class="backg1">                
                <li><a href="account.php" class="white-text">Account</a></li>
                <li><a href="#secondsection" class="white-text">Get Started</a></li>
                <li><a href="update.php" class="white-text">View Status</a></li>
                <li><a href="update.php" class="white-text">Update Status</a></li>
                <li><a href="#sixthsection" class="white-text">Connect Us</a></li>
                <li><a href="#seventhsection" class="white-text">About Us</a></li>
            </ul>
            <a href="" class="brand-logo" style="position: relative;left:650px;top:-65px;">
                Process Management System
            </a>
            </div>
        </nav>
        <center>
        <div style="position: relative; top:250px;">
            <span style="font-family:'Rajdhani'; font-weight: 600; font-size: 80px;" class="white-text">BOOST YOUR PRODUCTIVITY</span>
            </br>
            <span style="font-family:'Rajdhani'; font-weight: 600; font-size: 20px;" class="white-text">_______________________________________________________________</span>
        </br>
            <span style="font-family:'Rajdhani'; font-weight: 600; font-size: 20px;" class="white-text">2X WITH PROCESS MANAGEMENT SYSTEM</span>
        <div style="padding: 20px;"></div>
        <center>
        
            <button class="waves-effect btn red darken-1 hoverable">
            <a href="account2.php" style="text-decoration: none;color: white;">
            Register
            </a>
            </button>
            
            <button class="waves-effect btn red darken-1 hoverable">
            <a href="account.php" style="text-decoration: none;color: white;">
            Log In
            </a>
            </button>
        </br>
        </br>
        <button class="btn-small red darken-1 z-depth-2">
                                    <a href="signout.php" style="text-decoration: none; color: white">
                                Sign Out
                                    </a>
        </button>    
    </center>
        </center>

    </header>
    <section id="secondsection">
    <div class="container">
        <h3 class="red-text text-darken-2 center adjust">GET STARTED WITH PROCESSESS NOW</h3>
    </div>
</section>
    <form action="processpage.php" method="GET"> 
    <div class="row login bodyforform">
        <div class="col s12 l4 offset-l4">
            <div class="card">
                <div class="card-action red darken-1 white-text">
                    <h3>
                        Get Started Now
                    </h3>
                </div>
                <div class="card-content center">
                    <div class="form-field">
                        <button class="btn-large red darken-1 z-depth-5 center-align">
                            <a href="processpage.php" style="text-decoration:none;color:white;">
                            ADD PROCESS NOW
                            </a>
                        </button>  
                    </div><br>
            </div>
        </div>
    </div>
    </div>
</form>
<div class="container">
        <h3 class="red-text text-darken-1 center adjust">HOW IT WORKS?</h3>
    </div>
<div class="container">
    <div class="row">
        <div class="col s10 offset-l1">
            <div class="z-depth-5 red darken-1 white-text">
                <p style="padding:50px;">Hey! If you too are bored and are troubled by the old primitive ways of dealing with work and Process scheduling then this platform is made for you.
                Get started with the Process Management System now in just few steps. Just type in the name of the process, assing priority to your process and then select the time quantam. 
                Priority and Time Quantam will make your processes quite effective and would incerease your PRODUCTIVITY and THROUGHPUT.
                If you want to store your process and details permanently and would like to use them frequently, Then Do REGISTER or LOGIN with us. This would make your processes even easier and hassle-free.
                <br>
                </br>
                       
                            <button class="waves-effect btn red darken-1 hoverable z-depth-5">
                                    <a href="account2.php" style="text-decoration: none;color:white;">
                                Register
                                    </a>
                            </button>
                    
                        
                            <button class="waves-effect btn red darken-1 hoverable z-depth-5">
                                    <a href="account.php" style="text-decoration: none;color:white;">
                                Log In
                                    </a>   
                            </button>
                
                </p>
            </div>
        </div>
    </div>
</div>

<!-- ADDED CONTENT -->
<section id="sixthsection">
	<div class="row">
		<div class="col l4 s6 m6 center push-l2">
			<div class="icon-block">
              <h2 class="center red-text text-darken-2">
                <i class="large material-icons">chat</i>
              </h2>
              <h5 class="center">Connect Us</h5>
              <p class="light">
				Sometimes it becomes difficult to reach to the developers and creators, However You Don't Need to Worry About it
				It Is Pretty Easy To Contact Us And Get Connected In Few Simple Steps.
				Click The Button To Start The Communication.
              </p>
              <a href="account.php">
              <button class="waves-effect btn red darken-2 hoverable">Get Started</button>
          </a>
            </div>
		</div>
		<div class="col l4 s6 m6 center push-l2">
			<div class="icon-block">
              <h2 class="center red-text text-darken-2">
                <i class="large material-icons">work</i>
              </h2>
              <h5 class="center">Work With Us</h5>
              <p class="light">
				When You Feel, It Is The Time To Take Your Skills And Show It To The World, You Need A Platform, To Make It Happen. 
				Well We Are Here To Help You Out, Be It Anything Feel Free To Visit It Once.
				Click The Button To Get Stated.
              </p>
              <a href="account.php">
              <button class="waves-effect btn red darken-2 hoverable">Get Started</button>
          </a>
            </div>
		</div>
	</div>
</section>
  <div class="container" style="padding:20px;">

</div>
<section class="section section-follow red darken-2 white-text">
	<div class="container">	
		<div class="row">
			<div class="col s12 center">
				<h4>Follow Team@Process Management System</h4>
				<p>Follow Us On Social Media For Daily Updates</p>
				<a href="" class="white-text" style="padding: 10px;">
					<i class="fab fa-facebook fa-4x"></i>
				</a>
				<a href="" class="white-text" style="padding: 10px;">
					<i class="fab fa-pinterest fa-4x"></i>
				</a>
				<a href="" class="white-text" style="padding: 10px;">
					<i class="fab fa-twitter fa-4x"></i>
				</a>
				<a href="" class="white-text" style="padding: 10px;">
					<i class="fab fa-linkedin fa-4x"></i>
				</a>
				<a href="" class="white-text" style="padding: 10px;">
					<i class="fab fa-google-plus fa-4x"></i>
				</a>
			</div>
		</div>
	
	</div>
</section>	
<section id="seventhsection">
<footer class="mainbackg">
	<div class="container">
		<div class="row">
			<div class="col s7 push-l6 right-align">
				<h5 class="white-text">About Us</h5>
				<p class="white-text">
                    We at PMS believe that, Being in a digital world, where everything is about automation and machines.
                    We don't want employees to still use heuristic approaches to deal with their day to day work. 
                    Because, in that process sometimes it becomes difficult to actually measure the amount of work done, work left and work not required to be done as of now.
                    Therefore here we are with a system that takes a request of a process, asks you to categorize it on
                    the bases of urgency or necessity (Importance), and will store the information and then will guide you through the process that are required to be done urgently.  
				</p>
			</div>
		</div>
	</div>
	<section class="red darken-2 white-text"> 
	<div class="footer-copyright">
		<div class="container">
		© Owned By PMS2020 
		</div>
	</div>
</section>

</footer>
</section>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</body>
</html>