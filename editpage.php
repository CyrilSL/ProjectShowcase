    <?php

    session_start();
    $con = mysqli_connect("localhost", "root", "jesus123", "spm");

      //If synopsis add / update button is pressed
      if(isset($_POST['synau'])){ //check if form was submitted
      $stext = $_POST['synopsistext']; //get input text
      $s="UPDATE `info` SET `synopsis`='$stext' WHERE id='".$_SESSION['ids']."' ";
      mysqli_query($con,$s);


    }    
      //Delete Synopsis
      if(isset($_POST['syndel'])){ //check if form was submitted
        $s="UPDATE `info` SET `synopsis`=' ' WHERE id='".$_SESSION['ids']."' ";
        mysqli_query($con,$s);
      }  


    ///DOES NOT WORK FOR NOW... WHY??? IDK :)
     //WORKS NOW!!!
     if(isset($_POST['teamadd'])){ //check if form was submitted
      $t1= $_POST['tone'];
      $t2= $_POST['ttwo'];
      $s="UPDATE `info` SET `teammate1`='$t1',`teammate2`='$t2' WHERE id='".$_SESSION['ids']."' ;";
      mysqli_query($con,$s);
    }   

    //UPLOADS ER DIAGRAM
     if(isset($_POST['er_submit'])){ //check if form was submitted
    //  $imagename=$_FILES["er_image"]["name"]; 
    //Get the content of the image and then add slashes to it 
     // $imagetmp=addslashes (file_get_contents($_FILES['er_image']['tmp_name']));
     // echo("RUN");
    //Insert the image name and image content in image_table
    //  $insert_image="INSERT INTO images (CustomerName, City, Country)
    //SELECT SupplierName, City, Country FROM Suppliers
    //WHERE Country='Germany';";
      //$insert_image="UPDATE 'images' SET 'er'='$imagetmp' WHERE id='".$_SESSION['ids']."' ;";
    //}
     // $insert_image="INSERT INTO images(er) VALUES ('$imagetmp')";
     // mysqli_query($con,$insert_image);

      // Temporary file name stored on the server
      $tmpName  = $_FILES['er_image']['tmp_name'];

          // Read the file
      $fp      = fopen($tmpName, 'r');
      $data = fread($fp, filesize($tmpName));
      $data = addslashes($data);
      fclose($fp);

      //$student_id=$row_student['student_id'];

          // Create the query and insert
          // into our database.
      $query = "UPDATE images SET er='$data' WHERE id='".$_SESSION['ids']."' ;";
      $query .= "(er_image) VALUES ('$data')";
      $results = mysqli_query($con, $query);

          // Print results
      print "Thank you, your file has been uploaded.";

    }
    else {
     print "No image selected/uploaded";
   }


  ?>

  <!DOCTYPE html>
  <html class="no-js" lang="en"> <!--<![endif]-->
  <head>

       <!--- basic page needs
         ================================================== -->
         <meta charset="utf-8">
         <title>Upload Form</title>
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

            <h5>Edit Page</h5>
            <h1>Welcome, <?php echo $_SESSION['username'];?>!</h1>
            <h1> <?php echo $_SESSION['ids']; ?> </h1>


            <p class="lead">Enter your details.</p>

          </div> 
        </div> <!-- /section-intro -->

      <!-- 	<div class="row contact-form">

       <div class="col-twelve"> -->

        <!-- form -->
              <!--  <form method="post" action="editaction.php">
          			<fieldset>

                      <div class="form-field">
     						   <input name="synopsis" type="text" placeholder="Synopsis">
                      </div>
                      <div class="form-field">
    	      			   <input name="contributions" type="text" placeholder="Contributions">
    	               </div>
                      <div class="form-field">
    	     				   <input name="frontend" type="text" placeholder="FrontEnd Used">
    	               </div>  
    	               <div class="form-field">
    	     				   <input name="backend" type="text" placeholder="FrontEnd Used">
    	               </div>                       
                     <br>
                     <form>
                            <button class="submitform" type="submit">Subimit</button>
                         </form>
    								</div>
    							</div>
                      </div>

          			</fieldset>
          		</form> Form End --> 
              <div class="row services-content">

                <div id="owl-slider" class="owl-carousel services-list">

                  <div class="service"> 

                    <span class="icon"><i class="icon-window"></i></span>            

                    <div class="service-content"> 

                     <h3>Synopsis</h3>

                     <div> 

                      <label for="sampleRecipientInput">Enter Synopsis</label>
                      <form method="post" action="">
                        <div class="ss-custom-select">
                          <input type="text" name="synopsistext" class="full-width" placeholder="Input text here" id="exampleMessage">
                        </div>

                      </div>

                      <input name="synau" class="button-primary" type="submit" value="ADD/UPDATE"> 
                      <br>
                      <input name="syndel"class="button-primary" type="submit" value="DELETE">
                    </form>

                  </div>

                </div>  

            <!--<label for="exampleMessage">Enter Synopsis</label>
                  <textarea class="full-width" placeholder="Input text here" id="exampleMessage"></textarea>



                   <input class="button-primary" type="submit" value="Submit"> 
                   <input class="button-primary" type="submit" value="Submit"> 
                   <input class="button-primary" type="submit" value="Submit"> 

                </div>             

              </div> -->

              <!-- /service -->

              <div class="service"> 

                <span class="icon"><i class="icon-earth"></i></span>                          

                <div class="service-content"> 

                  <h3>Structure</h3>  

                  <div>
                    <label for="sampleRecipientInput">Front-End</label>
                    <div class="ss-custom-select">
                      <select class="full-width" id="sampleRecipientInput">
                        <option value="Option 1">HTML/CSS</option>
                        <option value="Option 2">NetBeans/Jframes</option>
                        <option value="Option 3">C#.Net/ASP.Net</option>
                      </select>
                    </div>                
                  </div>

                  <div>
                   <label for="sampleRecipientInput">Back-End</label>
                   <div class="ss-custom-select">
                    <select class="full-width" id="sampleRecipientInput">
                      <option value="Option 1">XAMPP/MySQL</option>
                      <option value="Option 2">MySQL WorkBench</option>
                      <option value="Option 3">Others</option>
                    </select>  
                  </div>


                  <input class="button-primary" type="submit" value="UPDATE" > 
                  <input class="button-primary" type="submit" value="DELETE">
                  <input class="button-primary" type="submit" value="ADD">

                </div>

              </div>                            

            </div> <!-- /service -->

            <div class="service">

              <span class="icon"><i class="icon-paint-brush"></i></span>                

              <div class="service-content">

                <h3>Tables</h3>

                <div class="row add-bottom">

                  <div class="col-twelve">

                    <div class="table-responsive">

                      <table>
                        <thead>
                          <tr>
                            <th>No. of Tables</th>
                            <th>No. of Attributes</th>
                            <th>Triggers and Stored Procedures</th>          
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><input type="text"/></td>
                            <td><input type="text"/></td>
                            <td><input type="text"/></td>             
                          </tr>
                        </tbody>
                      </table>


                      <input class="button-primary" type="submit" value="UPDATE" > 
                      <input class="button-primary" type="submit" value="DELETE">
                      <input class="button-primary" type="submit" value="ADD">

                    </div>        

                  </div>

                </div>

              </div>                               

            </div> <!-- /service -->

            <div class="service">

              <span class="icon"><i class="icon-image"></i></span>                

              <div class="service-content">

                <h3>ER DIAGRAM</h3>

                <form method="POST" action="" enctype="multipart/form-data">

                 <br><input name="er_image" type="file" style="width:200px"></br>

                 <br><input name="er_submit" class="button-primary" type="submit" value="ADD/UPDATE" ></br>
                 <br><input name="erdelete" class="button-primary" type="submit" value="DELETE"></br>

               </form>

             </div>                

           </div> <!-- /service -->

           <div class="service">

            <span class="icon"><i class="icon-image"></i></span>              

            <div class="service-content">

              <h3>DataBase Snapshot</h3>

              <form method="post" enctype="multipart/form-data"> 
               <br><input type="file" style="width:200px"></br>

               <br><input class="button-primary" type="submit" value="UPDATE" ></br>
               <br><input class="button-primary" type="submit" value="DELETE"></br>
               <br><input class="button-primary" type="submit" value="ADD"></br>

             </form>



           </div>                 

         </div> <!-- /service -->

         <div class="service">

          <span class="icon"><i class="icon-image"></i></span>                

          <div class="service-content">

           <h3>Screenshots</h3>
           <form method="post" enctype="multipart/form-data"> 
             <br><input type="file" style="width:200px"></br>

             <br><input class="button-primary" type="submit" value="UPDATE" ></br>
             <br><input class="button-primary" type="submit" value="DELETE"></br>
             <br><input class="button-primary" type="submit" value="ADD"></br>

           </form>
         </div>                 

       </div> <!-- /service -->

       <div class="service"> 

        <span class="icon"><i class="icon-window"></i></span>            

        <div class="service-content"> 
          <form method="post" action="">

           <h3>Contribution</h3>

           <div> 

            <label for="sampleRecipientInput">Enter Individual Contribution</label>
            <div class="ss-custom-select">
             TeamMate1: <input type="text" name="tone"><br>
             TeamMate2: <input type="text" name="ttwo"><br>
           </div>
         </div>


         <input name="teamadd" class="button-primary" type="submit" value="UPDATE/ADD">

         <input name="teamd" class="button-primary" type="submit" value="DELETE">

       </form>
     </div>

   </div>  

   <div class="service"> 

    <span class="icon"><i class="icon-window"></i></span>            

    <div class="service-content"> 

     <h3>Skills Learnt</h3>

     <div> 

      <label for="sampleRecipientInput">Enter Skills learnt</label>
      <div class="ss-custom-select">
        <textarea class="full-width" placeholder="Input text here" id="exampleMessage"></textarea>
      </div>


    </div>


    <input class="button-primary" type="submit" value="UPDATE"> 
    <input class="button-primary" type="submit" value="DELETE">
    <input class="button-primary" type="submit" value="ADD">

  </div>

  </div>

  </div> <!-- /services-list -->

  </div> <!-- /services-content -->

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