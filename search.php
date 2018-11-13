<?php
   session_start();

?>

<!DOCTYPE html>
<html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
  <title>Project Showcase Management</title>
  <meta name="description" content="">  
  <meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">
   <link rel="stylesheet" href="css/search.css">

   <style type="text/css" media="screen">

    #styles { 
      background: white;
      padding-top: 12rem;
      padding-bottom: 12rem;
    }
    #styles .row {
      max-width: 1024px;
      }
      #styles .section-intro {
      max-width: 800px;
      }
        
   </style>       

   <!-- script
   ================================================== -->
  <script src="js/modernizr.js"></script>
  <script src="js/pace.min.js"></script>

   <!-- favicons
  ================================================== -->
  <link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

  <!-- header 
   ================================================== -->
   <header>     
    <div class="row">

      <div class="top-bar">
        <a class="menu-toggle" href="#"><span>Menu</span></a>

        <div class="logo">
             <a href="index.html">KARDS</a>
          </div>          

        <nav id="main-nav-wrap">
          <ul class="main-navigation">
            <li><a href="gateway.php" title="">Homepage</a></li>
            <li><a href="index.html" title="">Logout</a></li>       
          </ul>
        </nav>        
      </div> <!-- /top-bar --> 
      
    </div> <!-- /row -->    
   </header> <!-- /header -->
  
   <!-- contact
   ================================================== -->
  <section id="contact">

    <div class="row section-intro">
      <div class="col-twelve">

        <h5>Search</h5>
        <h1><?php echo $_SESSION['username']; ?> logged in!</h1>

        <p class="lead"></p>
</div>
</div>
      
    <div class="container">
  <input type="text" placeholder="Input text here..">
  <div class="search"></div>
</div>
    
  </section>


   <!-- footer
   ================================================== -->

   <footer>
      <div class="row">
          <div id="go-top">
             <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
          </div>

        </div> <!-- /row -->      
   </footer>    

   <div id="preloader"> 
      <div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>