
<?php
    
    session_start();

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
    .bodyforform{
        background-image: url(img/background4.jpg);
        background-size: cover;
        min-height: 670px;
        
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
    </style>
</head>
<body>
        <form action="registration.php" method="POST"> 
                <div class="row login bodyforform">
                    <div class="col s12 l4 offset-l4">
                        
    <div style="padding: 10px;">

        </div>
                        <div class="card">
                            
                            <div class="card-action red darken-1 white-text">
                                <h3>
                                    SIGN UP
                                </h3>
                            </div>
                            <div class="card-content">
                                <div class="form-field">
                                    <label for="User EmAail">Enter Name: </label>
                                    <input type="text" id="name" name="name">
                                </div><br>
                                <div class="form-field">
                                    <label for="User EmAail">Enter Email Address</label>
                                    <input type="email" id="emailaddress" name="email">
                                </div><br>
                             <div class="form-field">
                                        <label for="Password">Enter Your Password</label>
                                        <input type="password" id="password" name="password">            
                            </div>
                            <div class="form-field">
                                    <label for="Password">Confirm Password</label>
                                    <input type="password" id="password" name="conpssword">            
                            </div>                            
                            <br>
                            
                            <div class="form-field">
                                <label for="priority">Already Have An Account?</label>
                            </br>
                           
                                <button class="btn-small red darken-1 z-depth-2">
                                        <a href="account.php" style="text-decoration: none; color:white;">
                                    Log In
                                        </a>   
                                </button>    
                            </div>
                            <br>
                            
                            <div class="form-field center-align">
                                    <button class="btn-large red darken-1 z-depth-5">Register</button>
                                </div><br>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
          
</body>
</html>