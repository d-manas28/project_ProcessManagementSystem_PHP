
<?php

    session_start();
    //cross checking if session is not set then redirecting to the login page
    if(isset($_SESSION['email'])){
        //do nothing, continue
    }
    else{
        echo '<script>alert("You are logged out, Please LogIn First!")</script>';
        header('Refresh:0.5 ; URL=account.php');      
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <form action="insertProcess.php" method="POST"> 
        <div class="row login bodyforform">
            <div class="col s12 l4 offset-l4">
                <div class="card">
                    <div class="card-action red darken-1 white-text">
                        <h4>
                            Welcome To The Process Control Box <br>
                            <!-- Printing the Username, using sessions -->
                            <!-- 
                            //echo S_SESSION['username'];
                            ?> -->
                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="form-field">
                            <label for="pname">Name Your Process</label>
                            <input type="text" id="pname" name="processname">
                        </div><br>
                     <div class="form-field">
                                <label for="priority">Set Process Priority</label>
                                <div style="padding-top: 20px;"> </div>
                            <p>
                                <label>
                                <input name="priority" type="radio" value = 5 checked/>
                                <span class="myspan">Lowest</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                <input name="priority" type="radio" value = 4/>
                                <span class="myspan">Low</span>
                                </label>
                            </p>
                            
                            <p>
                                <label>
                                <input name="priority" type="radio" value = 3/>
                                <span class="myspan">Medium</span>
                                </label>
                            </p>
    
                            <p>
                                <label>
                                <input name="priority" type="radio" value = 2/>
                                <span class="myspan">High</span>
                                </label>
                            </p>
    
                            <p>
                                <label>
                                <input name="priority" type="radio" value = 1/>
                                <span class="myspan">Highest</span>
                                </label>
                            </p>
                    </div><br>
                    
                    <div class="form-field">
                        <label for="priority">Choose Your Time Quantam</label>
                        <div style="padding-top: 20px;"> 
                        <sub class="myspan">The Range Is In Terms of Minutes</sub>
                        </div>
                        <label>
                        <p class="range-field">
                           <input type = "range" name="quantam" class="range" id="quantamTime" min="5" max="360"/>
                        </p>
                        </label>    
                    </div>
                    <br>
                    
                    <div class="form-field center-align">
                            <button class="btn-large red darken-1 z-depth-5">
                                <a href="insertProcess.php" style="text-decoration:none;color:white;">
                                ADD PROCESS
                                </a>
                            </button>
                        </div><br>
                    <div class="form-field center-align">
                            <button class="btn-large red darken-1 z-depth-5">
                                <a href="dashboard.php" style="text-decoration:none;color:white;">
                                VIEW AND START
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
                </div>
            </div>
        </div>
    </form>
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</body>
</html>