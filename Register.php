<?php 
  include_once("./php/mysqli_connect.php");
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <script type="text/javascript" src="./js/jquery-3.5.1.js"></script>
    <script src="./js/header/header_load.js"></script>
    <script src="./js/footer/footer_load.js"></script>
    
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>LoginPage</title>
    <link rel="stylesheet" href="./css/nicepage.css" media="screen">
<link rel="stylesheet" href="./css/Quiz.css" media="screen">
    <script class="u-script" type="text/javascript" src="./js/login/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="./js/login/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 2.26.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <meta property="og:title" content="Quiz">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
    <div id="header-page"></div>
    <link rel="stylesheet" href="./css/Register.css">
  </head>
  <body class="u-body">

    <div class = "register-background"></div>
    <br><br><br><br>

    <section class="u-align-center u-clearfix   " >
      
    <p ><b>Register</b></p>

    <form method="POST" action="./php/register_user.php"> <!--refresh page when submitted-->
    <input type="hidden" id="submitRegisterRequest" name="submitRegisterRequest">

    <b>Username: </b><input type="text" name="userName"> <br /><br />

    <b>Password: </b><input type="text" name="pw"> <br /><br />

    <b>Email: </b><input type="text" name="email"> <br /><br />
    
    <b>Phone Number: </b><input type="text" name="phone"> <br /><br />
    

    <input type="submit" value="Register" name="registerSubmit"></p>
    </form>

        <br><br><br><br>
    </section>
  </body>
</html>
