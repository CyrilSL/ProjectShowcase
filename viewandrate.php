<?php
   session_start();

?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title></title>
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

   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">



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



	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Display Section</h5>
            <h1 style="text-transform: capitalize;">Project display of <?php echo $_SESSION['username']; ?>!</h1>
            <h1>View</h1>


   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row portfolio-content">

   		<div class="col-twelve">

   			<!-- portfolio-wrapper -->
	         <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

	         	<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/er.jpg" alt="Liberty">
	                  <a href="#modal-01" class="overlay">	                  	           
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
		     					       <h3 class="folio-title">ER Diagram</h3>	     					    
		     					    	 <span class="folio-types">
		     					       	  
		     					       </span>
		     					   </div>	                      	
	                     </div>                    
	                  </a>
	               </div>	               
	        		</div> <!-- /folio-item -->

	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/db snapshot.jpg" alt="Shutterbug">
	               	<a href="#modal-02" class="overlay">              		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">DataBase Snapshot</h3>	     					    
		     					    	<span class="folio-types">
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/screenshot.jpg"alt="Clouds">
	                  <a href="#modal-03" class="overlay">             		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Screenshot</h3>	     					    
		     					    	<span class="folio-types">
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/screenshot2.jpg" alt="Shutterbug">
	               	<a href="#modal-04" class="overlay">              		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Screenshot</h3>	     					    
		     					    	<span class="folio-types">
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/screenshot3.jpg" alt="Shutterbug">
	               	<a href="#modal-05" class="overlay">              		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Screenshot</h3>	     					    
		     					    	<span class="folio-types">
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            <!-- modal popups - begin
	            ============================================================= -->
	            <div id="modal-01" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/modals/er.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>ER DIAGRAM</h4>		      
					      <p>This entity relationship diagram explains the relations between entities</p>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-01 -->

				   <div id="modal-02" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/modals/db snapshot.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>DataBase Snapshot</h4>		      
					      <p>A pictorial representation of their working DataBase</p>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-02 -->

				   <div id="modal-03" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/modals/screenshot.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Screenshot</h4>		      
					      <p>Screenshots of their projects</p>

					      <div class="categories"></div>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-03 -->

				   <div id="modal-04" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/modals/screenshot2.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Screenshot</h4>		      
					      <p>Screenshots of their projects</p>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>

			         <div id="modal-05" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/modals/screenshot3.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Screenshot</h4>		      
					      <p>Screenshots of their projects</p>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>

				   


				   <!-- modal popups - end
	            ============================================================= -->

	         </div> <!-- /portfolio-wrapper --> 

   		</div>  <!-- /twelve -->   

   	</div> <!-- /portfolio-content --> 
		
	</section> <!-- /portfolio --> 

   <footer>


   	<div class="row about-content">

   		<div class="col-six tab-full">

   			<h3>Profile</h3>
   			<p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia consectetur nisi commodo ea magna pariatur nisi cillum.</p>

   			<ul class="info-list">
   				<li>
   					<strong>Fullname:</strong>
   					<span>Juan Dela Cruz</span>
   				</li>
   				<li>
   					<strong>Birth Date:</strong>
   					<span>September 28, 1987</span>
   				</li>
   				<li>
   					<strong>Job:</strong>
   					<span>Freelancer, Frontend Developer</span>
   				</li>
   				<li>
   					<strong>Website:</strong>
   					<span>www.kardswebsite.com</span>
   				</li>
   				<li>
   					<strong>Email:</strong>
   					<span>me@kardswebsite.com</span>
   				</li>

   			</ul> <!-- /info-list -->

   		</div>
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