<?php
    session_start();
    date_default_timezone_set('UTC');   
     $con = mysqli_connect('localhost','root',''); 
    //or die('Could not connect the database: Username or password incorrect');

    mysqli_select_db($con, 'processDatabase') ;
    // or die('No Database Found, Or Connection Issue');
    echo 'Database Connected Successfully';

    $userid = $_SESSION['username'];
    $processDate = date('d-m-y');

    $query = "select processname,priority,quantam from processtable where username = '$userid' && processdate = '$processDate' order by priority";

    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) == 0){
        echo '<script>alert("You Have Not Entered Any Processess Yet, First Enter Process.");</script>';
        // header('Refresh:0.5 ; URL=dashboard.php');
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
            <a href="Homepage.php" class="brand-logo" style="position: relative;left:650px;top:-65px;">
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
     </div>
        </center>
    
    </header>

    <div class="container">

        <div class="center">
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Process Name</th>
                        <th>Priority</th>
                        <th>Time Alloted</th>
                    </tr>
                </thead>    
                <tbody>
                    <?php
                    while($rows = mysqli_fetch_assoc($result)){
                    ?>  
                        <tr>
                            <td><?php echo $rows['processname'] ?></td>
                            <td><?php echo $rows['priority'] ?></td>
                            <td><?php echo $rows['quantam'] ?></td>
                        </tr>
                    <?php
                    }
                    mysqli_free_result($result);
                    ?>
                </tbody>
            </table>
        </div>
        <form action="insertProcess.php" method="POST">
        <div class="form-field center-align">
                            <button class="btn-large red darken-1 z-depth-5">
                                <a href="insertProcess.php" style="text-decoration:none;color:white;">
                                ADD PROCESS
                                </a>
                            </button>
                        </div><br>
                    <div class="form-field center-align">
                            <button class="btn-large red darken-1 z-depth-5">
                                <a href="finalwindow.php" style="text-decoration:none;color:white;">
                                START
                                </a>
                            </button>
                        </div><br>
                    </br>
                     <div class="form-field center-align">
                    <button class="btn-small red darken-1 z-depth-2">
                                    <a href="signout.php" style="text-decoration: none; color: white">    
                                Sign Out
                                    </a>
                            </button>    
                    </div></br>

    </div>
</form>
</div>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>


</html>


