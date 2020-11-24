<?php 
  include_once("./php/admin.php"); 
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
    <link rel="stylesheet" href="./css/admin.css">
  </head>
  <body class="u-body">
    
    <div id="header-page"></div>
    <section class="u-align-center u-clearfix   " >
      
    <div class = "admin-background"></div>
      <h2><b>Insert Values into Anime Table</b></h2>
      <form method="POST" action="./php/admin.php"> <!--refresh page when submitted-->
          <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
          <b>Anime Name: </b><input type="text" name="insAnimeName"> <br /><br />
          <b>Publish Date: </b><input type="date" name="insPublishDate"> <br /><br />
          <b>Episode: </b><input type="number" name="insEpisode"> <br /><br />
          <b>Genre: </b><input type="text" name="insGenre"> <br /><br />
    
          <input type="submit" value="Insert" name="insertSubmit"></p>
      </form>
    
      <hr />
    
      <h2><b>Update value in Anime Table</b></h2>

      <h4><b>Show all names in Anime Table</b></h4>
      <form method="GET" action="./php/admin.php"> <!--refresh page when submitted-->
          <input type="hidden" id="checkSubmitRequest" name="checkSubmitRequest">
          <input type="submit" name="checkSubmit"></p>
      </form>
    
      <form method="POST" action="./php/admin.php"> <!--refresh page when submitted-->
          <input type="hidden" id="updateQueryRequest" name="updateQueryRequest">

          <b>Anime Name: </b><input type="text" name="animeName"> <br /><br />

          <b>New Anime Name: </b><input type="text" name="newAnimeName"> <br /><br />
          <b>New Publish Date: </b><input type="text" name="newPublishDate"> <br /><br />
          <b>New Episode: </b><input type="text" name="newEpisode"> <br /><br />
          <b>New Genre: </b><input type="text" name="newGenre"> <br /><br />

          <input type="submit" value="Update" name="updateSubmit"></p>
      </form>
    
      <hr />
    
      <h2><b>Show the Tuples in Anime Table</b></h2>
      <form method="GET" action="./php/admin.php"> <!--refresh page when submitted-->
          <input type="hidden" id="showTupleRequest" name="showTupleRequest">
          <input type="submit" name="showTuples"></p>
      </form>
        
        <br><br><br><br>
    </section>
    <div id="footer-page"></div>
  </body>
</html>

