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
  </head>
  <body class="u-body">
    <div id="header-page"></div>
    <section class="u-align-center u-clearfix   " >

    <h2>Sale</h2>
    <h3>(Nested-GroupBy)</h3>
      <form method="POST" action="./php/sale.php"> <!--refresh page when submitted-->
          <input type="hidden" id="submitNestedGroupByRequest" name="submitNestedGroupByRequest">

          <label for="ranks">Find category of the merchandise where average price is the same as </label>


          <select name="MIN_OR_MAX" id="MIN_OR_MAX">
            <option value="<="> MIN</option>
            <option value=">="> MAX</option>

          </select>

 

          <label for="ranks">price over all category.</label>

          <br></br>

          <input type="submit" value="submit" name="nestedGroupSubmit"></p>
      </form>
        
        <br><br><br><br>
    </section>
    <div id="footer-page"></div>
  </body>
</html>

