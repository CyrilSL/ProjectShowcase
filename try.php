 <?php
session_start();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
 </head>
 <body>
 <h1 style="text-transform: capitalize;"> Welcome <?php echo $_SESSION['username'];?>! </h1>
 </body>
 </html>